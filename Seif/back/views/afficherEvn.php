<?php
include('../controller/eventC.php');

$eventC=new eventC();
$listeEvent=$eventC->afficherEvn();
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
                                                    <th>Event's Name</th>
                                                    <th>description</th>
                                                    <th>Date</th>
                                                    <th>Place</th>
                                                    <th>Categorie</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?PHP
              foreach($listeEvent as $evn){
            ?>
                                                <tr class="tr-shadow">

                                                    <td><img src="images/<?PHP echo $evn['image']; ?>" alt=""></td>
                                                    <td>
                                                        <span class="block-email">
                                                            <?PHP echo $evn['nom']; ?>
                                                        </span>
                                                    </td>
                                                    <td class="desc">
                                                        <?PHP echo $evn['description']; ?>
                                                    </td>
                                                    <td>
                                                        <?PHP echo $evn['date']; ?>
                                                    </td>
                                                    <td>
                                                        <span class="status--process">
                                                            <?PHP echo $evn['lieu']; ?>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <?PHP echo $evn['categorie']; ?>
                                                    </td>
                                                    <td>
                                                        <div class="table-data-feature">

                                                            <!-- <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>-->
                                                        <form method="POST" action="modifierEvn.php?id=<?PHP echo $evn['id']; ?>">
                                                                <button type="submit" name="modifier" value="modofier"
                                                                    class="item"> <i class="zmdi zmdi-edit"></i></i></button>

                                                                <input type="hidden" value=<?PHP echo $evn['id']; ?>
                                                                name="id">
                                                            </form>
                                                            <form method="POST" action="supprimerEvn.php">
                                                                <button type="submit" name="supprimer" value="supprimer"
                                                                    class="item"> <i
                                                                        class="zmdi zmdi-delete"></i></button>

                                                                <input type="hidden" value=<?PHP echo $evn['id']; ?>
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