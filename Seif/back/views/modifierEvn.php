<?php
	include "../controller/eventC.php";
	include_once '../Model/event.php';

	$eventC = new eventC();
	$error = "";
	
	if (
		
        isset($_POST["nom"]) &&
        isset($_POST["date"]) && 
        isset($_POST["lieu"]) &&
        isset($_POST["description"]) &&
        isset($_POST["categorie"]) &&
        isset($_POST["image"])
	){
		if (
            
            !empty($_POST["nom"]) && 
            !empty($_POST["date"]) && 
            !empty($_POST["lieu"]) &&
            !empty($_POST["description"]) && 
            !empty($_POST["categorie"]) && 
            !empty($_POST["image"]) 
        ) {
            $event = new event(
                
                $_POST['nom'], 
                $_POST['date'],
                $_POST['lieu'] ,
                $_POST['description'],
                $_POST['categorie'],
                $_POST['image']
			);
			
            $eventC->modifierEvn($event, $_GET['id']);
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
                                        <strong>Edit Event</strong>
                                        <div id="erreur"></div>
                                    </div>
                                    <div class="card-body card-block">
                                        <?php
			if (isset($_GET['id'])){
				$event = $eventC->recupererEvent($_GET['id']);
				
		?>
                                        <form action="" method="POST">
                                            <div class="form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">New Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="nom" name="nom" placeholder="new name"
                                                        value="<?php echo $event['nom']; ?>" class="form-control">
                                                    <!--<small class="form-text text-muted"></small>-->
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col col-md-3">
                                                    <label for="date-input" class=" form-control-label">New Date</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="date" name="date" placeholder="date"
                                                        value="<?php echo $event['date']; ?>" class="form-control">
                                                    <!--<small class="help-block form-text">Please enter your email</small>-->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-8">
                                                    <div class="col col-md-3">
                                                        <label for="place-input" class=" form-control-label">New
                                                            place</label>
                                                    </div>
                                                    <div class="col-12 col-md-9">
                                                        <input type="text" id="lieu" name="lieu" placeholder="new place"
                                                            value="<?php echo $event['lieu']; ?>" class="form-control">
                                                        <br>
                                                        <!-- <small class="help-block form-text">Please enter a complex password</small>-->
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
                                                            value="<?php echo $event['description']; ?>"
                                                            class="form-control"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col col-md-3">
                                                    <label for="categorie" class=" form-control-label">Edit
                                                        categorie</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="categorie" id="categorie" class="form-control">
                                                        <option value="0" name="categorie" id="categorie">select
                                                        </option>
                                                        <option value="sport" name="categorie" id="categorie">Sport
                                                        </option>
                                                        <option value="cat1" name="categorie" id="categorie">outing
                                                        </option>
                                                        <option value="cat3" name="categorie" id="categorie">training
                                                        </option>
                                                    </select>
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