<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Document</title>
    <style>
         body{
        background: palegreen;
    }
    </style>
</head>
<body>
<div class="container shadow min-vh-20 py-4 bg-light">
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light " >
   
  <div class='navbar-brand mx-3 md-3' style="font-size: 36px; font-weight: 900;  ;color :chartreuse; ">Register</div>
  <div class="navbar-nav justify-content-end flex-grow-1 pe-3">
      <div class="d-flex float-end" role="search">
    
        <a class="btn btn-outline-success" href="<?= url_to('LoginPage') ?>">BACK</a>
</div>
</div>
</div>

<div class="container">
    <div class="row justify-content-md-center mt-5 mb-5">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Register</h5>
                    <form action="<?= url_to('RegisterClick'); ?>" method="post">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email">
                            <?php if(isset($validation)):?>
                                <small class="text-danger"><?= $validation->getError('email') ?></small>
                            <?php endif;?>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <?php if(isset($validation)):?>
                                <small class="text-danger"><?= $validation->getError('password') ?></small>
                            <?php endif;?>
                        </div>
                        <div class="mb-3">
                            <label for="confirm_password" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                            <?php if(isset($validation)):?>
                                <small class="text-danger"><?= $validation->getError('confirm_password') ?></small>
                            <?php endif;?>
                        </div>
                        <div class="mb-3">
                            <label for="fname" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="fname" name="fname" >
                            <?php if(isset($validation)):?>
                                <small class="text-danger"><?= $validation->getError('fname') ?></small>
                            <?php endif;?>
                        </div>
                        <div class="mb-3">
                            <label for="lname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lname" name="lname" >
                            <?php if(isset($validation)):?>
                                <small class="text-danger"><?= $validation->getError('lname') ?></small>
                            <?php endif;?>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" >
                            <?php if(isset($validation)):?>
                                <small class="text-danger"><?= $validation->getError('phone') ?></small>
                            <?php endif;?>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-block">Register Now</button>
                            <p class="text-center">Have already an account <a href="<?php echo base_url('/login'); ?>">Login here</a><p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

