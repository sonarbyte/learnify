<?php include("header.php") ?>
<div class="container">
  <div class="row">
	<div class="col-sm-3">
  <?php include("menu.php") ?>
  </div>
  <div class="col-sm-9">
  <?php include($_GET['body']) ; ?> 
  </div>
  </div>
  <div class="row">
  <div class="col-sm-10">
  </div>
  <div class="col-sm-2">
  </div>
  </div>
</div>
<nav class="navbar navbar-default navbar-fixed-bottom">
<div id="footer">
  <div class="container">
  <div class="credit">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="SBM29S8G7KGBN">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</div>
</div>
</div>
</nav>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
