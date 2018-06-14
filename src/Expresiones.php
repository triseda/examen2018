<?php
  namespace lib\utils;

  class Expresiones {

    public static function secuenciaParentesisBalanceada($cad){
      $cars = str_split($cad);
      $cont = 0;
      foreach($cars as $c){
        if($c==="(") $cont++;
        if($c===")") $cont--;
      }
      return ($cont===0) ;
    }
  }

?>
