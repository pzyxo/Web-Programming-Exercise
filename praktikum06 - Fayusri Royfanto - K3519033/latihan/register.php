<html>
    <head>
        <title>Register</title>
    </head>
    <body>
        <h1>Register</h1>
        <form method="post">
            <p>Nama Lengkap <br><input type="text" name="nama"><br></p>
            <p>Username <br><input type="text" name="username"><br></p>
            <p>Password <br><input type="password" name="password"><br></p>
            <p><br><input type="submit" name="submit" value="Register"> Sudah punya akun? Log in <a href='form.html'>di sini</a><p>
        </form>
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