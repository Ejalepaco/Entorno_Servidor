<p>Un programa que genere 2 tiradas de 3 dados(simulando 2 jugadores).
    Muestre las dos tiradas y me diga cual tiene mayor puntuación(sumando las tiradas)</p>
<?php

$primerJugador = 0;
$segundoJugador = 0;

function tirarDados()
{
    $tirada = [];
    for ($i = 0; $i < 3; $i++) {
        $tirada[] = rand(1, 6);
    }
    return $tirada;
}

$primerJugador = tirarDados();
$segundoJugador = tirarDados();

$sumaJugador1 = array_sum($primerJugador);
$sumaJugador2 = array_sum($segundoJugador);

echo "<p>Tirada Jugador 1: " . implode(", ", $primerJugador) . " - Total: $sumaJugador1</p>";
echo "<p>Tirada Jugador 2: " . implode(", ", $segundoJugador) . " - Total: $sumaJugador2</p>";

if ($sumaJugador1 > $sumaJugador2) {
    echo "<p>Jugador 1 gana con una puntuación de $sumaJugador1.</p>";
} elseif ($sumaJugador2 > $sumaJugador1) {
    echo "<p>Jugador 2 gana con una puntuación de $sumaJugador2.</p>";
} else {
    echo "<p>Es un empate con una puntuación de $sumaJugador1.</p>";
}



?>