<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $kota = $_POST['kota'];

    $sql = "INSERT INTO mahasiswa (npm, nama, kota) VALUES ('$npm', '$nama', '$kota')";

    if (mysqli_query($conn, $sql)) {
        header('location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container mb-5">

        <h2>Registration Form</h2>
        <form Action="create.php" method="POST" enctype="multipart/form-data" class="mt-5">
            <div class="form-group row">
                <label for="text" class="col-4 col-form-label">NPM</label>
                <div class="col-8">
                    <div class="input-group">
                        <input id="text" name="npm" type="text" class="form-control">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fa fa-address-book"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="text2" class="col-4 col-form-label">NAMA</label>
                <div class="col-8">
                    <div class="input-group">
                        <input id="text2" name="nama" type="text" class="form-control">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fa fa-address-book"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="select" class="col-4 col-form-label">KOTA</label>
                <div class="col-8">
                    <select id="select" name="kota" class="custom-select">
                        <option value="Bandar Lampung">Bandar Lampung</option>
                        <option value="Lampung Selatan">Lampung Selatan</option>
                        <option value="Lampung Tengah">Lampung Tengah</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                    <button name="clear" type="reset" class="btn btn-danger">Reset</button>
                </div>
                <div class="offset-4 col-8">
                </div>
            </div>
        </form>
    </div>
</body>

</html>