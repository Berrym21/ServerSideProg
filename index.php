<?php
require_once 'file_helpers.php';

// Read blog posts from JSON file
$blogPosts = readJsonFile('posts.json');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Blog Posts</h1>
        <div class="row">
            <div class="col-md-8 offset-md-2">

                <?php
                // Loop through and display blog post titles
                foreach ($blogPosts as $post) {
                    echo "<h2><a href='detail.php?post_id={$post['id']}'>{$post['title']}</a></h2>";
                    echo "<p>By {$post['author']} on {$post['date']}</p>";
                    echo "<hr>";
                }
                ?>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
