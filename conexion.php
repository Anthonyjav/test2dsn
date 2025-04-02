<?php

function conexion(){

$host = "host=dpg-cvmpjc95pdvs73fktlt0-a.oregon-postgres.render.com";
$port = "port=5432";
$dbname = "dbname=test_dcy1";
$user = "user=dcalvarado";
$password = "password=KJtB9G7M1P1CsYM7XXVo6Rvso73aoI1Y";

$db = pg_connect("$host $port $dbname $user $password");

return $db;
}
?>