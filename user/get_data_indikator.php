<?php
include('../config/koneksi.php');

if(!empty($_GET["sasaran_id"])){
    $return_arr = array();

    $id_sasaran = $_GET["sasaran_id"];
    $sql="SELECT * FROM indikator_sasaran where sasaran_id = $id_sasaran";

    if($result = mysqli_query($con, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row= mysqli_fetch_array($result)){
                $id = $row['id'];
                $nama = $row['nama'];

                $return_arr[] = array("id" => $id,
                    "nama" => $nama);
            }
            echo json_encode($return_arr);
        }
    }
    // echo $_GET["sektor_id"];
}
?>
