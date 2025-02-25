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

// Auto load
// if (window.history.replaceState) {
//     window.history.replaceState(null, null, window.location.href);
// }

// // Reload halaman jika kembali menggunakan tombol "Back"
// window.onload = function () {
//     if (
//         performance.getEntriesByType("navigation")[0]?.type === "back_forward"
//     ) {
//         location.reload();
//     }
// };

// Side Bar
document.addEventListener("DOMContentLoaded", function () {
    const mobileMenuBtn = document.getElementById("mobile-menu-btn");
    const mobileSidebar = document.getElementById("mobile-sidebar");
    const sidebarCloseBtn = document.getElementById("sidebar-close-btn");
    const sidebarContent = document.getElementById("sidebar-content");

    function openSidebar() {
        // Tambahkan kelas untuk menampilkan overlay dengan animasi
        mobileSidebar.classList.remove("opacity-0", "pointer-events-none");
        mobileSidebar.classList.add("opacity-100", "pointer-events-auto");
        // Animasi slide in untuk konten sidebar
        sidebarContent.classList.remove("-translate-x-full");
        sidebarContent.classList.add("translate-x-0");
    }

    function closeSidebar() {
        // Tambahkan kelas untuk menyembunyikan overlay dengan animasi
        mobileSidebar.classList.remove("opacity-100", "pointer-events-auto");
        mobileSidebar.classList.add("opacity-0", "pointer-events-none");
        // Animasi slide out untuk konten sidebar
        sidebarContent.classList.remove("translate-x-0");
        sidebarContent.classList.add("-translate-x-full");
    }

    mobileMenuBtn.addEventListener("click", openSidebar);
    sidebarCloseBtn.addEventListener("click", closeSidebar);
    mobileSidebar.addEventListener("click", function (event) {
        if (!sidebarContent.contains(event.target)) {
            closeSidebar();
        }
    });
});
