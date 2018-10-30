<?php
include('../config/koneksi.php');

if(!empty($_GET["kecamatan_id"])){
    $return_arr = array();

    $kecamatan_id = $_GET["kecamatan_id"];
    $sql="SELECT * FROM villages where district_id = $kecamatan_id";

    if($result = mysqli_query($con, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row= mysqli_fetch_array($result)){
                $id = $row['id'];
                $name_desa = $row['name_desa'];

                $return_arr[] = array("id" => $id,
                    "name_desa" => $name_desa);
            }
            echo json_encode($return_arr);
        }
    }
    // echo $_GET["sektor_id"];
}
?>
