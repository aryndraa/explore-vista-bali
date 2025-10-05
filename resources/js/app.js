import './bootstrap';
window.Alpine = Alpine;

//? TEMPORARY CODE ==========================
if ('scrollRestoration' in history) {
    history.scrollRestoration = 'manual'; // or 'auto'
}

document.addEventListener("DOMContentLoaded", () => {
    const pos = sessionStorage.getItem("scrollPos");
    if (pos) {
        window.scrollTo(0, parseInt(pos));
        sessionStorage.removeItem("scrollPos");
    }
});

window.addEventListener("beforeunload", () => {
    sessionStorage.setItem("scrollPos", window.scrollY);
});
//? TERMPORARY CODE ==========================

var animatedHoverBtn = document.querySelectorAll("[data-hover-animation='wave']");

animatedHoverBtn.forEach((btn) => {
    const text = btn.querySelector(".btn-text");
    const wrapper = btn.querySelector(".text-wrapper");
    const upper = btn.querySelector(".upper");
    const lower = btn.querySelector(".lower");

    // Set wrapper height
    wrapper.style.height = text.clientHeight + 1 + "px";

    // Split text into letters
    const letters = text.textContent.split("");

    // Create letter elements for both upper and lower sections
    letters.forEach((letter, i) => {
        const delay = i * 15;
        const transition = `all 400ms ${delay}ms cubic-bezier(0.47, 0.06, 0, 0.97)`;

        const createElement = () => {
            const p = document.createElement("p");
            p.innerHTML = letter === " " ? "&nbsp;" : letter;
            p.style.transition = transition;
            return p;
        };

        upper.appendChild(createElement());
        lower.appendChild(createElement());
    });
});
import "./bootstrap";
import { Calendar } from "fullcalendar";
