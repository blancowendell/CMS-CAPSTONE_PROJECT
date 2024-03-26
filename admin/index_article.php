<body>
    <div class="container mt-5">
        <h2>Edit Article</h2>
        <?php
        require_once 'db_connection.php'; // Include your database connection

        if (isset($_GET['article_id'])) {
            $article_id = $_GET['article_id'];

            $query = "SELECT * FROM articles WHERE id = $article_id";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                ?>
                <form action="update_article.php" method="post">
                    <!-- ... your form fields ... -->
                    <button type="submit" name="update_article" class="btn btn-primary">Update Article</button>
                </form>
                <?php
            } else {
                echo "<p>No article found with the specified ID.</p>";
            }

            mysqli_close($conn);
        }
        ?>
    </div>
</body>