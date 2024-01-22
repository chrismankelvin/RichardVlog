<?php
include './inc/header.php';
?>

<div class="container">
    <h1 class="app-page-title">Report Upload Page</h1>
    <hr class="mb-4">
    <div class="settings-section row">
        <div class="col-12 col-md-4">
            <h3 class="section-title"> </h3>
            <h3 class="lead">Select the report file then add the neccessary infomations</h3>
            <a href="javascript:window.history.back();"><button class="btn app-btn-primary">Cancel Upload</button></a>
            <hr>
            <!-- <button type="submit" class="btn app-btn-primary"></button> -->
        </div>
        <div class="col-12 col-md-8">
            <div class="app-card app-card-settings shadow-sm p-4">
                <div class="app-card-body">
                    <form class="settings-form" method="POST" action="./inc/upload_report_form.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="setting-input-1" class="form-label">Local Church<span class="ms-2" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" data-bs-content="This field is required"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z" />
                                        <circle cx="8" cy="4.5" r="1" />
                                    </svg></span></label>
                            <input type="text" class="form-control" id="setting-input-1" value="Nazareth Assembly" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="select-input-1" class="form-label">Ministry</label>
                            <select name="ministry" class="form-control" id="select-input-1">
                                <option value="Men's Fellowship">Men's Fellowship</option>
                                <option value="Women's Fellowship">Women's Fellowship</option>
                                <option value="Evangelism Team">Evangelism Team</option>
                                <option value="Prayer Tower">Prayer Tower</option>
                                <option value="Youth Ministry">Youth Ministry</option>
                                <option value="Virtuous Ladies">Virtuous Ladies</option>


                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="setting-input-6" class="form-label">Month<span class="ms-2" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" data-bs-content="This field is required"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z" />
                                        <circle cx="8" cy="4.5" r="1" />
                                    </svg></span></label>
                            <select class="form-control" name="setting-input-6" id="setting-input-6">
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="setting-input-12" class="form-label">Select Report File<span class="ms-2" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" data-bs-content="This field is required"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z" />
                                        <circle cx="8" cy="4.5" r="1" />
                                    </svg></span></label>
                            <input type="file" class="form-control" name="setting-input-12" id="setting-input-12">
                        </div>





                        <button type="submit" class="btn app-btn-primary">Register</button>
                    </form>

                </div>

            </div>

        </div>
    </div>
    <hr class="my-4">
</div>

<?php
include './inc/footer.php';
?>