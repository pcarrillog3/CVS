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

$sql = "update almacenes set nombre_almacen='".$NOMBRE."',observaciones='".$RAZON."' where idalmacenes=".$id;

if ($conn->query($sql) === TRUE) {
   
  header('Location: '.'..\editAlmacen.php');
} else {
    
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?> 