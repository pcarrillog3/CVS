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
      margin-bottom: 0px;
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

    
    function agregar(){
                <?php
               
        $username = "root";
$password = "root";
$database = "cvs_tecno";
$mysqli = new mysqli("localhost", $username, $password, $database);

if ($mysqli->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo "fail";
} 
        $query = $mysqli->query("select max(idinventario)+1 from inventario");
        
        if ($query->num_rows > 0) {
  // output data of each row
  while($row = $query->fetch_assoc()) {
   echo "$('#id').val(";
 echo $row['max(idinventario)+1'];
 echo ");";
  }
} else {
  echo "0 results";
}
        
        
 
?>       
        
    }
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
        <li class="active" ><a href="menu.php">Menu</a></li>
        <li ><a href="catalogo.php">CATALOGO</a></li>
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
             <div class="panel panel-primary" STYLE="margin-top: 0px">
          <div class="panel-heading"><h3>CATALOGO</h3></div>
        <div class="panel-body" >
            Para crear nuevo elemento, click en CREAR.
            Para editar, solo oprima un elemento de la lista.
        </div>    
        <div class="panel-footer">Agrega nuevos elementos al catálogo o modifica sus propiedades</div>
      </div>
            <div class="container" >
                <div class="row">
                    <div class="col-sm-8">
                              <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>

                <th>id</th>
                <th>Marca</th>
                <th>Producto</th>
                <th>Descripción </th>
                <th>Editar</th>
               
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
        $query = $mysqli->query("select inventario.idinventario, inventario.marca, inventario.producto, inventario.descripcion from inventario");
        
        if ($query->num_rows > 0) {
  // output data of each row
  while($row = $query->fetch_assoc()) {
  echo '<tr>';
 echo '<td>'.$row['idinventario'].'</td>';
  echo '<td>'.$row['marca'].'</td>';
  echo '<td>'.$row['producto'].'</td>';
   echo '<td>'.$row['descripcion'].'</td>';
 echo'<td><form action="edit.php" method="post"><button class="btn btn-info" name="id" type="submit" value='.$row['idinventario'].'> <span class="glyphicon glyphicon-pencil"></span></button></form></td>';
  }
} else {
  echo "0 results";
}
        
?>

        </tbody>
        <tfoot>
<!--            <td>
                
            *ID=Identificador
            *E.T= Existencia Total
            *N.P=Numero Partida(ver partidas en menu)
            *P.P=Precio Partida
            </td>-->
        </tfoot>
        
    </table>
                       
                    </div>
                    <div class="col-sm-4" style=" border-style:solid; border-color:transparent ; border-left-color:#ccccff">
                        
  <form action="files/add_catalogo_1.php" method="post">
       
  <div class="form-group">
      <label class="btn btn-info" onclick="agregar()">Ultimo</label>
      <label onchange="detectar()" for="text">ID:</label>
    <input readonly type="text" class="form-control" id="id" name="id" value="0">
  </div>
  <div class="form-group">
    <label for="text">Marca</label>
    <input type="text" class="form-control" name="marca">
  </div>
   <div class="form-group">
    <label for="text">Producto</label>
    <input type="text" class="form-control" name="producto">
  </div>
       <div class="form-group">
    <label for="text">Descripción</label>
    <textarea type="text" class="form-control" name="descripcion"></textarea>
  </div>
      
  <button type="submit" id="actualizar" class="btn btn-default">crear</button>
   
</form> 
                       
                        </div>
                    </div>
                <div clas="row">
                    
                </div>
                
                
                </div>
    </body>
</html>