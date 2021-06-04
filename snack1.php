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

if(empty($_GET['name']) || empty($_GET['mail']) || empty($_GET['age'])) { // se è vero che name, mail e age sono vuoti
  $string = 'Accesso negato';
}
else(
strpos($mail, '@') !== false && strpos($mail, '.') !== false 
&& strlen($name>3) 
&& is_numeric($age)
){
  $string = 'Accesso eseguito'
};

echo $string;

?>

</body>
</html>