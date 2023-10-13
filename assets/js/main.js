// Este codigo pertenece al submene que aparece al dar clic en Nosotros en el menu de navegacion
// Obtiene el elemento que tiene la clase 'has-submenu'
const hasSubmenu = document.querySelector(".has-submenu");
// Obtiene el submenú
const submenu = document.querySelector(".submenu");
// Asegura que la propiedad display del submenú esté inicialmente establecida en 'none'
submenu.style.display = "none";

// codigo de el menu desplegable del carrito de compras
// Define la función showCartMenu para mostrar el menú del carrito
function showCartMenu() {
  // Obtiene el elemento del menú del carrito por su ID
  var cartMenu = document.getElementById("cartMenu");
  // Cambia la propiedad de estilo display del menú del carrito a "block" para hacerlo visible
  cartMenu.style.display = "block";
}
// Define la función hideCartMenu para ocultar el menú del carrito
function hideCartMenu() {
  // Obtiene el elemento del menú del carrito por su ID
  var cartMenu = document.getElementById("cartMenu");
  // Cambia la propiedad de estilo display del menú del carrito a "none" para ocultarlo
  cartMenu.style.display = "none";
}

function hideCard() {
  var hideCard = document.getElementById("card");
  hideCard.style.visibility = "hidden";
}

//Codigo de la seleccion del boton pedido: domicio o ir ala tienda
// Define una función llamada 'selectButton' que toma un parámetro llamado 'button'
function selectButton(button) {
  // Obtiene una referencia a un elemento en la página con el ID "button2" y lo almacena en la variable 'button2'
  var button2 = document.getElementById("button2");
  // Obtiene una referencia a un elemento en la página con el ID "button3" y lo almacena en la variable 'button3'
  var button3 = document.getElementById("button3");
  // Elimina la clase "selected" del elemento almacenado en 'button2'
  button2.classList.remove("selected");
  // Elimina la clase "selected" del elemento almacenado en 'button3'
  button3.classList.remove("selected");
  // Agrega la clase "selected" al elemento pasado como parámetro 'button'
  button.classList.add("selected");
}

//este codigo pertenece al menu del carrito de comprar donde cada producto se añadira aqui
// Agrega un evento de clic al elemento que tiene la clase 'has-submenu'
hasSubmenu.addEventListener("click", (event) => {
  // Evita que el enlace se siga
  event.preventDefault();
  // Si el submenú está oculto (display = 'none')
  if (submenu.style.display === "none") {
    // Muestra el submenú (display = 'block')
    submenu.style.display = "block";
  } else {
    // Si el submenú está visible, lo oculta (display = 'none')
    submenu.style.display = "none";
  }
});

const productos = document.querySelectorAll('.col[data-element="producto"]');
const carrito = document.querySelector(".cart-items");

const agregarProducto = (id, img, nom, pre) => {

  const cookieCarrito = checkCookie("carrito") ? getCookie("carrito") : setCookie("carrito", [])

  // cookieCarrito[] = {

  // }

  const producto = document.createElement("div");
  producto.setAttribute("class", "cart-item");
  producto.setAttribute("data-id", id);
  producto.innerHTML = `
    <div>
      <div class="item-image" style="display: flex;">
        <img src="${img}" alt="${nom}">
        <div class="item-details">
          <h3>${nom}</h3>
          <p class="precio">${pre}</p>
        </div>
        <button class="remove-btn">X</button>
      </div>
    </div>
    <div class="item-quantity">
      <button class="quantity-btn minus-btn">-</button>
      <input type="number" class="quantity-input" value="1" min="0" readonly>
      <button class="quantity-btn plus-btn">+</button>
    </div>
  `;

  carrito.appendChild(producto);

  const restarBtn = producto.querySelector(".minus-btn");
  const sumarBtn = producto.querySelector(".plus-btn");
  const eliminarBtn = producto.querySelector(".remove-btn");

  const restarProductoLocal = () => {
    restarProducto(producto.querySelector("input"));
  };

  const sumarProductoLocal = () => {
    sumarProducto(producto.querySelector("input"));
  };

  const eliminarProductoLocal = () => {
    // restarBtn.removeEventListener("click", restarProductoLocal);
    // sumarBtn.removeEventListener("click", sumarProductoLocal);
    // eliminarBtn.removeEventListener("click", eliminarProductoLocal);
    producto.remove();
  };

  restarBtn.addEventListener("click", restarProductoLocal);
  sumarBtn.addEventListener("click", sumarProductoLocal);
  eliminarBtn.addEventListener("click", eliminarProductoLocal);
};

const sumarProducto = (producto) => {
  producto.value = parseInt(producto.value) + 1;
};

const restarProducto = (producto) => {
  if (producto.value > 1) {
    producto.value = parseInt(producto.value) - 1;
  }

  return producto.value;
};

productos.forEach((producto) => {
  const id = producto.getAttribute("data-id");
  const img = producto.querySelector('[data-element="imagen-producto"]').src;
  const nom = producto.querySelector(
    '[data-element="nombre-producto"]'
  ).innerHTML;
  const pre = producto.querySelector(
    '[data-element="precio-producto"]'
  ).innerHTML;

  const add = producto.querySelector(".add-to-cart1");

  add.addEventListener("click", (e) => {
    const productoExistente = carrito.querySelector(
      `.cart-item[data-id="${id}"]`
    );
    if (productoExistente) {
      sumarProducto(productoExistente.querySelector("input"));
    } else {
      agregarProducto(id, img, nom, pre);
    }
  });
});

function setCookie(name, value) {
  document.cookie = name + "=" + JSON.stringify(value) + ";path=/";
  getCookie(name)
}

function getCookie(name) {
  let name = name + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(";");
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function checkCookie(name) {
  let cookie = getCookie(name);
  return cookie ? true : false;  
}
