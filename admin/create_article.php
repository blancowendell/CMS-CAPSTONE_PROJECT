<body>
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Add Article</h3>
        </div>
        <div class="card-body">
            <form action="?page=create_article" method="post">
                <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="Title" required>
                </div>
                <div class="form-group">
                    <textarea name="body" class="form-control" placeholder="Body" required></textarea>
                </div>
                <div class="form-group">
                    <input type="text" name="author" class="form-control" placeholder="Author" required>
                </div>
                <div class="form-group">
                    <input type="date" name="pub_date" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="text" name="meta_title" class="form-control" placeholder="Meta Title" required>
                </div>
                <div class="form-group">
                    <textarea name="meta_description" class="form-control" placeholder="Meta Description"></textarea>
                </div>
                <div class="form-group">
                    <input type="file" name="image" class="form-control-file">
                </div>
                <div class="form-group">
                    <button type="submit" name="submit_article" class="btn btn-primary">Create Article</button>
                </div>
            </form>
        </div>
    </div>
</body>    
</html>

<?php
require_once 'db_connection.php'; // Include your database connection

if (isset($_POST['submit_article'])) {
    $title = $_POST['title'];
    $body = $_POST['body'];
    $author = $_POST['author'];
    $pub_date = $_POST['pub_date'];
    $meta_title = $_POST['meta_title'];
    $meta_description = $_POST['meta_description'];

    $image_path = 'admin/uploads/'; // Specify your image upload path
    $image_name = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $image_url = $image_path . $image_name;

    move_uploaded_file($image_tmp, $image_url);

    $sql = "INSERT INTO articles (title, body, author, pub_date, meta_title, meta_description, image_url) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $title, $body, $author, $pub_date, $meta_title, $meta_description, $image_url);

    if ($stmt->execute()) {
        // Redirect back to edit_article.php after successful insertion
        header("Location: ?page=edit_article");
        exit();
    } else {
        echo "<p class='alert alert-danger'>Error creating article: " . $stmt->error . "</p>";
    }

    $stmt->close();
}
?>


<!-- ... your HTML form ... -->
