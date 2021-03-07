<?php
session_start();
include('includes/header.php');
?>




<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-6 col-lg-6 col-md-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <?php include('includes/admin-login.php'); ?>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>


<?php
include('includes/scripts.php');
?>