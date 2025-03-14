<?php

require "../connexion.php";

$mat = $_GET['mat'];
$nom = $_GET['nom'];
$prenom = $_GET['prenom'];
$genre = $_GET['genre'];
$ville = $_GET['ville'];
$mail = $_GET['mail'];

try {
    $sql = "INSERT INTO etudiant values(:mat, :nom, :prenom, :genre, :ville, :mail)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(":mat", $mat);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":prenom", $prenom);
    $stmt->bindParam(":genre", $genre);
    $stmt->bindParam(":ville", $ville);
    $stmt->bindParam(":mail", $mail);


    if ($stmt->execute() === TRUE) {
        echo "<script>alert('Ajouter avec succes')</script>";
        echo "<script>window.location.replace('http://localhost/Td_web/tp4/');</script>";
    } else {
        echo "<script>alert('TRY AGAIN')</script>";
        echo "<script>window.location.replace('http://localhost/Td_web/tp4/');</script>";
    }
} catch (Exception $e) {

    echo "<script>alert('Error in adding user matricule deja existe')</script>";
    echo "<script>window.location.replace('http://localhost/Td_web/tp4/');</script>";
}

?>