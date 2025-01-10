<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>list data mahasiswa</h1>
        <a class="btn btn-primary" href="create.php">Tambah Data</a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kota</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $sql = "SELECT * FROM mahasiswa";
                $no = 1;
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                <tr>
                    <th scope="row"><?= $no; ?></th>
                    <td><?= $row['npm']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['kota']; ?></td>
                    <td><a class="btn btn-warning" href="update.php?id=<?= $row['id']; ?>">Edite</a> <a
                            class="btn btn-danger" href="delete.php?id=<?= $row['id']; ?>">Delete</a></td>
                </tr>
                <?php
                        $no++;
                    }
                } else {
                    echo "0 results";
                }
                ?>

            </tbody>
        </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>