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

                <?php
                // Blog data (same array as in index.php)
                $blogPosts = [
                    1 => [
                        'title' => 'My First Blog Post',
                        'content' => 'This is the content of the first post.',
                        'author' => 'John Doe',
                        'date' => '2024-09-21'
                    ],
                    2 => [
                        'title' => 'A Day in the Life',
                        'content' => 'This is the content of the second post.',
                        'author' => 'Jane Smith',
                        'date' => '2024-09-22'
                    ],
                    3 => [
                        'title' => 'The World of PHP',
                        'content' => 'A blog about PHP programming.',
                        'author' => 'John Doe',
                        'date' => '2024-09-23'
                    ]
                ];

                // Get the post_id from the URL
                $postId = $_GET['post_id'] ?? null;

                // Function to display a blog post
                function displayPost($postId, $posts) {
                    if (isset($posts[$postId])) {
                        $post = $posts[$postId];
                        echo "<h1>{$post['title']}</h1>";
                        echo "<p class='text-muted'>By {$post['author']} on {$post['date']}</p>";
                        echo "<p>{$post['content']}</p>";
                    } else {
                        echo "<h1>Post not found</h1>";
                        echo "<p>The blog post you are looking for does not exist.</p>";
                    }
                }

                // Display the selected post
                displayPost($postId, $blogPosts);
                ?>

                <a href="index.php" class="btn btn-primary mt-4">Back to Blog Index</a>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
