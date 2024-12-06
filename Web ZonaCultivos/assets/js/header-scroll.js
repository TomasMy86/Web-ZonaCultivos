// Obtener todos los enlaces de navegación
const navLinks = document.querySelectorAll('.nav-link');
const logoLink = document.querySelector('.navbar-brand');

if (logoLink) {
  logoLink.addEventListener('click', function(e) {
    e.preventDefault(); // Prevenir que el enlace haga su acción predeterminada

    // Desplazarse suavemente al inicio de la página
    window.scrollTo({
      top: 0, // Desplazar al inicio
      behavior: 'smooth' // Desplazamiento suave
    });
  });
}

// Función para desplazamiento suave
navLinks.forEach(link => {
  link.addEventListener('click', function(e) {
    e.preventDefault(); // Prevenir el comportamiento por defecto del enlace

    // Obtener el objetivo de desplazamiento (sección)
    const targetId = link.getAttribute('href').substring(1);
    const targetElement = document.getElementById(targetId);

    // Desplazar suavemente hacia la sección
    window.scrollTo({
      top: targetElement.offsetTop - 60, // Ajuste de desplazamiento para que no se tape por el header
      behavior: 'smooth'
    });
  });
});

// Función para agregar o quitar la clase activa según la sección visible
function updateActiveSection() {
  const scrollPosition = window.scrollY + window.innerHeight / 2; // La posición del scroll + mitad de la ventana
  navLinks.forEach(link => {
    const targetId = link.getAttribute('href').substring(1); // El id de la sección
    const targetElement = document.getElementById(targetId);

    // Comprobar si la sección está en la pantalla (en el centro de la vista)
    if (targetElement.offsetTop <= scrollPosition && targetElement.offsetTop + targetElement.offsetHeight > scrollPosition) {
      // Si está visible, agregar la clase 'active'
      link.classList.add('active');
    } else {
      // Si no está visible, quitar la clase 'active'
      link.classList.remove('active');
    }
  });
}

// Llamar a la función cada vez que el usuario hace scroll
window.addEventListener('scroll', updateActiveSection);

// Llamar a la función para el caso inicial (cuando se carga la página)
updateActiveSection();

