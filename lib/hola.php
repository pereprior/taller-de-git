<?php

  // Author: Pere Prior <pj.prior.es@gmail.com>
  // El nombre por defecto es mundo
  $nombre = isset($argv[1]) ? $argv[1] : "Mundo";
  @print "Hola {$nombre}\n";

?>
