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
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jstree/3.3.8/themes/default/style.min.css" />
	<script src="//cdnjs.cloudflare.com/ajax/libs/jstree/3.3.8/jstree.min.js"></script>

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
								<h2>Visualisasi</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<?php
			include('../config/koneksi.php');

			$return_arr = array();

			$sql="SELECT a.id as id_usulan, b.`id` AS id_kawasan, b.`nama_kawasan`, c.`id` AS id_sektor, c.`nama_sektor`, d.`id` AS id_program, d.`nama_program`, e.`id` AS id_sasaran, e.`nama_sasaran`, f.`id` AS id_indikator, f.`nama_indikator`, a.`kegiatan`, a.`pagu`, g.name_kec, h.name_desa
			FROM usulan a
			JOIN kawasan b ON a.`kawasan_id`=b.id
			JOIN sektor c ON a.`sektor_id`=c.id
			JOIN program d ON a.`program_id`=d.id
			JOIN sasaran e ON a.`sasaran_id`=e.id
			JOIN indikator_sasaran f ON a.`indikator_id`=f.id
			join districts g on g.id=a.kecamatan_id
			join villages h on h.id=a.desa_id
			WHERE a.user_id=6
			ORDER BY a.kawasan_id, a.sektor_id, a.program_id, a.sasaran_id, a.indikator_id, a.kegiatan, a.pagu";

			if($result = mysqli_query($con, $sql)){
				if(mysqli_num_rows($result) > 0){
					while($row= mysqli_fetch_array($result)){
						$id_usulan = $row['id_usulan'];
						$id_kawasan = $row['id_kawasan'];
						$nama_kawasan = $row['nama_kawasan'];
						$id_sektor = $row['id_sektor'];
						$nama_sektor = $row['nama_sektor'];
						$id_program = $row['id_program'];
						$nama_program = $row['nama_program'];
						$id_sasaran = $row['id_sasaran'];
						$nama_sasaran = $row['nama_sasaran'];
						$id_indikator = $row['id_indikator'];
						$nama_indikator = $row['nama_indikator'];
						$kegiatan = $row['kegiatan'];
						$pagu = $row['pagu'];
						$kecamatan = $row['name_kec'];
						$desa = $row['name_desa'];

						$return_arr[] = array(
							"id_usulan" => $id_usulan,
							"id_kawasan" => $id_kawasan,
							"nama_kawasan" => $nama_kawasan,
							"id_sektor" => $id_sektor,
							"nama_sektor" => $nama_sektor,
							"id_program" => $id_program,
							"nama_program" => $nama_program,
							"id_sasaran" => $id_sasaran,
							"nama_sasaran" => $nama_sasaran,
							"id_indikator" => $id_indikator,
							"nama_indikator" => $nama_indikator,
							"pagu" => $pagu,
							"kegiatan" => $kegiatan, 
							"lokasi" => "Kecamatan: ".$kecamatan.", Desa/Kel: ".$desa
						);
					}
				}
			}
			// echo $_GET["sektor_id"];
		?>

		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
				<h2> Cascading Usulan Kegiatan </h2>
				<div id="container">
				<ul>
				<?php
					$id_us_temp = 0; 
					$id_kw_temp=0;
					$id_sek_temp=0;
					$id_pro_temp=0;
					$id_sas_temp=0;
					$id_indsas_temp=0;

					foreach($return_arr as $data){
						
						if($id_kw_temp != $data["id_kawasan"])
						{
							$id_kw_temp=$data["id_kawasan"];
							echo "<li>".$data["nama_kawasan"]."<ul>";
						}
						
						if($id_sek_temp != $data["id_sektor"])
						{
							$id_sek_temp=$data["id_sektor"];
							echo "<li>".$data["nama_sektor"]."<ul>";
						}

						if($id_pro_temp != $data["id_program"])
						{
							$id_pro_temp=$data["id_program"];
							echo "<li>".$data["nama_program"]."<ul>";
						}
						
						if($id_sas_temp != $data["id_sasaran"])
						{
							$id_sas_temp=$data["id_sasaran"];
							echo "<li> Sasaran : ".$data["nama_sasaran"]."<ul>";
						}

						if($id_indsas_temp != $data["id_indikator"])
						{
							$id_indsas_temp=$data["id_indikator"];
							echo "<li> Indikator Sasarannya : ".$data["nama_indikator"]."<ul>";
						}
						
						
						echo "<li> Kegiatan : ".$data["kegiatan"].", dengan Pagu :".number_format($data["pagu"])." berlokasi di ".$data["lokasi"]."</ul></ul></ul></ul>";
						
						
					}
				?>
				</ul>
				</div>
				<script>
				$(function() {
				$('#container').jstree();
				});
				</script>
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

