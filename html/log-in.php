
<?php
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

             <input  class="userName" type="text" placeholder="username" required />
             <span class="userError" aria-live="polite"></span>

             <input  class ="userPassword" type="password" placeholder="password" required />
             <span class="PasswordError" aria-live="polite"></span>

             <span class="forgot">Forgot ur password?</span>

             <input type="submit" value="LogIn" class="submit" />
            
              <span class="signUp">Don't have an account?
              <a href="sign-up.html">Sign-Up</a></span>

             </form>

          </div>

      </div>

    </section>


</body>
</html>