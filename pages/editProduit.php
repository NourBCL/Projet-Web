<?php
	require_once 'produitC.php';
	require_once 'produitM.php';

    $produitC = new produitC();
    if (isset($_POST["nom"]) &&
    isset($_POST["marque"]) &&
    isset($_POST["poids"]) &&
    isset($_POST["couleur"]) &&
    isset($_POST["prix"])) {
        if(!empty($_POST["nom"]) &&
        !empty($_POST["marque"]) &&
        !empty($_POST["poids"]) &&
        !empty($_POST["couleur"]) &&
        !empty($_POST["prix"])) {
            $produit=new produit($_POST['nom'], $_POST['marque'], $_POST['poids'], $_POST['couleur'], $_POST['prix']);
            $produitC->updateProduits($produit, $_POST['id']);;
            header('Location:produit.php');
        }
    }
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/Prod.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Edit Product</h2>
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Product's Name" name="nom" required="">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Product's Brand" name="marque" required="">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="Product's Weight" name="poids" required="">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Product's Color" name="couleur" required="">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="Product's Price" name="prix" required="">
                        </div>
                        <div class="p-t-20">
                            <input type="hidden" value=<?PHP echo $_POST['id']; ?> name="id">
                            <button class="btn btn--radius btn--green" type="submit">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>