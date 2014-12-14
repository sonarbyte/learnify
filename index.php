<?php include("header.php") ?>
<div class="body">
<div class="container">
  <div class="row">
	<div class="col-sm-2">
  <?php
   if(isset($_SESSION['dat_r']) and !empty($_SESSION['dat_r'])) include("menu.php") ;
   else echo "Menu is empty" ;
  ?>
  </div>
  <div class="col-sm-8">
    <?php if (isset($_GET['body'])) include($_GET['body']); else include("home.php");  ?> 
  </div>
  <div class="col-sm-2">
  </div>
  </div>
</div>
</div>
 <footer class="footer">
    <br><br><br><br><br><br>
    <div class="container">
      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="SBM29S8G7KGBN">
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
      </form>
    </div>
 </footer>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 </body>
</html>
