<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donations List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('uploads/1687175520_logo-final.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            color: blue; /* Set text color to blue */
        }
        .center-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .lagayan {
            background-color: rgba(255, 255, 255, 0.8);
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
            color: blue; /* Set h1 text color to blue */
            font-size: 28px; /* Increase font size */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: center; /* Center-align table cells */
            border-bottom: 1px solid #dddddd;
            color: blue; /* Set table text color to blue */
            font-size: 18px; /* Increase font size */
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="center-content">
        <div class="lagayan">
            <?php
            // Include your database connection code here
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "charity_db";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            ?>

            <h1>Thank You All For Your Donation!!</h1>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Fetch donation data
                    $sql = "SELECT name FROM donations";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='1'>No donations found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
