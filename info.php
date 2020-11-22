<?php
require_once "admin/php_action/db_connect.php";
$id=$_GET["post"];
$titre ="";
$date ="";
$contenu = "";
$img= "";

$sql = "select * from posts where id = $id";
$result = $connect->query($sql);


$data = array();

while ($row = mysqli_fetch_row($result)){
    $date= $row[1];
    $titre= $row[2];
    $contenu= $row[3];
    $img= $row[4];
}

//echo $data[2];

$connect->close();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title> KEVAAT Training</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->


    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/domaines.css" rel="stylesheet">

</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container-fluid d-flex">

        <div class="logo mr-auto">
            <h1 class="text-light"><a href="index.html"><span>KEVAAT</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="index.html">Accueil</a></li>
                <li><a href="index.html">À propos </a></li>
                <li><a href="index.html">Services</a></li>
                <li><a href="index.html">Actualités</a></li>
                <li><a href="index.html"">Formations</a></li>
                <li><a href="index.html">Contact</a></li>

            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->

<!-- End Hero -->
<section class="mt-5">
    <div class="container">
        <div class="text-center">
            <h3 class="text-primary">
                <?php
                echo $titre;
                ?>
            </h3>
        </div>
        <div class="text-center w-50 m-auto">
                <img src="<?php echo $img;?>" alt="<?php echo $titre;?>" class="img-fluid rounded" title="Kevaat Training">
        </div>
        <div class="text-justify">
            <?php
            echo $contenu;
            ?>
        </div>
        <div class="text-right my-5">
           publié le :             <?php
            echo $date;
            ?>
        </div>
    </div>
</section>
<!-- ======= Footer ======= -->
<footer id="footer" >


    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact" >
                    <h3>Kevaat Training</h3>
                    <p>
                        N°80, Cité NASR, Avenue des Bourses <br>
                        Ksar <br>
                        Nouakchott<br>
                        Mauritanie <br>

                        <strong>Phone:</strong> +222 45 24 36 29<br>
                        <strong>Mobile:</strong> 27334747 - 22223452<br>
                        <strong>Email:</strong> info@kevaat.com<br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links" >
                    <h4>Liens utiles</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Accueil</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">A propos</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Conditions d'utilisation</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Politique de confidentialité</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links" >
                    <h4>Nos Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Séminaire de formation</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Formations sur mesure</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Certification</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Co-Working et Co-space</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Développement logiciels et apps</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links" >
                    <h4>Nos comptes sociaux</h4>
                    <p>Nous sommes présents sur tous les réseaux sociaux</p>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container py-4">
        <div class="copyright">
            &copy; Copyright <strong><span>KEVAAT Training</span></strong>. Tous droits Reservés
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/ -->
            Designed with <i class="text-danger bx bxs-heart"></i> by <a href="https://facebook.com/medab.vall" target="_blank">Medab</a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script src="assets/js/news.js"></script>

</body>

</html>
