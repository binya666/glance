<?php
// Include the database connection file
include_once '../../scripts/config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $title = $_POST['title'];
    $description = $_POST['description'];

            $MySqlCommand = "SELECT MAX(id) FROM faqs";
            $Result = mysqli_query($conn, $MySqlCommand);
            $MaxID = mysqli_fetch_array($Result);
            $UserID = $MaxID['0'];
            $UserID = $UserID + 1; //2
            $Status = 1;

            // Insert data into database
            $sql = "INSERT INTO faqs (id, title, description, status) VALUES ($UserID, '$title', '$description', '$Status')";
            if ($conn->query($sql) === TRUE) {
                header("Location: ../faqs-add.php");
                exit();
                // echo 'New member added successfully. <a href="../add-team-member.php"> Add another member</a>';
?>

<?php
                
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } 
$conn->close();