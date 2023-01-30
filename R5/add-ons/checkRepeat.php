
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>

    <script>
        $(document).ready(function() {
            let savedId = null;

            function checkRepeat() {
                $.ajax({
                    type: "GET",
                    url: "/game/projects/R5/data.php",
                    dataType: "json",
                    success: function(response) {
                        console.log(savedId, response);
                        console.log(response.id == savedId ? "yes" : "no");
                        savedId = response.id;
                    }
                })
            }

            setInterval(checkRepeat, 5000);
        })
    </script>
</body>

</html>