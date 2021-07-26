<?php

include "../../../config/koneksi.php";

$id_buku = md5(@$_POST["id_buku"]);
$id_pelanggan = @$_POST["id_pelanggan"];
$judul_buku= @$_POST["judul_buku"];
$pengarang= @$_POST["pengarang"];
$jenis_buku = @$_POST["jenis_buku"];

$query = mysqli_query($kon, "UPDATE 'buku' SET 'judul_buku'='".$judul_buku."', 'pengarang'='".$pengarang."', 'jenis_buku'='".$jenis_buku."' WHERE 'id_pelanggan'='".$id_pelanggan."', 'id_buku'='".$id_buku."");

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