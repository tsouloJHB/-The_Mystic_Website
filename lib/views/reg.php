<?php include("../layouts/header.php"); ?>
<link rel="stylesheet" href="../../css/style.css">

<div class="container">
    <div class="card login-card">
    <div class="card-header">
        Sign up
    </div>


        <div class="card-body">
            <?php 
                // include("../function/function.php");

                // if(isset($_POST['sign_up'])){
                //     $result = reg_user($_POST['username'], $_POST['email'], md5($_POST['pass']), md5($_POST['cpass']));
                //     echo $result;
                // }
            ?>
            <form  action="../includes/signup.inc.php" method="POST">
                <p class="card-text">Username : </p>
                <input type="text" name="uid" id="" class="form-control form-input">

                <p class="card-text">Email : </p>
                <input type="email" name="email" id="" class="form-control form-text">

                <p class="card-text">Password : </p>
                <input type="password" name="pwd" id="" class="form-control form-input">

                <p class="card-text">Confirm Password</p>
                <input type="password" name="pwdsrepeat" id="" class="form-control form-input">

                <p><input type="reset" value="Clear" class="btn btn-secondary signup-btn">&nbsp;&nbsp;<input type="submit" value="Sign Up" name="submit" class="btn btn-success signup-btn"></p>
            </form>
            Already have an account? <a href="login.php" style="text-decoration: none;">Sign In</a>

        </div>
    </div>
</div>

<?php include("../layouts/footer.php"); ?>
