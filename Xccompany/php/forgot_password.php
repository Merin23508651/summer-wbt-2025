<!DOCTYPE HTML>
<html>
<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" type="text/css" href="../styles/forgot_password.css">
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>
    <?php
    $emailErr = "";
    $email = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <header>
        <div class="navbar">
            <div class="company">
                <img src="../picture/logo.png" alt="Company Logo" class="logo">
                <span>Company</span>
            </div>
            <a href="public_home.php">Home</a>
            <a href="login.php">Login</a>
            <a href="registration.php">Registration</a>
        </div>
    </header>
    
    <div class="content">
        <h1>FORGOT PASSWORD</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group">
                <label for="email">Enter Email:</label>
                <input type="text" id="email" name="email" value="<?php echo $email;?>">
                <span class="error">* <?php echo $emailErr;?></span>
            </div>
            
            <div class="form-group">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
    
    <footer>
        <p>Copyright © 2017</p>
    </footer>
</body>
</html>