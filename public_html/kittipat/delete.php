<?php
require "db.php";

if (isset($_GET['id'])) {

    $query = "DELETE FROM items WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $_GET['id']);

    if ($stmt->execute()) {
        $mess = "Item Deleted!!!";
        echo "<script>window.alert('Item deleted successfully!')
        window.location.href = 'index.php'</script>";
    } else {
        $mess = "Failed Delete!!!";
    }

    echo $mess;
    $conn = null;
}
