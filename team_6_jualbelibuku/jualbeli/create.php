<?php

include "../../../config/koneksi.php";

$id_jualbeli= md5(@$_POST["id_jualbeli"]);
$id_pelanggan = @$_POST["id_pelanggan"];
$daftar_tunggu = @$_POST["daftar_tunggu"];
$tanggal_beli = @$_POST["tanggal_beli"];
$harga = @$_POST["harga"];
$diskon= @$_POST["diskon"];
$total= @$_POST["total"];

$query = mysqli_query($kon, "INSERT INTO 'jualbeli'('id_jualbeli', 'id_pelanggan', 'daftar_tunggu', 'tanggal_beli', 'harga', 'diskon', 'total') VALUES ('".$id_jualbeli."', '".$id_pelanggan."', '".$daftar_tunggu."', '".$tanggal_beli."', '"$harga."', '".$diskon"', '".total"')");
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