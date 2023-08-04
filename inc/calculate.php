<?php
$bag = array('shs' => 25, 'tertiary' => 12.5,'tertiary1' => 12.5,'tertiary2' => 6.25,'tertiary3' => 3.125, 'tertiary4' => 0,'low' => 10, 'moderate' => 20, 'high' => 25, 'ready' => 25, 'preparing' => 20, 'not ready' => 10, 'yes' => 25, 'no' => 0);

$edu_level = $_POST['edu_level'];
$fin_sup = $_POST['fin_sup'];
$ready = $_POST['ready'];
$passport = $_POST['passport'];

// Validate inputs
if (isset($bag[$edu_level]) && isset($bag[$fin_sup]) && isset($bag[$ready]) && isset($bag[$passport])) {
    $total_percentage = $bag[$edu_level] + $bag[$fin_sup] + $bag[$ready] + $bag[$passport];
    $success_percentage = min($total_percentage, 100);

    // Display the success percentage
    echo "


<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Success Probability Result</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link rel='stylesheet' href='static.css'>

</head>
<body>
    <div class='container mt-5'>
        <h2 class='mb-4'>Success Probability Result</h2>
        <div class='alert alert-success' role='alert'>
            CONGRATULATIONS! You have {$success_percentage}% chance of success.
        </div>
        <div class='alert alert-info' role='alert'>
            Explore Remedies:
            <div class='btn-group' role='group' aria-label='Explore Remedies'>
                <button type='button' class='btn btn-success' data-bs-toggle='modal' data-bs-target='#remediesModal1'>0-25%</button>
                <button type='button' class='btn btn-info' data-bs-toggle='modal' data-bs-target='#remediesModal2'>25-50%</button>
                <button type='button' class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#remediesModal3'>50-75%</button>
                <button type='button' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#remediesModal4'>75-100%</button>
            </div>
        </div>
    </div>

    <div class='modal fade' id='remediesModal1' tabindex='-1' aria-labelledby='remediesModal1Label' aria-hidden='true'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title' id='remediesModal1Label'>Remedies for 0-25% Success Rate</h5>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            <div class='modal-body'>
                <p>Unfortunately, your success rate is in the lower range. Here are some suggestions to improve your chances:</p>
                <ul>
                    <li>Focus on enhancing your skills and knowledge.</li>
                    <li>Seek mentorship and guidance from experienced professionals.</li>
                    <li>Consider seeking additional resources or education to strengthen your foundation.</li>
                    <li>Set clear goals and create a well-structured plan to achieve them.</li>
                </ul>
                <p>Remember that with determination and hard work, you can increase your success rate!</p>
            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
            </div>
        </div>
    </div>
</div>

    <!-- Modal 2 -->
    <div class='modal fade' id='remediesModal2' tabindex='-1' aria-labelledby='remediesModal1Label' aria-hidden='true'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title' id='remediesModal1Label'>Remedies for 25-50% Success Rate</h5>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            <div class='modal-body'>
                <p>Unfortunately, your success rate is in the lower range. Here are some suggestions to improve your chances:</p>
                <ul>
                    <li>Focus on enhancing your skills and knowledge.</li>
                    <li>Seek mentorship and guidance from experienced professionals.</li>
                    <li>Consider seeking additional resources or education to strengthen your foundation.</li>
                    <li>Set clear goals and create a well-structured plan to achieve them.</li>
                </ul>
                <p>Remember that with determination and hard work, you can increase your success rate!</p>
            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
            </div>
        </div>
    </div>
</div>

    <!-- Modal 3 -->
    <div class='modal fade' id='remediesModal3' tabindex='-1' aria-labelledby='remediesModal1Label' aria-hidden='true'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title' id='remediesModal1Label'>Remedies for 50-75% Success Rate</h5>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            <div class='modal-body'>
                <p>Unfortunately, your success rate is in the lower range. Here are some suggestions to improve your chances:</p>
                <ul>
                    <li>Focus on enhancing your skills and knowledge.</li>
                    <li>Seek mentorship and guidance from experienced professionals.</li>
                    <li>Consider seeking additional resources or education to strengthen your foundation.</li>
                    <li>Set clear goals and create a well-structured plan to achieve them.</li>
                </ul>
                <p>Remember that with determination and hard work, you can increase your success rate!</p>
            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
            </div>
        </div>
    </div>
</div>

    <!-- Modal 4 -->
    <div class='modal fade' id='remediesModal4' tabindex='-1' aria-labelledby='remediesModal1Label' aria-hidden='true'>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title' id='remediesModal1Label'>Remedies for 75%-100% Success Rate</h5>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            <div class='modal-body'>
                <p>Unfortunately, your success rate is in the lower range. Here are some suggestions to improve your chances:</p>
                <ul>
                    <li>Focus on enhancing your skills and knowledge.</li>
                    <li>Seek mentorship and guidance from experienced professionals.</li>
                    <li>Consider seeking additional resources or education to strengthen your foundation.</li>
                    <li>Set clear goals and create a well-structured plan to achieve them.</li>
                </ul>
                <p>Remember that with determination and hard work, you can increase your success rate!</p>
            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
            </div>
        </div>
    </div>
</div>

    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js'></script>
</body>
</html>

            
            ";
} else {
    // Invalid input
    header("Location: index.php");
    exit;
}
?>
