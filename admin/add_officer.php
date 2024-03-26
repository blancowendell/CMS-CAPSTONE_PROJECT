<?php
// Include database connection
include 'db_connection.php';

// Initialize variables
$avatar = '';
$firstname = '';
$lastname = '';
$middlename = '';
$position = '';
$start_term = '';
$end_term = '';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $avatar = $_FILES['avatar']['name'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $middlename = $_POST['middlename'];
    $position = $_POST['position'];
    $start_term = $_POST['start_term'];
    $end_term = $_POST['end_term'];

    // Prepare and execute SQL query
    $sql = "INSERT INTO `officers` (firstname, lastname, middlename, position, avatar, start_term, end_term) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Error: " . $conn->error);
    }
    $stmt->bind_param('sssssss', $firstname, $lastname, $middlename, $position, $avatar, $start_term, $end_term);
    $result = $stmt->execute();
    if (!$result) {
        die("Error: " . $stmt->error);
    }

    $avatarPath = 'uploads/';
    $targetPath = $avatarPath . $avatar;
    move_uploaded_file($_FILES['avatar']['tmp_name'], $targetPath);

    // Send JSON response back to the client
    $response = [
        'status' => 'success',
        'message' => 'Officer added successfully'
    ];
    header('Content-Type: application/json');
    echo json_encode($response);
    exit();
}
?>
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">Add New Officer</h3>
    </div>
    <div class="card-body">
        <form id="addOfficerForm" enctype="multipart/form-data">
            <div class="form-group">
                <label for="avatar">Avatar:</label>
                <input type="file" name="avatar" id="avatar" accept="image/*" required onchange="previewAvatar(event)">
            </div>
            <div class="form-group">
                <label for="avatarPreview">Avatar Preview:</label>
                <img id="avatarPreview" src="#" alt="Avatar Preview" style="display: none; max-width: 200px;">
            </div>
            <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" id="firstname" name="firstname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" id="lastname" name="lastname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="middlename">Middle Name</label>
                <input type="text" id="middlename" name="middlename" class="form-control">
            </div>
            <div class="form-group">
                <label for="position">Position</label>
                <select id="position" name="position" class="form-control" required>
                    <option value="President">President</option>
                    <option value="Vice President">Vice President</option>
                    <option value="Treasurer">Treasurer</option>
                    <option value="System Admin">System Admin</option>
                    <option value="Event Planner">Event Planner</option>
                    <option value="Runner">Runner</option>
                    <option value="Executive Officer">Executive Officer</option>
                    <!-- Add more position options as needed -->
                </select>
            </div>
            <div class="form-group">
                <label for="start_term">Start Term</label>
                <input type="date" id="start_term" name="start_term" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="end_term">End Term</label>
                <input type="date" id="end_term" name="end_term" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Officer</button>
        </form>
    </div>
</div>
<script>
    // Function to handle form submission
    document.getElementById('addOfficerForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        var form = this;
        var formData = new FormData(form);

        // Send AJAX request to add_officer.php
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'add_officer.php', true);
        xhr.onload = function() {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                if (response.status === 'success') {
                    // Redirect to the list of officers page
                    window.location.href = '?page=listofofficers';
                } else {
                    // Display error message
                    alert('Error: ' + response.message);
                }
            } else {
                // Display error message
                alert('Error: ' + xhr.statusText);
            }
        };
        xhr.onerror = function() {
            // Display error message
            alert('Error: Failed to submit form');
        };
        xhr.send(formData);
    });

    function previewAvatar(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var avatarPreview = document.getElementById('avatarPreview');
            avatarPreview.src = reader.result;
            avatarPreview.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
