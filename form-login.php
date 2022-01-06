<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h1 class="text-center">Selamat <strong>Datang</strong> Di Aplikasi Inventori Lab </h1>
    <div class="row justify-content-center">
      <div class="col-md-4">
        <div class="card">
          <div class="card-header">
            Login
          </div>
          <div class="card-body">
            <form action="proses-login.php" method="post" class="ms-auto">

              <div class="form-group">
                <label for="username">Username : </label>
                <input type="text" name="username" class="form-control" id="username" required>
              </div>
              <div class="form-group">
                <label for="password">Password : </label>
                <input type="text" name="password" class="form-control" id="password" required>
              </div>
              <div class="form-group">
                <label for="level">Level : </label>
                <input type="text" name="level" class="form-control" id="level" required>
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>