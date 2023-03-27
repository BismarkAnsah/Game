<body>
    <script>

        //1x0mim
        function makeRequest1X0() {
            fetch('cron1x0.php').then(async response => {
                response = await response.json();
                console.log(response);
                let nextRequestTime = response.nextRequestTime? response.nextRequestTime-2: 2;
                setTimeout(makeRequest1X0, (nextRequestTime)*1000);
            })
        }
        makeRequest1X0();

         //1x5mim
         function makeRequest1X5() {
            fetch('cron1x5.php').then(async response => {
                response = await response.json();
                console.log(response);
                let nextRequestTime = response.nextRequestTime? response.nextRequestTime-2: 2;
                setTimeout(makeRequest1X5, (nextRequestTime)*1000);
            })
        }
        makeRequest1X5();

         //3x0mim
         function makeRequest3X0() {
            fetch('cron3x0.php').then(async response => {
                response = await response.json();
                console.log(response);
                let nextRequestTime = response.nextRequestTime? response.nextRequestTime-2: 2;
                setTimeout(makeRequest3X0, (nextRequestTime)*1000);
            })
        }
        makeRequest3X0();

         //5mim
         function makeRequest5X0() {
            fetch('cron5x0.php').then(async response => {
                response = await response.json();
                console.log(response);
                let nextRequestTime = response.nextRequestTime? response.nextRequestTime-2: 2;
                setTimeout(makeRequest5X0, (nextRequestTime)*1000);
            })
        }
        makeRequest5X0();

         //10mim
        //  function makeRequest10X0() {
        //     fetch('cron10x0.php').then(async response => {
        //         response = await response.json();
        //         console.log(response);
        //         let nextRequestTime = response.nextRequestTime? response.nextRequestTime-2: 2;
        //         setTimeout(makeRequest, (nextRequestTime)*1000);
        //     })
        // }
        // makeRequest10X0();

    </script>
</body>

<!-- SELECT t.*, d.* FROM `time1x0` t LEFT JOIN draw_10001 d ON t.count = d.draw_count WHERE d.date_created = "2023-03-21" ORDER BY t.id DESC;
SELECT t.*, d.*, IF(d.drawid is null, "missed", "not missed") AS status FROM `time1x0` t LEFT JOIN (SELECT * FROM draw_10001 WHERE date_created = "2023-03-21") d ON t.count = d.draw_count ORDER BY t.id DESC; -->