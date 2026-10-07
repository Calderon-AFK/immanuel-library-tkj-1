<?php

$authors = [
    ['id' => 1, 'name' => 'Budi Raharjo', 'email' => 'budi@example.com', 'bio' => 'Penulis buku pemrograman'],
    ['id' => 2, 'name' => 'Ahmad Hanafi', 'email' => 'ahmad@example.com', 'bio' => 'Pakar basis data']
];

function getAuthors() {
    global $authors;
    return $authors;
}

function getAuthor($id = null) {
    global $authors;
    if ($id === null) {
        return $authors[0] ?? null;
    }
    foreach ($authors as $author) {
        if ($author['id'] == $id) {
            return $author;
        }
    }
    return $authors[0] ?? null;
}