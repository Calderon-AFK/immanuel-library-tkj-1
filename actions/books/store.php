<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['store'])) {
    header('Location: ../../pages/books/index.php');
    exit();
}

header('Location: ../../pages/books/index.php');
exit();