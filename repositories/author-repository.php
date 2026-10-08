<?php

$authors = [
    ['id' => 1, 'name' => 'Andrea Hirata', 'email' => 'andrea@example.com', 'bio' => 'Penulis novel Indonesia'],
    ['id' => 2, 'name' => 'Tere Liye', 'email' => 'tere@example.com', 'bio' => 'Penulis novel Indonesia'],
    ['id' => 3, 'name' => 'J.K. Rowling', 'email' => 'jk@example.com', 'bio' => 'Penulis seri Harry Potter'],
    ['id' => 4, 'name' => 'Pramoedya Ananta Toer', 'email' => 'pramoedya@example.com', 'bio' => 'Sastrawan Indonesia'],
    ['id' => 5, 'name' => 'Sapardi Djoko Damono', 'email' => 'sapardi@example.com', 'bio' => 'Penyair dan sastrawan Indonesia']
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