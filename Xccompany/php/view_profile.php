<!DOCTYPE HTML>
<html>
<head>
    <title>View Profile</title>
    <link rel="stylesheet" type="text/css" href="../styles/view_profile.css">
</head>
<body>
    <header>
        <div class="navbar">
            <div class="company">
                <img src="../picture/logo.png" alt="Company Logo" class="logo">
                <span>Company</span>
            </div>
            <div class="user-info">
                Logged in as | <a href="login.php">Logout</a>
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
            <h2>PROFILE</h2>
            <div class="profile-info">
                <p><strong>Name:</strong></p>
                <p><strong>Email:</strong></p>
                <p><strong>Gender:</strong></p>
                <p><strong>Date of Birth:</strong></p>
            </div>
            <div class="actions">
                <a href="edit_profile.php" class="btn">Edit Profile</a>
            </div>
        </main>
    </div>
    
    <footer>
        <p>Copyright © 2017</p>
    </footer>
</body>
</html>
