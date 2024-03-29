<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abss Lms</title>
    <link rel="stylesheet" href="styles-announcements.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
    <link rel="icon" type="image/x-icon" href="images/a.png">
    <style>
        /* Optional: Add CSS for better styling */
        .post {
            margin-bottom: 20px;
            padding: 10px;
            border: 2px solid #ccc;
            border-radius: 5px;
        }
        .post h2 {
            margin-top: 0;
        }
        .post-content {
            white-space: pre-line;
        }
    </style>
</head>
<body>
    <section class="header">
        <nav>
            <!-- Logo 🔽 -->
            
        <div class="text-box">
            <img src="images/logo-removebg-preview.png" width="-200px" height="190px">
            <h1>Announcements</h1>
        </div>
        <div class="announcement-board">

            <?php
            // Read posts from the storage (e.g., text file)
            $file = 'posts.txt';
            $posts = file_get_contents($file);
        
            // Separate posts into individual posts
            $individual_posts = explode("\n\n", $posts);
        
            // Display each post
            foreach ($individual_posts as $post) {
                // Separate title and content
                $post_parts = explode("\n", $post);
                $title = $post_parts[0];
                $content = implode("\n", array_slice($post_parts, 1)); // Combine content lines
                
                // Display post
                echo '<div class="post">';
                echo '<h2>' . htmlspecialchars($title) . '</h2>';
                echo '<div>' . htmlspecialchars($content) . '</div>';
                echo '</div>';
            }
            ?>
            
        </div>
    </section >

<!-- ---------javaScript for toggle menu -->
<script>

var navLinks =document.getElementById("navLinks")
function showMenu(){
    navLinks.style.right = "0";
}
function hideMenu(){
    navLinks.style.right = "-200px";
}



</script>

</body>
</html>







