<p>Muestra la tabla de multiplicar de un número, generado de manera aleatoria entre 1 y 10. El resultado en formato table</p>

<?php
$num = rand(1, 10);

echo "<p>El número aleatorio es $num, a continuación su tabla de multiplicar hasta 12:<br><br>";

for ($i = 1; $i <= 12; $i++) {
    echo ($num * $i) . "<br><br>";
}


?>