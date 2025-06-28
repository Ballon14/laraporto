import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

// Enhanced ScrollSpy for nav-link with animated underline and highlight
window.addEventListener("DOMContentLoaded", () => {
    const navLinks = document.querySelectorAll('.nav-link[href^="#"]');
    const sections = Array.from(navLinks).map((link) => {
        const id = link.getAttribute("href").replace("#", "");
        return document.getElementById(id);
    });
    // Section color map
    const sectionColors = {
        home: ["#a259ff", "#00e0ff"], // ungu-biru
        about: ["#00e0ff", "#4ecdc4"], // biru-hijau
        skills: ["#4ecdc4", "#ffe066"], // hijau-kuning
        experience: ["#ff8800", "#ff2e63"], // oranye-merah
        projects: ["#ff2e63", "#a259ff"], // pink-ungu
        contact: ["#00e0ff", "#ffe066"], // cyan-kuning
    };
    function setScrollbarColor(primary, secondary) {
        document.documentElement.style.setProperty(
            "--scrollbar-primary",
            primary
        );
        document.documentElement.style.setProperty(
            "--scrollbar-secondary",
            secondary
        );
    }
    function onScroll() {
        let scrollPos = window.scrollY + 120; // offset for fixed navbar
        let activeIdx = 0;
        sections.forEach((section, idx) => {
            if (section && section.offsetTop <= scrollPos) {
                activeIdx = idx;
            }
        });
        navLinks.forEach((link, idx) => {
            if (idx === activeIdx) {
                link.classList.add("nav-link-active");
            } else {
                link.classList.remove("nav-link-active");
            }
        });
        // Set scrollbar color
        const sectionId =
            navLinks[activeIdx]?.getAttribute("href")?.replace("#", "") ||
            "home";
        const colors = sectionColors[sectionId] || ["#a259ff", "#00e0ff"];
        setScrollbarColor(colors[0], colors[1]);
    }
    window.addEventListener("scroll", onScroll);
    onScroll();
});
