document.addEventListener("DOMContentLoaded", () => {
  const html = document.documentElement;

  // ---- Theme (dark/light) ----
  const themeBtn = document.getElementById("theme-toggle");
  const themeIconLight = document.getElementById("theme-icon-light");
  const themeIconDark = document.getElementById("theme-icon-dark");

  function applyTheme(theme) {
    html.setAttribute("data-theme", theme);
    localStorage.setItem("theme", theme);
    if (themeIconLight && themeIconDark) {
      themeIconLight.classList.toggle("hidden", theme === "dark");
      themeIconDark.classList.toggle("hidden", theme === "light");
    }
  }

  const savedTheme =
    localStorage.getItem("theme") ||
    (window.matchMedia("(prefers-color-scheme: dark)").matches
      ? "dark"
      : "light");
  applyTheme(savedTheme);

  if (themeBtn) {
    themeBtn.addEventListener("click", () => {
      const current = html.getAttribute("data-theme");
      applyTheme(current === "dark" ? "light" : "dark");
    });
  }

  // ---- Accent color switcher ----
  const accents = ["gold", "emerald", "burgundy"];
  const accentBtn = document.getElementById("accent-toggle");

  function applyAccent(accent) {
    if (accent === "gold") {
      html.removeAttribute("data-accent");
    } else {
      html.setAttribute("data-accent", accent);
    }
    localStorage.setItem("accent", accent);
    updateAccentIndicator(accent);
  }

  function updateAccentIndicator(accent) {
    const indicator = document.getElementById("accent-indicator");
    if (!indicator) return;
    const colors = { gold: "#c9a961", emerald: "#34d399", burgundy: "#be123c" };
    indicator.style.backgroundColor = colors[accent] || colors.gold;
  }

  const savedAccent = localStorage.getItem("accent") || "gold";
  applyAccent(savedAccent);

  if (accentBtn) {
    accentBtn.addEventListener("click", () => {
      const current = localStorage.getItem("accent") || "gold";
      const idx = accents.indexOf(current);
      const next = accents[(idx + 1) % accents.length];
      applyAccent(next);
    });
  }

  // ---- Mobile menu ----
  const menuBtn = document.getElementById("mobile-menu-btn");
  const mobileMenu = document.getElementById("mobile-menu");

  if (menuBtn && mobileMenu) {
    menuBtn.addEventListener("click", () => {
      const isOpen = !mobileMenu.classList.contains("hidden");
      mobileMenu.classList.toggle("hidden");
      menuBtn.setAttribute("aria-expanded", !isOpen);
    });

    mobileMenu.querySelectorAll("a").forEach((link) => {
      link.addEventListener("click", () => {
        mobileMenu.classList.add("hidden");
        menuBtn.setAttribute("aria-expanded", "false");
      });
    });
  }

  // ---- Active section highlighting ----
  const sections = document.querySelectorAll("section[id]");
  const navLinks = document.querySelectorAll(".nav-link");

  function highlightNav() {
    const scrollY = window.scrollY + 120;
    sections.forEach((section) => {
      const top = section.offsetTop;
      const height = section.offsetHeight;
      const id = section.getAttribute("id");
      if (scrollY >= top && scrollY < top + height) {
        navLinks.forEach((link) => {
          link.classList.remove("active");
          if (link.getAttribute("href") === `#${id}`) {
            link.classList.add("active");
          }
        });
      }
    });
  }

  window.addEventListener("scroll", highlightNav, { passive: true });
  highlightNav();

  // ---- Navbar background on scroll ----
  const navbar = document.getElementById("navbar");
  if (navbar) {
    window.addEventListener(
      "scroll",
      () => {
        if (window.scrollY > 50) {
          navbar.classList.add("backdrop-blur-md", "shadow-lg");
        } else {
          navbar.classList.remove("backdrop-blur-md", "shadow-lg");
        }
      },
      { passive: true }
    );
  }
});
