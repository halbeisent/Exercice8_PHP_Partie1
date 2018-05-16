<!-- On déclare les variables au début -->
<?php
  $addition = 3+4;
  $multiplication = 5*20;
  $division = 45/5;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <link rel="stylesheet" href="style.css" />
  <meta charset="utf-8" />
  <title>Exercice 8 Partie 1 PHP</title>
</head>
<body>
  <P>
    <!-- Ici on raccourcit le code de < ?php à < ?= -->
    <?=  'Le résultat du premier calcul est : 3+4='.$addition.'<br />Le résultat du second calcul est : 5x20='.$multiplication.' <br />Le résultat du troisième calcul est : 45/5='.$division;?>
  </p>
</body>
</html>
