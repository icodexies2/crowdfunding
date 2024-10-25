<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Crowdfunding</title>
  </head>
  <body>
    <div class="wrapper">
      <div class="container main">
        <div class="row">
          <div class="col-md-6 side-image">
            
          </div>
          <div class="col-md-6 right">
            <div class="input-box">
              <header class="h1 text-success">Create Account</header>
                <div class=" form-floating mb-3">
                   
                  <input type="text" class="input form-control form-control-lg bg-light" id="username floatingInput" required autocomplete="off" placeholder="username" >
                  <label for="username floatingInput"><i class="bi bi-person-circle"></i>      Username</label>
                </div>
                <div class="input-field form-floating mb-3">
                  <input type="password" class="input input form-control form-control-lg bg-light" id="password floatingInput" required placeholder="password">
                  <label for="password floatingInput"><i class="bi bi-lock-fill"></i>          Password</label>
                </div>
                <small>don't have an account?<a href="sign.php">sign up</a></small>
                
                <div class="input-field">
                  <input type="submit" class="submit btn btn-lg btn-primary w-100 fs-6" value="Login">
                </div>
                </div>
            </div>
          </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>