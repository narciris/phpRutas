<?php require_once 'layaout/Heade.php' ?>
<?php require_once 'layaout/Nav.php'; ?>

<div class="container">
    <div class="row" style="margin-top: 60px;">
        <div class="col s12 m8 offset-m2 l6 offset-l3">
            <div class="card z-depth-3" style="border-radius: 15px;">
                <div class="card-content">
                    <h5 class="center-align orange-text text-darken-2" style="font-family: 'Courier New', monospace;">Detalles del Usuario</h5>

                    <?php if (isset($user) && !empty($user)): ?>
                        <ul class="collection with-header">
                            <li class="collection-header"><h6 class="blue-text text-darken-2">Información Personal</h6></li>
                            <li class="collection-item">Nombre: <strong><?= htmlspecialchars($user['name']) ?></strong></li>
                            <li class="collection-item">Apellido: <strong><?= htmlspecialchars($user['lastname']) ?></strong></li>
                            <li class="collection-item">Email: <strong><?= htmlspecialchars($user['email']) ?></strong></li>
                        </ul>
                    <?php else: ?>
                        <p class="center-align red-text">No se encontró el usuario.</p>
                    <?php endif; ?>
                </div>
                <div class="card-action center-align">
                    <a class="btn waves-effect waves-light grey darken-1" href="?c=User&m=index">
                        <i class="material-icons left">arrow_back</i>Volver
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'layaout/Footer.php' ?>
