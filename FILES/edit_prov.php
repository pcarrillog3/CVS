 <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "cvs_tecno";
//atributos
$id=$_POST['id'];
$NOMBRE=$_POST['NOMBRE'];
$RAZON=$_POST['RAZON'];




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "update proveedor set nombre_proveedor='".$NOMBRE."',descripcion='".$RAZON."' where idproveedor=".$id;

if ($conn->query($sql) === TRUE) {
   
  header('Location: '.'..\editProv.php');
} else {
    
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?> 