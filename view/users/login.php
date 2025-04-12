<?php require_once 'layaout/Heade.php' ?>

<div class="container">
    <div class="row">
        <div class="col s12 m8 offset-m2 l6 offset-l3">
            <div class="card-panel white" style="margin-top: 80px;">
                <div class="center-align">
                    <i class="material-icons orange-text" style="font-size: 64px;">account_circle</i>
                    <h4>Iniciar Sesión</h4>
                </div>

                <?php if (isset($_SESSION['success'])): ?>
                    <div class="card-panel green lighten-4 green-text text-darken-4">
                        <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
                    </div>
                <?php endif; ?>

                <?php if (isset($_SESSION['error'])): ?>
                    <div class="card-panel red lighten-4 red-text text-darken-4">
                        <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
                    </div>
                <?php endif; ?>


                <form action="index.php?c=User&m=login" method="post">
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">email</i>
                            <input id="email" type="email"  name="email" class="validate">
                            <label for="email">Correo Electrónico</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">lock</i>
                            <input id="password" type="password" name="password" class="validate">
                            <label for="password">Contraseña</label>
                        </div>
                    </div>

<!--                    <div class="row">-->
<!--                        <div class="col s12">-->
<!--                            <label>-->
<!--                                <input type="checkbox">-->
<!--                                <span>Recordar cuenta</span>-->
<!--                            </label>-->
<!--                        </div>-->
<!--                    </div>-->

                    <div class="row">
                        <div class="col s12">
                            <button class="btn waves-effect waves-light teal darken-1 col s12" type="submit">
                                Ingresar <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </form>

                <div class="center-align">
                    <a href="#" class="teal-text text-darken-1">¿Olvidaste tu contraseña?</a>
                    <p>¿No tienes cuenta? <a href="index.php?c=User&m=create" class="teal-text text-darken-1">Regístrate</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once 'layaout/Footer.php'?>
