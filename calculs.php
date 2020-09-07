<?php

class calculateur {


    function additionner($nombre1, $nombre2) {
        $result = $nombre1 + $nombre2;
        return $result;
    }

    function multiplier($nombre1, $nombre2) {
        $result = $nombre1 * $nombre2;
        return $result;
    }

    function soustraction($nombre1, $nombre2) {
        $result = $nombre1 - $nombre2;
        return $result;
    }

    function diviser($nombre1, $nombre2) {
        $result = $nombre1 / $nombre2;
        return $result;
    }

    function calculmodulo($nombre1, $nombre2) {
        $result = $nombre1 % $nombre2;
        return $result;
    }



}


?>