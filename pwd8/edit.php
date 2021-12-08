<?php
// Display selected user data based on id
// Getting id from url
include_once("koneksi.php");
$id = $_GET['id'];
// Fetech user data based on id
$result = mysqli_query($con, "SELECT * FROM mahasiswa WHERE nim='$id'");
while($user_data = mysqli_fetch_array($result)) {
    $nim = $user_data['nim'];
    $nama = $user_data['nama'];
    $jkel = $user_data['jkel'];
    $alamat = $user_data['alamat'];
    $tgllhir = $user_data['tgllhir'];
}
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
    <h1>UPDATE DATA MAHASISWA</h1>

    <a href="index.php" class="btn btn-warning btn-sm m-2"> Data </a>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
        <div class="form-group">
            <label>Nim</label>
            <input type="number" name="nim" value="<?= $nim ?>" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" value="<?= $nama ?>" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Gender (L/P)</label>
            <input type="text" name="jkel" value="<?= $jkel ?>" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" value="<?= $alamat ?>" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Tgl Lahir</label>
            <input type="date" name="tgllhir" value="<?= $tgllhir ?>" class="form-control" required>
        </div>
        <button type="submit" name="update" class="btn btn-success btn-sm mt-2">Update</button>
    </form>

</div>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>

<?php
// Check If form submitted, insert form data into users table.
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jkel = $_POST['jkel'];
    $alamat = $_POST['alamat'];
    $tgllhir = $_POST['tgllhir'];

    // Insert user data into table
    $result = mysqli_query($con, "UPDATE mahasiswa SET
nama='$nama',jkel='$jkel',alamat='$alamat',tgllhir='$tgllhir' WHERE nim='$id'");
    header("Location: index.php");
}
?>
