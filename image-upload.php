<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header('Location: login.php?mustLogin');
        exit;
    }

    $pageTitle = "Bilduppladdning";
    $pageId    = "upload";
    require('src/dbconnect.php');


$stmt = $pdo->query("SELECT * FROM dog");
$rows = $stmt->fetchAll();


    ?>
    <?php include('layout/header.php')
; ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
      <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
      <title>Bilduppladdning</title>
    </head>
    <body class="m-3">

    <h2>Ladda upp bilder</h2>

    <p>
                        <label for="search">Sök efter hund</label> <br>
                        <input type="text" id="search" name="birthday"></input>
                    </p>

                    <p>
                        <label for="search">Fotograferingsdatum</label> <br>
                        <input type="text" id="search" name="birthday"></input>
                    </p>


    <div class="mb-3">
  <label for="formFile" class="form-label">Huvudbild</label>
  <input class="form-control" type="file" id="formFile"><br>
  <label for="formFile" class="form-label">Hund tittar åt vänster</label>
<input class="form-control" type="file" id="formFile"><br>
<label for="formFile" class="form-label">Hund tittar åt höger</label>
<input class="form-control" type="file" id="formFile">
</div>
    </body>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </html>