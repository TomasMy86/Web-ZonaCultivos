<!-- templates/nuestros_productos.php -->
<section id="nuestros-productos" class="py-5">
    <div class="container">
        <h1 class="text-center mb-5">Nuestros Productos</h1>

        <!-- Césped Natural -->
        <div class="cesped-natural mb-5">
            <h2 class="mb-4">Césped Natural</h2>
            <p>En Zona Cultivos, ofrecemos tres variedades de césped natural, cada una preparada para adaptarse a diferentes necesidades y condiciones climáticas:</p>
            
            <!-- Carrusel de Césped Natural -->
            <div id="cespedCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#cespedCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#cespedCarousel" data-slide-to="1"></li>
                    <li data-target="#cespedCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <!-- Bermuda -->
                    <div class="carousel-item">
                        <img src="/assets/images/bermuda.jpg" class="d-block w-100" alt="Bermuda">
                        <div class="carousel-caption bg-dark bg-opacity-50 rounded p-3">
                            <h5>Bermuda</h5>
                            <p>Ideal para climas cálidos, se destaca por su resistencia y rapidez en el crecimiento.</p>
                        </div>
                    </div>
                    <!-- Grama Bahiana Mezcla -->
                    <div class="carousel-item active">
                        <img src="/assets/images/mezcla.jpg" class="d-block w-100" alt="Grama Bahiana Mezcla">
                        <div class="carousel-caption bg-dark bg-opacity-50 rounded p-3">
                            <h5>Grama Bahiana Mezcla</h5>
                            <p>Ideal para zonas con buen drenaje, resistente al pisoteo y de fácil mantenimiento.</p>
                        </div>
                    </div>
                    <!-- Grama Bahiana Premium -->
                    <div class="carousel-item">
                        <img src="/assets/images/premium.jpg" class="d-block w-100" alt="Grama Bahiana Premium">
                        <div class="carousel-caption bg-dark bg-opacity-50 rounded p-3">
                            <h5>Grama Bahiana Premium</h5>
                            <p>Perfecta para quienes buscan un acabado estético superior, con mayor densidad y color verde intenso.</p>
                        </div>
                    </div>                    
                </div>
                <a class="carousel-control-prev" href="#cespedCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#cespedCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>

        <!-- Plantas -->
        <div class="plantas">
            <h2 class="mb-4">Plantas</h2>
            <p>Tenemos acceso a una amplia variedad de plantas de interior y exterior. Realizamos venta por mayor de este tipo de productos. Ofrecemos listas de precios y envíos de pedidos personalizados.</p>
            <div class="text-center">
                <img src="/assets/images/productos/plantas.jpg" alt="Variedad de Plantas" class="img-fluid rounded shadow">
            </div>
        </div>

        <!-- Envíos y Condiciones -->
        <div class="envios-condiciones mb-5">
            <h2 class="mb-4">Envíos y Condiciones</h2>
            <p>Realizamos envíos a partir de 20 m² por Zona Oeste y alrededores.</p>
            <p>Sólo ofrecemos venta y envíos; no realizamos colocación del césped.</p>
            
            <!-- Imagen de Envíos y Condiciones -->
            <div class="text-center mt-4">
                <img src="/assets/images/envios.jpg" alt="Envíos y Condiciones" class="img-fluid rounded shadow" loading="lazy">
            </div>
        </div>
    </div>
</section>
