<?php
require_once("IPublicable.php");
require_once("Autor.php");

class Revista implements IPublicable {
    private string $titulo;
    private int $anio;
    private Autor $autor;
    private string $periodicidad;

    public function __construct(string $titulo, int $anio, Autor $autor, string $periodicidad) {
        $this->titulo = $titulo;
        $this->anio = $anio;
        $this->autor = $autor;
        $this->periodicidad = $periodicidad;
    }

    
    public function getAutor(): Autor {
        return $this->autor;
    }

    public function getInfo(): string {
        return "Revista: {$this->titulo} ({$this->anio})\nAutor: {$this->autor->getNombre()}, {$this->autor->getNacionalidad()}\nPeriodicidad: {$this->periodicidad}";
    }
}
