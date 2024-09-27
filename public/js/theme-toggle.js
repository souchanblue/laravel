// public/js/theme-toggle.js

document.addEventListener("DOMContentLoaded", function () {
    const toggleCheckbox = document.getElementById("themeToggle");

    // Load theme from localStorage
    if (localStorage.getItem("theme") === "dark") {
        document.body.classList.add("light-mode");
        toggleCheckbox.checked = true;
    } else {
        document.body.classList.remove("light-mode");
        toggleCheckbox.checked = false;
    }

    // Toggle theme on checkbox change
    toggleCheckbox.addEventListener("change", function () {
        if (toggleCheckbox.checked) {
            document.body.classList.add("light-mode");
            localStorage.setItem("theme", "dark");
        } else {
            document.body.classList.remove("light-mode");
            localStorage.setItem("theme", "light");
        }
    });
});
