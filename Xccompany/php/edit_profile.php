<!DOCTYPE HTML>
<html>
<head>
    <title>Edit Profile</title>
    <link rel="stylesheet" type="text/css" href="../styles/edit_profile.css">
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>
    <?php
    $nameErr = $emailErr = $genderErr = $dobErr = "";
    $name = " ";
    $email = " ";
    $gender = " ";
    $dob = " ";

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
            <span class="user-info">Logged in as | <a href="login.php">Logout</a></span>
        </div>
    </header>
    
    <div class="container">
        <aside class="sidebar">
            <h3>Account</h3>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="view_profile.php">View Profile</a></li>
                <li><a href="edit_profile.php">Edit Profile</a></li>
                <li><a href="profile_picture.php">Change Profile Picture</a></li>
                <li><a href="change_password.php">Change Password</a></li>
                <li><a href="login.php">Logout</a></li>
            </ul>
        </aside>
        
        <main class="content">
            <h2>EDIT PROFILE</h2>
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
                </div>
            </form>
        </main>
    </div>
    
    <footer>
        <p>Copyright © 2017</p>
    </footer>
</body>
</html>