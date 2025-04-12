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
            <?php if (isset($product) && !empty($product)): ?>
                <form class="card z-depth-3" style="background-color: #f5f5f5; padding: 30px; border-radius: 20px;" action="index.php?c=Products&m=update" method="POST">
                    <h5 class="center-align">Editar Usuario</h5>

                    <input type="hidden" name="id" value="<?php echo $product['id']; ?>">

                    <div class="row">
                        <div class="input-field col s6">
                            <input id="name" name="name" type="text" class="validate" value="<?php echo ($product['name']); ?>">
                            <label for="name" class="active">Nombre</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="price" name="price" type="number" class="validate" value="<?php echo ($product['price']); ?>">
                            <label for="price" class="active">precio</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="amount" name="amount" type="number" class="validate" value="<?php echo ($product['amount']); ?>">
                            <label for="amount" class="active">Cantidad</label>
                        </div>
                    </div>

                    <div class="row center-align">
                        <button class="btn waves-effect waves-light grey darken-2" type="submit">
                            Guardar Cambios
                            <i class="material-icons right">send</i>
                        </button>
                        <a href="index.php?c=Products&m=index" class="btn waves-effect waves-light red">
                            Cancelar
                        </a>
                    </div>
                </form>
            <?php else: ?>
                <div class="card-panel red lighten-4">
                    <span class="red-text text-darken-4">No se encontró información del producto.</span>
                </div>
                <div class="center-align">
                    <a href="index.php?c=Products&m=index" class="btn waves-effect waves-light">
                        Volver al listado
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php require_once 'layaout/Footer.php'?>
