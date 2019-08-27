<?php
			include('../config/koneksi.php');

			$return_arr = array();

			$sql="SELECT a.id as id_usulan, b.`id` AS id_kawasan, b.`nama_kawasan`, c.`id` AS id_sektor, c.`nama_sektor`, d.`id` AS id_program, d.`nama_program`, e.`id` AS id_sasaran, e.`nama_sasaran`, f.`id` AS id_indikator, f.`nama_indikator`, a.`kegiatan`, a.`pagu`
			FROM usulan a
			JOIN kawasan b ON a.`kawasan_id`=b.id
			JOIN sektor c ON a.`sektor_id`=c.id
			JOIN program d ON a.`program_id`=d.id
			JOIN sasaran e ON a.`sasaran_id`=e.id
			JOIN indikator_sasaran f ON a.`indikator_id`=f.id
			WHERE a.user_id=5
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
							"kegiatan" => $kegiatan
						);
					}
				}
			}
			var_dump($return_arr);
		?>