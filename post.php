<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Result</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f0f0f0; }
        .container { max-width: 600px; margin: 20px auto; padding: 20px; background-color: #fff; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
        h1 { color: #333; }
    </style>
</head>
<body>
    <div class="container">
        <?php 
        if(isset($_POST['name'])) {
            $name = htmlspecialchars($_POST['name']);
            echo "<h1>【POST】Hello, <span style='color: red;'>$name</span>!</h1>";
        } else {
            echo "<h1>Please POST name.</h1>";
        } 

        if(isset($_POST['age'])) {
            $age = htmlspecialchars($_POST['age']);
            echo "<h1>【POST】Your age is <span style='color: red;'>$age</span>.</h1>";
        } else {
            echo "<h1>Please POST age.</h1>";
        } 

        if(isset($_POST['gender'])) {
            $gender = htmlspecialchars($_POST['gender']);
            echo "<h1>【POST】Your gender is <span style='color: red;'>$gender</span>.</h1>";
        } else {
            echo "<h1>Please POST gender.</h1>";
        } 
        ?>
        <a href="./challenge/post_challenge.php">POST Challenge</a>
    </div>

</body>
</html>