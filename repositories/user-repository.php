<?php

$users = [
    [
        'id' => 1,
        'name' => 'Admin Utama',
        'email' => 'admin@gmail.com',
        'role' => 'Admin'
    ],
    [
        'id' => 2,
        'name' => 'Richard Marcell',
        'email' => 'richard@gmail.com',
        'role' => 'Member'
    ]
];

function getUsers() {
    global $users;
    return $users;
}

function getUser($id = null) {
    global $users;
    if ($id === null) {
        return $users[0] ?? null;
    }
    foreach ($users as $user) {
        if ($user['id'] == $id) {
            return $user;
        }
    }
    return $users[0] ?? null;
}
