<?php require('../includes/config.php'); ?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Institut national des sciences appliquées et de technologie</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../news/assets/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="../news/assets/css/main.css" />
        <link href="../news/assets/css/simple-sidebar.css" rel="stylesheet">
    </head>
    <body title="member">
        <?php require('../includes/header.php'); ?>
        <div id="wrapper">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="../index_member.php">
                            Espace Membre
                        </a>
                    </li>
                    <li>
                        <a href="filiereSelec.php?type=C">Cours</a>
                    </li>
                    <li>
                        <a href="filiereSelec.php?type=AD">Anciens Devoirs</a>
                    </li>
                    <li>
                        <a href="filiereSelec.php?type=E">Exercices</a>
                    </li>
                    <li>
                        <a href="filiereSelec.php?type=R">Résultats</a>
                    </li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>Niveau</h1>
                        </div>
                        <?php
                        $filiere = $_GET['filiereID'];
                        $stmt = $db->prepare('SELECT * FROM Niveau INNER JOIN FiliereFullinfo
                        ON Niveau.filiereID = FiliereFullinfo.filiereID WHERE Niveau.filiereID= :filiereID ');
                        $stmt->execute(array(':filiereID' => $filiere));
                        while($row = $stmt->fetch()){
                        ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <?php echo '<i class="fa '.$row['icon'].' fa-4x"></i>' ?>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <?php echo '<div>'.$row['short_name'].$row['valeur'].'</div>' ?>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $req_count = $db->prepare('SELECT COUNT(*) FROM MatiereParFiliere
                                WHERE lvlID = :lvlID');
                                $req_count->execute(array(':lvlID' => $row['lvlID']));
                                $num =  $req_count->fetch();
                                $Sub_number=$num[0];
                                ?>
                                <a <?php if ($Sub_number==0)
                                    echo 'onclick="myFunction()"';
                                    else echo 'href="matiereSelec.php?type='.$_GET['type'].'&lvlID='.$row['lvlID'].'"'?>>
                                    <div class="panel-footer">
                                        <span class="pull-left">Visit</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->
        </div>
        <!-- /#wrapper -->
        <!-- jQuery -->
        <script src="../assets/js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="../assets/js/bootstrap.min.js"></script>
        <!-- Menu Toggle Script -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/skel.min.js"></script>
        <script src="../assets/js/util.js"></script>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="../assets/js/main.js"></script>
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script>
        function myFunction() {
        alert("Sorry no Subjects has been added for the moment");
        }
        </script>
    </body>
</html>