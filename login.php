<br><br>
<form action="./login_action.php" method="POST">
<div class="well col-md-6 col-md-offset-3">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Log in</h4>
      </div> <!-- /.modal-header -->

      <div class="modal-body">
        <form role="form">
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control" id="uLogin" placeholder="Login" name="login">
              <label for="uLogin" style="color: black" class="input-group-addon glyphicon glyphicon-user"></label>
            </div>
          </div> <!-- /.form-group -->

          <div class="form-group">
            <div class="input-group">
              <input type="password" class="form-control" id="uPassword" placeholder="Password" name="pass">
              <label for="uPassword" style="color: black" class="input-group-addon glyphicon glyphicon-lock"></label>
            </div> <!-- /.input-group -->
          </div> <!-- /.form-group -->

          <div class="checkbox">
            <label>
              <input type="checkbox"> Remember me
            </label>
          </div> <!-- /.checkbox -->
        </form>

      </div> <!-- /.modal-body -->

      <div class="modal-footer">
        <button class="form-control btn btn-primary">Login</button>
      </div> <!-- /.modal-footer -->

</div>        
</form>
