<?php
include_once 'includes/db.inc.php';

// Assuming you have a table named 'studentlogin'
$sql = "SELECT * FROM studentlogin";

$result = mysqli_query($conn, $sql);

if ($result) {
    // Check if any rows are returned
    if (mysqli_num_rows($result) > 0) {
    
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
         
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No records found";
    }
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
