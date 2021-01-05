<?php
include('../controller/categorieC.php');

$categoryC=new categoryC();
$listeCategory=$categoryC->afficherCat();
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




                        <!--***********************************************************************************-->
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->

                                <h3 class="title-5 m-b-35">data table</h3>
                                <div class="table-data__tool">

                                    <div class="table-responsive table-responsive-data2">
                                        <table class="table table-data2">
                                            <thead>
                                                <tr>

                                                    <th>picture</th>
                                                    <th>Category's Name</th>
                                                    <th>description</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?PHP
              foreach($listeCategory as $category){
            ?>
                                                <tr class="tr-shadow">

                                                    <td><img src="images/<?PHP echo $category['image']; ?>" alt=""></td>
                                                    <td>
                                                        <span class="block-email">
                                                            <?PHP echo $category['nom']; ?>
                                                        </span>
                                                    </td>
                                                    <td class="desc">
                                                        <?PHP echo $category['description']; ?>
                                                    </td>
                                                   
                                                    <td>
                                                        <div class="table-data-feature">

                                                            <!-- <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>-->
                                                        <form method="POST" action="modifierCat.php?id=<?PHP echo $category['id']; ?>">
                                                                <button type="submit" name="modifier" value="modofier"
                                                                    class="item"> <i class="zmdi zmdi-edit"></i></i></button>

                                                                <input type="hidden" value=<?PHP echo $category['id']; ?>
                                                                name="id">
                                                            </form>
                                                            <form method="POST" action="supprimerCat.php">
                                                                <button type="submit" name="supprimer" value="supprimer"
                                                                    class="item"> <i
                                                                        class="zmdi zmdi-delete"></i></button>

                                                                <input type="hidden" value=<?PHP echo $category['id']; ?>
                                                                name="id">
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="spacer"></tr>
                                                <?php }?>
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- END DATA TABLE -->
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