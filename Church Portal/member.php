<?php

include './inc/values.php';
include './inc/header.php';
?>

<header class="app-header fixed-top">
    <?php
    $currentpage = 'teens';
    include './inc/sidepanel.php';
    ?>

    <?php
    include './inc/panelnav.php';

    ?>
</header>
<div class="app-wrapper">
    
    <section class="section about-section gray-bg" id="about">
    <h1 class="app-page-title">Membership Details</h1>
        <div class="container personal">
            <div class="row align-items-center ">
                <div class="col-lg-4">
                    <div class="about-avatar">
                        <img src="./comp/images/users/user-4.jpg" title alt>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="about-text go-to">
                        <h3 class="dark-color">Osei Akua Boahemaa Emmanuela </h3>
                        <div class="row about-list">
                            <div class="col-md-6">
                                <div class="media">
                                    <label>Id</label>
                                    <p>Available</p>
                                </div>
                                <div class="media">
                                    <label>Birthday</label>
                                    <p>4th April 1998</p>
                                </div>
                                <div class="media">
                                    <label>Age</label>
                                    <p>22 Yrs</p>
                                </div>
                                <div class="media">
                                    <label>Residence</label>
                                    <p>Canada</p>
                                </div>
                                <div class="media">
                                    <label>Gender</label>
                                    <p>California, USA</p>
                                </div>
                                <div class="media">
                                    <label>Nationality </label>
                                    <p>Available</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="media">
                                    <label>Occupation</label>
                                    <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__">[email&#160;protected]</a></p>
                                </div>
                                <div class="media">
                                    <label>Phone</label>
                                    <p>820-885-3321</p>
                                </div>
                                <div class="media">
                                    <label>Phone (2)</label>
                                    <p>skype.0404</p>
                                </div>
                                <div class="media">
                                    <label>Group Number</label>
                                    <p>Available</p>
                                </div>
                                <div class="media">
                                    <label>Marital Status</label>
                                    <p>Available</p>
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