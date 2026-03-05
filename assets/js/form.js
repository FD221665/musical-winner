// assets/js/form.js
function validateEmail(email) {
  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("contactForm");
  if (!form) return;

  form.addEventListener("submit", (e) => {
    e.preventDefault();

    const name = form.name.value.trim();
    const email = form.email.value.trim();
    const org = form.org.value.trim();
    const msg = form.message.value.trim();

    const status = document.getElementById("formStatus");
    status.textContent = "";

    if (!name || !email || !msg) {
      status.textContent = "Por favor, completa nombre, email y mensaje.";
      status.className = "alert alert-error";
      return;
    }
    if (!validateEmail(email)) {
      status.textContent = "Introduce un email válido.";
      status.className = "alert alert-error";
      return;
    }

    // Sitio estático: aquí normalmente integrarías un servicio tipo Formspree/Netlify Forms.
    status.textContent = "Mensaje preparado. Integra un endpoint o servicio de formularios para envío real.";
    status.className = "alert alert-ok";

    form.reset();
    form.org.value = org; // opcional: mantener org si quieres
  });
});