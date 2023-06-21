 <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "cvs_tecno";
//atributos
$id=$_POST['id'];
$NOMBRE=$_POST['NOMBRE'];
$RAZON=$_POST['RAZON'];
$RFC=$_POST['RFC'];
$DIRECCIONF=$_POST['DIRECCIONF'];
$DIRECCIONE=$_POST['DIRECCIONE'];
$TELEFONO=$_POST['TELEFONO'];
$CORREO=$_POST['CORREO'];
$USOF=$_POST['USOFACTURA'];
$REGIMEN=$_POST['REGIMEN'];
$TIPOP=$_POST['TIPOP'];
$TIEMPOP=$_POST['TIEMPOP'];
$FORMAP=$_POST['FORMAP'];
$OBSERVACIONES=$_POST['OBSERVACIONES'];



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "update clientes set NOMBRE='".$NOMBRE."',RAZONSO='".$RAZON."',RFC='".$RFC."',DIRECCIONF='".$DIRECCIONF."',DIRECCIONE='".$DIRECCIONE."',TELEFONO='".$TELEFONO."',CORREO='".$CORREO."',USOFACTURA='".$USOF."',REGIMEN='".$REGIMEN."',TIPO_PAGO='".$TIPOP."',TIEMPO_PAGO='".$TIEMPOP."',FORMAPAGO='".$FORMAP."',OBSERVACIONES='".$OBSERVACIONES."' where idclientes=".$id;

if ($conn->query($sql) === TRUE) {
   
  header('Location: '.'..\editCli.php');
} else {
    
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?> 