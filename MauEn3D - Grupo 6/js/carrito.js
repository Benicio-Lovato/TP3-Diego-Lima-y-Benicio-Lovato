// =====================================
// FUNCIONES DEL CARRITO
// =====================================

// Cargar carrito desde localStorage
function cargarCarrito() {
    return JSON.parse(localStorage.getItem("carrito")) || [];
}

// Guardar carrito en localStorage
function guardarCarrito(carrito) {
    localStorage.setItem("carrito", JSON.stringify(carrito));
}

// Añadir un producto al carrito
function agregarAlCarrito(nombre, precio) {
    const carrito = cargarCarrito();
    carrito.push({ nombre, precio });
    guardarCarrito(carrito);
    alert("Producto añadido al carrito");
}



// =====================================
// DETECTAR BOTONES "Añadir al carrito"
// =====================================

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



// =====================================
// MOSTRAR CARRITO EN carrito.php
// =====================================

document.addEventListener("DOMContentLoaded", () => {

    const contenedorCarrito = document.getElementById("lista-carrito");
    const totalHTML = document.querySelector(".total .precio");

    if (contenedorCarrito && totalHTML) {

        const carrito = cargarCarrito();

        // Si está vacío
        if (carrito.length === 0) {
            contenedorCarrito.innerHTML = "<p>Tu carrito está vacío.</p>";
            totalHTML.innerText = "$0";
            return;
        }

        // Mostrar productos
        contenedorCarrito.innerHTML = "";
        carrito.forEach(item => {
            let p = document.createElement("p");
            p.innerText = `${item.nombre} - $${item.precio}`;
            contenedorCarrito.appendChild(p);
        });

        // Calcular total
        let total = carrito.reduce((suma, item) => suma + item.precio, 0);
        totalHTML.innerText = "$" + total;
    }
});



// =====================================
// BOTÓN PARA VACIAR CARRITO
// =====================================

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
