function cargarCarrito() {
    return JSON.parse(localStorage.getItem("carrito")) || [];
}

function guardarCarrito(carrito) {
    localStorage.setItem("carrito", JSON.stringify(carrito));
}

function agregarAlCarrito(nombre, precio) {
    const carrito = cargarCarrito();
    carrito.push({ nombre, precio });
    guardarCarrito(carrito);
    alert("Producto añadido al carrito");
}


document.addEventListener("DOMContentLoaded", () => {
    const botones = document.querySelectorAll(".carrito");

    botones.forEach(boton => {
        boton.addEventListener("click", () => {
            const modal = boton.closest("dialog");

            const nombre = modal.querySelector("h1").innerText.trim();
            const precioTexto = modal.querySelector(".precio span").innerText.replace("$", "").trim();
            const precio = parseInt(precioTexto);

            agregarAlCarrito(nombre, precio);
        });
    });
});


document.addEventListener("DOMContentLoaded", () => {

    const contenedorCarrito = document.getElementById("lista-carrito");
    const totalHTML = document.querySelector(".total .precio");

    if (contenedorCarrito && totalHTML) {

        const carrito = cargarCarrito();

        if (carrito.length === 0) {
            contenedorCarrito.innerHTML = "<p>Tu carrito está vacío.</p>";
            totalHTML.innerText = "$0";
            return;
        }

        contenedorCarrito.innerHTML = "";
        carrito.forEach(item => {
            let p = document.createElement("p");
            p.innerText = `${item.nombre} - $${item.precio}`;
            contenedorCarrito.appendChild(p);
        });

        let total = carrito.reduce((suma, item) => suma + item.precio, 0);
        totalHTML.innerText = "$" + total;
    }
});


document.addEventListener("DOMContentLoaded", () => {
    const btnVaciar = document.getElementById("vaciar-carrito");

    if (btnVaciar) {
        btnVaciar.addEventListener("click", () => {
            localStorage.removeItem("carrito");

            const contenedorCarrito = document.getElementById("lista-carrito");
            const totalHTML = document.querySelector(".total .precio");

            contenedorCarrito.innerHTML = "<p>Tu carrito está vacío.</p>";
            totalHTML.innerText = "$0";

            alert("Carrito vaciado");
        });
    }
});

function vaciarCarrito() {
  localStorage.removeItem("carrito");

  const contenedorCarrito = document.getElementById("lista-carrito");
  const totalHTML = document.querySelector(".total .precio");

  if (contenedorCarrito) {
    contenedorCarrito.innerHTML = "<p>Tu carrito está vacío.</p>";
  }
  if (totalHTML) {
    totalHTML.innerText = "$0";
  }
}

document.addEventListener("DOMContentLoaded", () => {
  const boton_credito = document.getElementById("pagar-credito");
  const boton_efectivo = document.getElementById("pagar-efectivo");

  if (boton_credito) {
    boton_credito.addEventListener("click", () => {
      const carrito = cargarCarrito();
      if (carrito.length > 0) {
        alert("Ha realizado una orden por el medio de pago: Crédito o Débito");
        vaciarCarrito();
      } else {
        alert("No hay productos en el carrito para pagar.");
      }
    });
  }

  if (boton_efectivo) {
    boton_efectivo.addEventListener("click", () => {
      const carrito = cargarCarrito();
      if (carrito.length > 0) {
        alert("Ha realizado una orden por el medio de pago: Efectivo");
        vaciarCarrito();
      } else {
        alert("No hay productos en el carrito para pagar.");
      }
    });
  }
});