<?php

include "../../../config/koneksi.php";

$id_buku = @$_POST["id_buku"];

$query = mysqli_query($kon, "DELETE FROM 'buku' WHERE 'id_buku'='".$id_buku."'");


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