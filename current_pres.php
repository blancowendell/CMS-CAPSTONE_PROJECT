<!DOCTYPE html>
<html>
<head>
    <title>List of Officers</title>
    <style>
        /* Style the card container */
        .card {
            display: flex;
            flex-wrap: wrap;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Style the profile card */
        .profile-card {
            flex: 0 0 300px;
            margin: 10px;
            padding: 20px;
            border: 1px solid #ddd;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        /* Style the officer details */
        .officer-details {
            margin-top: 10px;
        }

        /* Style the officer name */
        .officer-name {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        /* Style the officer position */
        .officer-position {
            font-style: italic;
            color: #888;
        }

        /* Style the officer avatar */
        .officer-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto;
            margin-bottom: 10px;
        }
        .president-card {
            flex: 0 0 400px; /* Width for the president's card */
            border: 2px solid #ff0000; /* Add a red border to the president's card */
            background-color: #f5f5f5; /* Add a light gray background to the president's card */
        }
    </style>
</head>
<body>
    <div class="card">
        <?php
        // Include database connection

        // Fetch list of officers from the database
        $stmt = $conn->prepare("SELECT * FROM officers");
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if any officers found
        if ($result->num_rows > 0) {
            // Iterate over the officers and display their details
            while ($officer = $result->fetch_assoc()) {
                // Check if the officer is the president
                $isPresident = ($officer['position'] === 'President');
                ?>
                <div class="profile-card <?php echo ($isPresident ? 'president-card' : ''); ?>">
                    <img src="admin/uploads/<?php echo $officer['avatar']; ?>" alt="Officer Avatar" class="officer-avatar">
                    <div class="officer-details">
                        <div class="officer-name"><?php echo $officer['firstname'] . ' ' . $officer['lastname']; ?></div>
                        <div class="officer-position"><?php echo $officer['position']; ?></div>
                    </div>
                    <div class="officer-details">
                        <div><strong>Start Term:</strong> <?php echo $officer['start_term']; ?></div>
                        <div><strong>End Term:</strong> <?php echo $officer['end_term']; ?></div>
                    </div>
                </div>
                <?php
            }
        } else {
            // No officers found
            echo 'No officers found.';
        }
        ?>
    </div>
</body>
</html>
