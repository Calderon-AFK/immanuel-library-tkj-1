<?php

$categories = [
    ['id' => 1, 'name' => 'Fiksi', 'description' => 'Novel dan cerita rekaan'],
    ['id' => 2, 'name' => 'Sains', 'description' => 'Buku-buku tentang ilmu pengetahuan'],
    ['id' => 3, 'name' => 'Sejarah', 'description' => 'Buku-buku tentang sejarah'],
    ['id' => 4, 'name' => 'Teknologi', 'description' => 'Buku-buku tentang teknologi']
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