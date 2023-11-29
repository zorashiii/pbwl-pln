<!-- <h2>Login Sistem</h2> -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="card p-3 m-auto col-8" style="background-color:#F875AA">
       <div class="card-header text-center p-3">
       <div class="logo-container">
            <img src="layouts/assets/img/logoBS.png" alt="Logo">
        </div>
     <div>
            <h3>LOGIN SISTEM </h3>
       </div>
       <form action="<?php echo URL; ?>/login/proses" method="post">
         <div class="form-floating mb-3">
              <input type="email" class="form-control" name="email" placeholder="Email">
              <label for="floatingInput">Email address</label>
         </div>
         <div class="form-floating">
              <input type="password" class="form-control" name="password" placeholder="Password">
              <label for="floatingPassword">Password</label>
         </div>
         <button class="btn m-3" style="background-color : #AEDEFC; color : #000000" type="submit" name="submit">Login</button>
       </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>



<!-- <form action="<?php echo URL; ?>/login/proses" method="post">
     <table>
          <tr>
               <td>Username</td>
               <td><input type="email" name="email" placeholder="Email" required></td>
          </tr>
          <tr>
               <td>Password</td>
               <td><input type="password" name="password" placeholder="Password" required></td>
          </tr>
          <tr>
               <td></td>
               <td><input type="submit" name="submit" value="Login"></td>
          </tr>
     </table>
</form>    -->

<?php if (isset($_SESSION['login']) && $_SESSION['login'] == false) { ?>
     <div class="error">
          Login tidak di temukan
     </div>
<?php } ?>