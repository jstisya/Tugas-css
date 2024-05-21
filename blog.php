<?php
include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <header>
        <h1>Blog</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Latest Articles</h2>
          <?php
    $query = "SELECT * FROM blog";
    $result = mysqli_query($conn, $query);

    $no = 1;

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($no >=0) {
            ?>
        <article>
            <h3>Article <?= $row["id"] ?></h3>
            <h4><?= $row["judul"] ?></h4>
            <p><?= $row["deskripsi"] ?></p>
            <a href="https://en.wikipedia.org/wiki/Technology">Read more...</a>
        </article>
        <?php } 
            $no++;
        }
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    } ?>
        
    </main>
    <footer>
        <p>&copy; 2024 Jstisya Website. All rights reserved.</p>
    </footer>
</body>
</html>

<head>
    <link rel="stylesheet" type="text/css" href="style_blog.css">
</head>