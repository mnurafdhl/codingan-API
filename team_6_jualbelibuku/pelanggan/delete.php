<?php

include "../../../config/koneksi.php";

$id_pelanggan = @$_POST["id_pelanggan"];

$query = mysqli_query($kon, "DELETE FROM 'pelanggan' WHERE 'id_pelanggan'='".$id_pelanggan."'");


if($query){
    $status = true;
    $pesan = "data berhasil dihapus";
}else{
    $status = false;
    $pesan = "data gagal dihapus";
}

$json = [
    "status" => $status,
    "pesan" => $pesan,
    "data" => $query
];

header("Content-Type: application/json");
echo json_encode($json);

?>