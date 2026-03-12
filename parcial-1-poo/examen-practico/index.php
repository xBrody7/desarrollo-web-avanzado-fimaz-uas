<?php

require_once "Clases/Admin.php";
require_once "Clases/Alumno.php";

$usuarios = [];

try {

    $admin = new Admin("Carlos Tirado", "carlos@gmail.com");
    $usuarios[] = $admin;

    $alumno = new Alumno("Jorge Gutierrez", "jorge@correo.com", "187510");
    $usuarios[] = $alumno;

    $alumnoError = new Alumno("Jose Castillo", "correo_invalido", "097431");
    $usuarios[] = $alumnoError;

} catch(Exception $e) {

    echo "<p style='color:red'>Error: " . $e->getMessage() . "</p>";

}

?>

<!DOCTYPE html>
<html>
<head>
<title>Usuarios</title>
</head>
<body>

<h2>Lista de Usuarios</h2>

<table border="1">

<tr>
<th>Nombre</th>
<th>Correo</th>
<th>Rol</th>
<th>Matrícula</th>
</tr>

<?php

foreach($usuarios as $u){

    echo "<tr>";

    echo "<td>".$u->getNombre()."</td>";
    echo "<td>".$u->getCorreo()."</td>";

    if(method_exists($u,"getRol")){
        echo "<td>".$u->getRol()."</td>";
    }

    if(method_exists($u,"getMatricula")){
        echo "<td>".$u->getMatricula()."</td>";
    }else{
        echo "<td>-</td>";
    }

    echo "</tr>";

}

?>

</table>

</body>
</html>