<?php
    require_once('getList.php');
    foreach($result as $row){
        print $row["ID"]."-".$row["nombre"]."-".$row["descripcion"]."<br/>";
    }
  
  
?>