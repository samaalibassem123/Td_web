<?php

if (
    $_SERVER['REQUEST_METHOD'] == 'POST'
    && !empty($_POST["nom"])
    && !empty($_POST["prenom"])
    && !empty($_POST["classe"])
    && !empty($_POST["option"])
    && !empty($_POST["sexe"])
    && !empty($_POST["journe"])
) {
    $nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]);
    $classe = htmlspecialchars($_POST["classe"]);
    $option = $_POST["option"];
    $sexe = $_POST["sexe"];
    $jouner = $_POST["journe"];
    //open ul
    echo "<ul>";

    echo "<li> nom : " . $nom . "</li>";
    echo "<li> prenom : " . $prenom . "</li>";
    echo "<li> classe : " . $classe . "</li>";
    echo "<li> sexe : " . $sexe . "</li>";
    //affiche option
    echo "<li>options :</li>";
    foreach ($option as $opt) {
        echo " -" . $opt;
    }
    //affiche journer
    echo "<li>" . $jouner . "</li>";
    //close ul
    echo "</ul>";
} else { ?>
    <script>
        alert("remplir tous les champs !")
        window.location.replace("index.html")
    </script>
    <?php
}
?>