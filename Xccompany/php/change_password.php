<!DOCTYPE HTML>
<html>
<head>
    <title>Change Password</title>
    <link rel="stylesheet" type="text/css" href="../styles/change_password.css">
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>
    <?php
    $currentPasswordErr = $newPasswordErr = $retypePasswordErr = "";
    $currentPassword = $newPassword = $retypePassword = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["currentPassword"])) {
            $currentPasswordErr = "Current password is required";
        } else {
            $currentPassword = test_input($_POST["currentPassword"]);
        }
        
        if (empty($_POST["newPassword"])) {
            $newPasswordErr = "New password is required";
        } else {
            $newPassword = test_input($_POST["newPassword"]);
        }
        
     
        if (empty($_POST["retypePassword"])) {
            $retypePasswordErr = "Please retype new password";
        } else {
            $retypePassword = test_input($_POST["retypePassword"]);
            if ($newPassword != $retypePassword) {
                $retypePasswordErr = "Passwords do not match";
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
            <span class="user-info">Logged in as  | <a href="login.php">Logout</a></span>
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
            <h2>CHANGE PASSWORD</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="form-group">
                    <label for="currentPassword">Current Password:</label>
                    <input type="password" id="currentPassword" name="currentPassword">
                    <span class="error">* <?php echo $currentPasswordErr;?></span>
                </div>
                
                <div class="form-group">
                    <label for="newPassword">New Password:</label>
                    <input type="password" id="newPassword" name="newPassword">
                    <span class="error">* <?php echo $newPasswordErr;?></span>
                </div>
                
                <div class="form-group">
                    <label for="retypePassword">Retype New Password:</label>
                    <input type="password" id="retypePassword" name="retypePassword">
                    <span class="error">* <?php echo $retypePasswordErr;?></span>
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