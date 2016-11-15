<?php require('../includes/config.php'); ?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Institut national des sciences appliquées et de technologie</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../assets/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="../assets/css/main.css" />
        <link href="../assets/css/simple-sidebar.css" rel="stylesheet">
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
                            <h1>Matiere</h1>
                        </div>
                        <?php
                        $filiere = $_GET['lvlID'];
                        $type = $_GET['type'];
                        $stmt = $db->prepare('SELECT * FROM Matiere INNER JOIN MatiereParFiliere
                        ON Matiere.matiereID = MatiereParFiliere.matiereID
                        WHERE MatiereParFiliere.lvlID= :lvlID ');
                        $stmt->execute(array(':lvlID' => $filiere));
                        while($row = $stmt->fetch()){
                        ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <?php
                                            $req_count_res = $db->prepare('SELECT COUNT(*) FROM Note
                                            WHERE Note.matiereID = :matiereID
                                            AND Note.lvlID = :lvlID
                                            ');
                                            $req_count_res->execute(array(':matiereID'=> $row['matiereID'] , ':lvlID' => $filiere));
                                            $num_res =  $req_count_res->fetch();
                                            $res_count=$num_res[0];
                                            $req_count = $db->prepare('SELECT COUNT(*) FROM Documents
                                            WHERE Documents.matiereID = :matiereID
                                            AND Documents.lvlID = :lvlID
                                            AND Documents.type = :type
                                            ');
                                            $req_count->execute(array(':matiereID'=> $row['matiereID'] , ':lvlID' => $filiere,
                                            ':type' => $type));
                                            $num =  $req_count->fetch();
                                            $doc_number=$num[0];
                                            if ($_GET['type']=="R"){
                                                if ($res_count==0)
                                            echo '<i class="fa fa-folder fa-4x"></i>';
                                            else echo '<i class="fa fa-folder-open fa-4x"></i>';
                                            } 
                                            else { if ($doc_number==0)
                                            echo '<i class="fa fa-folder fa-4x"></i>';
                                            else echo '<i class="fa fa-folder-open fa-4x"></i>';
                                            }
                                            ?>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <?php echo '<div>'.$row['nom'].'</div>' ?>
                                        </div>
                                    </div>
                                </div>
                                <a <?php
                                    if ($_GET['type']=="R"){
                                    if ($res_count==0)
                                    echo 'onclick="myFunction2()"';
                                    else echo 'href="resultsview.php?type='.$_GET['type'].'&lvlID='.$row['lvlID'].'&matiereID='.$row['matiereID'].'"';
                                    }
                                    else{if ($doc_number==0)
                                    echo 'onclick="myFunction()"';
                                    else echo 'href="documentsview.php?type='.$_GET['type'].'&lvlID='.$row['lvlID'].'&matiereID='.$row['matiereID'].'"';} ?>>
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
        
        <script>
        function myFunction() {
        alert("Sorry no documents for the moment");
        }
        </script>
        <script>
        function myFunction2() {
        alert("Sorry no Results have been added yet");
        }
        </script>
    </body>
</html>