<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-light">
  <div style="height: 100vh;">
    <div class="row h-100 m-0">
      <div class="card my-auto mx-auto w-25">
        <div class="card-header bg-white border-0">
          <h1 class="text-center">LOGIN</h1>
        </div>
        <div class="card-body">
          <!-- <div class="row">  -->
            <!-- Class row only we need col -->
            <form action="../actions/login.php" method="POST">
              <input type="text" name="username"  class="form-control" placeholder="USERNAME" autofocus>
              <input type="password" name="password"  class="form-control mt-2" placeholder="PASSWORD">
              <button type="submit" class="btn btn-primary w-100 mt-5" name="">LOG IN</button>
            </form>
            <p class="text-center"><a href="register.php" class="mt-3 small">Create Account</a></p>
          <!-- </div> -->
        </div>
      </div>
    </div>
  </div>
  
  
</body>
</html>