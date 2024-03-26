<body>
<div class="card card-outline card-primary">
  <div class="card-header">
        <h2 class="card-title">Edit Article</h2>
  </div>
        <?php
        require_once 'db_connection.php'; // Include your database connection

        if (isset($_POST['edit_article'])) {
            $article_id = $_POST['article_id'];

            $query = "SELECT * FROM articles WHERE id = $article_id";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                ?>
                <form action="?page=edit_article" method="post">
                    <input type="hidden" name="article_id" value="<?php echo $row['id']; ?>">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" value="<?php echo $row['title']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Body</label>
                        <textarea name="body" class="form-control"><?php echo $row['body']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Author</label>
                        <input type="text" name="author" class="form-control" value="<?php echo $row['author']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Publication Date</label>
                        <input type="date" name="pub_date" class="form-control" value="<?php echo $row['pub_date']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Meta Title</label>
                        <input type="text" name="meta_title" class="form-control" value="<?php echo $row['meta_title']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Meta Description</label>
                        <textarea name="meta_description" class="form-control"><?php echo $row['meta_description']; ?></textarea>
                        <div class="form-group">
                            <button type="submit" name="update_article" class="btn btn-primary">Update Article</button>
                        </div>
                    </div>
                    <form action="?page=edit_article" method="post">
                        <input type="hidden" name="article_id" value="<?php echo $row['id']; ?>">
                        <button type="submit" name="delete_article" class="btn btn-danger">Delete Article</button>       
                    </form>
                </form>
                <?php
            } else {
                echo "<p>No article found with the specified ID.</p>";
            }
        }
        ?>
       <?php
if (isset($_POST['update_article'])) {
    $article_id = $_POST['article_id'];
    $title = $_POST['title'];
    $body = $_POST['body'];

    // Update the image URL if an image is uploaded
    if (!empty($_FILES['image']['name'])) {
        $image_path = 'uploads/';
        $image_tmp = $_FILES['image']['tmp_name'];
        $image_url = $image_path . $_FILES['image']['name'];
        move_uploaded_file($image_tmp, $image_url);
    }

    $sql = "UPDATE articles SET title = ?, body = ?, image_url = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $title, $body, $image_url, $article_id);

    if ($stmt->execute()) {
        // Redirect back to edit_article.php after successful update
        header("Location: ?page=edit_article");
        exit();
    } else {
        echo "<p class='alert alert-danger'>Error updating article: " . $stmt->error . "</p>";
    }

    $stmt->close();
}
if (isset($_POST['delete_article'])) {
    $article_id = $_POST['article_id'];
    $sql = "DELETE FROM articles WHERE id = $article_id";
    
    $stmt = $conn->prepare($sql);
    if ($stmt->execute()) {
        echo "<p class='alert alert-success'>Article deleted successfully!</p>";
    } else {
        echo "<p class='alert alert-danger'>Error deleting article: " . $stmt->error . "</p>";
    }

    $stmt->close();
}

?>
 </div>
</div>
</body>
</html>
