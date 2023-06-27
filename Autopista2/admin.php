<!DOCTYPE html>
<html lang="ES">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
   <link rel="stylesheet" href="Style.css">
   <script src="conexion.php"></script>
</head>
<body>
    <div class="desplegable">
        <button class = "boton">Usuario</button>
        <div class="links">
            <a href="#">perfil</a>
            <a href="#">Horas Trabajadas</a>
            <a href="#">Cerrar Secion</a>
        </div>
    </div>
    <form method = "post" action = "alta.php">  
        <h1>Agregar cuenta</h1>
        <input type="submit" value ="Aceptar">
        
    <form method = "post" action = "baja.php">  
        <h1>Dar de baja cuenta</h1>
        <input type="submit" value ="Aceptar">



    </form>
</body>
</html>