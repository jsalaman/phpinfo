<?php

foreach (getallheaders() as $nombre => $valor) {
    echo "$nombre: $valor\n";
}

?>
