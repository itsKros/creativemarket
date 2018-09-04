<?php include($_SERVER['DOCUMENT_ROOT'].'/creativemarket/header.php');?>

<!-- Hero Section -->
<section id="pageTitleSec" class="inGrid myAccount">
  <div class="container">
    <div class="row">
        <div class="col-md-8 content">
            <h1>My Account</h1>
        </div>
    </div>
  </div>
</section>


<section id="myAccountSec">
  <div class="container">
    <div class="row">

      <?php include('my-account-sidebar.php');?>

      <!--Main content starts-->
      <div class="col-lg-9 col-md-9 col-sm-12 myaccMain">
        <div class="main welcome">
        
        <p>Hello <strong>Jon</strong> (not <strong>Jon</strong>? <a href="#">Log out</a>)</p>
        
        <p>From your account dashboard you can view your <a href="myacc-order.php">recent orders</a>, manage your <a href="myacc-address.php">shipping and billing addresses</a>, and <a href="myacc-account-details.php">edit your password and account details</a>.</p>
        
        </div>
      </div>
      <!--Main content Ends-->
    </div>
  </div>
</section>
<?php include($_SERVER['DOCUMENT_ROOT'].'/creativemarket/footer.php');?>