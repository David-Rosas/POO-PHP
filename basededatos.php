<?php
try{
$basededatos = new PDO("mysql:host=localhost;dbname=marketpro", "root", "");
$basededatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//$basededatos->exec("SET NAME 'utf8'");
 }
 catch (Exception $e){
     echo "Conexion no disponible";
      exit;
 }
try{
    $resultado = $basededatos->query("SELECT nombre,precio,img FROM ofertas ORDER BY sku ASC");
    echo "ok";
} catch (Exception $ex) {
    echo "no OK";
    
    exit;
}/*
try{
    $resultado = $basededatos->query("SELECT nombre,precio,img FROM ofertas WHERE sku=4");
    echo "ok";
} catch (Exception $ex) {
    echo "no OK";
    
    exit;
}*/
var_dump($resultado->fetchall(PDO::FETCH_ASSOC));

