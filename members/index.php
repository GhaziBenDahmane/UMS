<?php require('../includes/config.php'); ?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Institut national des sciences appliquées et de technologie</title>
        <meta charset="utf-8" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <link rel="stylesheet" href="../news/assets/css/main.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Custom CSS -->
        <link href="../news/assets/css/simple-sidebar.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body title="member">
        <?php require('../includes/header.php'); ?>
        
        <div id="wrapper">
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a href="#">
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
                            

                            <!-- Main -->
        <div id="main">

            <!-- Post -->
            <?php
            try {

                $requested_page = isset($_GET['page']) ? intval($_GET['page']) : 1;

                $reqw = $db->query('SELECT COUNT(*) FROM blog_posts');
                $script_name = $_SERVER['PHP_SELF'];
                
                $resp =  $reqw->fetch();
                $article_count=$resp[0];
                $articles_per_page = 2;

                $page_count = ceil(intval($article_count) / $articles_per_page);


                if ( !is_int($requested_page) || $requested_page < 1 || $requested_page > $page_count ) {
                    $requested_page=1;
                }
                $first_article_shown = ($requested_page - 1) * $articles_per_page;

                $stmt = $db->query("SELECT * FROM blog_posts ORDER BY postID DESC LIMIT $first_article_shown, $articles_per_page");
                while($row = $stmt->fetch()){
            ?>
                    <article class="post">
                        <header>
                            <div class="title">
                                <h2><a href=<?php echo "viewpost.php?id=".$row['postID'] ?>> <?= $row['postTitle'] ?> </a></h2>
                            </div>
                            <div class="meta">
                                <time class="published"><?php echo date('jS M Y H:i:s', strtotime($row['postDate'])) ?></time>
                            </div>
                        </header>
                        <?php 
                            if ($row['image'] != "") {
                                echo '<img src="content/'.$row['image'].'" alt="" />';
                            }
                         ?>
                        <p><?php echo $row['postDesc'] ?></p>
                        <footer>
                            <ul class="actions">
                                <li><a href=<?php echo "viewpost.php?id=".$row['postID'] ?> class="button big">Continue Reading</a></li>
                            </ul>
                            <ul class="stats">
                                <li><a href="#">General</a></li>
                                <li><a href="#" class="icon fa-heart">28</a></li>
                                <li><a href="#" class="icon fa-comment">128</a></li>
                            </ul>
                        </footer>
                    </article>
            <?php
                }

            } catch(PDOException $e) {
                echo $e->getMessage();
            }
            ?>


            <!-- Pagination -->
            <ul class="actions pagination">
                <?php 
                if ($requested_page == 1) {
                    echo '<li><a href="#" class="disabled button big previous">Previous Page</a></li>';
                }
                else{
                    $new_page=$requested_page - 1;
                    echo '<li><a href="'.$script_name.'?page='.$new_page.'" class=" button big previous">Previous Page</a></li>';
                
                }

                if ($requested_page == $page_count) {
                    echo '<li><a href="#" class="disabled button big next">Next Page</a></li>';
                }
                else{
                    $new_page=$requested_page + 1;
                    echo '<li><a href="'.$script_name.'?page='.$new_page.'" class=" button big next">Next Page</a></li>';
                }
                
                ?>
            </ul>

        </div>




                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->
        </div>
        <!-- /#wrapper -->
        <!-- jQuery -->
        <script src="assets/js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Menu Toggle Script -->
        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="assets/js/main.js"></script>
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    </body>
</html>