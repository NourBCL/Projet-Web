<?php
require 'db.class.php';
$DB = new DB();
?>
<?php require 'header.php'; ?>

<div class="wrapper row2">
        <nav id="mainav" class="hoc clear">
            <!-- ################################################################################################ -->
            <ul class="clear">
                <li><a href="index.php">Home</a></li>
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
                <li  class="active"><a href="product.php">Produits</a></li>
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
<div class="wrapper bgded overlay" style="background-image:url('../images/demo/backgroundimg.jpg');">
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <h6 class="heading">Products</h6>
    <!-- ################################################################################################ -->
    <ul>
      <li><a href="../index.php">Home</a></li>
      <li><a href="products.php">Products</a></li>
    </ul>
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
    <div class="content"> 
      <!-- ################################################################################################ -->
      <div id="gallery">
        <figure>
          <header class="heading">Products availabe</header>
          <ul class="nospace clear">
          
          <?php $products = $DB->query('SELECT * FROM products'); ?>
          <?php foreach ($products as $product): ?>

              <!--###########################################--> 
              <!-- store -->
  <section id="store" class="store py-5">
    <div class="container">
      <!-- section title -->
      <div class="row">
        <div class="col-10 mx-auto col-sm-6 text-center">
          <h1 class="text-capitalize">our <strong class="banner-title ">store</strong></h1>
        </div>
      </div>
      <!-- end of section title -->
      
                <div class="row" class="store-items" id="store-items">
        <!-- single item -->
        <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3 store-item sweets" data-item="sweets">
          <div class="card ">
            <div style="width: 20rem;" class="img-container">
              <img  src="../../back/views/images/products/<?= $product->id ?>.jpg" class="card-img-top store-img" alt="">
              <span class="store-item-icon">
                <i class="fas fa-shopping-cart"></i>
              </span>
            </div>
            <div class="card-body">
              <div class="card-text d-flex justify-content-between text-capitalize">
                <h5 id="store-item-name"><?= $product->name; ?></h5>
                <h5 class="store-item-value">$ <strong id="store-item-price" class="font-weight-bold"><?= number_format ($product->price,2); ?></strong></h5>

              </div>
            </div>


          </div> 
          <!--###########################################-->
            
          <?php endforeach ?>
     

            </li>
            <!--<li class="one_quarter"><a href="#"><img src="../images/demo/348x261.png" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="../images/demo/348x261.png" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="../images/demo/348x261.png" alt=""></a></li>
            <li class="one_quarter first"><a href="#"><img src="../images/demo/348x261.png" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="../images/demo/348x261.png" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="../images/demo/348x261.png" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="../images/demo/348x261.png" alt=""></a></li>
            <li class="one_quarter first"><a href="#"><img src="../images/demo/348x261.png" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="../images/demo/348x261.png" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="../images/demo/348x261.png" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="../images/demo/348x261.png" alt=""></a></li>-->
          </ul>
          <figcaption>Products availabe</figcaption>
        </figure>
      </div>
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      <nav class="pagination"> 
        <ul>
          <li><a href="#">&laquo; Previous</a></li>
          <li class="current"><a href="products.php">1</a></li>
           <!--<li><a href="gallery 1.php">2</a></li>
                   
          <li><strong>&hellip;</strong></li>
          <li><a href="#">6</a></li>
          <li class="current"><strong>7</strong></li>
          <li><a href="#">8</a></li>
          <li><a href="#">9</a></li>
          <li><strong>&hellip;</strong></li>
          <li><a href="#">14</a></li>
          <li><a href="#">15</a></li>
        -->
          <li><a href="gallery 1.php">Next &raquo;</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

</body>
</html>