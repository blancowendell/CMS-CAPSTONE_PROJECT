<?php
// Include database connection
include 'db_connection.php';

// Check if officerId is provided
if (isset($_GET['id'])) {
    $officerId = $_GET['id'];

    // Fetch officer data from the database
    $stmt = $conn->prepare("SELECT * FROM officers WHERE id = ?");
    $stmt->bind_param('i', $officerId);
    $stmt->execute();
    $result = $stmt->get_result();
    $officer = $result->fetch_assoc();
    $stmt->close();

    if (!$officer) {
        // Officer not found, handle the error
        die("Error: Officer not found");
    }

    // Display the officer details in the edit form
    ?>
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Officer</h3>
        </div>
        <div class="card-body">
            <form id="editOfficerForm">
                <input type="hidden" name="officerId" value="<?php echo $officer['id']; ?>">
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" id="firstname" name="firstname" class="form-control" value="<?php echo $officer['firstname']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" id="lastname" name="lastname" class="form-control" value="<?php echo $officer['lastname']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="middlename">Middle Name</label>
                    <input type="text" id="middlename" name="middlename" class="form-control" value="<?php echo $officer['middlename']; ?>">
                </div>
                <div class="form-group">
                    <label for="position">Position</label>
                    <select id="position" name="position" class="form-control" required>
                        <option value="President" <?php echo ($officer['position'] === 'President') ? 'selected' : ''; ?>>President</option>
                        <option value="Vice President" <?php echo ($officer['position'] === 'Vice President') ? 'selected' : ''; ?>>Vice President</option>
                        <option value="Treasurer" <?php echo ($officer['position'] === 'Treasurer') ? 'selected' : ''; ?>>Treasurer</option>
                        <option value="System Admin" <?php echo ($officer['position'] === 'System Admin') ? 'selected' : ''; ?>>System Admin</option>
                        <option value="Event Planner" <?php echo ($officer['position'] === 'Event Planner') ? 'selected' : ''; ?>>Event Planner</option>
                        <option value="Runner" <?php echo ($officer['position'] === 'Runner') ? 'selected' : ''; ?>>Runner</option>
                        <option value="Executive Officer" <?php echo ($officer['position'] === 'Executive Officer') ? 'selected' : ''; ?>>Executive Officer</option>
                        <!-- Add more position options as needed -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="start_term">Start Term</label>
                    <input type="date" id="start_term" name="start_term" class="form-control" value="<?php echo $officer['start_term']; ?>" required>
                </div>
                <div class="form-group">
                    <label for="end_term">End Term</label>
                    <input type="date" id="end_term" name="end_term" class="form-control" value="<?php echo $officer['end_term']; ?>" required>
                </div>
                <button id="editOfficerForm" type="submit" class="btn btn-primary">Save Changes</button>
            </form>
        </div>
    </div>
    <script>
        document.getElementById('editOfficerForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent default form submission

            var form = this;
            var formData = new FormData(form);

            // Send AJAX request to update_officer.php
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'update_officer.php', true);
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
    </script>
    <?php
} else {
    // Officer ID not provided, handle the error
    die("Error: Officer ID not specified");
}
?>
