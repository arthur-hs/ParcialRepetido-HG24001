<?php

namespace Enums;

//creee un enum de respaldo Papel: strig con 
// las 3 opciones y su metodo  de recargo :float utilizara un macht
//para retonar 0.00 0.05 y 0.10 por pagina y qu eherede 

enum Papel : string {
    case Bond = 'bond';
    case Couche = 'couche';
    case Opalina = 'opalina';
}


?>

