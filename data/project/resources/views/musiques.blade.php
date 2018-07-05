<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="./css/style.css">
    <title></title>
  </head>
  <header>
    <ul class="menu-principal">
      <li><a class="lien" href="/">acceuil</li>
        <li><a class="lien" href="./create">add to list</a></li>
        <li><a class="lien" href="./musiques">world list</a></li>
    </ul>
    </header>
  <body>
<?php
    function recupTableManager($musique,$req){
      $musiques = $song->query($req);
      while ($donnees = $musiques->fetch()) {
        echo $songName['songName'];
        echo $genre['genre'];
      }
    }
    ?>
<main>
  <h1>Votre son a étais ajouté a notre base de donnés merci</h1>
  <p> nous vous conseillons de regarde plus bas pour voir des article en vente.</P>
</main>

<main>
  <img src="./css/img/records1.jpg" alt="Vinyl" height="40%" width="40%">
  <p>Découvrer notre lot de vynil pour seulement100$</p>
  <img src="./css/img/records2.jpg" alt="Vinyl" height="40%" width="40%">
  <p>nous vous proposon ce lot la pour seulement 75$</p>

</main>


<footer>
  <p>copyrigth akymMartins</p>
  <p>soundofworld</p>
</footer>
  </body>
</html>
