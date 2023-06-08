// script.js
const modeSwitch = document.getElementById("mode_switch");

modeSwitch.addEventListener("click", toggleDarkMode);

function toggleDarkMode() {
    const body = document.body;

    // Toggle dark mode class on the body element
    body.classList.toggle("dark-mode");

    // Toggle the font-awesome icon
    const icon = modeSwitch.querySelector("i");
    icon.classList.toggle("fa-toggle-on");
    icon.classList.toggle("fa-toggle-off");
}