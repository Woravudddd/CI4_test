<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="container shadow min-vh-20 py-4">
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light " >
   
  <div class='navbar-brand mx-3 md-3' style="font-size: 36px; font-weight: 900;  ;color :chartreuse; ">Create Employee</div>
  <div class="navbar-nav justify-content-end flex-grow-1 pe-3">
      <div class="d-flex float-end" role="search">
    
        <a class="btn btn-outline-success" href="<?= url_to('dashboard') ?>">Back</a>
</div>
</div>

</nav>

<form method="post" action="<?= url_to('save')?>">
  <div class="form-group row mt-3 ">
    <label for="fnamelabel " class="col-sm-2 col-form-label mt-2">First-Name</label>
    <div class="col-sm-10 mt-3">
      <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name">
    </div>
    <label for="lnamelabel" class="col-sm-2 col-form-label mt-2">Last-Name</label>
    <div class="col-sm-10 mt-3">
      <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name">
    </div>
    <label for="inputEmail3" class="col-sm-2 col-form-label mt-2">Email</label>
    <div class="col-sm-10 mt-3">
      <input type="email" class="form-control" id="email" placeholder="Email" name='email'>
    </div>
    <label for="phonelabel" class="col-sm-2 col-form-label mt-2">Phone</label>
    <div class="col-sm-10 mt-3">
      <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone">
    </div>
  </div>
  <button name="submit" id="submit" class="btn btn-outline-success mt-3" type="submit">Save</button>
</form>   
</body>
</html>