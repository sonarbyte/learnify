      <div class="panel panel-default well col-md-6 col-md-offset-3">
            <div class="panel-heading">
              <h3>Login in</h3>
            </div>
      <div class="panel-body">
      <form action="./login_action.php" method="POST">
          <div class="form-group">
            <div class="input-group">
              <input type="text" name="email" class="form-control input-lg" placeholder="Your Email">
              <label for="uLogin" style="color: black" class="input-group-addon glyphicon glyphicon-user"></label>
            </div>
          </div> <!-- /.form-group -->

          <div class="form-group">
            <div class="input-group">
              <input type="password" class="form-control input-lg" name="password" placeholder="Password">
              <label for="uPassword" style="color: black" class="input-group-addon glyphicon glyphicon-lock"></label>
            </div> <!-- /.input-group -->
          </div> <!-- /.form-group -->

          <div class="checkbox">
            <label>
              <input type="checkbox"> Remember me
            </label>
          </div> <!-- /.checkbox -->


        <input type="submit" value="Login in" class="btn btn-lg btn-primary btn-block">
              
      </form>
      </div> <!-- /.modal-body -->
      </div>