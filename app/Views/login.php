<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    body{
        background: palegreen;
    }


</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<body>
<div class="container shadow min-vh-20 py-4 bg-light">
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light " >
   
  <div class='navbar-brand mx-3 md-3' style="font-size: 36px; font-weight: 900;  ;color :chartreuse; ">Employee Program</div>
  <div class="navbar-nav justify-content-end flex-grow-1 pe-3">
      <div class="d-flex float-end" role="search">
    
        <a class="btn btn-outline-success" href="<?= url_to('RegisterPage') ?>">CREATE ACCOUNT</a>
</div>
</div>

</nav>
</div><br></hr>
<div class="vh-70 d-flex justify-content-center align-items-center">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-12 col-md-8 col-lg-6">
        <div class="border border-3 border-primary"></div>
        <div class="card bg-white shadow-lg">
          <div class="card-body p-5">
            <?php if(session()->has('error')){
              ?>   <div class="alert alert-danger"><?= session('error') ?></div>
         <?php   }?>
            <form class="mb-3 mt-md-4" action="<?= url_to('LoginClick')?> " method="post">
              <h2 class="fw-bold mb-2 text-uppercase ">LOGIN</h2>
              <p class=" mb-5">Please enter your login and password!</p>
              <div class="mb-3">
                <label for="email" class="form-label ">Email address</label>
                <input type="email" class="form-control" name='email' id="email" placeholder="name@example.com">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label ">Password</label>
                <input type="password"  class="form-control" id="password" name='password' placeholder="*******">
              </div>
              <p class="small"><a class="text-primary" href="forget-password.html">Forgot password?</a></p>
              <div class="d-grid">
                <button class="btn btn-outline-dark" type="submit">Login</button>
              </div>
            </form>
            <div>
              <p class="mb-0  text-center">Don't have an account? <a  href="<?= url_to('RegisterPage') ?>"
                  class="text-primary fw-bold">Sign
                  Up</a></p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>