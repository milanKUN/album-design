 // DOM Elements
  const menuToggle = document.getElementById("menuToggle");
  const sidebar = document.querySelector(".milan_sidebar");
  const closeSidebar = document.getElementById("closeSidebar");
  const sidebarOverlay = document.getElementById("sidebarOverlay");
  const themeToggle = document.getElementById("themeToggle");

  // Toggle sidebar on mobile
  menuToggle.addEventListener("click", () => {
    sidebar.classList.toggle("open");
    sidebarOverlay.classList.toggle("active");
  });

  // Close sidebar
  closeSidebar.addEventListener("click", () => {
    sidebar.classList.remove("open");
    sidebarOverlay.classList.remove("active");
  });

  // Close sidebar when clicking on overlay
  sidebarOverlay.addEventListener("click", () => {
    sidebar.classList.remove("open");
    sidebarOverlay.classList.remove("active");
  });

  // Submenu toggle
  document.querySelectorAll(".has-submenu").forEach(item => {
    const submenu = item.querySelector(".milan_submenu");
    const arrow = item.querySelector(".toggle-arrow");
    
    item.addEventListener("click", (e) => {
      // Close other open submenus
      document.querySelectorAll(".milan_submenu.open").forEach(openSubmenu => {
        if (openSubmenu !== submenu) {
          openSubmenu.classList.remove("open");
          openSubmenu.parentElement.querySelector(".toggle-arrow").classList.remove("rotate");
        }
      });
      
      submenu.classList.toggle("open");
      arrow.classList.toggle("rotate");
    });
  });

  // Theme toggle
  themeToggle.addEventListener("click", () => {
    document.body.classList.toggle("dark");
    const icon = themeToggle.querySelector("i");
    const text = themeToggle.querySelector("span");
    
    if (document.body.classList.contains("dark")) {
      icon.className = "fas fa-sun";
      text.textContent = " Light";
    } else {
      icon.className = "fas fa-moon";
      text.textContent = " Dark";
    }
  });

  // Chart.js Example
  const ctx = document.getElementById("chart").getContext("2d");
  new Chart(ctx, {
    type: "line",
    data: {
      labels: ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],
      datasets: [{
        label: "Sales",
        data: [1200,900,1100,1500,1300,1700,2100,2300,2200,2500,2700,3000],
        borderColor: "#09f",
        backgroundColor: "rgba(0,153,255,0.1)",
        fill: true,
        tension: 0.4,
        borderWidth: 2
      }]
    },
    options: {
      responsive: true,
      plugins: { 
        legend: { display: false },
        tooltip: {
          backgroundColor: 'rgba(0,0,0,0.7)',
          titleColor: '#fff',
          bodyColor: '#fff'
        }
      },
      scales: { 
        y: { 
          beginAtZero: true,
          grid: {
            color: 'rgba(0,0,0,0.1)'
          }
        }, 
        x: { 
          grid: { 
            display: false 
          } 
        } 
      }
    }
  });
