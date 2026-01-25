
<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['user_id'])) {
    if ($_SESSION['user_role'] === 'admin') {
        header("Location: Dashboard.php");
    } else {
        header("Location: Home.php");
    }
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elura LogIn</title>
  <link rel="stylesheet" href="../css/Log-in.css">
  <script src="../js/loginValidation.js" defer></script>
 
</head>
<body>
     <section class="LoginCard">
      
      <div class="LoginRight">
    
      </div>

      <div class="LoginLeft">

         <div class="LoginHolder">

          <h1 class="LoginTitle">LOG-IN</h1>

             <form method="post" action="../cruds/user/login.inc.php" novalidate>

             <input  class="userName" type="text" placeholder="username" name='email' required />
             <span class="userError" aria-live="polite"></span>

             <input  class ="userPassword" name='password'  type="password" placeholder="password" required />
             <span class="PasswordError" aria-live="polite"></span>

             <span class="forgot">Forgot ur password?</span>

             <input type="submit" value="LogIn" name="submit" class="submit" />
            
              <span class="signUp">Don't have an account?
              <a href="sign-up.php">Sign-Up</a></span>

             </form>

          </div>

      </div>

    </section>


</body>
</html>