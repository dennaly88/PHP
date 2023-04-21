




<?php

function sumar_uno(&$x) {
    $x++;
    echo $x;
}

$a = 2;

sumar_uno($a); // 3
"<br>";
// $a se pasó por referencia a suma_uno()
// El cambio dentro de la función
// se refleja en la referencia original


?>