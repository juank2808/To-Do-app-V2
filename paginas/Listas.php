<?php
    require_once('getList.php');
    if($result!=NULL){
        echo"<table>";    
            echo "<tr>";
                echo "<td> ID </td>";
                echo "<td> NOMBRE </td>";
                echo "<td>DESCRIPCION </td>";
            echo "</tr>";
            echo "<tr>";
                print_r( "<td>".$result["ID"]."</td>");
                print_r("<td>".$result["nombre"]."</td>");
                print_r( "<td>".$result["descripcion"]."</td>");
            echo "</tr>";
        echo"</table>";
    }    
  
  
?>