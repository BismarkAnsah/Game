<body>
    <script>
        function makeRequest() {
            fetch('cron.php').then(async response=>{
                response = await response.json();
                console.log(response);
                let nextRequestTime = response.nextRequestTime? response.nextRequestTime-2: 2;
                setTimeout(makeRequest, (nextRequestTime)*1000);
            })
        }
        makeRequest();
    </script>
</body>

