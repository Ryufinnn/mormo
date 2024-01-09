<?php
include('connect.php');
$id_gelready = $_GET['id_gelready'];
/*
$kueri_pilih = mysql_query("SELECT `nama_detail` FROM `gelready_detail` WHERE `id_gelready`='$id_gelready'");
$hitung= mysql_num_rows($kueri_pilih);
echo $hitung;
while (hitung > 0){
	$hasil = mysql_fetch_assoc($kueri_pilih);
	$namafile = $hasil['nama_foto'];
	$lokasi='../images/'.$namafile;
	unlink($lokasi);
}
echo $hitung;
$namafile=$hasil['nama_detail'];
$lokasi='../images/'.$namafile;
unlink($lokasi);
 */

$kueri_pilih = mysql_query("SELECT `nama_foto` FROM `gel_readystock` WHERE `id_gelready`='$id_gelready'");
$hasil = mysql_fetch_assoc($kueri_pilih);
$namafile=$hasil['nama_foto'];
$lokasi='../images/gelReady/'.$namafile;
unlink($lokasi);

$hapus = mysql_query("DELETE FROM `gel_ready` WHERE `id_gelready`='$id_gelready'") or die(mysql_error());
if ($hapus) {
  echo"<script>alert('Gambar Berhasil Dihapus!'); window.location='delgelkp.php'</script>";}
else{
  echo"<script>alert('Gagal Dihapus. Coba Hapus Kembali');</script>";}
 
?>