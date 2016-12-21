<?php
echo "Nombre:  " ; echo ($_POST["nombre"]);
echo "<br>";
echo "Apellidos: "; echo ($_POST["apellidos"]);
echo "<br>";
echo "Curso: "; echo ($_POST["tipocurso"]);
echo "<br>";
echo "Ciclo:  "; echo ($_POST["tipociclo"]);

echo "<br>";
echo "<br>";
// Aqui mostraremos nota media, nota mas alta y mas baja
//Creamos las variables
$notamedia=($_POST["calificacionprog"]+$_POST["calificacioned"]+$_POST["calificacionllmm"]+$_POST["calificacionbbdd"])/4;
echo "Nota media: ". $notamedia;
echo "<br>";
$notamasalta=max($_POST["calificacionprog"],$_POST["calificacioned"],$_POST["calificacionllmm"],$_POST["calificacionbbdd"]);
echo "Nota mas alta: ". $notamasalta ;
echo "<br>";
$notamasbaja=min($_POST["calificacionprog"],$_POST["calificacioned"],$_POST["calificacionllmm"],$_POST["calificacionbbdd"]);
echo "Nota mas baja: ". $notamasbaja ;
echo "<br>";

?>
