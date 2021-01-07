<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
} ?>
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
<title>Bistup</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
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
        <li><a href="/index.php"><i class="fas fa-home fa-lg"></i></a></li>
        
        <li><a href="#">Contact</a></li>
        <?php if (!isset($_SESSION['client_id'])) { ?>
          
        <li><a href="/views/loginC.php">Login</a></li>
        <li><a href="/views/register.php">Register</a></li>
        <?php } ?>
        
      </ul>
    </div>
    <?php if (isset($_SESSION['client_id'])) { ?>
      <div class="fl_left">
      
      <li><a href="/views/modifierC.php">About</a></li>

      </div>
    <div class="fl_right">
      <ul class="nospace">
        
        <li><i class="fas fa-address-card rgtspace-5"></i> <?php echo $_SESSION['client_identite']; ?></li>
        <li><i class="fas fa-envelope rgtspace-5"></i><?php echo $_SESSION['client_email']; ?></li>
        <li><a href="/views/logout.php"><i class="fas fa-sign-out-alt rgtspace-5"></i>Déconnexion</li></a>
      </ul>
    </div>
    <?php } ?>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="one_quarter first">
      <h1><a href="index.html">Bistup</a></h1>
      <p>Vestibulum amet</p>
    </div>
    <div class="one_quarter"><strong><i class="fas fa-phone rgtspace-5"></i> Call Us:</strong> +00 (123) 456 7890</div>
    <div class="one_quarter"><strong><i class="far fa-clock rgtspace-5"></i> Mon. - Sat.:</strong> 08.00am - 18.00pm</div>
    <div class="one_quarter">
      <form action="#" method="post">
        <label>
          <select>
            <option value="" selected="selected" disabled="disabled">Language</option>
            <option value="English">Default</option>
            <option value="German">German</option>
            <option value="Spanish">Spanish</option>
            <option value="Spanish">French</option>
          </select>
        </label>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <nav id="mainav" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li class="active"><a href="index.html">Home</a></li>
      <li><a class="drop" href="#">Pages</a>
        <ul>
          <li><a href="pages/gallery.html">Gallery</a></li>
          <li><a href="pages/full-width.html">Full Width</a></li>
          <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
          <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
          <li><a href="pages/basic-grid.html">Basic Grid</a></li>
          <li><a href="pages/font-icons.html">Font Icons</a></li>
        </ul>
      </li>
      <li><a class="drop" href="#">Dropdown</a>
        <ul>
          <li><a href="#">Level 2</a></li>
          <li><a class="drop" href="#">Level 2 + Drop</a>
            <ul>
              <li><a href="#">Level 3</a></li>
              <li><a href="#">Level 3</a></li>
              <li><a href="#">Level 3</a></li>
            </ul>
          </li>
          <li><a href="#">Level 2</a></li>
        </ul>
      </li>
      <li><a href="#">Link Text</a></li>
      <li><a href="#">Link Text</a></li>
      <li><a href="#">Link Text</a></li>
      <li><a href="#">Long Link Text</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </nav>
</div>