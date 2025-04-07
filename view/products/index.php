<?php require_once 'layaout/Header.php'; ?>
<div class="container">
    <h4 class="center-align">Lista de Productos</h4>

    <!-- Botón para crear nuevo producto -->
    <div class="right-align" style="margin-bottom: 20px;">
        <a class="btn waves-effect waves-light green" href="#!">
            <i class="material-icons left">add</i>Nuevo Producto
        </a>
    </div>

    <table class="striped highlight responsive-table black lighten-2 white-text">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Acciones</th> <!-- Columna para botones -->
        </tr>
        </thead>

        <tbody>
        <tr>
            <td>Alvin</td>
            <td>Caramelo</td>
            <td>$0.87</td>
            <td>
                <a class="btn-small blue" href="?c=Products&m=edit">
                    <i class="material-icons">edit</i>
                </a>
                <a class="btn-small red" href="#!">
                    <i class="material-icons">delete</i>
                </a>
            </td>
        </tr>
        <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
            <td>
                <a class="btn-small blue" href="?c=Products&m=edit">
                    <i class="material-icons">edit</i>
                </a>
                <a class="btn-small red" href="#!">
                    <i class="material-icons">delete</i>
                </a>
            </td>
        </tr>
        <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
            <td>
                <a class="btn-small blue" href="?c=Products&m=edit">
                    <i class="material-icons">edit</i>
                </a>
                <a class="btn-small red" href="#!">
                    <i class="material-icons">delete</i>
                </a>
            </td>
        </tr>
        </tbody>
    </table>
</div>

<?php require_once 'layaout/Footer.php'; ?>
