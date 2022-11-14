<?php
    session_start();
    if (!isset($_SESSION['username'])) {
      header('Location: login.php?mustLogin');
      exit;
  }


    $pageTitle = "Logga in";
    $pageId    = "login";
    require('src/dbconnect.php');


echo "<pre>";
print_r($_POST);
echo "</pre>";




?>
 <?php include('layout/header.php')?>




 <!-- Sidans/Dokumentets huvudsakliga innehåll -->


 <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/forms.css">
 <!-- CSS only -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
 

      <title>Skapa hund </title>

    </head>
    <body>
    <div class="ms-3 me-3">
      <h2>Välkommen!</h2>
</div>
</body>
</html>