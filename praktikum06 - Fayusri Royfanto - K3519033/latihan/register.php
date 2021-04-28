<html>
    <head>
        <title>Register</title>
    </head>
    <body>
        <center>
        <p><h1>Register</h1></p>
        <br>
        <form method="post">
            <p>Nama Lengkap <br><input type="text" name="nama"><br></p>
            <p>Username <br><input type="text" name="username"><br></p>
            <p>Password <br><input type="password" name="password"><br></p>
            <p><br><input type="submit" name="submit" value="Register">
            <br>Sudah punya akun? Log in <a href='form.html'>di sini</a><p>
        </form>
</center>
    </body>
</html>


<?php
if(isset($_POST['submit'])){
    $namafile = "data-user.txt";
    $myfile = fopen($namafile, "a") or die("File error");
    fwrite($myfile, $_POST['username'].",".$_POST['nama'].",".$_POST['password']."\n");
    fclose($myfile);
    echo("<script>window.location.href=('form.html')</script>");
}
?>