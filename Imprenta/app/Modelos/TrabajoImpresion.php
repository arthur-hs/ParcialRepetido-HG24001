<?php

namespace Modelos;

interface Cotizable
{
    public function totalHojas(): int;
    public function porcentajeDescuento(): float;
    public function total(): float;
}

abstract class TrabajoImpresion implements Cotizable
{
    public function __construct(
        public readonly string $descripcion,
        public readonly int $paginas,
        public readonly int $copias
    ) {
        
    }

    abstract public function precioPorPagina(): float;
}