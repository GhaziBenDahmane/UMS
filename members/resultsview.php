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
                            <h1>Results</h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <?php
                                        $matiere = $_GET['matiereID'];
                                        $type = $_GET['type'];
                                        $filiere = $_GET['lvlID'];
                                        ?>
                                    </div>
                                    <!-- /.panel-heading -->
                                    <div class="panel-body">
                                        <div class="dataTable_wrapper">
                                            
                                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                                <thead>
                                                    <tr>
                                                        <th>Cin</th>
                                                        <th>Nom</th>
                                                        <th>Prenom</th>
                                                        <?php
                                                        $req = $db->prepare('SELECT nature , COUNT(*) FROM Note
                                                        WHERE Note.matiereID = :matiereID
                                                        AND Note.lvlID = :lvlID
                                                        GROUP BY Note.nature
                                                        ORDER BY Note.nature
                                                        ');
                                                        $req->execute(array(':matiereID'=> $matiere , ':lvlID' => $filiere));
                                                        while($row = $req->fetch()){
                                                        ?>
                                                        <th>Note <?= $row['nature'] ?></th>
                                                        <?php
                                                        }
                                                        ?>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $stmt = $db->prepare('SELECT * FROM Note INNER JOIN Etudiant
                                                        ON Note.carteEtudiant = Etudiant.carteEtudiant
                                                    WHERE Note.matiereID = :matiereID
                                                    AND Note.lvlID = :lvlID
                                                    GROUP BY Note.carteEtudiant
                                                    ');
                                                    $stmt->execute(array(':matiereID'=> $matiere , ':lvlID' => $filiere));
                                                    while($row = $stmt->fetch()){
                                                    ?>
                                                    <tr class="odd gradeX">
                                                        <td><?php if (($row['cin'] %10000000)==$row['cin'])
                                                            echo '0';
                                                            echo $row['cin'];
                                                        ?></td>
                                                        <td><?= $row['nom'] ?></td>
                                                        <td><?= $row['prenom'] ?></td>
                                                        <?php $stud = $db->prepare('SELECT * FROM Note INNER JOIN Etudiant
                                                        ON Note.carteEtudiant = Etudiant.carteEtudiant
                                                        WHERE Note.matiereID = :matiereID
                                                        AND Note.lvlID = :lvlID
                                                        AND Note.carteEtudiant = :carteEtudiant
                                                        ORDER BY Note.nature
                                                        ');
                                                        $stud->execute(array(':matiereID'=> $matiere , ':lvlID' => $filiere, ':carteEtudiant' => $row['carteEtudiant']));
                                                        while($note = $stud->fetch()){
                                                        ?>
                                                        <td><?= $note['valeur'] ?></td>
                                                        <?php
                                                    }
                                                    ?>
                                                    </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /.panel-body -->
                                </div>
                                <!-- /.panel -->
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
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
        <!-- Scripts -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/skel.min.js"></script>
        <script src="../assets/js/util.js"></script>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="../assets/js/main.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    </body>
</html>