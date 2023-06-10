<!DOCTYPE html>
<html>
<head>
	<title>Formulario de empleados</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Resultados</h1>
    <?php
// Obtener los datos enviados por el formulario
$nombre1 = $_POST['nombre1'];
$edad1 = $_POST['edad1'];
$estado_civil1 = $_POST['estado_civil1'];
$genero1 = $_POST['genero1'];
$sueldo1 = $_POST['sueldo1'];

$nombre2 = $_POST['nombre2'];
$edad2 = $_POST['edad2'];
$estado_civil2 = $_POST['estado_civil2'];
$genero2 = $_POST['genero2'];
$sueldo2 = $_POST['sueldo2'];

$nombre3 = $_POST['nombre3'];
$edad3 = $_POST['edad3'];
$estado_civil3 = $_POST['estado_civil3'];
$genero3 = $_POST['genero3'];
$sueldo3 = $_POST['sueldo3'];

$nombre4 = $_POST['nombre4'];
$edad4 = $_POST['edad4'];
$estado_civil4 = $_POST['estado_civil4'];
$genero4 = $_POST['genero4'];
$sueldo4 = $_POST['sueldo4'];

$nombre5 = $_POST['nombre5'];
$edad5 = $_POST['edad5'];
$estado_civil5 = $_POST['estado_civil5'];
$genero5 = $_POST['genero5'];
$sueldo5 = $_POST['sueldo5'];

// Contar el número de empleados del sexo femenino
$total_femenino = 0;
if ($genero1 == "femenino") {
	$total_femenino++;
}
if ($genero2 == "femenino") {
	$total_femenino++;
    }
if ($genero3 == "femenino") {
        $total_femenino++;
    }
if ($genero4 == "femenino") {
        $total_femenino++;
    }
if ($genero5 == "femenino") {
        $total_femenino++;
    }
    
    echo "Total empleados del sexo femenino: ".$total_femenino."<br>";
    
    // Contar el número de hombres casados que ganan más de 2500 Bs
    $total_hombres_casados = 0;
    if ($genero1 == "masculino" && $estado_civil1 == "casado" && $sueldo1 == "mas_2500") {
        $total_hombres_casados++;
    }
    if ($genero2 == "masculino" && $estado_civil2 == "casado" && $sueldo2 == "mas_2500") {
        $total_hombres_casados++;
    }
    if ($genero3 == "masculino" && $estado_civil3 == "casado" && $sueldo3 == "mas_2500") {
        $total_hombres_casados++;
    }
    if ($genero4 == "masculino" && $estado_civil4 == "casado" && $sueldo4 == "mas_2500") {
        $total_hombres_casados++;
    }
    if ($genero5 == "masculino" && $estado_civil5 == "casado" && $sueldo5 == "mas_2500") {
        $total_hombres_casados++;
    }
    
    echo "Total hombres casados que ganan más de 2500 Bs: ".$total_hombres_casados."<br>";
    
    // Contar el número de mujeres viudas que ganan más de 1000 Bs
    $total_mujeres_viudas = 0;
    if ($genero1 == "femenino" && $estado_civil1 == "viudo" && $sueldo1 == "entre_1000_2500") {
        $total_mujeres_viudas++;
    }
    if ($genero2 == "femenino" && $estado_civil2 == "viudo" && $sueldo2 == "entre_1000_2500") {
        $total_mujeres_viudas++;
    }
    if ($genero3 == "femenino" && $estado_civil3 == "viudo" && $sueldo3 == "entre_1000_2500") {
        $total_mujeres_viudas++;
    }
    if ($genero4 == "femenino" && $estado_civil4 == "viudo" && $sueldo4 == "entre_1000_2500") {
        $total_mujeres_viudas++;
    }
    if ($genero5 == "femenino" && $estado_civil5 == "viudo" && $sueldo5 == "text-align: center") {
        $total_mujeres_viudas++;
    }
    
    echo "Total mujeres viudas que ganan más de 1000 Bs: ".$total_mujeres_viudas."<br>";
    
    // Calcular la edad promedio de los empleados del sexo masculino
    $total_edad_masculino = 0;
    $total_masculino = 0;
    if ($genero1 == "masculino") {
        $total_edad_masculino += $edad1;
        $total_masculino++;
    }
    if ($genero2 == "masculino") {
        $total_edad_masculino += $edad2;
        $total_masculino++;
    }
    if ($genero3 == "masculino") {
        $total_edad_masculino += $edad3;
        $total_masculino++;
    }
    if ($genero4 == "masculino") {
        $total_edad_masculino += $edad4;
        $total_masculino++;
    }
    if ($genero5 == "masculino") {
        $total_edad_masculino += $edad5;
        $total_masculino++;
    }
    
    if ($total_masculino > 0) {
        $promedio_edad_masculino = $total_edad_masculino / $total_masculino;
        echo "Edad promedio de los empleados del sexo masculino: ".$promedio_edad_masculino."<br>";
    } else {
        echo "No se registraron empleados del sexo masculino<br>";
    }
    
    ?>