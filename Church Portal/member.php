<?php
include './inc/values.php';
include './inc/header.php';
include './inc/db_connection.php'; // Include your database connection file

// Check if the ID is provided in the URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $member_id = $_GET['id'];

    // Fetch data from the database based on the provided ID
    $sql = "SELECT * FROM general_members WHERE member_id = ?";
    $stmt = $conn->prepare($sql);
    
    $stmt->bind_param("i", $member_id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if data is found
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        // Handle the case where no data is found for the provided ID
        echo "No data found for the provided ID.";
        exit; // Exit to avoid processing the rest of the page
    }

    $stmt->close();
} else {
    // Handle the case where no ID is provided in the URL
    echo "ID is not provided in the URL.";
    exit; // Exit to avoid processing the rest of the page
}

// Close the database connection
$conn->close();
?>

<!-- Your HTML code with fetched data -->
<!-- Modify the data bindings as per your database schema -->

<header class="app-header fixed-top">
    <?php
    $currentpage = 'teens';
    include './inc/sidepanel.php';
    include './inc/panelnav.php';
    ?>
</header>

<div class="app-wrapper">
    <section class="section about-section gray-bg" id="about">
        <h1 class="app-page-title">Membership Details</h1>
        <div class="container personal">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="about-avatar">
                        <!-- Use PHP to populate the image source -->
                        <img src="<?php echo htmlspecialchars($row['profile_picture_path'], ENT_QUOTES, 'UTF-8'); ?>
                        " alt="Profile Picture">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="about-text go-to">
                        <h3 class="dark-color"><?php echo htmlspecialchars($row['surname'] . ' ' . $row['other_names'], ENT_QUOTES, 'UTF-8'); ?></h3>
                        
                        <!-- Continue populating other fields using PHP -->
                        <div class="row about-list">
                            <div class="col-md-6">
                                <div class="media">
                                    <label>ID</label>
                                    <p><?php echo htmlspecialchars($row['member_id'], ENT_QUOTES, 'UTF-8'); ?></p>
                                </div>
                                <div class="media">
                                    <label>Birthday</label>
                                    <p><?php echo htmlspecialchars($row['date_of_birth'], ENT_QUOTES, 'UTF-8'); ?></p>
                                </div>
                                <div class="media">
                                    <label>Age</label>
                                    <p><?php echo htmlspecialchars($row['age'], ENT_QUOTES, 'UTF-8'); ?> Yrs</p>
                                </div>
                                <div class="media">
                                    <label>Residence</label>
                                    <p><?php echo htmlspecialchars($row['residence'], ENT_QUOTES, 'UTF-8'); ?></p>
                                </div>
                                <div class="media">
                                    <label>Gender</label>
                                    <p><?php echo htmlspecialchars($row['gender'], ENT_QUOTES, 'UTF-8'); ?></p>
                                </div>
                                <div class="media">
                                    <label>Nationality</label>
                                    <p><?php echo htmlspecialchars($row['nationality'], ENT_QUOTES, 'UTF-8'); ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="media">
                                    <label>Occupation</label>
                                    <p><?php echo htmlspecialchars($row['occupation'], ENT_QUOTES, 'UTF-8'); ?></p>
                                </div>
                                <div class="media">
                                    <label>First Telephone</label>
                                    <p><?php echo htmlspecialchars($row['telephone_no1'], ENT_QUOTES, 'UTF-8'); ?></p>
                                </div>
                                <div class="media">
                                    <label>Second Telephone</label>
                                    <p><?php echo htmlspecialchars($row['telephone_no2'], ENT_QUOTES, 'UTF-8'); ?></p>
                                </div>
                                <div class="media">
                                    <label>Group Number</label>
                                    <p><?php echo htmlspecialchars($row['group_name'], ENT_QUOTES, 'UTF-8'); ?></p>
                                </div>
                                <div class="media">
                                    <label>Marital Status</label>
                                    <p><?php echo htmlspecialchars($row['marital_status'], ENT_QUOTES, 'UTF-8'); ?></p>
                                </div>
                            </div>
                        </div>
                        <a href=""><button class="btn app-btn-primary">Edit</button></a>
                        <a href=""><button class="btn app-btn-primary">Add</button></a>
                        <a href=""><button class="btn app-btn-secondary">Next</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include './inc/footer.php'; ?>
