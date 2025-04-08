<?php require_once 'layaout/Header.php'?>

    <div class="container">
        <h4 class="center-align" style="font-family: 'Courier New', monospace;">Usuarios</h4>
        <a class="btn waves-effect waves-light green" href="?c=User&m=create">
            <i class="material-icons left">add</i>Nuevo Usuario
        </a>
        <table class="striped highlight responsive-table Black lighten-2 white-text">
            <thead>
            <tr class="Indigo darken-3">
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo Electrónico</th>
                <th>Acciones</th>

            </tr>
            </thead>

            <tbody>
            <?php if(isset($users) && !empty($users)): ?>
                <?php foreach($users as $user): ?>
                    <tr>
                        <td><?php echo ($user['name']); ?></td>
                        <td><?php echo ($user['lastname']); ?></td>
                        <td><?php echo ($user['email']); ?></td>
                        <td>
                            <a class="btn-small blue" href="?c=User&m=edit&id=<?php echo ($user['id']); ?>">
                                <i class="material-icons">edit</i>
                            </a>
                            <form action="index.php?c=User&m=delete" method="post">
                                <input type="hidden" name="id" value="<?php echo ($user['id']); ?>">
                                <button class="btn-small red" type="submit" onclick="return confirm('¿Estás seguro de eliminar este usuario?')">
                                    <i class="material-icons">delete</i>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3" class="center-align">No hay usuarios registrados</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>

<?php require_once 'layaout/Footer.php'?>