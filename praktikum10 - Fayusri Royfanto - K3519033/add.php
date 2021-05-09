<html>
<head>
 <title>Add Mahasiswa</title>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>
 <a href="index.php">Kembali</a>
 <br/><br/>
 <form action="add.php" method="post">
 <table width="25%" border="0">
 <tr>
 <td>Nama</td>
 <td><input type="text" name="name"></td>
 </tr>
 <tr>
 <td>Email</td>
 <td><input type="email" name="email"></td>
 </tr>
 <tr>
 <td>Telepon</td>
 <td><input type="text" name="telepon"></td>
 </tr>
 <tr>
 <td>Alamat</td>
 <td><input type="text" name="alamat"></td>
 </tr>
 <tr>
 <td>Jenis Kelamin</td>
 <td><input type="radio" id="pria" name="gender" value="male">
<label for="male">pria</label><br>
<input type="radio" id="wanita" name="gender" value="female">
<label for="female">wanita</label></td>
 </tr>
 <tr>
 <td>Tempat Lahir</td>
 <td><input type="text" name="tempatlahir"></td>
 </tr>
 <tr>
 <td>Tanggal Lahir</td>
 <td><input type="date" name="tgllahir"></td>
 </tr>
 <tr>
 <td></td>
 <td><input type="submit" name="Submit"
value="Add"></td>
 </tr>
 </table>
 </form>
 <?php
 // Cek apakah ada parameter $_POST yang terisi, jika iya masukkan dalam DB.
 if(isset($_POST['Submit'])) {
 $name = $_POST['name'];
 $email = $_POST['email'];
 $telepon = $_POST['telepon'];
 $alamat = $_POST['alamat'];
 $jenisklmn = $_POST['gender'];
 $tempatlahir = $_POST['tempatlahir'];
 $tanggallahir = $_POST['tgllahir'];
 // include database
 include_once("dbconnect.php");
 // Insert data
 $result = mysqli_query($mysqli, "INSERT INTO data_karyawan(nama,email,telepon,alamat,jenis kelamin,tempat lahir, tanggal lahir) VALUES('$name','$email','$telepon', '$alamat', '$jenisklmn', '$tempatlahir', '$tanggallahir')");
if($result){
echo "Mahasiswa berhasil ditambahkan! <a href='index.php'>View
Mahasiswa</a>";
 }
}
 ?>
</body>
</html>