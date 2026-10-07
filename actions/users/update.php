<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    header('Location: ../../pages/users/index.php');
    exit();
}

header('Location: ../../pages/users/index.php');
exit();