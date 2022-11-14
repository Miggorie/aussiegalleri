<!DOCTYPE html>
<html lang="sv"> 
<head>
  <meta charset="utf-8">
  
  <title><?=$pageTitle ?></title>


 <!-- CSS only -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<!-- The body id helps with highlighting current menu choice -->
<body id="<?=$pageId ?>">
  <div class="navbar">
  
  <!-- Above header -->
    <header class="ms-auto">
      <nav class="login" >
        <?php
          if (isset($_SESSION['username'])) {
            // ucfirst makes the first letter to a CAPITAL letter :)
            $loggedInUsername = htmlentities(ucfirst($_SESSION['username']));
            $aboveNave = "{$loggedInUsername} | <a href='logout.php'>Logga ut</a> | <a href='support.php'>Support</a>";
          } else {
            $aboveNave = "<a href='login.php'>Logga in</a> | <a href='support.php'>Support</a>";
          }

          echo $aboveNave;
        ?>

      </nav>  
        </div>
    </header>

    <!-- Header with logo and main navigation -->
    <header id="top">

      <!-- Main navigation menu -->

      <nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <a class="navbar-brand m-3" href="#">Adminpanel för aussiegalleriet</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" id="create-dog" href="create-dog.php">Skapa hund</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="image-upload"      href="image-upload.php">Bilduppladdning</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="update"      href="update-dog.php">Uppdatera hund</a>
      </li>
      
      
    </ul>
  </div>
</nav>
    </header>
        </div>
        </body>
      
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </html>


    