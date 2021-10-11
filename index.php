<?php
    require "fonction.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Générateur de Mots de passes</title>
</head>
<body>
    <header>
        
    </header>
    <section class="generateur">
        <h1>Générateur de Mots de passes</h1>
        <form action='' method="POST">
            <input type="text" name="addWord" placeholder="Rajouter un mot à mon Mdp">
            <input class="bouton" type='submit' value="Generer Mot de passe">
            <p>
                Votre mot de passe est :
            </p>
            <p class="mdp">
            <?php
                $nom= $_POST;
                echo "".implode("",$nom) .GeneratePassword(15);       
            ?>
            </p>
        </form>
    </section>
    <footer>

    </footer>
</body>
</html>
