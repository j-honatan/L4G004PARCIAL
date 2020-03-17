<?php 
    include('includes/db.php');
    $sql = "select * from usuario";
    $result = DB::query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Usuarios</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div>
        <h1>
            Listado de Usuarios<br>
        </h1>
        <h2>
            <a href="crear.php">Nuevo usuario</a>
        </h2>
    </div>

    <div>
        <table  class="table" border="1">
            <thead>
            <tr>
            
                <td><h3>ID |</h3></td>
                <td><h3>Nombres |</h3></td>
                <td><h3>Apellidos |</h3></td>
                <td><h3>Email |</h3></td>
                <td><h3>Estado |</h3></td>
                <td><h3>Acciones</h3></td>
            
            </tr>
            </thead>

            <tbody class="center">
            <?php while($mostrar=mysqli_fetch_array($result)){ ?>
            <tr>
                <td><?= $mostrar['id'] ?></td>
                <td><?= $mostrar['nombres'] ?></td>
                <td><?= $mostrar['apellidos'] ?></td>
                <td><?= $mostrar['email'] ?></td>
                <td class="<?= $mostrar['estado'] ?>"><?= $mostrar['estado'] ?></td>
                <input type="hidden" name="estado" value="<?= $mostrar['estado']?>">
                <td>
                    <?php  if($mostrar['estado'] == "activo"){  ?>
                        <a href="guardar.php?estado=<?= $mostrar['estado']?>&id=<?= $mostrar['id']?>">Inactivar</a>
                    <?php  }else{  ?>
                        <a href="guardar.php?estado=<?= $mostrar['estado']?>&id=<?= $mostrar['id']?>">Activar</a>
                    <?php  }  ?>
                    <a href="editar.php?id=<?= $mostrar['id']?>">Editar</a>
                </td>
            </tr>
            <?php } ?>
             </tbody>
        </table>
    </div>
</div>

</body>
</html>
