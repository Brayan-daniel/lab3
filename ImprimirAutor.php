<?php
require_once("Autor.php");

class ImprimirAutor {
    public function getInfo(Autor $autor): string {
        return "Autor: {$autor->getNombre()}, {$autor->getNacionalidad()}";
    }
}
