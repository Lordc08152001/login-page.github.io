<!DOCTYPE html>
<html>

<head>
    <title>login_page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/index.css">
</head>

<body>
    <div class="container">
        <form action="#" method="POST" class="login-email">
            <p class="user-img"><img src="./images/uploads/no_pic.png"></p>

            <p class="login-text">User Login</p>

            <div class="input-group">
                <p>Email or Username:</p>
                <input type="text" placeholder="Email or Username" name="email" value="" required>
                <span></span>
            </div>
            <div class="input-group">
                <p class="pass-p">Password:</p>
                <input type="password" placeholder="Password" name="password" value="" required>
                <span></span>
            </div>
            <div class="input-group">
                <button name="submit" class="btn-submit">Login</button>
            </div>
        </form>

        <div class="register">
            Don't have an account? <a href="register.php">Register</a>
        </div>
    </div>
</body>

</html>