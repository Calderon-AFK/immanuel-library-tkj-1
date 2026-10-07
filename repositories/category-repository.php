<?php

$categories = [
    ['id' => 1, 'name' => 'Pemrograman', 'description' => 'Buku-buku tentang pemrograman'],
    ['id' => 2, 'name' => 'Basis Data', 'description' => 'Buku-buku tentang basis data'],
    ['id' => 3, 'name' => 'Jaringan', 'description' => 'Buku-buku tentang jaringan komputer']
];

function getCategories() {
    global $categories;
    return $categories;
}

function getCategory($id = null) {
    global $categories;
    if ($id === null) {
        return $categories[0] ?? null;
    }
    foreach ($categories as $category) {
        if ($category['id'] == $id) {
            return $category;
        }
    }
    return $categories[0] ?? null;
}