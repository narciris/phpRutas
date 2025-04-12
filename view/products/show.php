<?php require_once 'layaout/Heade.php' ?>
<?php require_once 'layaout/Nav.php'; ?>

<div class="container">
    <div class="row" style="margin-top: 50px;">
        <div class="col s12 m8 offset-m2 l6 offset-l3 red">
            <h5 class="center-align">Detalles del Producto</h5>

            <?php if (isset($products) && !empty($products)): ?>
                <ul class="collection with-header">
                    <li class="collection-header"><h6>Información del producto</h6></li>
                    <li class="collection-item">Nombre: <strong><?= $products['name'] ?></strong></li>
                    <li class="collection-item">Precio: <strong><?= $products['price'] ?></strong></li>
                    <li class="collection-item">Cantidad: <strong><?= $products['amount'] ?></strong></li>
                </ul>
            <?php else: ?>
                <p class="center-align red-text">No se encontró el producto.</p>
            <?php endif; ?>
            <a class="btn-small blue" href="?c=Products&m=index">
                Volver
                <i class="material-icons"></i>
            </a>
        </div>
    </div>
</div>

<?php require_once 'layaout/Footer.php'?>
