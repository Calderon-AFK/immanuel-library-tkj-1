<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' || $_SERVER['REQUEST_METHOD'] === 'GET') {
    header('Location: ../../pages/books/index.php');
    exit();
}

header('Location: ../../pages/books/index.php');
exit();