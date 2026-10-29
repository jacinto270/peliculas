<?php
 BRO

require_once("clases/peliculaDAO.php");
$dao = new PeliculasDAO();

// Modificar una pelicula en la base de datos
$pelicula = $dao->getById(11);
if ($pelicula !== null) {
    $pelicula->setTitulo("Torrente 2");
    $dao->actualizar($pelicula);
}

$peliculas = $dao->getAll();

foreach($peliculas as $p){
    echo "<h2>".$p->getTitulo()."</h2>";

}

//pedir una pelicula por su id
$pel = $dao->getById(4);
 if ($pel !== null) {
     echo $pel->__toString();
 }

//  crear una nueva pelicula y guardarla en la base de datos
//  $pelicula = new Pelicula("torrente", "santiago segura", 1998, "comedia", "torrente.jpg", true);
//  $dao->setPelicula($pelicula);

 //modificar una pelicula en la base de datos
 $pelicula = $dao->getById(11);
 if ($pelicula !== null) {
     $pelicula->setTitulo("Torrente 2");
     $dao->actualizar($pelicula);
 }

 //eliminar una pelicula en la base de datos

 $dao->eliminar(11);
 $dao->eliminar(12);
 $dao->eliminar(13);
 $dao->eliminar(14);
 $dao->eliminar(15);
 $dao->eliminar(16);
 $dao->eliminar(17);
 $dao->eliminar(18);
 $dao->eliminar(19);
 $dao->eliminar(20);

?>
