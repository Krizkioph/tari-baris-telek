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

if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}

// Reload halaman jika kembali menggunakan tombol "Back"
window.onload = function () {
    if (
        performance.getEntriesByType("navigation")[0]?.type === "back_forward"
    ) {
        location.reload();
    }
};
