<?php
include('connect.php');
$id_gelkompak = $_GET['id_gelkompak'];
$kueri_pilih = mysql_query("SELECT `nama_gelkompak` FROM `gel_kompak` WHERE `id_gelkompak`='$id_gelkompak'");
$hasil = mysql_fetch_assoc($kueri_pilih);
$namafile=$hasil['nama_gelkompak'];
$lokasi='../images/gelKompak/'.$namafile;
unlink($lokasi);

$hapus = mysql_query("DELETE FROM `gel_kompak` WHERE `id_gelkompak`='$id_gelkompak'") or die(mysql_error());
if ($hapus) {
  echo"<script>alert('Gambar Berhasil Dihapus!'); window.location='delgelkp.php'</script>";}
else{
  echo"<script>alert('Gagal Dihapus. Coba Hapus Kembali');</script>";}
?>