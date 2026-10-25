
<?php

require_once __DIR__ . '/../config/database.php';

function getCategories()
{
    global $pdo;

    $query = "
        SELECT
            categories.*,
            COUNT(books.id) AS total_books
        FROM categories
        LEFT JOIN books ON books.category_id = categories.id
        GROUP BY categories.id
    ";

    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $categories = $stmt->fetchAll();

    return $categories;
}

function getCategory()
{
    $category = [
        "id"          => 1,
        "name"        => "Fiksi",
        "description" => "Novel dan cerita rekaan",
    ];

    return $category;
}

function isCategoryExists($id)
{
    global $pdo;

    $query = "SELECT id FROM categories WHERE id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['id' => $id]);

    return $stmt->fetch() !== false;
}


