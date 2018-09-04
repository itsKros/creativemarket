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
        <div class="main address">
            <h3>My Addresses</h3>
            <p>The following addresses will be used on the checkout page by default.</p>
            <div class="row two-col-address">
                <div class="col-md-6">
                    <header class="address-title">
                        <h4>Billing address</h4>
                        <a href="myacc-address-billing.php" class="edit button">Edit</a>
                    </header>
                    <address>
                        Bailey Andrews<br>
                        9 High St<br>
                        THORPE SALVIN<br>
                        Los Angeles<br>
                        California<br>
                        S80 9GL
                    </address>
                </div>
                <div class="col-md-6">
                    <header class="address-title">
                        <h4>Shipping address</h4>
                        <a href="myacc-address-shipping.php" class="edit button">Edit</a>
                    </header>
                    <address>
                        You have not set up this type of address yet.		
                    </address>
                </div>
            </div>
        </div>
      </div>
      <!--Main content Ends-->
    </div>
  </div>
</section>
<?php include($_SERVER['DOCUMENT_ROOT'].'/creativemarket/footer.php');?>