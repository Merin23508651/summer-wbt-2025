function form() {
    var reason = prompt("Reason for contacting?(project/thesis/meeting)");
    if (reason === "project") {
        var services = prompt("Please Enter the services you want from me");
        alert("You chose services you want from me: " + services);
        var Language = prompt("Enter the programing language you Prefer(html/java/c++/C#)");
        alert("You chose programming language: " + Language);
        var description = prompt("Enter your Project description");
        var postion = prompt("Please Enter Your postion in your company(hr/ceo/employe");
        var name = prompt("Enter your Name");

        alert("Thanks for contacting me, " + name + ". Your details has been noted.I will contact you soon.");
    }
    else if (reason === "thesis") {
        var services = prompt("Please Enter the services you want from me");
        alert("You chose services you want from me: " + services);
        var Domain = prompt("Enter Your Domain");
        alert("You chose your Domain: " + Domain);
        var description = prompt("Enter your topic description");
        var status = prompt("Please Enter Your Educational Status (bsc/msc/phd/others)");
        alert("Your educational status is " + status);
        var name = prompt("Enter your Name");

        alert("Thanks for contacting me, " + name + ". Your details has been noted. I will contact you soon.");
    }
    else if (reason === "meeting") {
        var date = prompt("Please Enter The preferable Date & Time for Meeting");
        alert("You chose you the preferable Date & Time for Meeting: " + date);
        var mreason = prompt("Enter Your Meeting reason");
        var status = prompt("Please Enter Your Educational Status (bsc/msc/phd/others)");
        alert("Your educational status is " + status);
        var name = prompt("Enter your Name");

        alert("Thanks for contacting me, " + name + ". Your details has been noted. I will contact you soon.");
    }
}