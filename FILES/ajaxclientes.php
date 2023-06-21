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
    <h2>Cliente:<?php echo $userid;?></h2>
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Razon Social</th>
        <th>RFC</th>
        <th>Dirección Fiscal</th>
        <th>Dirección Entrega</th>
        <th>Teléfono</th>
        <th>Correo</th>
        <th>Uso Factura</th>
        <th>Regimen Fiscal</th>
        <th>Tipo Pago</th>
        <th>Tiempo Pago (dias)</th>
        <th>Forma Pago</th>
        <th>Observaciones</th>
        <th>Vendedor</th>
        
        
      </tr>
    </thead>
    <tbody>
    <?php 
         
        $username = "root";
$password = "root";
$database = "cvs_tecno";
$mysqli = new mysqli("localhost", $username, $password, $database);

if ($mysqli->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo "fail";
} 
        $query = $mysqli->query("select * from clientes where idclientes=".$userid);
        
        if ($query->num_rows > 0) {
  // output data of each row
           
  while($row = $query->fetch_array()) {
      $columna=1;
      echo "<tr>";
      while($columna<15){
      echo "<td>".$row[$columna]."</td>";
      $columna++;
      
      }
      
      
      echo "</tr>";
      
  }
} else {
  echo "0 results";
}
    
    
    
    ?>
    </tbody>
  </table>
</div>