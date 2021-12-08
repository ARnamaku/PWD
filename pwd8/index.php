<?php
include_once("koneksi.php");
$result = mysqli_query($con, "SELECT * FROM mahasiswa");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CURD</title>
  </head>
  <body>
<div class="container">
    <h1>DATA MAHASISWA</h1>

    <a href="tambah.php" class="btn btn-success btn-sm m-2"> Tambah Data </a>
    <a href="lap_mhs.php" class="btn btn-primary btn-sm m-2"> Cetak </a>

    <table class="table">
        <thead>
            <tr>
                <th>Nim</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Action</th>
            </tr>
</thead>
<tbody>
    <?php
    while ($user_data = mysqli_fetch_array($result)){ ?>
    <tr>
        <td><?= $user_data['nim']; ?></td>
        <td><?= $user_data['nama']; ?></td>
        <td><?= $user_data['jkel']; ?></td>
        <td><?= $user_data['alamat']; ?></td>
        <td><?= $user_data['tgllhir']; ?></td>
        <td>
            <a href="edit.php?id=<?= $user_data['nim'] ?>" class="btn btn-warning btn-sm"> Update </a>
            <a href="Delete.php?id=<?= $user_data['nim'] ?>" class="btn btn-danger btn-sm"> Delete </a>
           
        </td>
    </tr>
        <?php } ?>
    </tbody>
    </table>    

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>