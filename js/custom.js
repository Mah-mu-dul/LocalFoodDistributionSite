// to get current year
function getYear() {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    document.querySelector("#displayYear").innerHTML = currentYear;
}

getYear();

// nav menu
function openNav() {
    document.getElementById("myNav").classList.toggle("menu_width");
    document
        .querySelector(".custom_menu-btn")
        .classList.toggle("menu_btn-style");
}
const checkLogin = (event) => {
    event.preventDefault(); // Prevents the default form submission

    // Get values from the form
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    console.log(username+password)

    // Replace the condition below with your actual authentication logic
    if (username === 'admin' && password === '1122') {
        window.location.href = 'test.html'; // Redirect to the dashboard page
    } else {
        alert('Invalid username or password. Please try again.');
    }

    return false; // Prevents further execution and propagation of the event

}