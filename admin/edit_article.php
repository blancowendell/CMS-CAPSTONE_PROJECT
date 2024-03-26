
<body>
  <div class="card card-outline card-primary">
        <div class="card-header">
          <h3 class="card-title">Article Management</h3>
            <form action="?page=create_article" method="post">
                <button type="submit" name="create_new_article" class="btn btn-primary float-right">Create New Article</button>
            </form>
        </div>
        <?php
        require_once 'db_connection.php';

        // Update Article
        if (isset($_POST['update_article'])) {
            $id = $_POST['article_id'];
            $title = $_POST['title'];
            $body = $_POST['body'];
            $author = $_POST['author'];
            $pub_date = $_POST['pub_date'];
            $meta_title = $_POST['meta_title'];
            $meta_description = $_POST['meta_description'];

            $query = "UPDATE articles SET title = '$title', body = '$body', author = '$author', pub_date = '$pub_date', meta_title = '$meta_title', meta_description = '$meta_description' WHERE id = $id";
            mysqli_query($conn, $query);
            echo "<p class='alert alert-success'>Article updated successfully!</p>";
        }

        // Display Articles
        $query = "SELECT * FROM articles";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "
                <div class='card mt-3'>
                    <div class='card-header'>
                        <h4>{$row['title']}</h4>
                    </div>
                    <div class='card-body'>
                        <p>{$row['body']}</p>
                        <p><strong>Author:</strong> {$row['author']}</p>
                        <p><strong>Publication Date:</strong> {$row['pub_date']}</p>
                        <p><strong>Meta Title:</strong> {$row['meta_title']}</p>
                        <p><strong>Meta Description:</strong> {$row['meta_description']}</p>
                        <form action='?page=update_article' method='post'>
                            <input type='hidden' name='article_id' value='{$row['id']}'>
                            <button type='submit' class='btn btn-primary' name='edit_article'>Edit Article</button>
                        </form>
                    </div>
                </div>";
            }
        } else {
            echo "<p>No articles found.</p>";
        }
        ?>
    </div>
</body>
</html>
