<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMPLEADOS</title>
    <link rel="stylesheet" href="css/style.css">


</head>

<body>

    <center>
        <form action="empleado.php" method="POST">
            <strong>ESTADO DEL CLIENTE</strong>
            <br>
            <select name="status" required>
                <option value="ACTIVO">ACTIVO</option>
                <option value="INACTIVO">INACTIVO</option>
            </select>
            <br>
            <input type="date" name="fecha" required>
            <br><br>
            <input type="submit" class="btn" name="btn_emple" value="Registrar">
        </form>
 
    <?php
 

    if (isset($_POST['btn_emple'])) {

        include("abrir_c/abrir.php");  

        $estado = $_POST['status'];
        $fecha = $_POST['fecha'];

        $conexion->query("INSERT INTO empleado(fechaContrato,estado) VALUES ('$fecha','$estado')"); 
        include("cerrar_c/cerrar.php");
        echo "<p>SE REGISTRO CORRECTAMENTE!!<p>";
    }

    ?>
   </center> 


   


</body>

</html>