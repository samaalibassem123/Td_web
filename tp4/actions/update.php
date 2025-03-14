<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <input type="text" placeholder="<?php
        echo $_GET["mat"];
        ?>"> <input type="text" placeholder="<?php
        echo $_GET["nom"];
        ?>"> <input type="text" placeholder="<?php
        echo $_GET["prenom"];
        ?>"> <input type="text" placeholder="<?php
        echo $_GET["genre"];
        ?>"> <input type="text" placeholder="<?php
        echo $_GET["ville"];
        ?>"> <input type="text" placeholder="<?php
        echo $_GET["mail"];
        ?>">
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