<p>1. Muestra los números múltiplos de 5 de un bucle de 0 a 100 utilizando while.</p>
<br>
<?php
$num = 0;
while ($num <= 100) {
    if ($num % 5 == 0){
        print $num . "<br>";
    }
    $num++;
}
?>