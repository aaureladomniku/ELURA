<?php 

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="../css/navAndFooter.css">
   <link rel="stylesheet" href="../css/darkMode.css">
   <script src="../js/burgermenu.js" defer></script>
   
  
</head>

<body>
   <header>
      <nav>
        <h3>eluraDecor</h3>

        <ul  id="menu">
          <li class="l"><a  href="../html/Home.php">HOME</a></li>
          <li class="l"><a href="../html/About-us.php">ABOUT </a></li>
          <li class="l"><a href="../html/Shop.php">SHOP</a></li>
          <li class="l"><a href="../html/Blog.php">BLOG</a></li>
          <li class="l"><a href="../html/Contact.php">CONTACT </a></li>
          <?php if (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin'): ?>
    <li class="l"><a href="../html/Dashboard.php">DASHBOARD</a></li>
<?php endif; ?>



          <div class="ic hide">
          <img class="darkModeToggle" src="../images/moonBlack.png" alt="">
          <img src="../images/heartBlack.png" alt="">
         <img src="../images/cartBlack.png" alt=""> 
 
             
          </div>
            <?php if (isset($_SESSION['user_id'])): ?>
  <li class="l ic hide"><a class="logout" style="text-decoration:none;font-weight:bold;font-size:17px;color:black;" href="../cruds/user/logout.php">LOGOUT</a><li>
<?php endif;?>
  </ul>
           
         
         
      

           <div class="ic ic-row" >
          <img class="darkModeToggle" src="../images/moonWhite.png">
                <img src="../images/heartWhite.png" alt="">
                <img src="../images/cartWhite.png" alt=""> 
        

               <?php if (isset($_SESSION['user_id'])): ?>
  <a class="logout"  href="../cruds/user/logout.php">LOGOUT</a>
<?php endif;?>
        </div>
        

      

       


           <div id="burger">☰</div>
          
     
      </nav>
    </header>