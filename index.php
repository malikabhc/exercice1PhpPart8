<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        <link rel="stylesheet" href="style.css" />
        <title>Exercice1/8</title>
    </head>
    <body>
            <!-- Affichage de l'en-tête User-agent -->
            <p><?= $_SERVER['HTTP_USER_AGENT'] . ' '; ?></p>
            <!-- Affichage de l'adresse IP client -->
            <p><?= $_SERVER['REMOTE_ADDR'] . ' '; ?></p>
            <!-- Affichage du nom du serveur hôte -->
            <p><?= $_SERVER['SERVER_NAME']; ?></p>
        </p>
    </body>
</html>
