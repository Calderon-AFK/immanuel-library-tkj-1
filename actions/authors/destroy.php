<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    echo "Permintaan hapus penulis dengan ID: " . htmlspecialchars($id);
    exit();
}

header('Location: ../../pages/authors/index.php');
exit();