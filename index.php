<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="galleria">
  <?php
  // indichiamo la cartella da aprire
  // il simbolo . indica la cartella corrente
  $cartella = '.';

  // verifichiamo che la cartella esiste
  if(!is_dir($cartella))
     {
     exit('La cartella indicata non esiste!');
     }

  // apriamo la cartella
  $risorsa = opendir($cartella) or die('impossibile aprire la cartella!');

  // con il ciclo while eseguiamo più volte la funzione readdir()
  // valorizzando la variabile $file
  // fin quando essa non darà come risultato FALSE
  while(($file = readdir($risorsa)) !== FALSE)
     {
       if (strstr($file, 'JPG')) // controllo che sia un immagine JPG gli altri file non li visualizzo
        echo "<img src=\"".$file."\" width=\"500\" >";
     }

  // chiudiamo la cartella
  closedir();
  ?>
  </div>
</body>
</html>
