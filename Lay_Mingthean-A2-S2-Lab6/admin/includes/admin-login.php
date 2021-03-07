<div class="col-lg-12">
    <div class="p-5">
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Login Here!</h1>
            <?php

            if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
                echo '<h2 class="bg-danger text-white"> ' . $_SESSION['status'] . ' </h2>';
                unset($_SESSION['status']);
            }
            ?>
        </div>

        <form class="user" action="logincode.php" method="POST">

            <div class="form-group">
                <input type="email" name="emaill" class="form-control form-control-user"
                    placeholder="Enter Email Address...">
            </div>
            <div class="form-group">
                <input type="password" name="passwordd" class="form-control form-control-user" placeholder="Password">
            </div>

            <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block"> Login </button>
            <hr>
        </form>


    </div>
</div>