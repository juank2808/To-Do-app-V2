<?php
    require_once("conexion/connect.php");
    
    $id;
    $nombre;
    $descripcion;
        
    try{
        $sth=$mbd->prepare("insert into 'tareas' values(".$id.",".$nombre.",".$descripcion.");");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
    
    
?>