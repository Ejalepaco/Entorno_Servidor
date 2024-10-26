<p>Escribe un programa que muestre en dos columnas: Número - cuadrado del número. De 10 números aleatorios entre 5 y 20
</p>
<?php

for ($i = 0; $i < 10; $i++) {
    $num = rand(5, 20);
    echo "<p>El número aleatorio es: $num</p>";

    $numeroCuadrado = $num * $num;
    echo "<p>El cuadrado del número aleatorio es: $numeroCuadrado</p>";
}


?>