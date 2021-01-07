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
    <title>Events</title>

    <?php
    include ('style.php')
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
                                    <strong>Add Details</strong>
                                    <div id="erreur"></div>
                                </div>

                                <div class="card-body card-block">
                                    <form action="test.php" method="POST" class="form-horizontal">

                                        <div class="row form-group">

                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Event's name</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="nom" name="nom" placeholder="Event's Name"
                                                    class="form-control">
                                                <!--<small class="form-text text-muted"></small>-->
                                            </div>
                                        </div>
                                        <div class="col col-md-3">
                                            <label for="file-input" class=" form-control-label">Event's picture</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="file" id="image1" name="image1" class="form-control-file">
                                        </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">First Title</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="title1" name="title1" placeholder="first title"
                                            class="form-control">
                                        <!--<small class="form-text text-muted"></small>-->
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="textarea-input" class=" form-control-label">First Decription</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="description1" id="description1" rows="9"
                                            placeholder="Content..." class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Second Title</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="title2" name="title2" placeholder="second title"
                                            class="form-control">
                                        <!--<small class="form-text text-muted"></small>-->
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="textarea-input" class=" form-control-label">Second
                                            Decription</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="description2" id="description2" rows="9"
                                            placeholder="Content..." class="form-control"></textarea>
                                    </div>
                                </div>


                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-input" class=" form-control-label">Map</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="map" name="map" class="form-control-file">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-input" class=" form-control-label">Gallery1</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="gallery1" name="gallery1" class="form-control-file">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-input" class=" form-control-label">Gallery2</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="gallery2" name="gallery2" class="form-control-file">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-input" class=" form-control-label">Gallery3</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="gallery3" name="gallery3" class="form-control-file">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-input" class=" form-control-label">Gallery4</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="gallery4" name="gallery4" class="form-control-file">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-input" class=" form-control-label">Gallery5</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="gallery5" name="gallery5" class="form-control-file">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-input" class=" form-control-label">Gallery6</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="gallery6" name="gallery6" class="form-control-file">
                                    </div>
                                </div>
                                <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="date-input" class=" form-control-label">Date</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="date" name="date" placeholder="date" class="form-control">
                                                    <!--<small class="help-block form-text">Please enter your email</small>-->
                                                </div>
                                            </div>
                                <div class="card-footer">

                                    <button type="submit" class="btn btn-primary btn-sm" name="Add" value="Add">
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