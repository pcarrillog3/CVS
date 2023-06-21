 <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "cvs_tecno";
//atributos
$id=$_POST['id'];
$marca=$_POST['marca'];
$modelo=$_POST['producto'];
$descripcion=$_POST['descripcion'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "update inventario set marca='".$marca."',producto='".$modelo."',descripcion='".$descripcion."' where idinventario=".$id;

if ($conn->query($sql) === TRUE) {
   
  header('Location: '.'..\edit.php');
} else {
    
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?> 