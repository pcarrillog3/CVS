<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 $user=$_POST['user'];
 $password=$_POST['pass'];
        
 $mysqli = new mysqli("localhost","mroot","123456","cvs_tecno");
 if($mysqli->connect_errno){
          echo 'Conexión fallada';
             header('Location:conexionfail.php?folio=abcd');
           die;
      }  
      
         $result=$mysqli->query("select * from login where iduser='".$user."' and contraseña='".$password."'" );
            
if ($result->num_rows > 0){
    header('Location:menu.php?user='.$user);
}else{
    echo"error usuario";
}
       
//        
//        if ($result->num_rows > 0) {
//  // output data of each row
//            
//             $result=$mysqli->query("select nota,fecha from cliente_nota where cliente=".$cliente);
//            
//            $cont=1;
//             while($row = $result->fetch_assoc()) {
//                 echo '<tr>';
//                echo '<td>'. $cont.'</td>'; 
//                echo '<td>'.$row['nota'].'</td>';
//                 echo '<td>'.$row['fecha'].'</td>';
//                      echo '</tr>';
//$cont++;
//        }
// }else{
//                  header('Location:noexiste.php?folio=abcd');
//
// }
  ?>
     