<?php

$sport = $_POST['sl_sport']?$_POST['sl_sport']:$_GET['getsport'];

cal_sport($sport);

function cal_sport($sport){
    switch ($sport){
        case "1" :
            $sport = "Football";
            break;
        case "2" :
            $sport = "Tenis";
            break;
        default:
            $sport =  "Out of type.";
    }
    echo $sport;
};

?>