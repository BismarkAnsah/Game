<body>
    <script>
        function makeRequest() {
            fetch('cron.php').then(async response=>{
                response = await response.json();
                let nextRequestTime = response.nextRequestTime? response.nextRequestTime-2: 2;
                console.log(nextRequestTime)
                setTimeout(makeRequest, (nextRequestTime)*1000);
            })
        }
        makeRequest();
    </script>
</body>

