<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 2</title>
  </head>
  <body>
    <p>
      <?php
      //index.php?lastname=Nemare&firstname=Jean
        if (isset($_GET['age'])) {
          echo $_GET['age'];
        } else {
          echo 'Il n\'y a pas de parametre age dans l\'URL.';
        }
       ?>
    </p>
  </body>
</html>
