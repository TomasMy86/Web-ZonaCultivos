<!-- templates/header.php -->
<header>
    <!-- Contenedor del Logo -->
    <div class="logo-container text-left text-lg-center">
        <a href="/">
            <img src="/assets/images/logo.png" alt="Zona Cultivos" class="img-fluid" id="site-logo">
        </a>
    </div>

    <!-- Menú de Navegación -->
    <nav class="navbar navbar-expand-lg custom-navbar">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <!-- Ícono del menú hamburguesa -->
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php if ($current_page == 'quienes-somos') echo 'active'; ?>" 
                       href="#quienes-somos">Quiénes somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($current_page == 'nuestros-productos') echo 'active'; ?>" 
                       href="#nuestros-productos">Nuestros productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($current_page == 'colocacion-y-cuidados') echo 'active'; ?>" 
                       href="#colocacion-y-cuidados">Colocación y cuidados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($current_page == 'contacto') echo 'active'; ?>" 
                       href="#contacto">Contacto</a>
                </li>
            </ul>
        </div>
    </nav>
</header>


