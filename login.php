<?php

require('header.php');
include('nav.php');


$email = $password = "";
$email_err = $password_err = $insMsg = $insMsgErr = "";
$ret_email = $ret_pass = "";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (empty($_POST['email'])) {
        $email_err = 'email Required!';
        
    }else {
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $email_err = 'useable email provide';
            $ret_email = $_POST['email'];
        }else {
            $email = $_POST['email'];
        }
    }
    if (empty($_POST['password'])) {
        $password_err = 'password Required!';
        
    }else {
        if (strlen($_POST['password']) < 6) {
            $password_err = 'at last 6 chacrecter password required!';
            $ret_pass = $_POST['password'];
        }else {
            $password = $_POST['password'];
        }
    }
    

    $stmt = $DBH->prepare("SELECT * FROM users WHERE email='$email'");
    $stmt->execute();
    $fetchData = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($fetchData) {
        if (password_verify($password, $fetchData['password'])) {
            $_SESSION['login_succ'] = $fetchData['id'];
        }
    }else {
        $email_err = "Email pay nai";
        // $insMsgErr = '';
    }
           
}


?>

<div class="container " style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="card">
                <card class="card-body">
                    <form action="" class=" text-dark" method="post">
                        
                        <div class="form-group">
                            <label for="" class="text-center">Email<span style="color:red;"> *</span></label>
                            <input type="email" name="email" class="form-control" value="<?= $ret_email; ?>" placeholder="Your email">
                            <span class="text-danger"><?= $email_err ?></span>
                        </div>
                        <div class="form-group">
                            <label for="" class="text-center">Password <span style="color:red;"> *</span></label>
                            <input type="password" name="password" class="form-control" value="<?= $ret_pass; ?>" placeholder="Your password">
                            <span class="text-danger"><?= $password_err ?></span>
                        </div>
                        
                        <br>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" class="btn btn-secondary">Login</button>
                        </div>
                        <p>Create account <a href="register.php?source=login">Register</a></p>
                    </form>
                </card>
            </div>
        </div>
    </div>
</div>


<?php
require('footer.php');
?>