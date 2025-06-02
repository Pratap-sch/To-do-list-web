<?php
include_once('header.php');
// database connection
$db=new mysqli('localhost','root','','final_project');

if(!empty($_POST)){
    if(!empty($_POST['name']) && !empty($_POST['password']) && !empty($_POST['email'])){
         $name = $_POST['name'];       
         $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
         $email = $_POST['email'];
        //insert data
         $sql = $db->query("INSERT INTO `users` (`name`, `password`, `email`, `status`) VALUES ('$name', '$pass', '$email', 'active')");
        
         if($sql){
            echo "Data inserted";
         }else{
            echo "Something error";
         }       
     }else {
         echo 'check all the field';
     }
 }

?>





<div class="d-flex align-items-center my-4">
    <div class="col-sm-10 col-md-6 col-lg-4 mx-auto" style="min-width: 320px;">
        <div class="card">
            <div class="card-header text-center pt-4">
                <i class="fas fa-2x fa-user"></i>
                <h4 class="card-title">User's Registration Form!</h4>
                <p class="card-subtitle text-danger"></p>
                <p v-else class="card-subtitle">Create a fresh account</p>
            </div>
            <form action="" method="POST">
            <div class="card-body">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="Firstname" name="name">
                    <label>Full name</label>
                </div>
                <div class="row g-2 mb-3">
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="email" class="form-control" placeholder="Email" name="email">
                            <label>Email <span class="text-danger fw-bold">*</span></label>
                        </div>
                    </div>
                </div>
                <div class="row g-2 mb-3">
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="password" v-model="user.pass" class="form-control" placeholder="Password" name="password">
                            <label>Password <span class="text-danger fw-bold">*</span></label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="password" class="form-control" placeholder="Conform Password" name="confirmpassword">
                            <label>Confirm Password <span class="text-danger fw-bold">*</span></label>
                        </div>
                    </div>
                </div>

                <div class="d-grid mt-4">
                    <button class="btn btn-primary text-light fw-bold" type="submit">Register
                        Now!</button>
                </div>
            </div>
            </form>
            <div class="card-footer text-center text-black-50">
                Already registered? <a class="fw-bold btn btn-sm text-primary" href="login.php">Login Now!</a>
            </div>
        </div>
    </div>
</div>