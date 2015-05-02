<?php
$mensaje="Bienvenidos";
$nombre_usuario="anonimo";
$numeroVisitante=20;
$estado= TRUE;
echo "Impresion con echo<br>";
echo "$mensaje Usuario $nombre_usuario";
echo "<br>Eres el visitante $numeroVisitante";
echo "<br>Tu estado es $estado<br>";


echo "Impresion con print<br>";
print "$mensaje usuario $nombre_usuario";
print "<br>Eres el visitante $numeroVisitante";
print "<br>tu estado es $estado";
echo "<br>".$mensaje," " .$nombre_usuario," " .$numeroVisitante," " .$estado ."<br>";
printf ("%s usuario %s eres el visitante %s tu estado es %s ",$mensaje,$nombre_usuario, $numeroVisitante,$estado);
?>