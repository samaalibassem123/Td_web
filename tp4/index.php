<!DOCTYPE html>
<html lang="en">

<head>
    <!--db connexion-->
    <?php
  include_once "connexion.php";
  ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <main>
        <!--Ajout etudiant-->
        <form action="actions/ajout.php" class="form-ajout">
            <input type="text" placeholder="Matricule" required />
            <input type="text" placeholder="NomEtud" required />
            <input type="text" placeholder="PrenomEtud" required />
            <input type="text" placeholder="Genre" required />
            <input type="text" placeholder="Ville" required />
            <input type="text" placeholder="Mail" required />
            <input type="submit" value="Ajouter" required />
        </form>
        <div class="table-container">
            <!--Search Form-->
            <form action="actions/search.php" method="get">
                <input type="text" placeholder="Chercher avec matricule" name="mat" />
                <input type="submit" value="search" />
            </form>

            <table class="tb">
                <tr>
                    <th>Matricule</th>
                    <th>NomEtud</th>
                    <th>PrenomEtud</th>
                    <th>Genre</th>
                    <th>Ville</th>
                    <th>Mail</th>
                </tr>
                <!--GET ETUDIANT FROM DB-->
                <?php
        //GET ETUDIANT BY SEARCHING
        if (isset($_GET["mat"]) and $_GET["mat"] != "") {
          $mat = $_GET["mat"];
          $sql = "SELECT * FROM etudiant where matricule=:mat";
          $stmt = $conn->prepare($sql);
          $stmt->bindParam(":mat", $mat);
          $stmt->execute();
          $rows = $stmt->fetchAll(PDO::FETCH_OBJ);
          foreach ($rows as $row) {
            echo "<tr>";
            echo "<td>" . $row->matricule . "</td>";
            echo "<td>" . $row->nom . "</td>";
            echo "<td>" . $row->prenom . "</td>";
            echo "<td>" . $row->genre . "</td>";
            echo "<td>" . $row->ville . "</td>";
            echo "<td>" . $row->mail . "</td>";
            ?>
                <!--DELETE FORM-->
                <td>
                    <form action="actions/delete.php?mat=<?php echo $row->matricule; ?>" method="post">
                        <input type="submit" value="delete" class="delete" />
                    </form>
                </td>
                <!--UPDATE FORM-->
                <td>
                    <form action="actions/update.php?mat=<?php echo $row->matricule; ?>" method="post">
                        <input type="submit" value="update" class="update" />
                    </form>
                </td>
                <?php
            echo "</tr>";
          }
          //GET ALL ETUDIANT
        } else {
          $sql = "SELECT * FROM etudiant";
          $res = $conn->query($sql);
          $rows = $res->fetchAll(PDO::FETCH_OBJ);
          foreach ($rows as $row) {
            echo "<tr>";
            echo "<td>" . $row->matricule . "</td>";
            echo "<td>" . $row->nom . "</td>";
            echo "<td>" . $row->prenom . "</td>";
            echo "<td>" . $row->genre . "</td>";
            echo "<td>" . $row->ville . "</td>";
            echo "<td>" . $row->mail . "</td>";
            ?>
                <!--DELETE FORM-->
                <td>
                    <form action="actions/delete.php?mat=<?php echo $row->matricule; ?>" method="post">
                        <input type="submit" value="delete" class="delete" />
                    </form>
                </td>
                <!--UPDATE FORM-->
                <td>
                    <form action="actions/update.php?mat=<?php echo $row->matricule; ?>" method="post">
                        <input type="submit" value="update" class="update" />
                    </form>
                </td>
                <?php
            echo "</tr>";
          }

        }

        ?>
            </table>
        </div>
    </main>
</body>

</html>

<style>
body {
    display: flex;
    justify-content: center;
    height: 100vh;
    height: 100%;
    font-family: Arial, Helvetica, sans-serif;
}

main {
    display: flex;
    flex-direction: column;
    gap: 10px;
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

.form-ajout {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

/*style table*/
.table-container {
    overflow-x: scroll;
}

.tb {
    border-collapse: collapse;
    width: 100%;
    text-align: center;
}

.tb th {
    padding: 10px;
}

.tb td {
    border-top: 1px solid #ddd;
    padding: 10px;
}

/*style buttons*/

form>.delete {
    background-color: #ef4444;
    color: white;
}

form>.update {
    background-color: #60a5fa;
    color: white;
}
</style>