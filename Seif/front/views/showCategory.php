<?php 
include("../controller/eventC.php");

$category= null;
if (isset($_POST['nom'])) {
    $category = $_POST['nom'];
   // echo($category);
}
$eventC = new eventC() ;
$listeCategory=$eventC->choseCategory($category);
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <title>1,2,3 Diet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="style/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top">

    <div class="wrapper row0">
        <div id="topbar" class="hoc clear">

            <div class="fl_left">
                <ul class="nospace">
                    <li><a href="index.html"><i class="fas fa-home fa-lg"></i></a></li>
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
        </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row1">
        <?php
include('header.php');
?>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row2">
        <nav id="mainav" class="hoc clear">
            <!-- ################################################################################################ -->
            <ul class="clear">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="index.php">Events</a></li>
                <li><a href="nutritionists.php">Nutristionnistes</a></li>
                <li><a href="Products.php">Products</a></li>
            </ul>
            <!-- ################################################################################################ -->
        </nav>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/img2.jpg');">
        <div id="pageintro" class="hoc clear">
            <!-- ################################################################################################ -->
            <article>
                <!--<p>Amet nunc et accumsan blandit</p>-->
                <h3 class="heading">Welcome to 1,2,3 Diet</h3>
                <p>Votre Santé , C'est notre intérêt</p>
            </article>
            <!-- ################################################################################################ -->
        </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
   
    <section class="ab-info-main py-md-5 py-4">
        <div class="container py-md-3">
            <!-- top Products -->
            <!-- product right -->
            <div class="container">
                <div class="row">
                    <div class=" nospace group latest row">
                        <center>
                            <h6>Evenements</h6>
                        </center>
                        <?PHP
              foreach($listeCategory as $category){
            ?>
                        <ul class="col">
                            <li class="one_third">
                                <article>
                                    <time datetime="2045-04-06T08:15+00:00"><i
                                            class="far fa-calendar-alt rgtspace-5"></i>
                                        <?PHP echo $category['date']; ?>
                                    </time>
                                    <div class="excerpt">
                                        <h6 class="heading">
                                            <?PHP echo $category['nom']; ?>
                                        </h6>
                                        <img src="images/<?PHP echo $category['image']; ?>" alt="">
                                        <p>
                                            <?PHP echo $category['description']; ?>
                                        </p>
                                        <footer><a class="btn" href="showDetails.php">Read More</a></footer>
                                    </div>
                                </article>
                            </li>
                        </ul>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>




    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row2">
        <figure class="hoc container clear clients">
            <!-- ################################################################################################ -->
     
            <!-- ################################################################################################ -->
        </figure>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row4">
        <footer id="footer" class="hoc clear">
            <!-- ################################################################################################ -->
            <div class="one_quarter first">
                <h6 class="heading">Nulla ullamcorper</h6>
                <ul class="nospace btmspace-30 linklist contact">
                    <li><i class="fas fa-map-marker-alt"></i>
                        <address>
                            Street Name &amp; Number, Town, Postcode/Zip
                        </address>
                    </li>
                    <li><i class="fas fa-phone"></i> +00 (123) 456 7890</li>
                    <li><i class="far fa-envelope"></i> info@domain.com</li>
                </ul>
                <ul class="faico clear">
                    <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a class="faicon-dribble" href="#"><i class="fab fa-dribbble"></i></a></li>
                    <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="one_quarter">
                <h6 class="heading">Dignissim nibh ut</h6>
                <ul class="nospace linklist">
                    <li><a href="#">Natoque penatibus et magnis</a></li>
                    <li><a href="#">Dis parturient montes</a></li>
                    <li><a href="#">Nascetur ridiculus mus</a></li>
                    <li><a href="#">Vestibulum tincidunt nisi</a></li>
                    <li><a href="#">Sed eleifend scelerisque</a></li>
                </ul>
            </div>
            <div class="one_quarter">
                <h6 class="heading">Vestibulum cras placerat</h6>
                <ul class="nospace linklist">
                    <li><a href="#">Maecenas vestibulum molestie</a></li>
                    <li><a href="#">Arcu cras sed tincidunt</a></li>
                    <li><a href="#">Enim maecenas sed mi dictum</a></li>
                    <li><a href="#">Dolor laoreet fringilla</a></li>
                    <li><a href="#">Augue curabitur lobortis</a></li>
                </ul>
            </div>
            
            <!-- ################################################################################################ -->
        </footer>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row5">
        <div id="copyright" class="hoc clear">
            <!-- ################################################################################################ -->
            <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
            <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/"
                    title="Free Website Templates">OS Templates</a></p>
            <!-- ################################################################################################ -->
        </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
    <!-- JAVASCRIPTS -->
    <script src="style/layout/scripts/jquery.min.js"></script>
    <script src="style/layout/scripts/jquery.backtotop.js"></script>
    <script src="style/layout/scripts/jquery.mobilemenu.js"></script>
</body>

</html>