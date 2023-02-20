<?php
date_default_timezone_set("Asia/Shanghai");
require_once "conn.php";




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
        $SQL = "SELECT draw_id, draw_time FROM royal_5_draws WHERE draw_time > ? LIMIT 2";
        $results = $this->conn->query($SQL, [$currentTime]);
        $nextDraw = $results[0];
        $this->nextTwoDraws = $results[1];
        $nextDraw['full_id'] = Date('Ymd') . str_pad($nextDraw['draw_id'],  4, "0", STR_PAD_LEFT);   
        $nextDraw['draw_numbers'] = $this->generateRandomNumbers();
        $nextDraw['draw_date'] =  Date('Y-m-d') . ' ' . $nextDraw['draw_time'];
        $this->nextDrawData = $nextDraw;
    }

    public function getNextTwoDrawsSecs()
    {
        return $this->getDifferenceInSecs($this->nextTwoDraws['draw_time'], $this->nextDrawData['draw_time']);
    }



    public function insertDrawDetails()
    {
        $draw_id = $this->nextDrawData['full_id'];
        $SQL = "SELECT COUNT(draw_id) FROM draw_data WHERE draw_id = ?";
        $dataExists = $this->conn->queryScalar($SQL, [$draw_id]);
        if(!$dataExists)
        {       
        $SQL = "INSERT INTO draw_data(draw_id, draw_date, draw_number, draw_datetime) VALUES (?, ?, ?, ?)";
        $draw_date =  $this->nextDrawData['draw_date'];
        $draw_datetime = Date('Y-m-d H:i:s');
        $draw_numbers =  implode(',',$this->nextDrawData['draw_numbers']);
        // echo json_encode([$draw_id, $draw_date, $draw_numbers, $draw_datetime]);
        // die;
        $this->conn->query($SQL, [$draw_id, $draw_date, $draw_numbers, $draw_datetime]);
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
    public function getDifferenceInSecs($time1, $time2=true)
    {
        $start = new DateTime($time1);
        $end = $time2===true ? new DateTime():new DateTime($time2);
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
        sleep($this->getSecondsUntilNextDraw());
        $this->insertDrawDetails();
        $response = ["nextRequestTime"=>$this->getNextTwoDrawsSecs()];
        echo json_encode($response);die;
    }
}

$cron = new Cron();
$cron->startCron();
