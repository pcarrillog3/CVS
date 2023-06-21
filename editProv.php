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
                
     detectar();
    $('#example').DataTable();
   
} );

    
    function detectar(){
                <?php
  $id= $_POST["id"];          
echo "$('#id').val(".$id.");";   
                
        $username = "root";
$password = "root";
$database = "cvs_tecno";
$mysqli = new mysqli("localhost", $username, $password, $database);

if ($mysqli->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo "fail";
} 
        $query = $mysqli->query("select * from proveedor where idproveedor=".$id);
        
        if ($query->num_rows > 0) {
  // output data of each row
   $row=$query->fetch_array(MYSQLI_NUM);
   echo "$('#NOMBRE').val('".$row[1]."');";
   echo "$('#RAZON').val('".$row[2]."');";
  
   
   
   
   
   
   
   
  }
 else {
  header('Location: '.'proveedores.php');
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
          <div class="panel-heading"><h3>PROVEEDORES</h3></div>
        <div class="panel-body" >
            Para crear nuevo elemento, click en CREAR.
            Para editar, solo oprima un elemento de la lista.
        </div>    
        <div class="panel-footer">Puedes regresar a la pestaña anterior oprimiendo un botón en el menu de arriba.</div>
      </div>
            <div class="container" >
                <div class="row">
                    <div class="col-sm-6">
                              <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
        <style>
            .informacion{
                width: 200px;
            }
        </style>
                <th>id</th>
                <th>Nombre</th>
                <th><div class="informacion">Información</div></th>
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
        $query = $mysqli->query("select * from proveedor");
        
        if ($query->num_rows > 0) {
  // output data of each row
  while($row = $query->fetch_array(MYSQLI_NUM)) {
  echo '<tr>';
 echo '<td>'.$row[0].'</td>';
  echo '<td>'.$row[1].'</td>';
  echo '<td><div class="informacion">'.$row[2].'</div></td>';
 echo'<td><form action="editProv.php" method="post"><button class="btn btn-info" name="id" type="submit" value='.$row[0].'> <span class="glyphicon glyphicon-pencil"></span></button></form></td>';
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
                    <div class="col-sm-6" style=" border-style:solid; border-color:transparent ; border-left-color:#ccccff">
                        
  <form action="files/edit_prov.php" method="post">
       
  <div class="form-group">
      <label  for="text">ID:</label>
    <input readonly type="text" class="form-control" id="id" name="id" value="0">
  </div>
  <div class="form-group">
    <label for="text">Nombre</label>
    <input type="text" class="form-control" id="NOMBRE" name="NOMBRE">
  </div>
   <div class="form-group">
    <label for="text">Información</label>
    <textarea type="text" class="form-control" id="RAZON" name="RAZON"></textarea>
  </div>
      
      
      
      
  <button type="submit" id="actualizar" class="btn btn-default">Editar</button>
   
</form> 
                       
                        </div>
                    </div>
                <div clas="row">
                    
                </div>
                
                
                </div>
    </body>
</html>