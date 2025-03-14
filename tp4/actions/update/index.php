<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../update.php" method="post">
        <input type="text" value="<?php
        echo $_GET["mat"];
        ?>" name="mat" disabled>
        <input type="text" placeholder="nom : <?php
        echo $_GET["nom"];
        ?>" required name="nom">
        <input type="text" placeholder="prenom : <?php
        echo $_GET["prenom"];
        ?>" required name="prenom">
        <input type="text" placeholder="genre : <?php
        echo $_GET["genre"];
        ?>" required name="genre">
        <input type="text" placeholder="ville : <?php
        echo $_GET["ville"];
        ?>" required name="ville">
        <input type="text" placeholder="mail : <?php
        echo $_GET["mail"];
        ?>" required name="mail">
        <input type="submit" value="Update">
    </form>
</body>

</html>

<style>
body {
    display: flex;
    align-items: center;
    justify-content: center;
}

form {
    display: flex;
    flex-direction: column;
    gap: 20px;
}


input {
    padding: 10px;
    border-radius: 5px;
    outline: none;
    border: none;
    width: 200px;
    border: 1px solid gray;
}

input:focus {
    border-color: black;
}

input[type="submit"] {
    width: 100px;
    border: none;
    cursor: pointer;
    background-color: black;
    color: white;
    transition-duration: 0.5s;
}

input[type="submit"]:hover {
    opacity: 0.75;
}
</style>