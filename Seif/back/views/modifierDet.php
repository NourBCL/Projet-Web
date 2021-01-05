<?php
	include "../controller/detailsC.php";
	include_once '../Model/details.php';

	$detailsC = new detailsC();
	$error = "";
	
	if (
		
        isset($_POST["image1"]) &&
        isset($_POST["title1"]) && 
        isset($_POST["description1"]) &&
        isset($_POST["title2"]) &&
        isset($_POST["description2"]) &&
        isset($_POST["map"]) &&
        isset($_POST["gallery1"]) &&
        isset($_POST["gallery2"]) &&
        isset($_POST["gallery3"]) &&
        isset($_POST["gallery4"]) &&
        isset($_POST["gallery5"]) &&
        isset($_POST["gallery6"])
	){
		if (
            
            !empty($_POST["image1"]) && 
            !empty($_POST["title1"]) && 
            !empty($_POST["description1"]) &&
            !empty($_POST["title2"]) &&
            !empty($_POST["description2"]) &&
            !empty($_POST["map"]) &&
            !empty($_POST["gallery1"]) &&
            !empty($_POST["gallery2"]) &&
            !empty($_POST["gallery3"]) &&
            !empty($_POST["gallery4"]) &&
            !empty($_POST["gallery5"]) &&
            !empty($_POST["gallery6"]) 
        ) {
            $event = new event(
                
                $_POST['image1'], 
                $_POST['title1'],
                $_POST['description1'] ,
                $_POST['title2'],
                $_POST['description2'],
                $_POST['map'],
                $_POST['gallery1'],
                $_POST['gallery2'],
                $_POST['gallery3'],
                $_POST['gallery4'],
                $_POST['gallery4'],
                $_POST['gallery6']
			);
			
            $detailsC->modifierDet($details, $_GET['id']);
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
                                        <strong>Edit Details</strong>
                                        <div id="erreur"></div>
                                    </div>
                                    <div class="card-body card-block">
                                        <?php
			if (isset($_GET['id'])){
				$details = $detailsC->recupererDetails($_GET['id']);
				
		?>
                                        <form action="" method="POST">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">New
                                                        picture</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="image1" name="image1"
                                                        value="<?php echo $details['image1']; ?>"
                                                        class="form-control-file">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">New first
                                                        title</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="title1" name="title1"
                                                        placeholder="new first title"
                                                        value="<?php echo $details['title1']; ?>" class="form-control">
                                                    <!--<small class="form-text text-muted"></small>-->
                                                </div>
                                            </div>


                                            <div class="col-12">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Edit
                                                        decription 1</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="description1" id="description1" rows="9"
                                                        placeholder="Content..."
                                                        value="<?php echo $details1['description1']; ?>"
                                                        class="form-control"></textarea>
                                                </div>
                                            </div>

                                            </div>
                                            <div class="form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">New second
                                                        title</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="title2" name="title2"
                                                        placeholder="new first title"
                                                        value="<?php echo $details['title2']; ?>" class="form-control">
                                                    <!--<small class="form-text text-muted"></small>-->
                                                </div>
                                            </div>


                                            <div class="col-12">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">Edit
                                                        decription 2</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="description2" id="description2" rows="9"
                                                        placeholder="Content..."
                                                        value="<?php echo $details['description2']; ?>"
                                                        class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">New
                                                        Map</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="map" name="map"
                                                        value="<?php echo $details['map']; ?>"
                                                        class="form-control-file">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col col-md-3">
                                                    <label for="categorie" class=" form-control-label">Edit Gallery</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="gallery1" name="gallery1"
                                                        value="<?php echo $details['gallery1']; ?>"
                                                        class="form-control-file">
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="gallery2" name="gallery2"
                                                        value="<?php echo $details['gallery2']; ?>"
                                                        class="form-control-file">
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="gallery3" name="gallery3"
                                                        value="<?php echo $details['gallery3']; ?>"
                                                        class="form-control-file">
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="gallery4" name="gallery4"
                                                        value="<?php echo $details['gallery4']; ?>"
                                                        class="form-control-file">
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="gallery5" name="gallery5"
                                                        value="<?php echo $details['gallery5']; ?>"
                                                        class="form-control-file">
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="gallery6" name="gallery6"
                                                        value="<?php echo $details['gallery6']; ?>"
                                                        class="form-control-file">
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
                                                        value="<?php echo $event['image']; ?>"
                                                        class="form-control-file">
                                                </div>
                                            </div>
                                            <div class="card-footer">


                                                <button type="submit" class="btn btn-primary btn-sm" name="save"
                                                    value="save" onclick="return verif_edit();">
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