<?php

include "./dbconnect_script.php";

echo "created";
var_dump($_POST);

// var_dump($_POST);
$formaat = $_POST["formaat"];
$saus = $_POST["saus"];
$toppings = $_POST["toppings"];
$kruiden = implode(", ",$_POST["Kruiden"]);

echo $kruiden;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO `pizza` (`formaat`, `saus`, `topping`, `kruiden`)
                            VALUES (:formaat, :saus, :topping, :kruiden)");
    $stmt->bindParam(':formaat', $formaat);
    $stmt->bindParam(':saus', $saus);
    $stmt->bindParam(':topping', $toppings);
    $stmt->bindParam(':kruiden', $kruiden);

    $stmt->execute();
} 
catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

header("Refresh:1; url=read.php");
?>