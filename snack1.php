<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola 
e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php 

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

// se è vero che name, mail e age sono vuoti
if (empty($name) || empty($mail) || empty($age)) { 

  echo 'Accesso negato. Inserire i dati';

} elseif (strlen($name)<=3) {

  echo 'Errore: nome troppo corto';

} elseif (strpos($mail, '@') === false || strpos($mail, '.') === false) {

  echo 'Errore: mail non valida';

}  elseif (!is_numeric($age)) {

  echo 'Errore: età non corretta';

} else {

  echo 'Accesso eseguito';

}

?>

</body>
</html>