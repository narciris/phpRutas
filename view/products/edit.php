<?php require_once 'layaout/Header.php'?>

<div class="container">
    <div class="row" style="margin-top: 50px;">
        <div class="col s12 m8 offset-m2 l6 offset-l3">
            <h5 class="center-align">Editar Producto</h5> <!-- Título simple, sin recuadro -->
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <input  id="first_name" type="text" class="validate">
                            <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate">
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input  type="text" class="validate">
                            <label for="disabled">Disabled</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row center-align">
                        <button class="btn waves-effect waves-light" type="submit" name="action">
                            Editar
                            <i class="material-icons right">Producto</i>
                        </button>
                    </div>
                </form>
        </div>
    </div>
</div>


<?php require_once 'layaout/Footer.php'?>

