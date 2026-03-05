// assets/js/include.js
async function includePartial(selector, url) {
  const el = document.querySelector(selector);
  if (!el) return;
  const res = await fetch(url);
  if (!res.ok) {
    el.innerHTML = `<div class="container"><p class="muted">No se pudo cargar ${url}</p></div>`;
    return;
  }
  el.innerHTML = await res.text();
}

async function loadLayout() {
  await includePartial("#headerMount", "partials/header.html");
  await includePartial("#footerMount", "partials/footer.html");
}
document.addEventListener("DOMContentLoaded", loadLayout);