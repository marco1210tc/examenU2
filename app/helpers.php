<?php

  function setActive($path) 
  {
    return (request()->routeIs($path) ? 'active' : '');
  }

  function calcularPromedio($nota1, $nota2) 
  {
    $promedio = ($nota1 + $nota2) / 2;
    return $promedio;
  }

  function calcularCondicion($promedio) 
  {
    $condicion = true;

    // dd(gettype($promedio)); //double
    // dd( $promedio );

    if ($promedio < 11.5) {
      $condicion = false;
      // dd($condicion);
    }

    return $condicion; 
  }
?>