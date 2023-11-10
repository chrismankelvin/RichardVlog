<?php
require "./database.inc.php";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];

    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');
    $check = "SELECT id FROM waitreviews WHERE name = '$name' ";
    $result = mysqli_query($connection, $check);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $userid = $row['id'];

            // Insert profile data into the 'profileimg' table
            $sql = "INSERT INTO profileimg (userid, STATUS) VALUES ('$userid', 1)";
            mysqli_query($connection, $sql);

            if (in_array($fileActualExt, $allowed)) {
                if ($fileError === 0) {
                    if ($fileSize < 1000000) {
                        $fileNameNew = "profile" . $userid . "." . $fileActualExt;
                        $fileDestination = 'upload/' . $fileNameNew;
                        move_uploaded_file($fileTmpName, $fileDestination);

                        $sql = "UPDATE profileimg SET STATUS = 0 WHERE userid= $userid";
                        mysqli_query($connection, $sql);

                        $sql = "UPDATE waitreviews SET profile_picture = '$fileNameNew' WHERE id= $userid";
                        mysqli_query($connection, $sql);

                        header("Location: ./index.php?error=youhavebeencreated");
                        exit(); // Add an exit to stop further execution
                    } else {
                        echo "Too big of a file";
                    }
                } else {
                    echo "Error uploading this file";
                }
            } else {
                echo "Can't upload this file";
            }
        }
    } else {
        echo "User not found: " . $name;
    }
} else {
    header("Location: index.php?back"); // Fixed the typo in the URL
    exit(); // Add an exit to stop further execution
}
?>
