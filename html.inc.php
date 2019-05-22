<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="containor-fluid body-wrapper">
    <div id="right-side">
      <br>
      <div id="options">
        <button class="form-control on"><a href="index.php">Login</a></button>
        <button class="form-control"><a href="signin.php">Signin</a></button>
      </div>
      <br><br>
      <div id="other-options">
        <img src="search.png" alt="">
        <p><a href="callback.php">Log in with google</a></p>
      </div>
      <br>
      <form action="index.php" method="POST">
        <div class="form-group">
          <label>First Name</label>
          <input type="text" name="first_name" placeholder="first name" class="form-control" method="POST">
        </div>
        <div class="form-group">
          <label>Last Name</label>
          <input type="text" name="last_name" placeholder="last name" class="form-control" method="POST">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" placeholder="email" class="form-control" method="POST">
        </div>
        <div class="form-group">
          <label>Gender</label>
            <select name="gender" class="form-control" method="POST">
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
            </select>
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control" method="POST">
        </div>
        <br>
        <button class="form-control btn btn-primary">Submit</button>
      </form>
      <br>
    </div>
  </div>  
</body>
</html>

