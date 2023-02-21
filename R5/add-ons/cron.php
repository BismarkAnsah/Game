<?php
date_default_timezone_set("Asia/Shanghai");
class Database
{
    protected $pdo;
    private $dsn = "mysql:dbname=test;host=localhost";
    private $username = "root";
    private $password = "";

    /**
     * Database constructor.
     *
     * @param string $dsn The DSN string.
     * @param string $username The username to connect to the database.
     * @param string $password The password to connect to the database.
     * @param array $options An array of PDO options.
     */
    public function __construct(array $options = [])
    {
        $dsn = $this->dsn;
        $username = $this->username;
        $password = $this->password;
        $this->pdo = new PDO($dsn, $username, $password, $options);
    }

    /**
     * Executes a SQL query and returns the result set as an array of objects.
     *
     * @param string $query The SQL query to execute.
     * @param array $params An array of parameters to bind to the query.
     * @return array An array of objects representing the rows returned by the query.
     */
    public function query(string $query, array $params = []): array
    {
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }




    /**
     * Executes a SQL query and returns the first row as an object.
     *
     * @param string $query The SQL query to execute.
     * @param array $params An array of parameters to bind to the query.
     * @return object|null The first row returned by the query, or null if no rows were returned.
     */
    public function queryOne(string $query, array $params = []): ?object
    {
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($params);
        return $stmt->fetch(PDO::FETCH_OBJ) ?: null;
    }

    /**
     * Executes a SQL query and returns the value of the first column of the first row.
     *
     * @param string $query The SQL query to execute.
     * @param array $params An array of parameters to bind to the query.
     * @return mixed The value of the first column of the first row returned by the query.
     */
    public function queryScalar(string $query, array $params = [])
    {
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($params);
        return $stmt->fetchColumn();
    }

    /**
     * Executes a SQL query and returns the number of rows affected.
     *
     * @param string $query The SQL query to execute.
     * @param array $params An array of parameters to bind to the query.
     * @return int The number of rows affected by the query.
     */
    public function execute(string $query, array $params = []): int
    {
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($params);
        return $stmt->rowCount();
    }

    /**
     * Begins a transaction.
     */
    public function beginTransaction()
    {
        $this->pdo->beginTransaction();
    }

    /**
     * Commits a transaction.
     */
    public function commit()
    {
        $this->pdo->commit();
    }

    /**
     * Rolls back a transaction.
     */
    public function rollBack()
    {
        $this->pdo->rollBack();
    }
}



class Cron
{
    private array $nextDrawData = [];
    private array $nextTwoDraws;
    private $conn;
    private const DEFAULT_INTERVAL = 60;
    private const TOTAL_RANDOM_NUMBERS = 5;



    public function __construct()
    {
        $this->conn = new Database();
        $this->setNextDrawData();
        // echo $this->getNextTwoDrawsSecs();
    }


    function generateRandomNumbers($total = 5, $min = 0, $max = 9)
    {
        $result = [];
        for ($i = 0; $i < $total; $i++)
            array_push($result, random_int($min, $max));
        return $result;
    }

    public function setNextDrawData()
    {
        $currentTime = Date('H:i:s');
        $SQL = "SELECT draw_id AS draw_count, draw_time FROM 1k1min WHERE draw_time > ? LIMIT 2";
        $results = $this->conn->query($SQL, [$currentTime]);
        $nextDraw = $results[0];
        $this->nextTwoDraws = $results[1];
        $nextDraw['draw_date'] = Date('Ymd') . str_pad($nextDraw['draw_count'],  4, "0", STR_PAD_LEFT);

        $nextDraw['draw_numbers'] = $this->generateRandomNumbers();
        $this->nextDrawData = $nextDraw;
    }

    public function getNextTwoDrawsSecs()
    {
        return $this->getDifferenceInSecs($this->nextTwoDraws['draw_time'], $this->nextDrawData['draw_time']);
    }



    public function insertDrawDetails()
    {
        $draw_date = $this->nextDrawData['draw_date'];
        $SQL = "SELECT COUNT(draw_date) FROM royal5draw WHERE draw_date = ?";
        $dataExists = $this->conn->queryScalar($SQL, [$draw_date]);
        if (!$dataExists) {
            $SQL = "INSERT INTO royal5draw(draw_count, draw_date, draw_time, draw_number, draw_datetime) VALUES (?, ?, ?, ?, ?)";
            $draw_time =  $this->nextDrawData['draw_time'];
            $draw_count = $this->nextDrawData['draw_count'];
            $draw_numbers =  implode(',', $this->nextDrawData['draw_numbers']);
            $draw_datetime = Date('Y-m-d H:i:s');
            // echo json_encode([$draw_id, $draw_date, $draw_numbers, $draw_datetime]);
            // die;
            $this->conn->query($SQL, [$draw_count, $draw_date, $draw_time, $draw_numbers, $draw_datetime]);
        }
    }

    /**
     * gets the number of seconds between two dates.
     * this function only works if the difference in dates does not exceed 30 days;
     *
     * @param [string] $time1 the first date time
     * @param [string, bool] $time2 the second date time. if this isn't provided, current datetime will be used.
     * @return [int] the number of seconds between the two dates provided.
     */
    public function getDifferenceInSecs($time1, $time2 = true)
    {
        $start = new DateTime($time1);
        $end = $time2 === true ? new DateTime() : new DateTime($time2);
        $diff = $start->diff($end);
        $diffInSecs = $diff->d * 24 * 60 * 60 + $diff->h * 60 * 60 + $diff->i * 60 + $diff->s;
        return $diffInSecs;
    }


    public  function getSecondsUntilNextDraw()
    {
        return $this->getDifferenceInSecs($this->nextDrawData['draw_time']);
    }

    function startCron()
    {
        $delay = $this->getSecondsUntilNextDraw();
        $response["nextRequestTime"] = $this->getSecondsUntilNextDraw();
        if ($delay <= 60)
        {
            sleep($delay);
            $this->insertDrawDetails();
            $response["nextRequestTime"] = $this->getNextTwoDrawsSecs();
        }
        echo json_encode($response);
        die;
    }
}

$cron = new Cron();
$cron->startCron();
