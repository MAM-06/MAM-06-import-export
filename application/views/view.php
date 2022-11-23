<!DOCTYPE html>
<html>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- SEO Meta Tags -->
<meta name="description" content="Your description">
<meta name="author" content="Your name">

<!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
<meta property="og:site_name" content="" /> <!-- website name -->
<meta property="og:site" content="" /> <!-- website link -->
<meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

<!-- Webpage Title -->
<title>Muhammad Shofiudin</title>

<!-- Styles -->
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap"
    rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="<?= base_url(); ?>/assets/frontend/css/bootstrap.min.css" rel="stylesheet">
<link href="<?= base_url(); ?>/assets/frontend/css/fontawesome-all.min.css" rel="stylesheet">
<link href="<?= base_url(); ?>/assets/frontend/css/swiper.css" rel="stylesheet">
<link href="<?= base_url(); ?>/assets/frontend/css/styles.css" rel="stylesheet">
</head>

<body>
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
        <div class="container">
            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <!-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#projects">Projects</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown"
                            aria-expanded="false">Drop</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown01">
                            <li><a class="dropdown-item" href="article.html">Article Details</a></li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li><a class="dropdown-item" href="terms.html">Terms Conditions</a></li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li><a class="dropdown-item" href="privacy.html">Privacy Policy</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#contact">Contact</a>
                    </li>
                </ul> -->
                    <!-- <span class="nav-item social-icons">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                    </span> -->
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1>Data Details</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <hr>
                    <a href="<?php echo base_url("index.php/siswa/export"); ?>">Export ke Excel</a><br><br>
                    <table border="1" cellpadding="8">
                        <tr>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                        </tr>
                        <?php
if( ! empty($siswa)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
  foreach($siswa as $data){ // Lakukan looping pada variabel siswa dari controller
    echo "<tr>";
    echo "<td>".$data->nis."</td>";
    echo "<td>".$data->nama."</td>";
    echo "<td>".$data->jenis_kelamin."</td>";
    echo "<td>".$data->alamat."</td>";
    echo "</tr>";
  }
}else{ // Jika data tidak ada
  echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
?>
                    </table>
                    </br>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-col first">
                        <h6>About Desi</h6>
                        <p class="p-small">He oppose at thrown desire of no. Announcing impression unaffected day his
                            are unreserved indulgence. Him hard find read are you</p>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col second">
                        <h6>Links</h6>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li>Important: <a href="terms.html">Terms & Conditions</a>, <a href="privacy.html">Privacy
                                    Policy</a></li>
                            <li>Useful: <a href="#">Colorpicker</a>, <a href="#">Icon Library</a>, <a
                                    href="#">Illustrations</a></li>
                            <li>Menu: <a href="#header">Home</a>, <a href="#services">Services</a>, <a
                                    href="#projects">Projects</a>, <a href="#contact">Contact</a></li>
                        </ul>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col third">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-pinterest-p fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <p class="p-small">We would love to hear from you <a
                                href="mailto:contact@site.com"><strong>contact@site.com</strong></a></p>
                    </div> <!-- end of footer-col -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © <a href="#your-link">Your name</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->

            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Distributed by: <a href="https://themewagon.com/" target="_blank">Themewagon</a>
                    </p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
        <img src="<?= base_url(); ?>/assets/frontend/images/up-arrow.png" alt="alternative">
    </button>
    <!-- end of back to top button -->

    <!-- Scripts -->
    <script src="<?= base_url(); ?>/assets/frontend/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="<?= base_url(); ?>/assets/frontend/js/swiper.min.js"></script>
    <!-- Swiper for image and text sliders -->
    <script src="<?= base_url(); ?>/assets/frontend/js/purecounter.min.js"></script>
    <!-- Purecounter counter for statistics numbers -->
    <script src="<?= base_url(); ?>/assets/frontend/js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="<?= base_url(); ?>/assets/frontend/js/scripts.js"></script> <!-- Custom scripts -->
</body>

</html>