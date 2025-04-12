
<?php require_once 'layaout/Heade.php' ?>
<?php require_once 'layaout/Nav.php'; ?>


<div class="container">
    <div class="row" style="margin-top: 50px;">
        <div class="col s12 m8 offset-m2 l6 offset-l3">
            <div class="card white" style="background-color: #d0f0c0; padding: 20px; border-radius: 15px;">
                <h5 class="center-align">Registrar nuevo Producto</h5>

                <form class="col s12" action="index.php?c=Products&m=store" method="POST">
                    <input type="hidden" name="id" value="id">

                    <div class="row">
                        <div class="input-field col s6">
                            <input id="name" name="name" type="text" class="validate" placeholder="Escriba nombre del producto">
                            <label for="name" class="active">Nombre</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="amount" name="amount" type="number" class="validate" placeholder="Escribe cantidad de producto">
                            <label for="amount" class="active">Cantidad</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="price" name="price" type="number" class="validate" placeholder="precio del producto">
                            <label for="price" class="active">Precio</label>
                        </div>
                    </div>

                    <div class="row center-align">
                        <button class="btn waves-effect waves-light orange" type="submit">
                            Guardar Cambios
                            <i class="material-icons right">send</i>
                        </button>
                        <a href="index.php?c=Products&m=index" class="btn waves-effect waves-light gray">
                            Cancelar
                        </a>
                    </div>
                </form>

                <div class="center-align" style="margin-top: 15px;">
                    <a href="index.php?c=Products&m=index" class="btn waves-effect waves-light gray">
                        Volver
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'layaout/Footer.php'?>
