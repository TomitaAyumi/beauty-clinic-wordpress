
document.addEventListener("DOMContentLoaded", () => {
  const btn = document.querySelector(".menu-toggle");
  const nav = document.querySelector(".global-nav");
  if (btn && nav) btn.addEventListener("click", () => nav.classList.toggle("open"));

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(e => {
      if(e.isIntersecting){ e.target.classList.add("show"); obs.unobserve(e.target); }
    });
  }, {threshold:.15});
  document.querySelectorAll(".fade").forEach(el => observer.observe(el));
});
