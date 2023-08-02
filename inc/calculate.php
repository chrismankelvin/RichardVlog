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
    echo "<!DOCTYPE html>
            <html lang='en'>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>Success Probability Result</title>
                <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
            </head>
            <body>
                <div class='container mt-5'>
                    <h2 class='mb-4'>Success Probability Result</h2>
                    <div class='alert alert-success' role='alert'>
                        CONGRATULATIONS! You have {$success_percentage}% chance of success.
                    </div>
                </div>
            </body>
            </html>";
} else {
    // Invalid input
    header("Location: index.php");
    exit;
}
?>
