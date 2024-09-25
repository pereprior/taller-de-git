<?php
  // Author: Pere Prior <pj.prior.es@gmail.com>
  require('holaMundo.php')

  print "Introduce tu nombre:"
  $nombre = trim(fgets(STDIN));
  print new HolaMundo($nombre)
?>
