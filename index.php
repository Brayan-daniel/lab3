<?php

require_once("Autor.php");
require_once("Libro.php");
require_once("Revista.php");
require_once("ImprimirAutor.php");


$autorElenaWhite = new Autor("Elena G. de White", "Americana");
$autorMarkTwain = new Autor("Mark Twain", "Estadounidense");


$libro1 = new Libro("El Camino a Cristo", 1892, $autorElenaWhite);
$libro2 = new Libro("Las Aventuras de Tom Sawyer", 1876, $autorMarkTwain);


$revista1 = new Revista("Revista Adventista", 2024, $autorElenaWhite, "Mensual");
$revista2 = new Revista("National Geographic", 2024, $autorMarkTwain, "Trimestral");


$imprimirAutor = new ImprimirAutor();
echo $imprimirAutor->getInfo($autorElenaWhite) . "\n\n";


$publicables = [$libro1, $libro2, $revista1, $revista2];


foreach ($publicables as $item) {
    echo $item->getInfo() . "\n\n";
}

?>
// PR temporal para forzar GitHub
