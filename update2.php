<?php 
include("./inc/settings.php");
validar();

    $query = "UPDATE table1 SET column2 = '".$_POST['nombre']."',
     column3 = '".$_POST['fecha']."', column4 = ".$_POST['numero'].",
      column5 = ".$_POST['numdouble']." WHERE column1 = ".$_POST['identificador
      '].";";

      $stmt = $pdo->prepare($query);
      $stmt->bindParam(":login", $login);
      $stmt->bindParam(":pass", $pass);
      $stmt->execute();



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ( $conn->query($query)){
    header("location:crud.php");
}else{
    echo "Algo salio mal <a href='https://localhost/crud/crud.php'> clic aqui para volver al crud</a>" ;

}
?>