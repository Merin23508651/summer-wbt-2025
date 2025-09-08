<!DOCTYPE HTML>
<html>
<head>
    <title>Profile Picture</title>
    <link rel="stylesheet" type="text/css" href="../styles/profile_picture.css">
</head>
<body>
    <header>
        <div class="navbar">
          <div class="company">
                <img src="../picture/logo.png" alt="Company Logo" class="logo"><span>Company</span>
             <div class="nav-links">
                <span class="user-info">Logged in as </span>| 
                <a href="login.php">Logout</a>
             </div>
            </div>
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
            <h2>PROFILE PICTURE</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="profilePicture">Choose File:</label>
                    <input type="file" id="profilePicture" name="profilePicture">
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