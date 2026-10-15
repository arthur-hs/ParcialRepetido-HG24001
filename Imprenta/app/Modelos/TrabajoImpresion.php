<?php

namespace Modelos;

class Cotizable 
{

}



abstract class TrabajoImpesion implements Cotizable
{ 
    public function __construct(
        public readonly string $descricion,
        public readonly string $paginas,
        public readonly string $hojas
    ){}
}


?>