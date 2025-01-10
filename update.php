<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM mahasiswa WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
}

if (isset($_POST['submit'])) {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $kota = $_POST['kota'];

    $sql = "UPDATE mahasiswa SET npm = '$npm', nama = '$nama', kota = '$kota' WHERE id = $id";
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
        <form Action="" method="POST" enctype="multipart/form-data" class="mt-5">
            <div class="form-group row">
                <label for="text" class="col-4 col-form-label">NPM</label>
                <div class="col-8">
                    <div class="input-group">
                        <input id="text" name="npm" value="<?= $row['npm']; ?>" type="text" class="form-control">
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
                        <input id="text2" name="nama" value="<?= $row['nama']; ?>" type="text" class="form-control">
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
                        <option value="Bandar Lampung" <?php echo ($row['kota'] == 'Bandar Lampung') ? 'selected' : '' ?>>
                            Bandar Lampung</option>
                        <option value="Metro" <?php echo ($row['kota'] == 'Metro') ? 'selected' : '' ?>>
                            Metro</option>
                        <option value="Lampung Selatan" <?php echo ($row['kota'] == 'Lampung Selatan') ? 'selected' : '' ?>>Lampung Selatan</option>
                        <option value="Lampung Tengah" <?php echo ($row['kota'] == 'Lampung Tengah') ? 'selected' : '' ?>>
                            Lampung Tengah</option>
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