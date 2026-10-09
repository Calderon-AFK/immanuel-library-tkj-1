<?php

$users = [
    [
        'id' => 1,
        'name' => 'Admin Utama',
        'email' => 'admin@ski.sch.id',
        'role' => 'Admin'
    ],
    [
        'id' => 2,
        'name' => 'Budi Santoso',
        'email' => 'budi.santoso@siswa.ski.sch.id',
        'role' => 'Member'
    ],
    [
        'id' => 3,
        'name' => 'Siti Aminah',
        'email' => 'siti.aminah@siswa.ski.sch.id',
        'role' => 'Member'
    ],
    [
        'id' => 4,
        'name' => 'Richard Marcell',
        'email' => 'richard.m@ski.sch.id',
        'role' => 'Admin'
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

function getProfile() {
    return [
        'phone' => '',
        'address' => '',
        'bio' => ''
    ];
}

function deleteUser($id) {
    global $users;

    foreach ($users as $key => $user) {
        if ($user['id'] == $id) {
            unset($users[$key]);
            return true;
        }
    }

    return false;
}