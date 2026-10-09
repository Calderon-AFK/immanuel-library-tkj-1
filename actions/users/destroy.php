<?php

if (!isset($_GET['id'])) {
    header('Location: ../../pages/users/index.php');
    exit();
}

$id = $_GET['id'];

require_once '../../repositories/user-repository.php';

deleteUser($id);

header('Location: ../../pages/users/index.php');
exit();