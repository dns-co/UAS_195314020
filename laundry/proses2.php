<?php
$koneksi = mysqli_connect("localhost","root","","laundry");
if ($_POST['submit'] == "submit"){

$nama = $_POST['nama'];
$password = $_POST['password'];
$kontak = $_POST['kontak'];
$submit = $_POST['submit'];


$query ="INSERT INTO user(nama,password,kontak,submit,status) VALUES ('$nama','$password','$kontak','$submit','user')";
mysqli_query($koneksi, $query);

header("location:pencarianuser.php");
 

}
?>