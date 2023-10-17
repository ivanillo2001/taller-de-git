<?php
//Autor: Ivan <ijimqui3008@iestrassierra.es>
require('HolaMundo.php');
print "Introduce tu nombre";
$nombre = trim(fgets(STDIN));
print new HolaMundo($nombre);
?>
