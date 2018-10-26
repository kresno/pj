<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>eSinergi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="../css/magnific-popup.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="../css/style.css">

	<!-- Modernizr JS -->
	<script src="../js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
        <nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<div id="colorlib-logo"><a href="index.php">eSinergi</a></div>
						</div>
						<div class="col-md-10 text-right menu-1">
                            <ul>
                                <li class="has-dropdown">
                                    <a href="#"><?php echo $_SESSION['fname']; ?> asdasd</a>
                                    <ul class="dropdown">
                                        <li><a href="../logout.php">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                            
						</div>
					</div>
				</div>
			</div>
		</nav>

		<section id="home" class="video-hero" style="height: 300px; background-image: url(images/cover_img_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
		<div class="overlay"></div>
			<div class="display-t display-t2 text-center">
				<div class="display-tc display-tc2">
					<div class="container">
						<div class="col-md-12 col-md-offset-0">
							<div class="animate-box">
								<h2>Partisipasi</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-8 animate-box">
						<h2>Form Partisipasi</h2>
						<form action="#" method="POST">
							<div class="row form-group">
								<div class="col-md-12 ">
									<!-- <label for="email">Sektor</label> -->
                                    <select name="sektor" id="sektor" class="form-control">
                                        <option> -- Pilih Sektor -- </option>
                                        <option value="1">Sektor Pariwisata</option>
                                        <option value="2">Sektor Industri</option>
                                        <option value="3">Sektor Kelautan</option>
                                        <option value="4">Sektor Perkebunan</option>
                                        <option value="5">Sektor Pertanian</option>
                                        <option value="6">Sektor Peternakan</option>
                                    </select>
								</div>
                            </div>
                            
                            <div class="row form-group">
								<div class="col-md-12">
                                <!-- <label for="email">Kawasan</label> -->
                                    <select name="kawasan" id="kawasan" class="form-control">
                                        <option> -- Pilih Kawasan -- </option>
                                        <option value="1">Kawasan Geopark</option>
                                        <option value="2">Kawasan Agropolitan</option>
                                        <option value="3">Kawasan Minapolitan</option>
                                        <option value="4">Kawasan Perkebunan</option>
                                        <option value="5">Kawasan Pertanian</option>
                                    </select>
								</div>
                            </div>

                            <div class="row form-group">
								<div class="col-md-12">
                                <!-- <label for="email">Program</label> -->
                                    <select name="program" id="program" class="form-control">
                                        <option> -- Pilih Program -- </option>
                                        <option value="1">Program Peningkatan Ketahanan Pangan</option>
                                        <option value="2">Program pengembangan wilayah Transmigrasi</option>
                                        <option value="3">Program Pengembangan Industri Rumah Tangga Kecil Menengah</option>
                                        <option value="4">Program Peningkatan Promosi dan Kerjasama Investasi</option>
                                        <option value="5">Program Peningkatan Iklim Investasi dan Realisasi Investasi</option>
                                    </select>
								</div>
                            </div>

                            <div class="row form-group">
								<div class="col-md-12">
                                <!-- <label for="email">Program</label> -->
                                    <select name="sasaran" id="sasaran" class="form-control">
                                        <option> -- Pilih Sasaran -- </option>
                                        <option value="1">Sasaran 1</option>
                                        <option value="2">Sasaran 2</option>
                                        <option value="3">Sasaran 3</option>
                                        <option value="4">Sasaran 4</option>
                                        <option value="5">Sasaran 5</option>
                                    </select>
								</div>
                            </div>
                            
                            <div class="row form-group">
								<div class="col-md-12">
                                <!-- <label for="email">Program</label> -->
                                    <select name="indikator" id="indikator" class="form-control">
                                        <option> -- Pilih Indikator -- </option>
                                        <option value="1">Indikator 1</option>
                                        <option value="2">Indikator 2</option>
                                        <option value="3">Indikator 3</option>
                                        <option value="4">Indikator 4</option>
                                        <option value="5">Indikator 5</option>
                                    </select>
								</div>
                            </div>

                            <div class="row form-group">
								<div class="col-md-12">
                                <!-- <label for="email">Program</label> -->
                                    <input type="text" class="form-control" name="output" placeholder="Output Kegiatan">
								</div>
                            </div>

							<div class="form-group">
								<input type="submit" value="Register" class="btn btn-primary">
							</div>
						</form>		
					</div>
				</div>
			</div>
		</div>

		<footer id="colorlib-footer">
			<div class="copy">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<p>
								 <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --><br>
								Created By: <a href="http://www.bappeda.sukabumikab.go.id/" target="_blank">Bappeda Kabupaten Sukabumi</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="../js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="../js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="../js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="../js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="../js/jquery.stellar.min.js"></script>
	<!-- YTPlayer -->
	<script src="../js/jquery.mb.YTPlayer.min.js"></script>
	<!-- Owl carousel -->
	<script src="../js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="../js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="../js/main.js"></script>

	</body>
</html>

