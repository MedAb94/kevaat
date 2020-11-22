<?php
require_once 'php_action/core.php';

if (isset($_POST['update'])) {

    $id = $_POST["postId"];
//    echo $id;
    $titre = $_POST["titre"];
    $contenu = str_replace('"', "'", $_POST["contenu"]);
    $sql = 'update posts set titre = ' . '"'. $titre .'"'. ', contenu = '.'"'. $contenu. '"' .' where id ='. $id;
//    die($sql);
    $result = $connect->query($sql);
    if ($result)
        header('location: http://localhost/kevaat/admin/pubs.html');
    else     echo "nooo";
} else {

    $id = $_GET["post"];
    $titre = "";
    $date = "";
    $contenu = "";
    $sql = "select * from posts where id = $id";
    $result = $connect->query($sql);


    $data = array();

    while ($row = mysqli_fetch_row($result)) {
        $date = $row[1];
        $titre = $row[2];
        $contenu = $row[3];
    }

}


//echo $data[2];

$connect->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Admin - Modification</title>

    <!-- Custom fonts for this template-->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/img/favicon.png" rel="icon">
    <link rel="stylesheet" type="text/css"
          href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css"/>

    <style>
        #row_style {
            margin-top: 30px;
        }

        #submit {
            display: block;
            margin: auto;
        }

        a {
            text-decoration: none;
        }
    </style>


</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Kevaat <sup>1.0</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item ">
            <a class="nav-link" href="index.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Publier</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">


        <!-- Nav Item - publication -->
        <li class="nav-item">
            <a class="nav-link" href="pubs.html">
                <i class="fas fa-fw fa-file-invoice"></i>
                <span>Publications</span></a>
        </li>
        <hr class="sidebar-divider">

        <!-- Nav Item - Tables -->
        <!--        <li class="nav-item">-->
        <!--            <a class="nav-link" href="agenda.php">-->
        <!--                <i class="fas fa-fw fa-table"></i>-->
        <!--                <span>Agenda</span></a>-->
        <!--        </li>-->

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>


                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">


                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <button class="btn btn-danger mt-1"><a href="logout.php" class="text-white">Deconnecter</a></button>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">


                <h4 class="text-center ">Modification des publications</h4>
                <div class="row justify-content-center" id="row_style">
                    <form action="edit.php" method="post">

                        <input type="hidden" name="postId" value="<?php echo $id ?>">
                        <div class="form-group">
                            <input type="text" class="form-control" value="<?php echo $titre ?>" name="titre">
                        </div>
                        <textarea id="editor" cols="30" rows="10" name="contenu"> <?php echo $contenu ?></textarea>
                        <br>
                        <!--            <div class="form-group">-->
                        <!--                <input type="text" class="form-control" placeholder="Tags">-->
                        <!--            </div>-->
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit" id="submit" name="update">Enregistrer</button>
                        </div>
                    </form>
                </div>


            </div>
            <!-- /.container -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Kevaat 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript-->
<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<!--  <script src="vendor/chart.js/Chart.min.js"></script>-->

<!-- Page level custom scripts -->
<!--  <script src="js/demo/chart-area-demo.js"></script>-->
<!--  <script src="js/demo/chart-pie-demo.js"></script>-->


<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

<script>
    $(function () {
        $("#editor").shieldEditor({
            height: 500
        });
    })
</script>
</body>

</html>
