<!DOCTYPE HTML>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../styles/login.css">
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>
    <?php
    $usernameErr = $passwordErr = "";
    $username = $password = "";
    $rememberMe = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["username"])) {
            $usernameErr = "Username is required";
        } else {
            $username = test_input($_POST["username"]);
        }
     
        if (empty($_POST["password"])) {
            $passwordErr = "Password is required";
        } else {
            $password = test_input($_POST["password"]);
        }
        
        $rememberMe = isset($_POST["rememberMe"]);
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
          <div class="nav-links"> 
            <a href="public_home.php">Home</a>
            <a href="login.php">Login</a>
            <a href="registration.php">Registration</a>
          </div>
        </div>
    </header>
    
    <div class="content">
        <h1>LOGIN</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group">
                <label for="username">User Name:</label>
                <input type="text" id="username" name="username" value="<?php echo $username;?>">
                <span class="error">* <?php echo $usernameErr;?></span>
            </div>
            
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
                <span class="error">* <?php echo $passwordErr;?></span>
            </div>
            
            <div class="form-group">
                <input type="checkbox" id="rememberMe" name="rememberMe" <?php if ($rememberMe) echo "checked";?>>
                <label for="rememberMe">Remember Me</label>
            </div>
            
            <div class="form-group">
                <input type="submit" value="Submit">
                <a href="forgot_password.php" class="forgot-link">Forgot Password?</a>
            </div>
        </form>
    </div>
    
    <footer>
        <p>Copyright © 2017</p>
    </footer>
</body>
</html>