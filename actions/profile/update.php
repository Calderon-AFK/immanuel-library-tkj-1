<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = $_POST['name'] ?? '';
    $email   = $_POST['email'] ?? '';
    $phone   = $_POST['phone'] ?? '';
    $address = $_POST['address'] ?? '';
    $bio     = $_POST['bio'] ?? '';

    echo "<h3>Data Profil Berhasil Diperbarui!</h3>";
    echo "<pre>";
    print_r([
        'name'    => $name,
        'email'   => $email,
        'phone'   => $phone,
        'address' => $address,
        'bio'     => $bio,
    ]);
    echo "</pre>";
    echo "<br><a href='../../pages/profile/edit.php'>Kembali ke Edit Profil</a>";
} else {
    header('Location: ../../pages/profile/edit.php');
    exit;
}