<?php 
include("controller/eventC.php");

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
    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
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
                <li class="active"><a href="index.html">Home</a></li>
                <li><a class="drop" href="#">Pages</a>
                    <ul>
                        <li><a class="drop" href="#">Evenements</a>
                            <ul>
                                <li><a href="Page2/event1.html">Event 1</a></li>
                                <li><a href="Page2/event2.html">Event 2</a></li>
                                <li><a href="Page2/event4.html">Event 3</a></li>
                            </ul>
                        </li>
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
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
        <div id="pageintro" class="hoc clear">
            <!-- ################################################################################################ -->
            <article>
                <p>Amet nunc et accumsan blandit</p>
                <h3 class="heading">Metus purus pharetra sit</h3>
                <p>Tempor praesent eu orci sodales sagittis neque eget consectetur</p>
                <footer><a class="btn" href="#">Fringilla est pharetra</a></footer>
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
                    <h6 class="heading">Erat etiam aliquet diam nec purus</h6>
                    <p>Vitae porta purus hendrerit mauris elementum nibh et placerat</p>
                </div>
                <ul class="nospace group">
                    <li class="one_third first">
                        <article><a href="#"><i class="fas fa-allergies"></i></a>
                            <h6 class="heading">Pretium ante libero</h6>
                            <p>Cursus massa nec vehicula nunc neque et risus mauris rhoncus at justo ac lacinia maecenas
                                [&hellip;]</p>
                            <footer><a class="btn" href="#">Read More</a></footer>
                        </article>
                    </li>
                    <li class="one_third">
                        <article><a href="#"><i class="fas fa-cube"></i></a>
                            <h6 class="heading">Malesuada justo metus</h6>
                            <p>Sit amet ornare enim tempus sed nec consequat quam nam viverra purus ac justo iaculis
                                facilisis [&hellip;]</p>
                            <footer><a class="btn" href="#">Read More</a></footer>
                        </article>
                    </li>
                    <li class="one_third">
                        <article><a href="#"><i class="fas fa-podcast"></i></a>
                            <h6 class="heading">Vivamus tempor bibendum</h6>
                            <p>Dolor quis pretium metus vehicula id praesent ac dolor condimentum dapibus erat eget
                                placerat [&hellip;]</p>
                            <footer><a class="btn" href="#">Read More</a></footer>
                        </article>
                    </li>
                </ul>
            </section>
            <!-- ################################################################################################ -->
            <hr class="btmspace-80">
            <!-- ################################################################################################ -->
            <section>
                <div class="sectiontitle">
                    <h6 class="heading">Metus vestibulum fermentum</h6>
                    <p>Neque vel malesuada ultrices mi est vulputate ex sit amet</p>
                </div>
                <ul class="nospace group overview">
                    <li class="one_third">
                        <figure><a href="#"><img src="images/demo/348x261.png" alt=""></a>
                            <figcaption>
                                <h6 class="heading">Posuere nisl lorem</h6>
                                <p>Nisi egestas nunc nibh urna molestie in gravida vel tincidunt.</p>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="one_third">
                        <figure><a href="#"><img src="images/demo/348x261.png" alt=""></a>
                            <figcaption>
                                <h6 class="heading">Curabitur vestibulum</h6>
                                <p>Id metus aliquam id fringilla dui duis scelerisque sed mi.</p>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="one_third">
                        <figure><a href="#"><img src="images/demo/348x261.png" alt=""></a>
                            <figcaption>
                                <h6 class="heading">Hendrerit leo vestibulum</h6>
                                <p>Sed varius sed ex eros accumsan eget nisl a laoreet porta.</p>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="one_third">
                        <figure><a href="#"><img src="images/demo/348x261.png" alt=""></a>
                            <figcaption>
                                <h6 class="heading">Euismod urna sed</h6>
                                <p>Urna vestibulum suscipit lacus quis odio vestibulum venenatis.</p>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="one_third">
                        <figure><a href="#"><img src="images/demo/348x261.png" alt=""></a>
                            <figcaption>
                                <h6 class="heading">Tincidunt a posuere</h6>
                                <p>Phasellus vel hendrerit lorem sed tristique lacus in auctor.</p>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="one_third">
                        <figure><a href="#"><img src="images/demo/348x261.png" alt=""></a>
                            <figcaption>
                                <h6 class="heading">Posuere elit vel</h6>
                                <p>Euismod libero sodales ut cum sociis natoque penatibus et magnis.</p>
                            </figcaption>
                        </figure>
                    </li>
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
    <div class="wrapper coloured">
        <article class="hoc cta clear">
            <!-- ################################################################################################ -->
            <h6 class="three_quarter first">Dis parturient montes nascetur ridiculus mus vivamus</h6>
            <footer class="one_quarter"><a class="btn" href="#">Porta risus purus</a></footer>
            <!-- ################################################################################################ -->
        </article>
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
                                        <footer><a class="btn" href="Page2/event1.html">Read More</a></footer>
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
            <ul class="nospace group">
                <li class="one_quarter first"><a href="#"><img src="images/demo/249x100.png" alt=""></a></li>
                <li class="one_quarter"><a href="#"><img src="images/demo/249x100.png" alt=""></a></li>
                <li class="one_quarter"><a href="#"><img src="images/demo/249x100.png" alt=""></a></li>
                <li class="one_quarter"><a href="#"><img src="images/demo/249x100.png" alt=""></a></li>
            </ul>
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
    <script src="layout/scripts/jquery.min.js"></script>
    <script src="layout/scripts/jquery.backtotop.js"></script>
    <script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>

</html>