<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <script>
        const timeInterval = 58000;

        function ajax(url, callback = null, method = "GET", data = null) {
            const xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        callback(null, xhr.responseText);
                    } else {
                        callback(new Error('Request failed with status ' + xhr.status), null);
                    }
                }
            };
            xhr.open(method, url, true);

            if (method === 'POST') {
                xhr.setRequestHeader('Content-Type', 'application/json');
            }

            xhr.send(JSON.stringify(data));
        }

        function makeRequest() {
            ajax("cron.php", function(err, response) {
                console.log(response);
                let responseObj = JSON.parse(response);
                let nextRequestTime = responseObj.nextRequestTime? responseObj.nextRequestTime-2: 2;
                setTimeout(makeRequest, (nextRequestTime)*1000);
            });
        }

        makeRequest();
    </script>
</body>

</html>