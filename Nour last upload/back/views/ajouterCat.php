<?php
    include_once '../Model/categorie.php';
    include_once '../Controller/categorieC.php';

    $error = "";

    // create user
    $category = null;

    // create an instance of the controller
    $categoryC = new categoryC();
    if (
       
        isset($_POST["nom"])&&
        isset($_POST["description"])&&
        isset($_POST["image"])
    ) {
        if (
            
            !empty($_POST["nom"])&&
            !empty($_POST["description"])&&
            !empty($_POST["image"])
        ) {
            $category = new category(
                
                $_POST['nom'],
                $_POST['description'],
                $_POST['image']
            );
            $categoryC->ajouterCat($category);
           // header('Location:afficherEvn.php');
        }
        else
            $error = "Missing information";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <script src="script.js"></script>
    <!-- Title Page-->
    <title>Categoris</title>

   <?php
        include ('style.php'); 
   ?>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
       <?php
            include ('header.php');
       ?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">



                            <!--***********************************************************************************-->
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Add Category</strong>
                                        <div id="erreur"></div>
                                    </div>

                                    <div class="card-body card-block">
                                        <form action="" method="POST" class="form-horizontal">

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="nom" name="nom" placeholder="name"
                                                        class="form-control">
                                                    <!--<small class="form-text text-muted"></small>-->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input"
                                                        class=" form-control-label">Decription</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="description" id="description" rows="9"
                                                        placeholder="Content..." class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Picture</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="image" name="image"
                                                        class="form-control-file">
                                                </div>
                                            </div>
                                            <div class="card-footer">

                                                <button type="submit" class="btn btn-primary btn-sm" name="Add"
                                                    value="Add">
                                                    <i class="fa fa-dot-circle-o"></i> Add
                                                </button>
                                            </div>
                                        </form>
                                    </div>

                                </div>

                                <!--********************************************************************************************-->

                            </div>
                        </div>
                    </div>
                </div>

            </div>

           <?php
                include ('style2.php'); 
           ?>
</body>

</html>
<!-- end document-->