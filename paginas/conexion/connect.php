<?php
    //http://php.net/manual/en/pdostatement.fetchall.php

    $usuario ='juankcol';

  try {
        $mbd = new PDO('mysql:host=localhost;dbname=c9', $usuario, $contraseña);
    
    
    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }
    
    
?>