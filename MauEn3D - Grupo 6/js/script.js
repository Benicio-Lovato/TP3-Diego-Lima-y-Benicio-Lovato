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
