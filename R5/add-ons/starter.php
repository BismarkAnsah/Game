<body>
<style>
    body{
        display: flex;
        justify-content: center;
        align-items: center;
    }
  table {
    font-family: Arial, sans-serif;
    border-collapse: collapse;
    width: 50%;
  }
  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    cursor: pointer;
  }
  td:hover, th:hover{
    background-color: #dddddd;
  }

  th {
    background-color: #dddddd;
    font-weight: bold;
  }
  tr:nth-child(even) {
    background-color: #f2f2f2;
  }
  .running {
    color: green;
    font-weight: bold;
  }
  .inactive {
    color: red;
    font-weight: bold;
  }
  .stopped {
    color: red;
    font-weight: bold;
  }

  
</style>
    <table>
        <th>
           Game_type
        </th>
        <th>
           Status
        </th>
        <tbody>
            <tr>
                <td>time1x0</td>
                <td class="time1x0 running">Running....</td>
            </tr>
            <tr>
                <td>time1x5</td>
                <td class="time1x5 running">Running....</td>
            </tr>
            <tr>
                <td>time3x0</td>
                <td class="time3x0 running">Running....</td>
            </tr>
            <tr>
                <td>time5x0</td>
                <td class="time5x0 running">Running....</td>
            </tr>
            <tr>
                <td>time10x0</td>
                <td class="time10x0 inactive">Inactive</td>
            </tr>
        </tbody>
    </table>
    <script>
        let time1x0, time1x5, time3x0, time5x0, time10x0;
        time1x0 = document.querySelector('.time1x0');
        time1x5 = document.querySelector('.time1x5');
        time3x0 = document.querySelector('.time3x0');
        time5x0 = document.querySelector('.time5x0');
        time10x0 = document.querySelector('.time10x0');


        //1x0mim
        function makeRequest1X0() {
            fetch('cron1x0.php').then(async response => {
                response = await response.json();
                console.log(response);
                let nextRequestTime = response.nextRequestTime ? response.nextRequestTime - 2 : 2;
                setTimeout(makeRequest1X0, (nextRequestTime) * 1000);
            }).catch(error => {
                console.log("An error occurred while fetching data from server: " + error);
                time1x0.innerText = "Stopped";
                time1x0.classList.add("stopped");
            });
        }
        makeRequest1X0();

        //1x5mim
        function makeRequest1X5() {
            fetch('cron1x5.php').then(async response => {
                response = await response.json();
                console.log(response);
                let nextRequestTime = response.nextRequestTime ? response.nextRequestTime - 2 : 2;
                setTimeout(makeRequest1X5, (nextRequestTime) * 1000);
            }).catch(error => {
                console.log("An error occurred while fetching data from server: " + error);
                time1x5.innerText = "Stopped";
                time1x5.classList.add("stopped");

            });
        }
        makeRequest1X5();

        //3x0mim
        function makeRequest3X0() {
            fetch('cron3x0.php').then(async response => {
                response = await response.json();
                console.log(response);
                let nextRequestTime = response.nextRequestTime ? response.nextRequestTime - 2 : 2;
                setTimeout(makeRequest3X0, (nextRequestTime) * 1000);
            }).catch(error => {
                console.log("An error occurred while fetching data from server: " + error);
                time3x0.innerText = "Stopped";
                time3x0.classList.add("stopped");
            });
        }
        makeRequest3X0();

        //5mim
        function makeRequest5X0() {
            fetch('cron5x0.php').then(async response => {
                response = await response.json();
                console.log(response);
                let nextRequestTime = response.nextRequestTime ? response.nextRequestTime - 2 : 2;
                setTimeout(makeRequest5X0, (nextRequestTime) * 1000);
            }).catch(error => {
                console.log("An error occurred while fetching data from server: " + error);
                time5x0.innerText = "Stopped";
                time3x0.classList.add("stopped");
            });
        }
        makeRequest5X0();

        //10mim
        //  function makeRequest10X0() {
        //     fetch('cron10x0.php').then(async response => {
        //         response = await response.json();
        //         console.log(response);
        //         let nextRequestTime = response.nextRequestTime? response.nextRequestTime-2: 2;
        //         setTimeout(makeRequest, (nextRequestTime)*1000);
        //     }).catch(error=>{console.log("An error occurred while fetching data from server: " + error);});
        // }
        // makeRequest10X0();
    </script>
</body>

<!-- SELECT t.*, d.* FROM `time1x0` t LEFT JOIN draw_10001 d ON t.count = d.draw_count WHERE d.date_created = "2023-03-21" ORDER BY t.id DESC;
SELECT t.*, d.*, IF(d.drawid is null, "missed", "not missed") AS status FROM `time1x0` t LEFT JOIN (SELECT * FROM draw_10001 WHERE date_created = "2023-03-21") d ON t.count = d.draw_count ORDER BY t.id DESC; -->