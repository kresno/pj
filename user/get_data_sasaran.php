<?php
include('../config/koneksi.php');

if(!empty($_GET["program_id"])){
    $return_arr = array();

    $id_program = $_GET["program_id"];
    $sql="SELECT * FROM sasaran where program_id = $id_program";

    if($result = mysqli_query($con, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row= mysqli_fetch_array($result)){
                $id = $row['id'];
                $nama_sasaran = $row['nama_sasaran'];

                $return_arr[] = array("id" => $id,
                    "nama_sasaran" => $nama_sasaran);
            }
            echo json_encode($return_arr);
        }
    }
    // echo $_GET["sektor_id"];
}
?>
