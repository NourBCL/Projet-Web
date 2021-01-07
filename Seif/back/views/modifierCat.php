<?php
	include "../controller/categorieC.php";
	include_once '../Model/categorie.php';

	$categoryC = new categoryC();
	$error = "";
	
	if (
		
        isset($_POST["nom"]) &&
        isset($_POST["description"]) &&
        isset($_POST["image"])
	){
		if (
            
            !empty($_POST["nom"]) && 
            !empty($_POST["description"]) && 
            !empty($_POST["image"]) 
        ) {
            $category = new category(
                
                $_POST['nom'], 
                $_POST['description'],
                $_POST['image']
			);
			
            $categoryC->modifierCat($category, $_GET['id']);
            //header('refresh:5;url=afficherEvn.php');
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

    <!-- Title Page-->
    <title>Events</title>
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
                                        <strong>Edit Category</strong>
                                        <div id="erreur"></div>
                                    </div>
                                    <div class="card-body card-block">
                                        <?php
			if (isset($_GET['id'])){
				$category = $categoryC->recupererCat($_GET['id']);
				
		?>
                                        <form action="" method="POST">
                                            <div class="form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">New Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="nom" name="nom" placeholder="new name"
                                                        value="<?php echo $category['nom']; ?>" class="form-control">
                                                    <!--<small class="form-text text-muted"></small>-->
                                                </div>
                                            </div>


                                            <div class="col-12">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Edit
                                                        decription</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="description" id="description" rows="9"
                                                        placeholder="Content..."
                                                        value="<?php echo $category['description']; ?>"
                                                        class="form-control"></textarea>
                                                </div>
                                            </div>
                                    </div>
                                
                                    <br>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="file-input" class=" form-control-label">New
                                                picture</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="file" id="image" name="image"
                                                value="<?php echo $category['image']; ?>" class="form-control-file">
                                        </div>
                                    </div>
                                    <div class="card-footer">


                                        <button type="submit" class="btn btn-primary btn-sm" name="save" value="save"
                                            onclick="return verif_edit();">
                                            <i class="fa fa-dot-circle-o"></i> Save
                                        </button>


                                    </div>
                                    </form>
                                    <?php
		                                        }
		                                    ?>
                                </div>

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