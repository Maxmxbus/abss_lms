<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST['post_title'];
        $content = $_POST['post_content'];
        
        // You can add validation and sanitization here

        // Save the post to a file or database
        $file = 'posts.txt';
        $current = file_get_contents($file);
        $current = "$title\n$content\n\n";
        file_put_contents($file, $current);

        // Redirect user to a confirmation page or back to the posting form
        header('Location: post_success.php');
        exit;
    }
?>
