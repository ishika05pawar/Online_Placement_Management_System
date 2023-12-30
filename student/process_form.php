<?php
// Assuming you have a database connection established
include_once 'db.inc.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process the form data
    
    // Retrieve form data
    $name = $_POST['name'];
    $course = $_POST['course'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $sgpa = $_POST['sgpa'];
    $programmingLanguages = isset($_POST['programming_languages']) ? implode(", ", $_POST['programming_languages']) : "";
    $resume = $_FILES['resume']['name'];
    $backlog = isset($_POST['back']) ? $_POST['back'] : "No";

    // File upload handling
    $targetDirectory = "pdf/";  // specify your upload directory
    $targetFile = $targetDirectory . basename($_FILES["resume"]["name"]);

    // Move uploaded file to the specified directory
    move_uploaded_file($_FILES["resume"]["tmp_name"], $targetFile);

    // Insert data into the database (assuming you have a 'students' table)
    $sql = "INSERT INTO studentsdata (name, course, contact, email, sgpa, programming_languages, resume, backlog) 
            VALUES ('$name', '$course', '$contact', '$email', '$sgpa', '$programmingLanguages', '$resume', '$backlog')";

    if (mysqli_query($conn, $sql)) {
        // Data successfully inserted
        echo "<script>alert('Send Data');
        window.location.href='index.php'</script>";
    } else {
        // Error in insertion
        echo "Error: " . mysqli_error($conn);
    }
}
?>
