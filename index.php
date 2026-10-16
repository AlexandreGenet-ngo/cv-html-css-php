<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylecv.css">
    <img src="/home/genet/cv/Alexandre.png" alt="Photo de profile">;
    <title>CV</title>
</head>
<header>
    <nav>
        <a href="index.php?page=acceuil">Accueil</a>
        <a href="experience.php?page=etudes"> Mes études <br></a>
        <a href ="competence.php?page=competence"> Mes Compétence <br></a>
    </nav>
    <?php
        $prenom = "GENET--NGO Alexandre";
        $domain = "ETUDIANT EN INFORMATIQUE & RESEAUX";
        $intro = "Introduction";
        $page = "accueil";
        echo  "<h1>" . $prenom . "<h1>";
        echo "<h2>" . $domain . "<h2>";
        echo "<h2>" . $intro . "<h2>";
    ?>
</header>
<body>
    <?php
    if (isset ($_GET["page"])) {
        if ($_GET["page"] == "accueil") {
            echo "<br><strong> Âge</strong><br>";
            echo "18 ans<br>";
            echo "<strong>E-mail</strong><br>";
            echo "genetngoalex1234@gmail.com<br>";
            echo "<strong>Mobile</strong><br>";
            echo "+33 06 40 64 40 26<br>";
            echo "<strong>Adresse</strong><br>";
            echo "2 ter rue des petits clos 28000 Chartres<br>";
            echo "<strong>Langue</strong><br>";
                echo "Français (Maternelle)<br>";
                echo "Anglais (A2 Flyers, The big Challenge)<br>";
                echo "Vietnamien(Maternelle,notions)<br>";
                echo "Allemand(notions)<br>";
                echo "Néerlandais(notions)<br>";
        }
    }
    

    
    else {
        echo " La variable GET n'existe pas...";
    }
    ?>
    
</body>

</html>
