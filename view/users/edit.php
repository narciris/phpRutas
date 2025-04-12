<?php require_once 'layaout/Heade.php' ?>
<?php require_once 'layaout/Nav.php'; ?>

<style>
    .full-height {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<div class="container full-height">
    <div class="row" style="width: 100%;">
        <div class="col s12 m8 offset-m2 l6 offset-l3">
            <?php if (isset($user) && !empty($user)): ?>
                <form class="card-panel white z-depth-3" style="border-radius: 15px; padding: 30px;" action="index.php?c=User&m=update" method="POST">
                    <h5 class="center-align orange-text text-darken-2" style="font-family: 'Courier New', monospace;">Editar Usuario</h5>

                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($user['id']); ?>">

                    <div class="row">
                        <div class="input-field col s6">
                            <input id="name" name="name" type="text" class="validate" value="<?php echo htmlspecialchars($user['name']); ?>" required>
                            <label for="name" class="active">Nombre</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="lastname" name="lastname" type="text" class="validate" value="<?php echo htmlspecialchars($user['lastname']); ?>" required>
                            <label for="lastname" class="active">Apellido</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" name="email" type="email" class="validate" value="<?php echo htmlspecialchars($user['email']); ?>" required>
                            <label for="email" class="active">Correo Electrónico</label>
                        </div>
                    </div>

                    <div class="row center-align">
                        <button class="btn waves-effect waves-light orange darken-2" type="submit">
                            Guardar Cambios
                            <i class="material-icons right">save</i>
                        </button>
                        <a href="index.php?c=User&m=index" class="btn waves-effect waves-light grey darken-1">
                            Cancelar
                        </a>
                    </div>
                </form>
            <?php else: ?>
                <div class="card-panel red lighten-4 center-align">
                    <span class="red-text text-darken-4">No se encontró información del usuario.</span>
                </div>
                <div class="center-align">
                    <a href="index.php?c=User&m=index" class="btn waves-effect waves-light orange darken-2">
                        Volver al listado
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php require_once 'layaout/Footer.php' ?>
