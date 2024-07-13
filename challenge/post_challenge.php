<?php
$flag = "flag{POST_Challenge_Fl4g}";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Challenge</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            padding: 50px;
        }
        h1, h2 {
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
    <h1>Welcome to the Post Challenge!</h1>
    <p>请 POST 传参 gift=flag 即可获取flag</p>

    <?php
    if(isset($_POST['gift']) && $_POST['gift'] == 'flag'){
        echo "<div class='flag'>Here is your flag: $flag</div>";
    }
    ?>
</body>
</html>