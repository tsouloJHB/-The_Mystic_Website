<?php include("../layouts/header.php"); ?>
<link rel="stylesheet" href="../../css/style.css">

<div class="container">
    <div class="card login-card">
    <div class="card-header">
        Login
    </div>
        <div class="card-body">

            <form action="../includes/login.inc.php" method="POST">
                <p class="card-text">Username : </p>
                <input type="text" name="uid" id="" class="form-control form-input">
                <p class="card-text">Password : </p>
                <input type="password" name="pwd" id="" class="form-control form-input">

                <input type="submit" name="submit" value="Login"  class="btn btn-primary">
            </form>
            Don't have an account? <a href="reg.php" style="text-decoration: none;">Sign up</a>
        </div>
    </div>
</div>

<?php include("../layouts/footer.php"); ?>
