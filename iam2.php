<!DOCTYPE html>
<html lang="en">
<head>
    <title>Informasi Produk</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table border="1">
        <thead>
            <th>Informasi Produk</th>
        </thead>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $_GET['produk']?></td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td>:</td>
            <td><?= $_GET['Jumlah']?></td>
        </tr>
        <tr>
            <td>Jenis</td>
            <td>:</td>
            <td><?= $_GET['Jenis']?></td>
        </tr>
    </table>
</body>
</html>