<?php
// Tener una lista de cuidades con un clima y una ubicacion especifica

function recomendacion() {
  $clima = array("Bogota" => "frio", "Monteria" => "calido", "Medellin" => "templado");

  $ubicacion = array("Guajira" => "norte", "Leticia" => "sur", "Santander" => "este", "Antioquia" => "Oeste");

  $turismo = array("Santa Marta" => "mar", "Villavicencio" => "llanos", "Roahacha" => "desierto", "Quindio" => "valle");

  switch("clima") {
    case "clima":
      echo array_search("frio", $clima);
    break;
    case "ubicacion";
      echo array_search("norte", $ubicacion);
    break;
  }    
}

recomendacion();