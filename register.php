<?php
require('header.php');
include('nav.php');

$name = $email = $password = $confirm_password = "";
$name_err = $email_err = $password_err = $confirm_password_err = $insMsg = $insMsgErr = "";
$ret_name = $ret_email = $ret_pass = $ret_con_pas = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name'])) {
        $name_err = 'Name Required!';
        
    }else {
        if (strlen($_POST['name']) < 6) {
            $name_err = 'what is your real name?';
            $ret_name = $_POST['name'];
        }else{
            $name = $_POST['name'];
        }
    }
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
    if (empty($_POST['confirm'])) {
        $confirm_password_err = 'confirm password Required!';
        $ret_con_pas = $_POST['confirm'];
    }else {
        if ($_POST['password'] == $_POST['confirm']) {
            $confirm_password = $_POST['confirm'];
        }else {
            $confirm_password_err = 'password is not match';
            $ret_con_pas = $_POST['confirm'];
        }
        
    }

    $stmt = $DBH->prepare("SELECT * FROM users WHERE email='$email'");
    $stmt->execute();
    $fetchData = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($fetchData) {
        $email_err = "Email already register!";
    }else {
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);
        $role = 'user';
        $is_active = 'active';
        $sql = "INSERT INTO users(name, email, password, role, is_active) VALUES ('$name','$email','$hashPassword','$role','$is_active')";
        $stmt = $DBH->prepare($sql);
        $save = $stmt->execute();
        if ($save) {
            $insMsg = 'Insert succ';
        }else {
            $insMsgErr = 'failed';
        }
    }

}


?>

<div class="container " style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="card">
                <card class="card-body">
                    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" class=" text-dark" method="post">
                        <div class="form-group">
                            <label for="" class="text-center">Name <span style="color:red;"> *</span></label>
                            <input type="text" name="name" class="form-control" value="<?= $ret_name; ?>" placeholder="Your name">
                            <span class="text-danger"><?= $name_err ?></span>
                        </div>
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
                        <div class="form-group">
                            <label for="" class="text-center">Confirm Password <span style="color:red;"> *</span></label>
                            <input type="password" name="confirm" class="form-control" value="<?= $ret_con_pas; ?>" placeholder="Your confirm password">
                            <span class="text-danger"><?= $confirm_password_err ?></span>
                        </div>
                        <br>
                        <span><?= $insMsg; ?></span>
                        <span><?= $insMsgErr; ?></span>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" class="btn btn-secondary">Register</button>
                        </div>
                        <p>Already have account <a href="login.php?source=register">Login</a></p>
                    </form>
                </card>
            </div>
        </div>
    </div>
</div>

<?php
require('footer.php');
?>