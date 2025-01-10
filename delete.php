<?php
// Include database connection file
include 'koneksi.php';

// Check if the id parameter is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare the delete statement
    $sql = "DELETE FROM mahasiswa WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    // Execute the statement
    if ($result) {
        header('location: index.php');
    } else {
        echo "Error deleting record: ";
    }

    // Close the statement and connection
    mysqli_close($conn);
} else {
    echo "No id parameter provided.";
}
?>