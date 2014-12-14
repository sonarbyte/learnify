          <div class="panel panel-default col-md-10 col-md-offset-1 well">
            <div class="panel-heading">
              <h3>Sing up</h3>
            </div>
            <div class="panel-body">
              <form role="form" action="./register_action.php" method="POST">
                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
                </div>

                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
                    </div>
                  </div>
                </div>
         <!--<label class="control-label" for="captcha">Captcha</label>-->
     <div class="controls">

                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
         <img height="60" width="260" id="captcha" src="./securimage/securimage_show.php" alt="CAPTCHA Image" />
         </div>
         </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
         <input type="text" autocomplete="off"  name="captcha_code" size="10" maxlength="8" class="form-control input-sm" placeholder="Captcha">
         <a href="#" onclick="document.getElementById('captcha').src = './securimage/securimage_show.php?' + Math.random(); return false"><i>Different image</i></a>
         </div>
         </div>

     </div> 
    <br>
    <br>

                <input type="submit" value="Register" class="btn btn-primary btn-block">
              
              </form>
            </div>
          </div>
        </div>