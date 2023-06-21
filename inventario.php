<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title></title>
        
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="  https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap.min.css">
   <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap.min.js"></script>
  
   
  


        
        <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
    </head>
    <body>
        <script>
            $(document).ready(function() {
    $('#example').DataTable();
} );
            </script>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Sistema Control</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="menu.php">Menu</a></li>
        <li class="active"><a href="catalogo.php">Catalogo</a></li>
        <li><a href="ventas.php">Ventas</a></li>
        <li><a href="corte.php">Corte</a></li>
        <li><a href="reportes.php">Reportes</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       
        <li><a href="index.php"><span class="glyphicon glyphicon-shopping-cart"></span> Exit</a></li>
      </ul>
    </div>
  </div>
</nav>
            
            
       <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Producto</th>
                <th>Descripcion</th>
                <th>Existencia</th>
                <th>Precio</th>
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
        $query = $mysqli->query("select existencia.idinventario, inventario.marca, inventario.producto, inventario.descripcion, existencia.existencia, precios.precioV from existencia, inventario,almacenes,precios where existencia.idinventario=precios.idinventario and almacenes.idalmacenes=precios.idalmacen and existencia.idinventario=inventario.idinventario and existencia.idalmacen=almacenes.idalmacenes and existencia.idalmacen=".$_POST['id']);
        
        if ($query->num_rows > 0) {
  // output data of each row
  while($row = $query->fetch_Array(MYSQLI_NUM)) {
  echo '<tr>';
 echo '<td>'.$row[0].'</td>';
  echo '<td>'.$row[1].'</td>';
  echo '<td>'.$row[2].'</td>';
   echo '<td>'.$row[3].'</td>';
   echo '<td>'.$row[4].'</td>';
     echo '<td>'.$row[5].'</td>';
   ECHO '</tr>';
    }
} else {
  echo "0 results";
}
        
?>
            
        </tbody>
        <tfoot>
            <td>
                
            </td>
        </tfoot>
    </table>
    </body>
</html>