
<?php
include '../Controller/nutritionistsC.php';
require_once '../Model/nutritionistsM.php';
$nutritionistC=new nutritionistC();
$list=$nutritionistC->retrieveAllnutritionists();
?>




<!DOCTYPE html>
<!--
Template Name: Bistup
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Bistup | Pages | Gallery</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="nospace">
        <li><a href="../index.html"><i class="fas fa-home fa-lg"></i></a></li>
        <li><a href="#">About</a></li>
        <li><a href="mail.php">Contact</a></li>
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
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<div>
  <img src="images/nom du site.gif" class="Logo-Sige" alt="">
</div>
<div class="d-flex justify-content-center">        
  <img src="images/underNavBar.jpg" class="img-fluid" alt="Responsive image" style="width: 80%;">
</div>

<div class="container">
  
  <form method="post">
  <label>Search</label>
  <input type="text" name="search">
  <input type="submit" name="submit">
  </form>
  <?php
  $con = new PDO("mysql:host=localhost;dbname=projet",'root','');
  if (isset($_POST["submit"])) {
    $str = $_POST["search"];
    $sth = $con->prepare("SELECT * FROM `nutritionists` WHERE adresse_cab = '$str'");
    $sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth -> execute();
    
    if($row = $sth->fetch())
    {
      ?>
      <br><br><br>
      <table>
        <tr>
          <th>first_Name</th>
          <th>last_name</th>
        </tr>
        <tr>
          <td><?php echo $row->nom; ?></td>
          <td><?php echo $row->prenom;?></td>
        </tr>
      </table>
  <?php 
      } 
      else{
        echo "address Does not exist";
      }
    }
  ?>
  <h1 class="h-style">Our Nutritionists</h1>
  <div class="row">
    <?php 
      $list=$nutritionistC->retrieveAllnutritionists();
      foreach($list as $u) { 
    ?>
    <div class="card col-md-3">
      <img class="card-img-top img-size" src=<?PHP echo $u['imgUrl']; ?> alt="Card image cap">
      
      <div class="card-body">
        <h5 class="card-title"><?php echo $u['nom'] ?> <?php echo $u['prenom'] ?></h5>
        <p class="card-text">
          <ul>
            <li>
              Nutritionist
            </li>
            <li>
            <?php echo $u['age'] ?>
            </li>
            <li>
            <?php echo $u['adresse_cab'] ?>
            </li>
          </ul>
        </p>
        <form method="post">
          <input type="hidden" value=<?PHP echo $u['id']; ?> name="id_nut">
          <input type="hidden" value=<?PHP echo 1; ?> name="id_user">
          <button type="submit" class="btn btn-primary" formaction="rendezvous.php" style="float: right;">Consultation</button>
        </form>
          
      </div>
    </div>
    <?php } ?>
  </div>
</div>
</div>

<div class="container">
  <h2 class="h-style">
    Why is eating well important?
  </h2>
  <div class="txt-size">
    <p>Have a healthy body weight</p>
    <p>Feel good about themselves</p>
    <p>Have plenty of energy to be active</p>
    <p>Have stronger muscles and bones</p>
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<footer>
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left"></p>Made by Nutriveloppers</p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>