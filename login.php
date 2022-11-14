<?php
    session_start();
    $pageTitle = "Logga in";
    $pageId    = "login";
    require('src/dbconnect.php');


echo "<pre>";
print_r($_POST);
echo "</pre>";

$message = "";
    if (isset($_GET['mustLogin'])) {
        $message = '
            <div class="error_msg">
                Sidan är inloggningsskyddad. Var snäll och logga in.
            </div>
        ';
    }

    if (isset($_GET['logout'])) {
        $message = '
            <div class="success_msg">
                Du är nu utloggad.
            </div>
        ';
    }


if (isset($_POST['doLogin'])) {
    $email    = trim($_POST['email']);
    $password = trim($_POST['password']);

    $sql = "
        SELECT * FROM users
        WHERE email = :email AND password = :password
    ";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    $user = $stmt->fetch();

    if ($user) {
        // User exists
        $_SESSION['username'] = $user['username'];
        $_SESSION['id']       = $user['id'];
        header('Location: welcome.php');
        exit;
    } else {
        $message = '
            <div class="error_msg">
                Fel inloggningsuppgifter. Försök igen!
            </div>
        ';
    }
}


    ?>
    <?php include('layout/header.php')
; ?>


<!-- Sidans/Dokumentets huvudsakliga innehåll -->




<!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- CSS only -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
 
 <body>
<div class="ms-3 me-3"> <br>
    <h2>Logga in</h2><br>

    <?=$message ?>

<form action="#" method="POST" class="row-g2">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">E-post:</label>
    <input name="email" type="text" class="form-control" id="inputEmail4">
  </div><br>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Lösenord:</label>
    <input name="password" type="text" class="form-control" id="inputPassword4">
  </div><br>
  <div class="col-md-4">
  <input type="submit" name="doLogin" value="Login" class="btn btn-primary">
</div>
</form>
</div>
</body>
     
    <!-- JavaScript and JqueryBundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>   
</html>