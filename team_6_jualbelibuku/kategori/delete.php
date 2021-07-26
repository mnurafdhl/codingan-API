<?php

include "../../../config/koneksi.php";

$id_kategori = @$_POST["id_kategori"];

$query = mysqli_query($kon, "DELETE FROM 'kategori' WHERE 'id_kategori'='".$id_kategori."'");


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