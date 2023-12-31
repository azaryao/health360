<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Login</title>
</head>
<body>
<div class="container d-lg-block p-3 my-auto align-bottom">
  <div class="row justify-content-center " >    
      <div class="col-lg-5 p-5" style="background-color:#9DFFE8">
          <span class="fs-4 fw-bold">Login Account</span>
          <div class="mb-lg-3">
              <label for="exampleInputEmail1" class="form-label fw-bold">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="youremail@gmail.com">
          </div>
          <div class="mb-lg-3">
              <label for="exampleInputPassword1" class="form-label fw-bold">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="*********">
          </div>
          <a href="{{ url('/') }} "type="button" class="d-flex btn btn-primary justify-content-center">Login</a>
          <span class="d-lg-flex mt-2">don't have an account?<a href="{{ url('/register') }}" class="d-lg-flex link-dark">Register</a></span>
      </div>
      <div class=" col-lg-4 p-5 text-center align-middle bg-white">
        <a href=""><img src={{ asset('/image/Fitur.png') }} width="250" alt="..."></a>
        <span class="d-lg-flex justify-content-center fs-3 my-auto mt-3">Where Care Meets Convenience</span>
    </div>
      
  </div>    
</div> 
</body>
</html>