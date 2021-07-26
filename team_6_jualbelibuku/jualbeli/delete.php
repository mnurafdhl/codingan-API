<?php

include "../../../config/koneksi.php";

$id_jualbeli = @$_POST["id_jualbeli"];

$query = mysqli_query($kon, "DELETE FROM 'jualbeli' WHERE 'id_jualbeli'='".$id_jualbeli."'");


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