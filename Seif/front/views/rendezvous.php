<?php
require_once "../controller/nutritionistsC.php";
require_once '../controller/rdvC.php';
$rdvC=new rdvC();

if (isset($_POST["id_user"]) &&
isset($_POST["id_nut"]) &&
isset($_POST["text"])) {
    if(!empty($_POST["id_user"]) &&
    !empty($_POST["id_nut"]) &&
    !empty($_POST["text"]) &&
    !empty($_POST["date"])) {
        $rdvC->addRdv($_POST["id_nut"], $_POST["id_user"], $_POST["text"], $_POST["date"]);
        header('Location:nutritionists.php');
    }
}
    else {
        // header('Location:nutritionists.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/rendezvous.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="style/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="nospace">
        <li><a href="../index.html"><i class="fas fa-home fa-lg"></i></a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#">Register</a></li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
        <li><i class="fas fa-phone rgtspace-5"></i> +00 (123) 456 7890</li>
        <li><i class="fas fa-envelope rgtspace-5"></i> info@domain.com</li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<div>
  <img src="images/nom du site.gif" class="Logo-Sige" alt="">
</div>

        <form method="POST">
    <div class="container" style="margin-top: 300px;">
        <div class="form-group row">
            <label for="text" class="col-2 col-form-label">Description :</label>
            <div class="col-10">
                <textarea class="form-control" name="text" id="text" placeholder="Why the Appointment?"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="date" class="col-2 col-form-label">Date :</label>
            <div class="col-10">
                <input class="form-control" type="datetime-local" name="date" id="date" >
            </div>
        </div>
            <input type="hidden" value=<?PHP echo $_POST['id_nut']; ?> name="id_nut">
            <input type="hidden" value=<?PHP echo $_POST['id_user']; ?> name="id_user">
            <button type="submit" style="float: right;" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
<script src="js/rendezvous.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>