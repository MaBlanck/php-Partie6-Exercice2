<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2 Partie 6</title>
</head>

<body>
    <h1>Exercice 2 Partie 6</h1>
    <?php
    if (isset($_GET['age'])): ?>
    <p><?= $_GET['age']?></p>
    <?php else:?>
    <p><?= 'Veuillez renseigner votre âge' ?></p>
    <?php endif ?> 
</body>

</html>