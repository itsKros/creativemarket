<?php include('header.php'); ?>
<!-- Hero Section -->
<section id="signUpSec" class="inGrid">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-7 content image">
            <div class="overlay"></div>
            <h1>Change your <br><span style="color:var(--primary)">accessories</span> <br>Change your <br><span style="color:var(--primary)">story</span>.</h1>
      </div>
      <div class="col-md-5 content signup">
        <h1>Sign In</h1>
        <p>Sign in using your email address</p>
        <form>
                <div class="sufwarp">
                    
                    <div class="form-group">
                        <input id="su_email" type="email" name="su_email" class="form-control" placeholder="Enter your email" required="required">
                    </div>
                    <div class="form-group">
                        <input id="su_password" type="password" name="su_password" class="form-control" placeholder="Password" required="required">
                    </div>
                   
                </div>
                <div class="sufwarp">
                    <input type="submit" class="btn btn-success btn-send" value="Sign Up">
                </div>
                <div class="agreesec">
                <p>Not registered yet? <br><a href="#">Sign up now!</a></p>
                <p>By registering you confirm that you accept the <br>
                  <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include('footer.php'); ?>
