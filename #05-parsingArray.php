<?php
if(!empty($_POST['proses']))
{
    print_r($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parsing Array</title>
</head>
<body>
    <form action="" method="post">
        Nama: <input type="text" name="nama">
        <br><br>
        Alamat: <textarea name="alamat" rows="8" col="200"></textarea>
        <br><br>
        Program Studi :
        <select name="program_studi">
            <option value="SI">Sistem Informasi</option>
            <option value="TI">Teknik Informatika</option>
            <option value="MI">Manajemen Informatika</option>
        </select>
        <br><br>
        <input type="submit" name="proses" value="submit">
    </form>
</body>
</html>