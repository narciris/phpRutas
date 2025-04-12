<?php require_once 'layaout/Heade.php' ?>
<?php require_once 'layaout/Nav.php'; ?>

<div class="section no-pad-bot orange lighten-5">
    <div class="container">
        <h4 class="center-align orange-text text-darken-2" style="font-family: 'Courier New', monospace; margin-top: 40px;">
            Gestión de Usuarios
        </h4>
        <p class="center-align grey-text text-darken-1">Consulta, edita y elimina usuarios registrados</p>

        <div class="card-panel white z-depth-2">
            <table class="striped highlight responsive-table">
                <thead class="orange lighten-2 white-text">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo Electrónico</th>
                    <th class="center-align">Acciones</th>
                </tr>
                </thead>

                <tbody>
                <?php if (isset($users) && !empty($users)) : ?>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <td><?php echo htmlspecialchars($user['name']); ?></td>
                            <td><?php echo htmlspecialchars($user['lastname']); ?></td>
                            <td><?php echo htmlspecialchars($user['email']); ?></td>
                            <td class="center-align">
                                <a class="btn-small blue tooltipped" data-position="top" data-tooltip="Editar" href="?c=User&m=edit&id=<?php echo $user['id']; ?>">
                                    <i class="material-icons">edit</i>
                                </a>
                                <a class="btn-small green tooltipped" data-position="top" data-tooltip="Ver Detalles" href="?c=User&m=show&id=<?php echo $user['id']; ?>">
                                    <i class="material-icons">visibility</i>
                                </a>
                                <form action="index.php?c=User&m=delete" method="post" style="display: inline;">
                                    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                                    <button class="btn-small red tooltipped" data-position="top" data-tooltip="Eliminar" type="submit" onclick="return confirm('¿Estás segura de eliminar este usuario?')">
                                        <i class="material-icons">delete</i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="4" class="center-align grey-text text-darken-2">No hay usuarios registrados.</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once 'layaout/Footer.php' ?>
