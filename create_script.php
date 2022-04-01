<?php

include "./dbconnect_script.php";

echo "created";
var_dump($_POST);

// variables of post 
$formaat = $_POST["formaat"];
$saus = $_POST["saus"];
$toppings = $_POST["toppings"];

// if the kruiden is not selected it gives geen, but if there is kruiden selected it will implode kruiden to string.
if(!isset($_POST['Kruiden'])){    
    $kruiden = 'geen';
} else {
    $kruiden = implode(", ",$_POST['Kruiden']);
    
}
// prints out the post 
print_r($kruiden);


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
    echo "<br>" . $e->getMessage();
}

header("Refresh:1; url=read.php");
?>