<?php require_once 'layaout/Header.php'?>

<div class="container">
    <div class="row" style="margin-top: 50px;">
        <div class="col s12 m8 offset-m2 l6 offset-l3">
            <div class="card" style="background-color: #d0f0c0; padding: 20px; border-radius: 15px;">
                <h5 class="center-align">Registrar nuevo Usuario</h5>

                <form class="col s12" action="index.php?c=User&m=store" method="POST">
                    <input type="hidden" name="id" value="id">

                    <div class="row">
                        <div class="input-field col s6">
                            <input id="name" name="name" type="text" class="validate" placeholder="Escribe tu nombre">
                            <label for="name" class="active">Nombre</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="lastname" name="lastname" type="text" class="validate" placeholder="Escribe tu apellido">
                            <label for="lastname" class="active">Apellido</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" name="email" type="email" class="validate" placeholder="Aqui va tu correo electronico">
                            <label for="email" class="active">Email</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" name="password" type="password" class="validate" placeholder="Contraseña segura">
                            <label for="password" class="active">Contraseña</label>
                        </div>
                    </div>

                    <div class="row center-align">
                        <button class="btn waves-effect waves-light green" type="submit">
                            Guardar Cambios
                            <i class="material-icons right">send</i>
                        </button>
                        <a href="index.php?c=User&m=index" class="btn waves-effect waves-light red">
                            Cancelar
                        </a>
                    </div>
                </form>

                <div class="center-align" style="margin-top: 15px;">
                    <a href="index.php?c=User&m=index" class="btn waves-effect waves-light blue">
                        Volver al listado
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'layaout/Footer.php'?>
