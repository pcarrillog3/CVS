 <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "cvs_tecno";
//atributos
$id=$_POST['id'];
$marca=$_POST['marca'];
$modelo=$_POST['producto'];



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{

$sql = "INSERT INTO clientes(idclientes,nombre,RazonSo)
VALUES ('".$id."','".$marca."', '".$modelo."')";
if ($conn->query($sql) === TRUE) {
  
$conn->close();  
  header('Location: '.'..\clientes.php');
  
} else {
    
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}
?> 