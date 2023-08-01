<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Probability Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head> -->
<?php
$page_quote = "This is the About - Your destination for amazing video content";
$page_title ="About";
$main_title ="Success Probability Calculator";
// require 'header.php';
require 'navbar.php'

?>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Success Probability Calculator</h2>
        <form method="post" action="./inc/calculate.php">
            <div class="mb-3">
                <label for="edu_level" class="form-label">Educational Level</label>
                <select class="form-select" id="edu_level" name="edu_level" required>
                    <option value="">Select</option>
                    <option value="shs">Undergraduate</option>
                    <option value="tertiary">Diploma</option>
                    <option value="low">Degree</option>
                    <option value="moderate">PhD</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="fin_sup" class="form-label">Financial Support</label>
                <select class="form-select" id="fin_sup" name="fin_sup" required>
                    <option value="">Select</option>
                    <option value="high">High</option>
                    <option value="moderate">Moderate</option>
                    <option value="low">Low</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="ready" class="form-label">Readiness to Leave the Country</label>
                <select class="form-select" id="ready" name="ready" required>
                    <option value="">Select</option>
                    <option value="ready">Ready</option>
                    <option value="preparing">Preparing</option>
                    <option value="not ready">Not Ready</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="passport" class="form-label">Do You Have a Passport?</label>
                <select class="form-select" id="passport" name="passport" required>
                    <option value="">Select</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Calculate</button>
        </form>
    </div>
</body>
<?php
include 'footer.php';

?>
<!-- </html> -->
