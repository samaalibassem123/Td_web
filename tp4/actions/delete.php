<?php

include_once "../connexion.php";

try {
    $mat = $_GET["mat"];
    echo "Loading...";

    $sql = "delete from etudiant where matricule=:mat";
    $stmt = $conn->prepare($sql);



    $stmt->bindParam(":mat", $mat);
    if ($stmt->execute() === TRUE) {
        echo "<script>alert('deleted avec succes')</script>";
        echo "<script>window.location.replace('http://localhost/Td_web/tp4/');</script>";


    } else {
        echo "try again";
    }

} catch (PDOException $e) {
    echo "Erreur in deleting" . $e->getMessage();
}


?>