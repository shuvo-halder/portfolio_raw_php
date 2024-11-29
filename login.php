<?php

require('header.php');
include('nav.php');
?>

<div class="container " style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="card">
                <card class="card-body">
                    <form action="" class=" text-dark" method="post">
                        
                        <div class="form-group">
                            <label for="" class="text-center">Email<span style="color:red;"> *</span></label>
                            <input type="email" name="email" class="form-control" placeholder="Your email">
                        </div>
                        <div class="form-group">
                            <label for="" class="text-center">Password <span style="color:red;"> *</span></label>
                            <input type="password" name="password" class="form-control" placeholder="Your password">
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