<?php
include('../config/koneksi.php');

if(!empty($_GET["sektor_id"])){
    $return_arr = array();

    $id_sektor = $_GET["sektor_id"];
    $sql="SELECT * FROM program where sektor_id = $id_sektor";

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
