<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['store'])) {
    print_r($_POST);
    exit();
}

header('Location: ../../pages/books/index.php');
exit();
