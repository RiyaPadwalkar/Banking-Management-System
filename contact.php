
<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bank";  // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Insert form data into the database
    $sql = "INSERT INTO contact_form (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Message sent successfully!.');</script>";
        echo  "<script>window.location.href = 'homepage.html';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
