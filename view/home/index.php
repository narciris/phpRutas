<?php require_once 'layaout/Heade.php' ?>

<!-- Navegación principal -->
<div class="nav-wrapper container">
    <a id="logo-container" href="#" class="brand-logo">Aplicación</a>
</div>
</nav>

<!-- Banner principal -->
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br><br>
        <h1 class="header center orange-text">¡Bienvenidx!</h1>
        <div class="row center">
            <h5 class="header col s12 light">
                Gestiona tus usuarios y productos de forma sencilla desde un solo lugar.
            </h5>
        </div>
        <div class="row center">
            <a href="?c=User&m=loginForm" id="download-button" class="btn-large waves-effect waves-light orange">
                ¡Empieza ahora!
            </a>
        </div>
        <br><br>
    </div>
</div>

<!-- Características destacadas -->
<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12 m4 center">
                <i class="material-icons large orange-text">group</i>
                <h5>Gestión de Usuarios</h5>
                <p>Administra la información de tus usuarios de forma eficiente.</p>
            </div>
            <div class="col s12 m4 center">
                <i class="material-icons large orange-text">shopping_cart</i>
                <h5>Productos</h5>
                <p>Registra, edita y elimina productos fácilmente desde tu panel.</p>
            </div>
            <div class="col s12 m4 center">
                <i class="material-icons large orange-text">lock</i>
                <h5>Seguridad</h5>
                <p>Inicia sesión de manera segura con tus credenciales personales.</p>
            </div>
        </div>
    </div>
</div>

<!-- Testimonio o frase de impacto -->
<div class="section grey lighten-4">
    <div class="container">
        <h5 class="center">¿Por qué usar nuestra app?</h5>
        <blockquote class="center">
            "Simple, intuitiva y perfecta para gestionar lo importante sin complicaciones."
        </blockquote>
    </div>
</div>

<?php require_once 'layaout/Footer.php' ?>
