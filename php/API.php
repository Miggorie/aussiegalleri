<?php
    session_start();

    $pageTitle = "Skapa hund";
    $pageId    = "create";
    require('src/dbconnect.php');

// CREATE DOG

















if (isset($_POST['submitBtn'])){
  if ($_POST['isBitch'] == 'Tik'){
    $_POST['isBitch'] = 0;
  }
 else if ($_POST['isBitch'] == 'Hane'){
    $_POST['isBitch'] = 1;
  }

  else{

  }

}

if (isset($_POST['litterItem'])){
  if ($_POST['litterItem'] == 'litterInput'){
    echo "hej";
  }
 else if ($_POST['isBitch'] == 'Hane'){
    $_POST['isBitch'] = 1;
  }

  else{

  }

}

echo "<pre>";
print_r($_POST);
echo "</pre>";


$stmt = $pdo->query("SELECT * FROM color");
$colors = $stmt->fetchAll();

$ist = $pdo->query("SELECT * FROM tail");
$tails = $ist->fetchAll();

$ost = $pdo->query("SELECT * FROM origin");
$countries = $ost->fetchAll();

$kull = $pdo->query("SELECT * FROM litter");
$litters = $kull->fetchAll();



    ?>
    <?php include('layout/header.php')
; ?>