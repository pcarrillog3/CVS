  <?php 
                         $userid = $_POST['userid'];
                                                ?>
                            
<style>
    thead{
        text-align: center;
    }
    th{
        text-align: center; 
    }
    table{
        
    }
</style>                  
<div class="container">
    <h2>Proveedor:<?php echo $userid;?></h2>
<div class="container contenido">
    <?php 
         
        $username = "root";
$password = "root";
$database = "cvs_tecno";
$mysqli = new mysqli("localhost", $username, $password, $database);

if ($mysqli->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo "fail";
} 
        $query = $mysqli->query("select * from almacenes where idalmacenes=".$userid);
        
        if ($query->num_rows > 0) {
  // output data of each row
           
  while($row = $query->fetch_array()) {
      echo "<h1>".$row[1]."</h1>";
      echo "<text>".$row[3]."</text>";
      
  }
} else {
  echo "0 results";
}
    
    
    
    ?>
    </div>
  
</div>