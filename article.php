<?php
$query = "SELECT * FROM articles";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "
        <div class='article'>
            <img src='{$row['image_url']}' alt='{$row['title']}' class='article-image'>
            <h2>{$row['title']}</h2>
            <p>{$row['body']}</p>
            <p><strong>Author:</strong> {$row['author']}</p>
            <p><strong>Publication Date:</strong> {$row['pub_date']}</p>
            <p><strong>Meta Title:</strong> {$row['meta_title']}</p>
            <p><strong>Meta Description:</strong> {$row['meta_description']}</p>
        </div>";
    }
    
} else {
    echo "<p>No articles found.</p>";
}
?>
<style>
    /* Reset default margins and paddings */
body, h1, h2, h3, p {
    margin: 0;
    padding: 0;
}

/* Apply a basic font and background color */
body {
    font-family: Arial, sans-serif;
    background-color: #f7f7f7;
    color: #333;
}

/* Style the article container */
.article-list {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Style individual articles */
.article {
    margin-bottom: 20px;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #fff;
}

.article h2 {
    font-size: 24px;
    margin-bottom: 10px;
    color: #333;
}

.article p {
    margin-bottom: 10px;
    color: #666;
}

.article strong {
    font-weight: bold;
    color: #333;
}
.article-image {
    max-width: 100%;
    height: auto;
    border-radius: 5px;
    margin-bottom: 10px;
}


</style>