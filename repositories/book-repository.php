<?php

$books = [
    [
        'id' => 1,
        'title' => 'Pemrograman Web dengan PHP',
        'author' => 'Budi Raharjo',
        'publisher' => 'Informatika',
        'year' => 2022,
        'isbn' => '978-602-6232-24-4',
        'category' => 'Pemrograman',
        'synopsis' => 'Buku ini membahas dasar-dasar pemrograman web menggunakan PHP.',
        'stock' => 10,
        'cover' => 'https://via.placeholder.com/150'
    ],
    [
        'id' => 2,
        'title' => 'Belajar MySQL untuk Pemula',
        'author' => 'Ahmad Hanafi',
        'publisher' => 'Andi Publisher',
        'year' => 2021,
        'isbn' => '978-979-29-5123-1',
        'category' => 'Basis Data',
        'synopsis' => 'Panduan praktis menguasai database MySQL dari dasar.',
        'stock' => 5,
        'cover' => 'https://via.placeholder.com/150'
    ]
];

function getBooks() {
    global $books;
    return $books;
}

function getBook($id = null) {
    global $books;
    if ($id === null) {
        return $books[0] ?? null;
    }
    foreach ($books as $book) {
        if ($book['id'] == $id) {
            return $book;
        }
    }
    return $books[0] ?? null;
}