<?php 
    include('./inc/db.php');
    ob_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chat App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body onload="send();">
    <div class="card" style="width: 80%; margin-left:auto; margin-right: auto; margin-top: 20px">
        <div>
            <div class="chat"></div>
            <form action="" method="GET">
                <div class="inputs" style="width: 80%; margin-left: auto;margin-right: auto; margin-top: 20px">
                    <input type="text" name="name" style="margin-bottom: 5px" id="" class="form-control" placeholder='enter your name :' id="exampleFormControlInput1" required>
                    <textarea class="form-control" style="margin-bottom: 20px" name="message" id="exampleFormControlTextarea1" placeholder='enter your message' rows="3"></textarea>
                    <button class="btn btn-primary" id="send" type="submit" id="send" name="send">send</button>
                </div>
            </form>
        </div>
    </div>
    <script src="./jquery-3.6.3.min.js"></script>
    <script src="./chat.js"></script>
</body>
</html>

<?php 

    
    if (isset($_GET['send'])) {
        $send_msg = $conn -> prepare("INSERT INTO chat(name, message) VALUES(:name, :message)");
        $send_msg -> bindParam("name", $_GET['name']);
        $send_msg -> bindParam("message", $_GET['message']);
        $send_msg -> execute();
        header("location: ./chat.php");
        ob_end_flush();
    }

?>