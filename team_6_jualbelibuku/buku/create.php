<?php

include "../../../config/koneksi.php";

$id_buku= md5(@$_POST["id_buku"]);
$id_pelanggan = @$_POST["id_pelanggan"];
$judul_buku = @$_POST["judul_buku"];
$pengarang = @$_POST["pengarang"];
$jenis_buku = @$_POST["jenis_buku"];

$query = mysqli_query($kon, "INSERT INTO 'buku'('id_buku', 'id_pelanggan', 'judul_buku', 'pengarang', 'jenis_buku') VALUES ('".$id_buku."', '".$id_pelanggan."', '".$judul_buku."', '".$pengarang."', '"$jenis_buku."')");
if($query){
    $status = true;
    $pesan = "data berhasil disimpan";
}else{
    $status = false;
    $pesan = "data gagal disimpan";
}

$json = [
    "status" => $status,
    "pesan" =>$pesan,
    "data"  =>$query
];

header("Content-Type: application/json");
echo json_encode($json);

?>