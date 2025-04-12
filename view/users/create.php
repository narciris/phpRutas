<?php require_once 'layaout/Heade.php' ?>

    <div class="container">
        <div class="row" style="margin-top: 70px;">
            <div class="col s12 m8 offset-m2 l6 offset-l3">
                <div class="card-panel z-depth-3" style="border-radius: 10px;">
                    <div class="center-align" style="margin-bottom: 20px;">
                        <i class="material-icons medium teal-text">person_add</i>
                        <h4 class="teal-text text-darken-2">Registrar Usuario</h4>
                    </div>

                    <form class="col s12" action="index.php?c=User&m=store" method="POST">
                        <input type="hidden" name="id" value="id">

                        <div class="row">
                            <div class="input-field col s12 m6">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="name" name="name" type="text" class="validate">
                                <label for="name">Nombre</label>
                            </div>
                            <div class="input-field col s12 m6">
                                <i class="material-icons prefix">badge</i>
                                <input id="lastname" name="lastname" type="text" class="validate">
                                <label for="lastname">Apellido</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">email</i>
                                <input id="email" name="email" type="email" class="validate">
                                <label for="email">Correo Electrónico</label>
                                <span class="helper-text" data-error="Formato de correo inválido" data-success="Correcto">ejemplo@dominio.com</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">lock</i>
                                <input id="password" name="password" type="password" class="validate">
                                <label for="password">Contraseña</label>
                                <span class="helper-text">Usa al menos 8 caracteres con letras, números y símbolos</span>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <p class="center-align">
                                    <label>
                                        <input type="checkbox" required>
                                        <span>Acepto los <a href="#" class="teal-text text-darken-2">términos y condiciones</a></span>
                                    </label>
                                </p>
                            </div>
                        </div>

                        <div class="row center-align">
                            <button class="btn-large waves-effect waves-light teal darken-2" type="submit" style="margin-right: 10px; width: 200px;">
                                Registrar
                                <i class="material-icons right">how_to_reg</i>
                            </button>
                            <a href="index.php?c=Home&m=index" class="btn waves-effect waves-light red">
                                Cancelar
                                <i class="material-icons right">cancel</i>
                            </a>
                        </div>
                    </form>

                    <div class="divider" style="margin: 20px 0;"></div>

                    <div class="center-align">
                        <p>¿Ya tienes una cuenta?</p>
                        <a href="index.php?c=User&m=loginForm" class="btn waves-effect waves-light blue darken-1">
                            Iniciar Sesión
                            <i class="material-icons right">login</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require_once 'layaout/Footer.php'?>