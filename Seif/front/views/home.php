<?PHP
    include('../controller/categorieC.php');

    $categoryC=new CategoryC();
    $listeCategory=$categoryC->afficherCategory();

?>


<!DOCTYPE html>

<html lang="en">

<head>
    <title>1,2,3 Diet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="style/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="style/css/styles.css">
</head>

<body id="top">

    <div class="wrapper row0">
        <div id="topbar" class="hoc clear">

            <div class="fl_left">
                <ul class="nospace">
                    <li><a href="index.php"><i class="fas fa-home fa-lg"></i></a></li>
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
                <li class="active"><a href="home.php">Home</a></li>
                <li><a href="index.php">Events</a></li>
                <li><a href="nutritionists.php">Nutritionnistes</a></li>
                <li><a href="product.php">Products</a></li>
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
                <footer><a class="btn" href="">Sign up</a></footer>
            </article>
            <!-- ################################################################################################ -->
        </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row3">
        <main class="hoc container clear">
            <!-- main body -->
            <!-- ################################################################################################ -->
            <section id="introblocks">
                <div class="sectiontitle">
                    <h3 class="heading">Our services</h3>
                </div>
                <ul class="nospace group">
                    <li class="one_third first">
                        <article><a href="#"><i class="fas fa-ambulance"></i></a>
                            <h6 class="heading">Nutritionnistes</h6>
                            <p>Cursus massa nec vehicula nunc neque et risus mauris rhoncus at justo ac lacinia maecenas
                                [&hellip;]</p>
                            <footer><a class="btn" href="nutritionists.php">Check</a></footer>
                        </article>
                    </li>
                    <li class="one_third">
                        <article><a href="#"><i class="fas fa-calendar-alt"></i></a>
                            <h6 class="heading">Events</h6>
                            <p>Sit amet ornare enim tempus sed nec consequat quam nam viverra purus ac justo iaculis
                                facilisis [&hellip;]</p>
                            <footer><a class="btn" href="index.php">Check</a></footer>
                        </article>
                    </li>
                    <li class="one_third">
                        <article><a href="#"><i class="fas fa-shopping-basket"></i></a>
                            <h6 class="heading">Store</h6>
                            <p>Dolor quis pretium metus vehicula id praesent ac dolor condimentum dapibus erat eget
                                placerat [&hellip;]</p>
                            <footer><a class="btn" href="product.php">Check</a></footer>
                        </article>
                    </li>
                </ul>
            </section>
            <!-- ################################################################################################ -->
            <hr class="btmspace-80">
            <!-- ################################################################################################ -->
            <section>
                <div class="sectiontitle">
                    <h6 class="heading">Make your life  healthy with 1,2,3 Diet</h6>
                </div>
                <ul class="nospace group overview">
                    <li class="one_third">
                        <figure><img src="images/im1.png" alt="">
                        </figure>
                    </li>
                    <li class="one_third">
                        <figure><img src="images/im2.png" alt="">
                        </figure>
                    </li>
                    <li class="one_third">
                        <figure><img src="images/im3.png" alt="">
                           
                </ul>
            </section>
            <!-- ################################################################################################ -->
            <!-- / main body -->
            <div class="clear"></div>
        </main>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
  
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
   
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    
            <!-- ################################################################################################ -->

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
            <div class="one_quarter">
                <h6 class="heading">Vulputate cum sociis</h6>
                <p class="nospace btmspace-15">Diam nulla id condimentum magna scelerisque ac suspendisse viverra est
                    purus.</p>
                <form method="post" action="#">
                    <fieldset>
                        <legend>Newsletter:</legend>
                        <input class="btmspace-15" type="text" value="" placeholder="Name">
                        <input class="btmspace-15" type="text" value="" placeholder="Email">
                        <button type="submit" value="submit">Submit</button>
                    </fieldset>
                </form>
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