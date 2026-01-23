<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EluraDecor</title>
    <link rel="stylesheet" href="../css/sign-up.css">

    <script src="../js/sign-upValidation.js" defer></script>

</head>

<body>
    <section class="SignCard">


        </div>
        <div class="SignLeft">
            
            <div class="cl">


                <form action="../cruds/user/signup.inc.php" method="post" novalidate>

                    <h1 class="SignUpTitle">SIGN-UP</h1>

                    <input type="text" class="SignupName" placeholder="Full name" name="name" required />
                    <span class="nameError" aria-live="polite"></span>

                    <input type="email" class="SignupEmail" placeholder="email@example.com" name="email"  required />
                    <span class="emailError" aria-live="polite"></span>

                    <input type="password" class="SignupPassword" placeholder="password"  name="password" required />
                    <span class="passwordError" aria-live="polite"></span>

                    <input type="password" class="ConfirmedPassword" placeholder="Confirme Password" name="confirmPassword"  required />
                    <span class="confirmedPasswordError" aria-live="polite"></span>

                    <input type="submit" value="SignUp" class="submit" name="submit" />

                </form>

            </div>
    </section>



</body>

</html>