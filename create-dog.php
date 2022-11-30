<?php
    session_start();
    if (!isset($_SESSION['username'])) {
      header('Location: login.php?mustLogin');
      exit;
  }

    $pageTitle = "Skapa hund";
    $pageId    = "create";
    require('src/dbconnect.php');


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



 <!-- Sidans/Dokumentets huvudsakliga innehåll -->

    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/dropdown.css">
 <!-- CSS only -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
 

      <title>Skapa hund </title>

    </head>
    <body>

<div class="ms-3 me-3">
<br><h2>Skapa hund</h2><br>
    
    <form action="" method="POST" class="row g-3">
  <div class="col-md-6">
    <label for="dogName" class="form-label">Hundens namn</label>
    <input name="dogName" type="text" class="form-control" id="dogName">
  </div>
  <div class="col-md-6">
    <label for="dogReg" class="form-label">Registreringsnummer</label>
    <input name="dogReg" type="text" class="form-control" id="dogReg">
  </div>
  <div class="col-md-6">
    <label for="dogURL" class="form-label">url</label>
    <input name="dogURL" type="text" class="form-control" id="dogURL">
  </div>
  <div class="col-md-6">
    <label for="dogColor" class="form-label">Färg</label>
    <select id="dogColor" class="form-select">
    <option name="dogColor" selected>Välj...</option>
    <?php foreach($colors as $color)  {  ?> 
         <option><?=htmlentities($color['colorSwe'])?></option>
      <?php } ?>
    </select>
    </div>

  <div class="col-md-4">
    <label for="dogTail" class="form-label">Svanslängd</label>
    <select name="dogTail" id="dogTail" class="form-select">
    <option selected>Välj...</option>
    <?php foreach($tails as $tail)  {  ?> 
         <option><?=htmlentities($tail['tailSwe'])?></option>
      <?php } ?>
    </select>
  </div>

  <div class="col-md-4">
    <label for="isBitch" class="form-label">Kön</label>
    <select name="isBitch"id="isBitch" class="form-select">
    <option selected>Välj...</option>
      <option>Tik</option>
      <option>Hane</option>
    </select>
  </div>

  <div class="col-md-4">
    <label for="dogBorn" class="form-label">Född i...</label>
    <select id="dogBorn" class="form-select">
    <option selected><?=($countries[1]['countrySE']);?></option>
    <?php foreach($countries as $country)  {  ?> 
         <option><?=htmlentities($country['countrySE'])?></option>
      <?php } ?>
    </select>
  </div>




<!-- Sök kull -->


<div class="d-flex justify-content-start gap-5">
<div class="col-md-6">
    <label for="serchLitter" class="form-label">Sök efter kull</label>
    <input name="serchLitter" type="text" class="form-control" id="serchLitter">  
  </div>
  <div class="mt-6"id="outputMessage">Sucessmessage</div>
  <button type="button" style="height: 40px"class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Skapa kull</button>

    </div>
  <div id ="litterOutput">
        <h5>Föräldrar</h5>
  <ul class="list-group list-group-flush w-50 p-3">
  <li class="list-group-item">e. </li>
  <li class="list-group-item">u.</li>
</ul>
  </div>


<!-- JAVASCRIPT PART -->


  <!-- <script type="text/javascript">

function filterFuncmesstion() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("litterInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("option");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}

</script> -->
   
  <div class="col-12"><br>
    <input name="submitBtn" value="Skapa hund" type="submit" class="btn btn-primary">
  </div>
</form>


<!-- Popup for Skapa Kull-->



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Skapa kull</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
      
      <form action"" method="POST"> 
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Födelsedagsdatum:</label>
            <input type="date" value="Sök kull" type="submit" class="form-control" id="recipient-name">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button name="searchBtn" type="button" class="btn btn-primary">Sök kull</button>
    </form>
      </div>
    </div>
  </div>
</div>

</div>
    </body>

    
  
    <!-- JavaScript and JqueryBundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>   

<script src="create-dog.php">
</html>

    <?php include('layout/footer.php'); ?> 