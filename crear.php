<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuarios</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div>
        <h1>
            Crear usuario<br>
        </h1>
        <h2>
            <a href="index.php">Lista de usuarios</a>
        </h2>
    </div>

    <div>
    <form action="guardar.php" method="post">
        

            <tbody class="center">
            <tr>
                <td>Nombres:   <input type="text" name="nombre" size="40" ><br><br>
                <td>Apellidos: <input type="text" name="apellido" size="36"><br><br>
                <td>Email:      <input type="text" name="email" size="38"><br><br>
                <td>password:   <input type="password" name="password" size="40"><br></td>
            </tr>
            <tr>
                <td colspan="4"><br><button type="submit">Guardar</button></td>
            </tr>
            
            </tbody>
    </form>
    </div>
</div>

</body>
</html>