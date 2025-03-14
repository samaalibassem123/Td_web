<?php

require "../connexion.php";

$mat = htmlspecialchars($_GET['mat']);

$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$genre = htmlspecialchars($_POST['genre']);
$ville = htmlspecialchars($_POST['ville']);
$mail = htmlspecialchars($_POST['mail']);

try {
    $sql = "UPDATE etudiant set matricule=:mat, nom=:nom, prenom=:prenom, genre=:genre, ville=:ville, mail=:mail where matricule=:mat";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(":mat", $mat);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":prenom", $prenom);
    $stmt->bindParam(":genre", $genre);
    $stmt->bindParam(":ville", $ville);
    $stmt->bindParam(":mail", $mail);


    if ($stmt->execute() === TRUE) {
        echo "<script>alert('Updated avec succes')</script>";
        echo "<script>window.location.replace('http://localhost/Td_web/tp4/');</script>";
    } else {
        echo "<script>alert('TRY AGAIN')</script>";
        echo "<script>window.location.replace('http://localhost/Td_web/tp4/');</script>";
    }
} catch (Exception $e) {

    echo "<script>alert('Error in Updating ')</script>";
    echo "<script>window.location.replace('http://localhost/Td_web/tp4/');</script>";
}

?>