<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    />
    <link
      rel="stylesheet"
      href="./font-awesome-4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="login1.css" />
    <title>Form validation</title>
  </head>
  <body>
    <div class="login-container">
      <h2>Login</h2>
      <form action="loginup.php" id="loginform" method="post">
        <div class="form-field">
          <label for="loginUsername">User Name</label>
          <input type="text" name="Username" id="loginUserName" placeholder="Enter User Name" />
          <small class="alert-message">Error</small>
        </div>
        <div class="form-field">
          <label for="loginPassword">Password</label>
          <input
            type="password"
            id="loginPassword"
		      	name="Password"
            placeholder="Enter Password"
          />
          <small class="alert-message">Error</small>
        </div>
        <div class="form-field">
          <i class="fa fa-eye" aria-hidden="true"></i>
          <label>Show/hide Password</label>
        </div>
        <button class="btn" type="submit">go</button>
      </form>
    <script src="login1.js"></script>
  </body>
</html>