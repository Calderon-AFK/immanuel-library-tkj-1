<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    print_r($_POST);
    exit();
}

header('Location: ../../pages/categories/index.php');
exit();
