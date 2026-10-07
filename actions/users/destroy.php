<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' || $_SERVER['REQUEST_METHOD'] === 'GET') {
    header('Location: ../../pages/users/index.php');
    exit();
}

header('Location: ../../pages/users/index.php');
exit();