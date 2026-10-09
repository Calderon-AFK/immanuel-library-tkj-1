<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    echo "Permintaan hapus kategori dengan ID: " . htmlspecialchars($id);
    exit();
}

header('Location: ../../pages/categories/index.php');
exit(); 