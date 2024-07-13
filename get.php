<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            text-align: center;
            padding: 20px;
        }
        h1 {
            margin: 20px 0;
        }
        .age {
            color: #E57373;
        }
        .gender {
            color: #64B5F6;
        }
    </style>
</head>
<body>
    <?php 

    if(isset($_GET['name'])) {
        // $name = htmlspecialchars($_GET['name']);
        $name = $_GET['name'];
        echo "<h1>Hello, $name!</h1>";
    } else {
        echo "<h1>Please GET name.</h1>";
    }

    if(isset($_GET['age'])) {
        // $age = htmlspecialchars($_GET['age']);
        $age = $_GET['age'];
        echo "<h1 class='age'>Your age is $age.</h1>";
    } else {
        echo "<h1 class='age'>Please GET age.</h1>";
    }

    if(isset($_GET['gender'])) {
        // $gender = htmlspecialchars($_GET['gender']);
        $gender = $_GET['gender'];
        echo "<h1 class='gender'>Your gender is $gender.</h1>";
    } else {
        echo "<h1 class='gender'>Please GET gender.</h1>";
    }
    ?>
<!-- Get Challenge -->
<a href="./challenge/get_challenge.php">Get Challenge</a>
</body>
</html>