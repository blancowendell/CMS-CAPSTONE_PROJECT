
<!DOCTYPE .html>
<body>

<style>
    body{
        min-height: 100vh;
        background: url(uploads/events/6.jpg) no-repeat;
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    h1{
        color: rgba(16, 38, 235);
        text-align: center;
        font-size: 35px;
        text-transform: uppercase;
        font-family: "poppins",sans-serif;
    }
    h2{
        color: rgb(238, 204, 14);
        font-size: 35px;
        text-transform: uppercase;
        font-family: "poppins",sans-serif; 
    }
</style>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "charity_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn === false ){
    die("COULD NOT CONNECT" . mysqli_connect_error());
}

$name = $_REQUEST['name'];
$reference_no = $_REQUEST['reference_no'];
$amount = $_REQUEST['amount'];

$sql = "INSERT INTO donations VALUES ('$name','$reference_no','$amount')";



if(mysqli_query($conn, $sql)){
    echo "<center><h1>Thank you for your donation</h1></center>";

    //echo nl2br("<h2>\n$name\n $reference_no \n$amount</h2>"); -->
} else{
    echo "error $sql.". mysqli_error($conn);
}

mysqli_close($conn);
?>

</html>
</body>