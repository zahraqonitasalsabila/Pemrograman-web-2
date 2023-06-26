<?php 
//echo "Hello world";
//variabel

$nama = "Zahra Qonita Salsabila";
$jurusan = "Teknik Informatika";
$smester = 2;

echo "Nama Saya Adalah : " . $nama;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> <?php echo $nama; ?></h2>
    <p>
        Saya Kuliah di jurusan <?= $jurusan; ?>
    </p>
    <p>
        Saat ini saya Semester <?php echo $smester;?>
    </p>
</body>
</html>