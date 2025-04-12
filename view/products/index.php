<?php require_once 'layaout/Heade.php'; ?>
<?php require_once 'layaout/Nav.php'; ?>
<div class="container">
    <h4 class="center-align">Lista de Productos</h4>

    <div class="right-align" style="margin-bottom: 20px;">
        <a class="btn waves-effect waves-light green" href="?c=Products&m=create">
            <i class="material-icons left">add</i>Nuevo Producto
        </a>
    </div>

    <table class="striped highlight responsive-table  orange lighten-3 lighten-2 black-text">
        <thead>
        <tr>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
        </thead>

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


        <tbody>
        <?php if(isset($products) && !empty($products)): ?>
            <?php foreach($products as $product): ?>
                <tr>
                    <td><?php echo $product['id'];?></td>
                    <td><?php echo $product['name'];?></td>
                    <td><?php echo $product['amount'];?></td>
                    <td><?php echo $product['price'];?></td>
                    <td>
                        <div class="row" style="margin:0;">
                            <div class="col s3">
                        <a class="btn-small blue" href="?c=Products&m=edit&id=<?php echo $product['id']; ?>">
                            <i class="material-icons">edit</i>
                        </a>
                            </div>
                            <div class="col s3">
                        <form action="index.php?c=Products&m=delete" method="post" style="display:inline;">
                            <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                            <button class="btn-small red" type="submit" onclick="return confirm('¿Estás seguro de eliminar este producto?')">
                                <i class="material-icons">delete</i>
                            </button>
                        </form>
                            </div>
                            <div class="col s3">
                                <a class="btn-small blue" href="?c=Products&m=show&id=<?php echo $product['id']; ?>">
                                    <i class="material-icons">visibility</i>
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5" class="center-align">No hay productos registrados</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>

</div>

<?php require_once 'layaout/Footer.php'; ?>
