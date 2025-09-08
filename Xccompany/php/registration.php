<!DOCTYPE HTML>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="../styles/registration.css">
</head>
<body>
    <?php
    $nameErr = $emailErr = $usernameErr = $passwordErr = $confirmPasswordErr = $genderErr = $dobErr = "";
    $name = $email = $username = $password = $confirmPassword = $gender = $dob = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
            }
        }
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }
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
        
        if (empty($_POST["confirmPassword"])) {
            $confirmPasswordErr = "Please confirm password";
        } else {
            $confirmPassword = test_input($_POST["confirmPassword"]);
            if ($password != $confirmPassword) {
                $confirmPasswordErr = "Passwords do not match";
            }
        }
        
        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }
        
        if (empty($_POST["dob"])) {
            $dobErr = "Date of Birth is required";
        } else {
            $dob = test_input($_POST["dob"]);
            if (!preg_match("/^\d{2}\/\d{2}\/\d{4}$/", $dob)) {
                $dobErr = "Invalid date format (dd/mm/yyyy)";
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
        <div class="nav-links"> 
            <a href="public_home.php">Home</a>
            <a href="login.php">Login</a>
            <a href="registration.php">Registration</a>
        </div>
    </div>
    </header>
    
    <div class="content">
        <h1>REGISTRATION</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?php echo $name;?>">
                <span class="error">* <?php echo $nameErr;?></span>
            </div>
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" value="<?php echo $email;?>">
                <span class="error">* <?php echo $emailErr;?></span>
            </div>
            
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
                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" id="confirmPassword" name="confirmPassword">
                <span class="error">* <?php echo $confirmPasswordErr;?></span>
            </div>
            
            <div class="form-group">
                <label>Gender:</label>
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
                <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
                <span class="error">* <?php echo $genderErr;?></span>
            </div>
            
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="text" id="dob" name="dob" value="<?php echo $dob;?>" placeholder="(dd/mm/yyyy)">
                <span class="error">* <?php echo $dobErr;?></span>
            </div>
            
            <div class="form-group">
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </div>
        </form>
    </div>
    
    <footer>
        <p>Copyright © 2017</p>
    </footer>
</body>
</html>