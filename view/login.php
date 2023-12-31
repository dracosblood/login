<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=}, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body class="contenedor">


<section class="list-group list-group-flush cards">
  <form action="/handle_db/loginconect.php" method="POST">
    <div class="mb-3 row">
        <h1>Login</h1>
         <label  class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
        <input type="email" class="form-control tamano" placeholder="example@email.com" name="correo">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
        <input type="password" class="form-control tamano" id="inputPassword" name="contrasena">
        </div>
    </div>
    <section class="regis">
      <div class="col-auto btnlogin">
          <button type="submit" class="btn btn-primary mb-2"> Star coding now </button>
      </div>
      <div class="icon2">
                <img class="icon" src="/assets/Google.svg">
                <img class="icon" src="/assets/Facebook.svg">
                <img class="icon" src="/assets/Twitter.svg">
                <img class="icon" src="/assets/Gihub.svg">
      </div>
      <div class="dev">
      <p>Dont have an account yet?</p><a href="/index.php">Register</a>
    </section>
  </form>
</section>
    
</body>
</html>