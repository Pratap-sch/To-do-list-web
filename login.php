<?php
include_once('header.php');

$db = new mysqli('localhost', 'root', '', 'final_project');
if (!empty($_POST)) {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $sql = $db->query("SELECT * FROM `users` WHERE email = '$email'");
        if ($sql->num_rows) {
            $row = $sql->fetch_assoc();
            if (password_verify($pass, $row['password'])) {
                echo 'Welcome : ' . $row['name'];

                $_SESSION['loggedin'] = true;
                $_SESSION['name'] = $row['name'];
                $_SESSION['email'] = $row['email'];
                header("Location: dashboard.php");
                exit;
            } else {
                echo 'Verification Failed';
            }
        } else {
            echo 'No record found';
        }
    } else {
        echo 'check all the field';
    }
}
?>
<div id="authentication">
    <div class="d-flex align-items-center my-4">
        <div class="col-sm-10 col-md-6 col-lg-4 mx-auto" style="min-width: 320px;">
            <div class="card">
                <div class="card-header text-center pt-4">
                    <i class="fas fa-2x fa-user"></i>
                    <h4 class="card-title">User's Login Page</h4>
                    <p class="card-subtitle">Access your Account</p>
                </div>
                <form action="" method="POST">
                    <div class="card-body">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="" name="email">
                            <label for="floatingInput">Email <span class="text-danger fw-bold">*</span></label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="" name="password">
                            <label for="floatingPassword">Password <span class="text-danger fw-bold">*</span></label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="submit" class=" form-control btn btn-primary" value="Login">
                        </div>
                </form>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>

                <span><a href="#">Forgot Password?</a></span>
                <p>if not yet register sign up first?</p>
                <a href="register.php">Sign Up Now!</a>
            </div>
        </div>
    </div>
</div>
</div>
</div>