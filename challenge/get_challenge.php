<?php
$flag = "flag{you_have_solved_the_challenge_get}";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>23CTF Challenge</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            padding: 50px;
        }
        h1 {
            color: #007bff;
        }
        p {
            color: #333;
        }
        .flag {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            display: inline-block;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Welcome to the GET Challenge</h1>
    <p>请GET 传参 gift=flag 即可获取flag</p>

    <?php
    if(isset($_GET['gift']) && $_GET['gift'] == "flag") {
        echo "<div class='flag'>$flag</div>";
    } 
    ?>
</body>
</html>