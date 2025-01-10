<?php
if (isset($_GET['id'])) {
    include_once 'koneksi.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM mahasiswa WHERE id = '$id'";
    $hapus = mysqli_query($conn, $sql);
    if ($hapus) {
        header('location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
} else {
    echo "No ID specified.";
}

?>