<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f0f0f0; }
        .login-container { max-width: 300px; margin: 100px auto; padding: 20px; background-color: #fff; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
        input[type="text"], input[type="password"] { width: 100%; padding: 10px; margin: 10px 0; box-sizing: border-box; }
        input[type="checkbox"] { margin-right: 10px; } /* 调整复选框的右边距 */
        input[type="submit"] { width: 100%; padding: 10px; background-color: #007bff; color: white; border: none; cursor: pointer; }
        input[type="submit"]:hover { background-color: #0056b3; }
        .checkbox-container label {
            display: flex;
            align-items: center; /* 确保复选框和文本垂直居中 */
        }
    </style>
</head>
<body>
    <div class="login-container">
        <form method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <label class="checkbox-container">
                <input type="checkbox" id="show-password" name="show-password"> Show Password
            </label>
            <input type="submit" value="Login">
        </form>
        <?php
        if(isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            if($username == "admin" && $password == "admin") {
                header("Location: success.html");
                exit();
            } else {
                echo "<p style='color: red;'>Invalid username or password.</p>";
            }
        }
        ?>
    </div>
    <script>
        document.getElementById('show-password').addEventListener('change', function() {
            var passwordInput = document.getElementById('password');
            if(this.checked) {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        });
    </script>
</body>
</html>