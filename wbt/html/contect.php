<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact me</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="../css/styles.css" />
</head>

<body>
    <?php
$firstName = $lastName = $email = $contactReason = $service = $position = "";
$firstNameErr = $lastNameErr = $emailErr = $contactReasonErr = $serviceErr = $positionErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["firstName"])) {
        $firstNameErr = "*First Name is required";
    } else {
        $firstName = test_input($_POST["firstName"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $firstName)) {
            $firstNameErr = "*Only letters and white space allowed";
        }
    }

    if (empty($_POST["lastName"])) {
        $lastNameErr = "*Last Name is required";
    } else {
        $lastName = test_input($_POST["lastName"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $lastName)) {
            $lastNameErr = "*Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "*Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "*Invalid email format";
        }
    }

    if (empty($_POST["contactReason"])) {
        $contactReasonErr = "*Please select a reason for contacting";
    } else {
        $contactReason = test_input($_POST["contactReason"]);
    }

    if (empty($_POST["service"])) {
        $serviceErr = "*Please select a service";
    } else {
        $service = test_input($_POST["service"]);
    }

    if (empty($_POST["position"])) {
        $positionErr = "*Please select your position";
    } else {
        $position = test_input($_POST["position"]);
    }
}

function test_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}
?>

    <h3>
        <a href="../index.html">Home</a>
        <a href="Education.html">Education</a>
        <a href="Project.html">Projects</a>
        <a href="Experience.html">Experience</a>
    </h3>

    <form id="contactForm" class="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER["
        PHP_SELF"]); ?>">
        <h3 class="contact">Contact Form</h3>

        <div class="form-group">
            <label for="firstName">First Name <sup>*</sup></label>
            <input type="text" id="firstName" name="firstName" value="<?php echo $firstName; ?>" />
            <span class="error">
                <?php echo $firstNameErr; ?>
            </span>
        </div>

        <div class="form-group">
            <label for="lastName">Last Name <sup>*</sup></label>
            <input type="text" id="lastName" name="lastName" value="<?php echo $lastName; ?>" />
            <span class="error">
                <?php echo $lastNameErr; ?>
            </span>
        </div>

        <div class="form-group">
            <label for="email">Email <sup>*</sup></label>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>" />
            <span class="error">
                <?php echo $emailErr; ?>
            </span>
        </div>

        <div class="form-section">Reason for Contacting: <sup>*</sup></div>
        <div class="radio-group">
            <input type="radio" id="Thesis" name="contactReason" value="Thesis" <?php if ($contactReason=="Thesis" )
                echo "checked" ; ?> />
            <label for="Thesis">Thesis</label><br />
            <input type="radio" id="Project" name="contactReason" value="Project" <?php if ($contactReason=="Project" )
                echo "checked" ; ?> />
            <label for="Project">Project</label><br />
            <input type="radio" id="Meeting" name="contactReason" value="Meeting" <?php if ($contactReason=="Meeting" )
                echo "checked" ; ?> />
            <label for="Meeting">Meeting</label><br />
            <span class="error">
                <?php echo $contactReasonErr; ?>
            </span>
        </div>

        Services:<br />
        <select id="service" name="service">
            <option value="">Select a service</option>
            <option value="Graphics Design" <?php if ($service=="Graphics Design" ) echo "selected" ; ?>>Graphics Design
            </option>
            <option value="UI/UX Design" <?php if ($service=="UI/UX Design" ) echo "selected" ; ?>>UI/UX Design</option>
            <option value="Microcontroller project" <?php if ($service=="Microcontroller project" ) echo "selected" ; ?>
                >Microcontroller project</option>
        </select>
        <span class="error">
            <?php echo $serviceErr; ?>
        </span>
        <br />

        Your Position in your company:<br />
        <select id="position" name="position">
            <option value="">Select a position</option>
            <option value="CEO" <?php if ($position=="CEO" ) echo "selected" ; ?>>CEO</option>
            <option value="HR" <?php if ($position=="HR" ) echo "selected" ; ?>>HR</option>
            <option value="Manager" <?php if ($position=="Manager" ) echo "selected" ; ?>>Manager</option>
            <option value="Employer" <?php if ($position=="Employer" ) echo "selected" ; ?>>Employer</option>
        </select>
        <span class="error">
            <?php echo $positionErr; ?>
        </span>
        <br /><br />

        <input type="submit" value="Submit" class="submit-btn" />
    </form>

    <div class="position2"></div>

    <footer>
        <div class="footerContainer">
            <div class="socialIcons">
                <a href="https://www.facebook.com/share/1L5B75aF7f/?mibextid=qi2Omg"><i
                        class="fa-brands fa-facebook"></i></a>
                <a href="https://github.com/Merin23508651"><i class="fa-brands fa-github"></i></a>
                <a href="https://www.linkedin.com/"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </div>
        <div class="footerBottom">
            <h4>Copyright &copy;2025 Designed by Merin</h4>
        </div>
    </footer>

</body>

</html>