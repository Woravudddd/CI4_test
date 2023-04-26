<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<body>
<?= $this->include('layouts\navbar'); ?>
<br>

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
<br>
<br>
            <hr>
<section>
<h1 class='text-center'>About Us</h1>

<div class="container-fluit">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.unsplash.com/photo-1517329782449-810562a4ec2f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8aW1hZ2V8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" class="d-block  w-100" height="450" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1575936123452-b67c3203c357?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8aW1hZ2V8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" class="d-block w-100" height="450" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1661956600684-97d3a4320e45?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxzZWFyY2h8MXx8aW1hZ2V8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" class="d-block w-100" height="450" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div>
</section>
<br>
<hr>
<section>
<h1 class="text-center" >About Thai-JOB-RQ</h1>

<div class="row row-cols-1 row-cols-md-3 g-4 mt-3">
<div class="col">
<div class="card h-100">
<i class="bi-gem fs-1 text-primary text-center"></i>
<div class="card-body text-center">
<h5 class="card-title">Free Create</h5>
<p class="card-text"> Our Profile are updated for free</p>
</div>
<div class="card-footer">
<small class="text-muted"></small>
</div>
</div>
</div>
<div class="col">
<div class="card h-100">
<i class="bi-laptop fs-1 text-primary text-center"></i>
<div class="card-body text-center">
<h5 class="card-title">Up to Date</h5>
<p class="card-text">All dependencies are kept current to keep things fresh.</p>
</div>
<div class="card-footer">
<small class="text-muted"></small>
</div>
</div>
</div>
<div class="col">
<div class="card h-100">
<i class="bi-globe fs-1 text-primary text-center"></i>
<div class="card-body text-center">
<h5 class="card-title">Ready to Publish</h5>
<p class="card-text">You can use this design as is, or you can make changes!</p>
</div>
<div class="card-footer">
<small class="text-muted"></small>
</div>
</div>
</div>
</div>
</section>
<section>
<br>
         <hr>
         <br>
         <section>
         <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Let's Get In Touch!</h2>
                        <hr class="divider">
                        <p class="text-muted mb-5">Ready to start your next project with us? Send us a messages and we will get back to you as soon as possible!</p>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" data-sb-can-submit="no">
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" data-sb-can-submit="no">
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" data-sb-can-submit="no">
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required" data-sb-can-submit="no"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br>
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Submit</button></div>
                        </form>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-4 text-center mb-5 mb-lg-0">
                        <i class="bi-phone fs-2 mb-3 text-muted"></i>
                        <div>+1 (555) 123-4567</div>
                    </div>
                </div>
            </div>
</section>
</body>
</html>