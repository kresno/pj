<?php 
include('../config/koneksi.php');


?>


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
	<!-- jQuery -->
	<script src="../js/jquery.min.js"></script>

	<!-- Data Table -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>
	<script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>

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
							<div id="colorlib-logo"><a href="dashboard.php">eSinergi</a></div>
						</div>
						<div class="col-md-10 text-right menu-1">
                            <ul>
								<li><a href="dashboard.php">Dashboard</a></li>
								<li><a href="partisipasi.php">Partisipasi</a></li>
								<li><a href="visualisasi.php">Visualisasi</a></li>
                                <li class="has-dropdown">
                                    <a href="#"><?php session_start(); echo $_SESSION['fname']; ?></a>
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
					<div class="col-md-12 animate-box">
						<h2>Dashboard Sinergi</h2>
                        <?php
                        $user_id = $_SESSION['user_id'];
                        $sql = "SELECT * from usulan a 
                                join kawasan c on a.kawasan_id=c.id
                                join program d on a.program_id=d.id
                                join sasaran e on a.sasaran_id=e.id 
                                join villages f on f.id= a.desa_id
                                join districts g on g.id=a.kecamatan_id
                                where user_id=$user_id";

                        echo "<table id='example' class='table table-stripped'>";
                        echo "<thead>";
                        echo "<tr>
                              <td> No </td>
                              <td> Kawasan </td>
                              <td> Program </td>
                              <td> Sasaran </td>
                              <td> Kegiatan </td>
                              <td> Output </td>
                              <td> Lokasi </td>
                              <td> Pagu </td>
                              </tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        if($result = mysqli_query($con, $sql)){
                            
                            $id=0;
                            if(mysqli_num_rows($result) > 0){
                                while($row= mysqli_fetch_array($result)){
                                    ++$id;
                                    echo "<tr>";
                                    echo "<td>".$id."</td>";
                                    echo "<td>".$row['nama_kawasan']."</td>";
                                    echo "<td>".$row['nama_program']."</td>";
                                    echo "<td>".$row['nama_sasaran']."</td>";
                                    echo "<td>".$row['kegiatan']."</td>";
                                    echo "<td>".$row['output'].' '.$row['volume'].' '.$row['satuan']."</td>";
                                    echo "<td>".'Desa/Kel: '.$row['name_desa'].', Kecamatan : '.$row['name_kec']."</td>";
                                    echo "<td>".$row['pagu']."</td>";
                                    echo "</tr>";
                                }
                            }
                        }
                        echo "</tbody>";
                        echo "</table>";
                        ?>
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

	<script type="text/javascript" language="javascript" >
	$('#example').dataTable({ 
		dom: 'Bfrtip',
		buttons: [
			{
				extend: 'excelHtml5',
				title: 'Hasil Partisipasi',
				text:'Export to excel'
				//Columns to export
				//exportOptions: {
				//     columns: [0, 1, 2, 3,4,5,6]
				// }
			},
			{
				extend: 'pdfHtml5',
				title: 'Hasil Partisipasi',
				text: 'Export to PDF'
				//Columns to export
				//exportOptions: {
				//     columns: [0, 1, 2, 3, 4, 5, 6]
				//  }
			}
		]
	});
	</script>
	</body>
</html>

