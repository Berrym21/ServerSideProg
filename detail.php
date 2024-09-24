<?php
require_once 'file_helpers.php';

// Read blog posts from JSON file
$blogPosts = readJsonFile('posts.json');

// Get the post_id from the URL
$postId = $_GET['post_id'] ?? null;

// Function to display a blog post
function displayPost($postId, $posts) {
    foreach ($posts as $post) {
        if ($post['id'] == $postId) {
            echo "<h1>{$post['title']}</h1>";
            echo "<p class='text-muted'>By {$post['author']} on {$post['date']}</p>";
            echo "<p>{$post['content']}</p>";
            return $post; // Return the found post
        }
    }
    echo "<h1>Post not found</h1>";
    echo "<p>The blog post you are looking for does not exist.</p>";
    return null;
}

// Display the selected post
$post = displayPost($postId, $blogPosts);

// Visitor counter
if ($post) {
    $csvFile = 'visitors.csv';

    // Read visitors data from CSV file
    $visitors = readCsvFile($csvFile);

    // Increment visit count for this post
    if (isset($visitors[$postId])) {
        $visitors[$postId]++;
    } else {
        $visitors[$postId] = 1; // First visit
    }

    // Write updated visit count back to CSV file
    writeCsvFile($csvFile, $visitors);

    // Display visit count
    echo "<p>Views: {$visitors[$postId]}</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <a href="index.php" class="btn btn-primary mt-4">Back to Blog Index</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
