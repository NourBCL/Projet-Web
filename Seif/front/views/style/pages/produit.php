
<?php
require 'db.class.php';
$DB = new DB();
?>
<?php require 'header.php'; ?>

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
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
  <!-- header -->
  <section id="store" class="store py-5">
    <div class="container">
      <div class="row">
        <div class=" col-lg-8 mx-auto d-flex justify-content-around my-2 sortBtn flex-wrap">
          <a href="#store" class="btn btn-outline-secondary btn-black text-uppercase filter-btn m-2" data-filter="all"> all</a>
          
        </div>
      </div>
      <!-- search box -->
      <div class="row">

        <div class="col-10 mx-auto col-md-6">
          <form>
            <div class="input-group mb-3">
              <div class="input-group-prepend ">
                <span class="input-group-text search-box" id="search-icon"><i class="fas fa-search"></i></span>
              </div>
              <input type="text" class="form-control" placeholder='item....' id="search-item">
            </div>

          </form>
        </div>
      </div>
      <!--end of filter buttons -->
      <!-- store  items-->
      <script>
        document.getElementById("search-item").addEventListener("keyup", (e)=>{
if (e.key =="Enter") {
console.log(document.getElementById("search-item").value)
  window.location.href = "index.php?searchByName=" +  document.getElementById("search-item").value;

}

        })
        </script>
      <?php 
                                    
                                    $products ;
                                    
                                    if (isset($_GET["searchByName"])){

                                        $cat = '%' . $_GET["searchByName"] . '%';
                                        $products = $DB->query('SELECT * FROM products where `name` like :cat ;', array("cat"=>$cat));
                                    } else {
                                        $products = $DB->query('SELECT * FROM products;');
                                    }
                                    
                                    
        
                                    ?>
        

  
      <div class=" one_quarter" data-item="sweets">
      <?php foreach ($products as $product): ?>
          <div a style="width: 20rem;" class="one_quarter">
            <div class="img-container">
              <img style="height: 250px;" src="back/images/products/<?= $product->id ?>.jpg" class="card-img-top store-img" alt="">
              </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name"><?= $product->name; ?></h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold">
                  <?= number_format ($product->price,2); ?></strong></h5>
              </div>
        </div> 
          <!--###########################################-->
            
          <?php endforeach ?>
          <!-- end of card-->
        </div>
        <!--end of single store item-->
       

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