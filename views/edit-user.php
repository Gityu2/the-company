<?php
  session_start();
  // echo $_GET['id'];

  require "../classes/User.php";
  $user_obj = new User;
  $user     = $user_obj->getUser($_GET['id']);
  // print_r($user);
  //$user = ['first_name' => first, `last_name` => last, `username` => user]
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand navbar-dark bg-dark">
    <div class="container">
      <a href="dashboard.php" class="navbar-brand"><h1 class="h3 mb-0">The Compnany</h1></a>
      <div class="ms-auto">
          <ul class="navbar-nav">
            <li class="nav-item"><span class="nav-link"><?= $_SESSION['full_name']?></span></li>
            <li class="nav-item"><a href="../actions/logout.php" class="nav-link text-danger">Log out</a></li>
          </ul>
      </div>
    </div>
  </nav>
  <main style="padding-top: 80px;">
    <div class="row justify-content-center">
      <div class="col-4">
        <h2 class="text-center">Edit User</h2>
        <!-- <form action="../actions/edit-user.php?id=<?= $_GET['id'] ?>" method="post"> -->
        <!-- It’ｓ ok above but  -->
        <form action="../actions/edit-user.php" method="post">
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
        <div class="mb-3">
              <label for="first-name" class="form-label">First Name</label>
              <input type="text" name="first_name" id="first-name" class="form-control" required autofocus value="<?= $user['first_name'] ?>">
            </div>

            <div class="mb-3">
              <label for="last-name" class="form-label">Last Name</label>
              <input type="text" name="last_name" id="last-name" class="form-control" required value="<?= $user['last_name'] ?>">
            </div>

            <div class="mb-4">
              <label for="username" class="form-label">UserName</label>
              <input type="text" name="username" id="username" class="form-control" maxlength="15" required value="<?= $user['username'] ?>">
            </div>

            <div class="text-end">
              <a href="dashboard.php" class="btn btn-secondary btn-sm">Cancel</a>
              <button type="submit" class="btn btn-warning btn-sm px-5">Save</button>
              </div>
              

        </form>
      </div>
    </div>
  </main>
</body>
</html>