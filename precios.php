<?php include 'navbar.php'; include './FILES/modalalmacen.php';?>
<html lang="es">
<!--    <head>
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
    </head>-->
<script type='text/javascript'>
            $(document).ready(function(){

                $('.idbutton').click(function(){
                   
                    var userid = $(this).data('id');
                    
                    // AJAX request
                    $.ajax({
                        url: 'FILES/ajaxalmacen.php',
                        type: 'post',
                        data: {userid: userid},
                        success: function(response){ 
                            // Add response in Modal body
                            $('.modal-body').html(response); 
                            
                            // Display Modal
                            $('#myModal').modal('show'); 
                        }
                    });
                });
            });
            </script>
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
        $query = $mysqli->query("select max(idalmacenes)+1 from almacenes");
        
        if ($query->num_rows > 0) {
  // output data of each row
  while($row = $query->fetch_assoc()) {
   echo "$('#id').val(";
 echo $row['max(idalmacenes)+1'];
 echo ");";
  }
} else {
  echo "0 results";
}
        
        
 
?>       
           $( "#actualizar" ).prop( "disabled", false );
    }</script>
    <body>
        
             <div class="panel panel-primary" STYLE="margin-top: 0px">
          <div class="panel-heading"><h3>PRECIOS ALMACEN <?php echo $_POST['id']?></h3></div>
        <div class="panel-body" >
            Asigna o modifica Precios.
            Para editar, solo oprima el botón editar de un elemento de la lista.
        </div>    
        <div class="panel-footer">Agrega nuevos Almacenes y sus características, o abre y verifica almacenes</div>
      </div>
            <div class="container" >
                <div class="row">
                    <div class="col-sm-8">
                              <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>

                <th>id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio </th>
                <th>Editar</th>
               
            </tr>
        </thead>
        <tbody>
            <?php
//     include "FILES/modalclientes.php";
   $username = "root";
$password = "root";
$database = "cvs_tecno";
$mysqli = new mysqli("localhost", $username, $password, $database);

if ($mysqli->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo "fail";
} 
        $query = $mysqli->query("select * from inventario");
        
        if ($query->num_rows > 0) {
  // output data of each row
  while($row = $query->fetch_array(MYSQLI_NUM)) {
  echo '<tr>';
 echo '<td>'.$row[0].'</td>';
  echo '<td>'.$row[1].'</td>';
  echo '<td>'.$row[2].'</td>';
  $mysqli2 = new mysqli("localhost", $username, $password, $database);
  if ($mysqli2->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo "fail";
} 
  $query2=$mysqli2->query("select precioV from precios where idinventario=".$row[0]." and idalmacen=".$_POST["id"]);
  if($query2->num_rows>0){
  if($row2=$query2->fetch_array(MYSQLI_NUM)){
      echo '<td>'.$row2[0].'</td>';
  }else{echo '<td>NO APLICADO</td>';}}
  else{echo '<td>NO APLICADO</td>';}

  echo '<td><button data-id="'.$row[0].'" class=" idbutton btn btn-success">Ver</button></td>';
 echo '</tr>'; 
 
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
                    <div disabled class="col-sm-4" style=" border-style:solid; border-color:transparent ; border-left-color:#ccccff">
                        
  <form action="files/add_almacen.php" method="post">
       
  <div class="form-group">
      <label class="btn btn-info" onclick="agregar()">Ultimo</label>
      <label for="text">ID:</label>
    <input readonly type="text" class="form-control" id="id" name="id" value="0">
  </div>
  <div class="form-group">
    <label for="text">Nombre</label>
    <input type="text" class="form-control" name="marca">
  </div>
   <div class="form-group">
    <label for="text">Información</label>
    <input type="text" class="form-control" name="producto">
  </div>
   
      
  <button DISABLED type="submit" id="actualizar" class="btn btn-warning">crear</button>
   
</form> 
                       
                        </div>
                    </div>
                <div clas="row">
                    
                </div>
                
                
                </div>
    </body>
</html>