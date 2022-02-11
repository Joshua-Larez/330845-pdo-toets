<?php

echo "Deleted";

include "./dbconnect_script.php";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // sql to delete a record
    $sql = "DELETE FROM pizza WHERE id = :id";

   // Prepare statement
    $stmt = $conn->prepare($sql);
    $id = (INT)$_GET['id'];

    $stmt->bindParam(':id', $id);

  // use exec() because no results are returned
    $stmt->execute();

} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;


header("Refresh:0; url=read.php");
?>