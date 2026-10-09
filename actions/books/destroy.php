<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    echo "Permintaan hapus buku dengan ID: " . htmlspecialchars($id);
    exit();
}

header('Location: ../../pages/books/index.php');
exit(); 