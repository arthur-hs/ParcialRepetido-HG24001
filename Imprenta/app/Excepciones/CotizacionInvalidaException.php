<?php

namespace Excepciones;

class ContizacionInvalidaException extends \DomainException{

    public function __construct(public readonly string $mensaje)
{}

}


?>