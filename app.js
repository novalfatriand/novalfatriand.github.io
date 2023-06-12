const emailInput = document.getElementById('emailInput');
const passwordInput = document.getElementById('passwordInput');

function onLogin() {
    console.log("Login proccess..");
    localStorage.setItem("Email", emailInput.value);

    if (emailInput.value === "admin@gmail.com" && passwordInput.value === "admin123") {
        localStorage.setItem("Role", "Admin");
        window.location = ('./dashboardAdmin.html');
    } else {
        window.location = ('./dashboardClient.html')
    }
}

function onSubmit() {
    console.log("Validation data proccessing now..");

    if (emailInput.length == 0 && passwordInput.length == 0) {
        window.location = ('./index.html');
    } else {
        if (emailInput.value === "admin@gmail.com" && passwordInput.value === "admin123") {
            localStorage.setItem("Role", "Admin");
            window.location = ('./dashboardAdmin.html');
        } else {
            window.location = ('./dashboardClient.html')
        }
    }
}