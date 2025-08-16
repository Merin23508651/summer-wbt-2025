document.addEventListener('DOMContentLoaded', function () {
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function (event) {
            event.preventDefault();

            const formData = {
                firstName: document.getElementById('firstName').value,
                lastName: document.getElementById('lastName').value,
                email: document.getElementById('email').value,
                contactReason: document.querySelector('input[name="Contact"]:checked').id,
                service: document.getElementById('service').value,
                position: document.getElementById('position').value
            };
            localStorage.setItem('contectFormData', JSON.stringify(formData));
            window.location.href = "contect2.html";
        });
    }

    var database = [
        {
            username: "merin",
            password: "12345"
        }
    ];

    function displayFormData() {
        const formData = JSON.parse(localStorage.getItem('contectFormData'));
        const displayDiv = document.getElementById('formDataDisplay');

        if (formData && displayDiv) {
            displayDiv.innerHTML = `
                <h3 class="submitted-info"> Submitted Information:</h3>
                <p class="colorp"><strong>Name:</strong> ${formData.firstName} ${formData.lastName}</p>
                <p class="colorp"><strong>Email:</strong> ${formData.email}</p>
                <p class="colorp"><strong>Reason For Contacting:</strong> ${formData.contactReason}</p>
                <p class="colorp"><strong>Service:</strong> ${formData.service}</p>
                <p class="colorp"><strong>Position:</strong> ${formData.position}</p>
                 <h3 class="Thank"> Thank You !</h3>
            `;
        }
    }
    if (document.getElementById('formDataDisplay')) {

        const username = prompt("Please enter your username:");
        const password = prompt("Please enter your password:");

        if (username === database[0].username && password === database[0].password) {
            displayFormData();
        } else {
            alert("Incorrect username or password");
            window.location.href = "contect.html";
        }
    }
});