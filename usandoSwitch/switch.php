<?php

// verificador ternário

$verificando = isset($_POST['teste']) ? $_POST['teste']:"";

//echo $verificando;

switch ($verificando) {
    case "1":
        echo " valor encontrado = 1";
        break;
    case "2":
        echo " valor encontrado = 2";
        break;
    case "3":
        echo " valor encontrado = 3";
        break;
    case "":
        echo " valor encontrado = nada";
        break;
 }

?>

