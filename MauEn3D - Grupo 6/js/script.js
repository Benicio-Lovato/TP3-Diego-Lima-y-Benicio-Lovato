const btnAbrir = document.getElementById('btn-abrir-modal');
const btnCerrar = document.getElementById('btn-cerrar-modal');
const modal = document.getElementById('modal');

document.querySelectorAll('.btn-abrir').forEach(boton => {
  boton.addEventListener('click', () => {
    const idModal = boton.getAttribute('data-modal');
    const modal = document.getElementById(idModal);
    if (modal) modal.showModal();
  });
});

// Cerrar cualquier modal
document.querySelectorAll('.btn-cerrar').forEach(boton => {
  boton.addEventListener('click', () => {
    const modal = boton.closest('dialog');
    if (modal) modal.close();
  });
});

// Cerrar al hacer clic fuera del modal
document.querySelectorAll('dialog').forEach(modal => {
  modal.addEventListener('click', (e) => {
    const rect = modal.getBoundingClientRect();
    const x = e.clientX;
    const y = e.clientY;
    if (x < rect.left || x > rect.right || y < rect.top || y > rect.bottom) {
      modal.close();
    }
  });
});

//carrusel
const images = document.querySelectorAll('.carrusel img');
const prev = document.querySelector('.prev');
const next = document.querySelector('.next');
const indicadores = document.querySelectorAll('.indicadores span');
let index = 0;

function showImage(i) {
  images.forEach(img => img.classList.remove('active'));
  indicadores.forEach(dot => dot.classList.remove('active'));
  images[i].classList.add('active');
  indicadores[i].classList.add('active');
}

prev.addEventListener('click', () => {
  index = (index - 1 + images.length) % images.length;
  showImage(index);
});

next.addEventListener('click', () => {
  index = (index + 1) % images.length;
  showImage(index);
});

// Indicadores clickeables
indicadores.forEach((dot, i) => {
  dot.addEventListener('click', () => {
    index = i;
    showImage(index);
  });
});

// Cambio automático cada 3 segundos
setInterval(() => {
  index = (index + 1) % images.length;
  showImage(index);
}, 3000);