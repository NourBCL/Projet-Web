<?PHP
   $conn = new PDO("mysql:host=localhost;dbname=project", 'root', '');
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $stmt = $conn->prepare("SELECT * FROM event ORDER BY date ASC");
   $stmt->execute();
 
   // set the resulting array to associative
   $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>

<html lang="en">

<head>
    <title>1,2,3 Diet</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="style/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="style/css/style.css">
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
                <li class="active"><a href="index.php">Home</a></li>
                <li><a class="drop" href="#">Pages</a>
                    <ul>
                        <li><a class="drop" href="#">Evenements</a>
                            <ul>
                                <li><a href="Page2/event1.html">Event 1</a></li>
                                <li><a href="Page2/event2.html">Event 2</a></li>
                                <li><a href="Page2/event4.html">Event 3</a></li>
                            </ul>
                        </li>
                        <li><a href="style/pages/full-width.html">Full Width</a></li>
                        <li><a href="style/pages/sidebar-left.html">Sidebar Left</a></li>
                        <li><a href="style/pages/sidebar-right.html">Sidebar Right</a></li>
                        <li><a href="style/pages/basic-grid.html">Basic Grid</a></li>
                        <li><a href="style/pages/font-icons.html">Font Icons</a></li>
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
    <div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/img2.jpg');">
        <div id="pageintro" class="hoc clear">
            <!-- ################################################################################################ -->
            <article>
                
                <h3 class="heading">Welcome to 1,2,3 Diet</h3>
                <p>Votre Santé , C'est Notre Intérêt </p>
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

            <!-- ################################################################################################ -->
            <!-- ################################################################################################ -->
            <!-- ################################################################################################ -->
            <div class="wrapper row3">
                <section class="hoc container clear">

                    <!-- top Products -->
                    <!-- product right -->

                    <center>
                        <h6>Evenements</h6>
                        
                    </center>

                    
                    <ul class=" flex" style="display: flex;justify-content: space-around;flex-wrap: wrap; list-style: none;">

                    
                    <?PHP
                   
                   foreach($stmt->fetchAll() as $k=>$evn){
                        ?>

                                

                    <li class="">

                        <article>
                            <div class="excerpt">
                                
                                <time datetime="2045-04-06T08:15+00:00"><i class="far fa-calendar-alt rgtspace-5"></i>
                                    <?PHP echo $evn['date']; ?>
                                </time>
                                <div class="excerpt">
                                    <h6 class="heading">
                                        <?PHP echo $evn['nom']; ?>
                                    </h6>
                                    <img src="images/<?PHP echo $evn['image']; ?>" alt="">
                                    <p>
                                        <?PHP echo $evn['description']; ?>
                                    </p>
                                    <footer><a class="btn" href="showDetails.php">Read More</a></footer>
                                </div>
                            </div>
                        </article>
                    </li>


                    <?php }?>
                            
                    </ul>




                </section>
            </div>




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
                        <p class="nospace btmspace-15">Diam nulla id condimentum magna scelerisque ac suspendisse
                            viverra est
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