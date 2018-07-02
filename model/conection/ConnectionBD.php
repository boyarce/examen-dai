<?php

class Conexion extends PDO {

    private static $URL = "mysql:host=localhost;dbname=examen;";
    private static $USUARIO = "braulio";
    private static $PASS = "innsmouth.1834";
    private static $OPCIONES = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

    function __construct() {
        parent::__construct(self::$URL, self::$USUARIO, self::$PASS, self::$OPCIONES);
    }

}
