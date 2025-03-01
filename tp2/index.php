<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Inscription des eleves</h1>
    <form action="">
        <div>
            <label>Nom: </label>
            <input type="text">
        </div>
        <div>
            <label>Prenom: </label>
            <input type="text">
        </div>
        <div>
            <label>classe: </label>
            <input type="text">
        </div>
        <div>
            <label>Nom: </label>
            <input type="text">
        </div>
        <div>
            <label for="">Sexe: </label>
            <span>Home</span>
            <input type="radio">
            <span>Femme</span>
            <input type="radio">
        </div>
        <div>
            <label for="">Option: </label>
            <span>langue</span>
            <input type="checkbox">
            <span>Dessin</span>
            <input type="checkbox">
            <span>Musique</span>
            <input type="checkbox">
            <span>Scientifique</span>
            <input type="checkbox">
        </div>
        <div>
            <label for="Affich_Inscipt.php">journée</label>
            <select name="" id="">
                <option value="l">Lundi</option>
                <option value="md">Mardi</option>
                <option value="mc">Mercredi</option>
                <option value="j">Jeudi</option>
                <option value="v">Vendredi</option>
                <option value="s">Samedi</option>
                <option value="d">Dimanche</option>
            </select>
        </div>
        <div>
            <input type="submit">
            <input type="reset">
        </div>
    </form>
</body>

</html>

<style>
body {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

h1 {
    color: red;
}

label {
    display: inline-block;
    width: 100px;
}


input {
    border: 1px solid green;
    outline: none;
}

form {
    line-height: 2;
}
</style>