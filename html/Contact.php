<?php

include_once '../includes/header.php';
?>

<head>
  <link rel="stylesheet" href="../css/contact.css">
</head>
  <main>
    <div class="container">
      <div class="left">
        <h2>
          CONTACT US VIA THE FORM BELOW & WE'LL GET BACK TO YOU AS SOON AS WE
          CAN.
        </h2>

        <div class="info">
          <p class="label">EMAIL</p>
          <p>eluradecor@gmail.com</p>

          <p class="label">PHONE</p>
          <p>049-248-144</p>

          <p class="label">ADDRESS</p>
          <p>Bill-Clinton Address<br />City, Prishtinë</p>

          <p class="label">SOCIAL</p>
          <div class="social">
            <p>eluradecor-instagram</p>
            <p>eluraDecor-facebook</p>
            <p>eluraDecor-linkedin</p>
          </div>
         

      
      </div>
     
    </div>

      <div class="right">
        <form method="" novalidate>
          <input type="text" placeholder="NAME" required />
          <div id="nameError" aria-live="polite"></div>
          <input type="text" placeholder="PHONE" required />
          <div id="phoneError" aria-live="polite"></div>
          <input type="email" placeholder="EMAIL" />
          <div id="emailError" aria-live="polite"></div>
          <textarea placeholder="MESSAGE"></textarea>
          <div id="textError" aria-live="polite"></div>
          <button type="submit" class="submit">SUBMIT</button>
        </form>
      </div>
    </div>
  </main>
  <footer class="footer">
    <div class="footer-container">
      <div class="footer-section">
        <h3 class="footer-logo">eluraDecor</h3>
        <p class="footer-desc">Where modern design meets timeless comfort.</p>

        <div class="footer-socials">
          <a href="#"><img src="../images/icons8-twitter-bird-100.png" /></a>
          <a href="#"><img src="../images/linkedin.png" /></a>
          <a href="#"><img src="../images/instagram.png" /></a>
          <a href="#"><img src="../images/email.png" /></a>
        </div>
      </div>

      <div class="footer-section">
        <h4>Support</h4>
        <ul>
          <li><a href="#">FAQs</a></li>
          <li><a href="#">Shipping & Returns</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms & Conditions</a></li>
        </ul>
      </div>

      <div class="footer-section">
        <h4>Stay Updated</h4>
        <p>Join our mailing list for décor tips & offers.</p>

        <p class="email">eluraDecor@support.com</p>
        <p class="email">eluraDecor@return.com</p>
      </div>
    </div>

    <div class="footer-bottom">
      <p>© 2025 Elura Decor — All Rights Reserved.</p>
    </div>
  </footer>
</body>

</html>