<p>Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle for.</p>

<?php
$num = 0;
for ($num = 320; $num >= 160; $num -= 20) {
    print "<p>$num</p>";
}
print "<p>Ejercicio terminado</p>"
?>
<hr>
<p>Muestra los numeros del 160 al 320, contando de 20 en 20 (por practicar)</p>

<?php
$num = 0;
for ($num = 160; $num <= 320; $num += 20) {
    print "<p>$num</p>";
}
print "<p>Ejercicio terminado cambiando enunciado</p>";
?>