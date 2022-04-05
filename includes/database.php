<?php 

function conectarDB() : mysqli {
    $db = new mysqli('localhost', 'root', 'root', 'ecutronic_computadoras');
    // $db = new mysqli('208.109.23.144', 'computadoras_Us_BD', '[rR}qE(K*yF3', 'computadoras_automotrices');

    if(!$db) {
        echo "Error no se pudo conectar";
        exit;
    } 

    return $db;
    
}