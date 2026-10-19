
<?php

require_once __DIR__ . '/../config/database.php';

function getAuthors()
{
    global $pdo;

    $query = "
        SELECT
            authors.id,
            authors.name,
            COUNT(DISTINCT books.id) AS total_books
        FROM authors
        LEFT JOIN book_author
            ON book_author.author_id = authors.id
        LEFT JOIN books
            ON books.id = book_author.book_id
        GROUP BY authors.id, authors.name
    ";

    $stmt = $pdo->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getAuthor()
{
    $author = [
        "id"   => 1,
        "name" => "Andrea Hirata",
        "bio"  => "Penulis asal Belitung, dikenal lewat novel Laskar Pelangi.",
    ];

    return $author;
}
