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
                // Blog data
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

                // Loop through and display blog post titles
                foreach ($blogPosts as $id => $post) {
                    echo "<h2><a href='detail.php?post_id={$id}'>{$post['title']}</a></h2>";
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
