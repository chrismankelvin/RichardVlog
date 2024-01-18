<?php
include './inc/db_connection.php';

$tables = array("reviews", "meets", "notifications"); // Add your table names

// Variables to store counts
$total_reviews = 0;
$total_meets = 0;
$notifications = 0;

// foreach ($tables as $index => $table) {
    // Query to count rows in a table
    // $sql = "SELECT COUNT(*) as count FROM $table";
    
    // Prepare the query
    // $stmt = $conn->prepare($sql);
    
    // Execute the query
    // $stmt->execute();
    
    // Bind result variables
    // $stmt->bind_result($count);
    
    // Fetch result
    // $stmt->fetch();
    
    // Assign count to respective variable
    // if ($index === 0) {
        // $total_reviews = $count;
    // } elseif ($index === 1) {
        // $total_meets = $count;
    // } 
    // elseif ($index === 2) {
        // $notifications = $count;
    // }    
    // elseif ($index === 2) {
    //     $countTable3 = $count;
    // }   
     // elseif ($index === 2) {
    //     $countTable3 = $count;
    // }   
     // elseif ($index === 2) {
    //     $countTable3 = $count;
    // }
    
    // Close statement
    // $stmt->close();
// }

// Output the counts
// echo "Count from table1: " . $countTable1 . "<br>";
// echo "Count from table2: " . $countTable2 . "<br>";
// echo "Count from table3: " . $countTable3 . "<br>";

// $conn->close();
?>
