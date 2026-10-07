<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    header('Location: ../../pages/categories/index.php');
    exit();
}

header('Location: ../../pages/categories/index.php');
exit();