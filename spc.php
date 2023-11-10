
<?php

$main_title ="Success Probability Calculator";
// require 'header.php';
include 'header.php';
include 'navbar.php';

?>
  <div class="background-image">
        <div class="container mt-5">
            <div class="success-calculator">
                <h2 class="mb-4">Success Probability Calculator</h2>
                <form method="post" action="./inc/calculate.php">
                    <div class="mb-3">
                        <label for="edu_level" class="form-label">Educational Level</label>
                        <select class="form-select" id="edu_level" name="edu_level" required>
                            <option value="">Select</option>
                            <option value="shs">Undergraduate</option>
                            <option value="tertiary1">Diploma</option>
                            <option value="tertiary2">Degree</option>
                            <option value="tertiary3">Masters</option>
                            <option value="tertiary4">PhD</option>
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
        </div>
    </div>
<?php
include 'footer.php';

?>
<!-- </html> -->
