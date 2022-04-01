<?php
    echo "Updated";
    include "./dbconnect_script.php";


if (isset($_POST['formaat'])) {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE `pizza` SET `formaat` = :formaat WHERE `pizza`.`id` = :id";

        // Prepare statement
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $_POST['id']);
        $stmt->bindParam(':formaat', $_POST['formaat']);

        // execute the query
        $stmt->execute();
        // echo a message to say the UPDATE succeeded
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

if (isset($_POST['saus'])) {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE `pizza` SET `saus` = :saus WHERE `pizza`.`id` = :id";

        // Prepare statement
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $_POST['id']);
        $stmt->bindParam(':saus', $_POST['saus']);

        // execute the query
        $stmt->execute();
        // echo a message to say the UPDATE succeeded
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

if (isset($_POST['toppings'])) {
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE `pizza` SET `topping` = :topping WHERE `pizza`.`id` = :id";

        // Prepare statement
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $_POST['id']);
        $stmt->bindParam(':topping', $_POST['toppings']);

        // execute the query
        $stmt->execute();
        // echo a message to say the UPDATE succeeded
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}


if (!isset($_POST['Kruiden'])) {

    $kruiden = 'geen';

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE `pizza` SET `kruiden` = :kruiden WHERE `pizza`.`id` = :id";

        // Prepare statement
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $_POST['id']);
        $stmt->bindParam(':kruiden', $kruiden);

        // execute the query
        $stmt->execute();
        // echo a message to say the UPDATE succeeded
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}
else {
    $kruiden = implode(", ",$_POST['Kruiden']);

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE `pizza` SET `kruiden` = :kruiden WHERE `pizza`.`id` = :id";

        // Prepare statement
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':id', $_POST['id']);
        $stmt->bindParam(':kruiden', $kruiden);

        // execute the query
        $stmt->execute();
        // echo a message to say the UPDATE succeeded
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

// $conn = null;

// var_dump($_POST);

header("Refresh:0.5; url=read.php");


?>