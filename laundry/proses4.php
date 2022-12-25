<?php
$koneksi = mysqli_connect("localhost","root","","laundry");
if ($_POST['submit'] == "submit") {

$pelayanan = $_POST['pelayanan'];
$berat = $_POST['berat'];
$harga = $_POST['harga'];
$nama = $_POST['nama'];
$masuk = $_POST['masuk'];
$keluar = $_POST['keluar'];
$jumlah = $_POST['jumlah'];
$submit = $_POST['submit'];


$query ="INSERT INTO data(pelayanan,berat,harga,nama,masuk,keluar,jumlah,submit) VALUES ('$pelayanan','$berat','$harga','$nama','$masuk','$keluar','$jumlah','$submit')";
mysqli_query($koneksi, $query);

header("location:tmtb.php");
 

}
?>