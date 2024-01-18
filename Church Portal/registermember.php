<?php
include './inc/header.php';
?>

<div class="container">
    <h1 class="app-page-title">Member Registration Page</h1>
    <hr class="mb-4">
    <div class="settings-section row">
        <div class="col-12 col-md-4">
            <h3 class="section-title">Fill the Membership Forms </h3>
            <h3 class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, voluptate. Nisi accusamus nemo explicabo non voluptatibus ipsa accusantium, quae eos.</h3>
            <a href="javascript:window.history.back();"><button  class="btn app-btn-primary">Cancel Registration</button></a>
            <hr>
            <!-- <button type="submit" class="btn app-btn-primary"></button> -->
        </div>
        <div class="col-12 col-md-8">
            <div class="app-card app-card-settings shadow-sm p-4">
                <div class="app-card-body">
                    <form class="settings-form" method="POST" action="./inc/mem_reg_form.php" enctype="multipart/form-data" >
                        <div class="mb-3">
                            <label for="setting-input-1" class="form-label">Local Church<span class="ms-2" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" data-bs-content="This field is required"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z" />
                                        <circle cx="8" cy="4.5" r="1" />
                                    </svg></span></label>
                            <input type="text" class="form-control" id="setting-input-1" value="Nazareth Assembly" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="setting-input-2" class="form-label">Surname<span class="ms-2" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" data-bs-content="This field is required"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z" />
                                        <circle cx="8" cy="4.5" r="1" />
                                    </svg></span></label>
                            <input type="text" class="form-control" id="setting-input-2" name="setting-input-2" value="Enter Surname Only" required>
                        </div>
                        <div class="mb-3">
                   <label for="setting-input-3" class="form-label">Other Names<span class="ms-2" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" data-bs-content="This field is required"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z" />
                                        <circle cx="8" cy="4.5" r="1" />
                                    </svg></span></label>
                            <input type="text" class="form-control" id="setting-input-3" name="setting-input-3" value="Enter Other Names">
                        </div>
                        <div class="mb-3">
                            <label for="setting-input-1" class="form-label">Date Of Birth<span class="ms-2" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" data-bs-content="This field is required"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z" />
                                        <circle cx="8" cy="4.5" r="1" />
                                    </svg></span></label>
                            <input type="date" class="form-control" name="setting-input-4" id="setting-input-4">
                        </div>
                        <div class="mb-3">
                            <label for="setting-input-5" class="form-label">Place of Birth</label>
                            <input type="text" class="form-control" name="setting-input-5" id="setting-input-5" value="">
                        </div>
                        <div class="mb-3">
                        <label for="setting-input-6" class="form-label">Gender<span class="ms-2" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" data-bs-content="This field is required"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z" />
                                        <circle cx="8" cy="4.5" r="1" />
                                    </svg></span></label>
                            <select  class="form-control" name="setting-input-6" id="setting-input-6">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="mb-3">
                        <label for="setting-input-7" class="form-label">Natoinality<span class="ms-2" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" data-bs-content="This field is required"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z" />
                                        <circle cx="8" cy="4.5" r="1" />
                                    </svg></span></label>
                            <input type="text" class="form-control" name="setting-input-7" id="setting-input-7">
                        </div>
                        <div class="mb-3">
                            <label for="setting-input-8" class="form-label">Residence</label>
                            <input type="text" class="form-control"  name="setting-input-8"id="setting-input-8">
                        </div>
                        <div class="mb-3">
                           <label for="setting-input-9" class="form-label">Occupation<span class="ms-2" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" data-bs-content="This field is required"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z" />
                                        <circle cx="8" cy="4.5" r="1" />
                                    </svg></span></label>
                            <input type="text" class="form-control" name="setting-input-9" id="setting-input-9">
                        </div>
                        <div class="mb-3">
                        <label for="setting-input-10" class="form-label">First Telephone<span class="ms-2" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" data-bs-content="This field is required"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z" />
                                        <circle cx="8" cy="4.5" r="1" />
                                    </svg></span></label>
                            <input type="tel" class="form-control" name="setting-input-10" id="setting-input-10">
                        </div>
                        <div class="mb-3">
                            <label for="setting-input-11" class="form-label">Second Telephone</label>
                            <input type="tel" class="form-control" name="setting-input-11" id="setting-input-11">
                        </div>
                        <!-- <div class="mb-3">
                            <label for="setting-input-13" class="form-label">Marital Status</label>
                            <input type="tel" class="form-control" id="setting-input-13">
                        </div> -->
                        <div class="mb-3">
                            <label for="select-input-2" class="form-label">Marital Status</label>
                            <select name="groupone" class="form-control" name="select-input-2" id="select-input-2">
                                <option value="Married">Married</option>
                                <option value="Single">Single</option>
                                <option value="Divorced">Divorced</option>
                                <option value="Dead Spouse">Dead Spouse</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="select-input-1" class="form-label"  >Group Name</label>
                            <select name="grouptwo" class="form-control" id="select-input-1">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <div class="mb-3">
                        <label for="setting-input-12" class="form-label">Upload Picture<span class="ms-2" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-placement="top" data-bs-content="This field is required"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
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
