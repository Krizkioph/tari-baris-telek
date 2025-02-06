import "./bootstrap";

document.addEventListener("DOMContentLoaded", function () {
    const dropdownButtons = document.querySelectorAll(".toggle-dropdown");

    dropdownButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const target = this.getAttribute("data-target");
            const dropdownContent = document.getElementById(target);

            dropdownContent.classList.toggle("open");
            this.classList.toggle("open");
        });
    });
});
