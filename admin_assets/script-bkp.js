document.addEventListener("DOMContentLoaded", () => {
    const themeToggle   = document.getElementById("themeToggle");
    const body          = document.body;
    const sidebar       = document.getElementById("sidebar");
    const mainContent   = document.getElementById("mainContent");
    const menuToggle    = document.getElementById("menuToggle");
    const closeBtn      = document.getElementById("closeBtn");
    const sidebarToggle = document.getElementById("sidebarToggle");

    /* -------------------------
       Dark/Light Theme Switch
    --------------------------*/
    if (themeToggle) {
        themeToggle.addEventListener("click", () => {
            const currentTheme = body.getAttribute("data-theme") || "light";
            const newTheme = currentTheme === "dark" ? "light" : "dark";
            body.setAttribute("data-theme", newTheme);
            localStorage.setItem("theme", newTheme); // save preference
        });

        // Load saved theme
        const savedTheme = localStorage.getItem("theme");
        if (savedTheme) body.setAttribute("data-theme", savedTheme);
    }

    /* -------------------------
       Mobile Sidebar Open/Close
    --------------------------*/
    if (menuToggle && sidebar) {
        menuToggle.addEventListener("click", () => sidebar.classList.add("show"));
    }

    if (closeBtn && sidebar) {
        closeBtn.addEventListener("click", () => sidebar.classList.remove("show"));
    }

    document.addEventListener("click", (e) => {
        if (window.innerWidth <= 768 && sidebar.classList.contains("show") &&
            !sidebar.contains(e.target) && !menuToggle.contains(e.target)) {
            sidebar.classList.remove("show");
        }
    });

    /* -------------------------
       Sidebar Collapse/Expand
    --------------------------*/
    if (sidebarToggle) {
        sidebarToggle.addEventListener("click", () => {
            sidebar.classList.toggle("collapsed");
            if (mainContent) mainContent.classList.toggle("collapsed");

            // Change icon
            sidebarToggle.classList.toggle("bi-chevron-double-left");
            sidebarToggle.classList.toggle("bi-chevron-double-right");
        });
    }

    /* -------------------------
       Submenu Toggle
    --------------------------*/
    document.querySelectorAll(".nav-item[data-toggle='submenu']").forEach(item => {
        item.addEventListener("click", (e) => {
            e.preventDefault();
            const submenu = item.nextElementSibling;
            if (submenu && submenu.classList.contains("submenu")) {
                submenu.style.display = submenu.style.display === "block" ? "none" : "block";
                submenu.style.animation = submenu.style.display === "block" ? "fadeInUp 0.3s ease-out" : "";
                item.classList.toggle("open", submenu.style.display === "block");
            }
        });
    });

    /* -------------------------
       Active Nav Item
    --------------------------*/
    document.querySelectorAll(".nav-item").forEach(item => {
        item.addEventListener("click", () => {
            document.querySelectorAll(".nav-item").forEach(nav => nav.classList.remove("active"));
            item.classList.add("active");
        });
    });
});
