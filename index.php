<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2 Partie 6</title>
</head>

<body>
    <h1>Exercice 2 Partie 6</h1>
    <?php if (!isset($_GET['firstname'])) : ?>
        <p> Votre prénom est manquant</p>
    <?php endif ?>
    <?php if (!isset($_GET['lastname'])) : ?>
        <p> Votre nom est manquant</p>
    <?php endif; ?>
    <?php if (isset($_GET['firstname']) && isset($_GET['lastname'])) : ?>
        <p> Bonjour <?= $_GET['firstname']; ?> <?= $_GET['lastname']; ?></p>
    <?php endif; ?>
    <?php if (!isset($_GET['age'])) : ?>
        <p><?= 'Veuillez renseigner votre âge' ?></p>
    <?php else : ?>
        <p>Vous avez <?= $_GET['age'] ?> ans.</p>
    <?php endif; ?>



    <a href="index.php?lastname=Nemare&firstname=Jean">Cliquez</a>
</body>

</html>