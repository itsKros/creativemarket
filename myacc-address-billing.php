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
            <h3>Billing Address</h3>
            <div class="row two-col-address">
                <div class="col-md-12">
                <form class="needs-validation" novalidate="">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" id="firstName" placeholder="First name" value="" required="">
                            <div class="invalid-feedback">Valid first name is required.</div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" id="lastName" placeholder="Last name" value="" required="">
                            <div class="invalid-feedback">Valid last name is required.</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input type="email" class="form-control" id="email" placeholder="Email address">
                            <div class="invalid-feedback">
                                Please enter a valid email address for billing updates.
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" id="phone" placeholder="Phone">
                            <div class="invalid-feedback">
                                Please enter a valid phone for billing updates.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                    
                    <input type="text" class="form-control" id="address" placeholder="Address: eg. 1234 Main St" required="">
                    <div class="invalid-feedback">
                        Please enter your billing address.
                    </div>
                    </div>

                    <div class="mb-3">
                    
                    <input type="text" class="form-control" id="address2" placeholder="Address 2 (Optional): Apartment or suite">
                    </div>

                    <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="country">Country</label>
                        <select class="custom-select d-block w-100" id="country" required="">
                        <option value="">Choose...</option>
                        <option>United States</option>
                        </select>
                        <div class="invalid-feedback">
                        Please select a valid country.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="state">State</label>
                        <select class="custom-select d-block w-100" id="state" required="">
                        <option value="">Choose...</option>
                        <option>California</option>
                        </select>
                        <div class="invalid-feedback">
                        Please provide a valid state.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="zip">Zip</label>
                        <input type="text" class="form-control ship2add" id="zip" placeholder="" required="">
                        <div class="invalid-feedback">
                        Zip code required.
                        </div>
                    </div>
                    </div>
                    <div class="shippingaddress" style="display:none;">
                    <h4 class="mb-3">Shipping address</h4>
                    <form class="needs-validation" novalidate="">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                        
                        <input type="text" class="form-control" id="firstName" placeholder="First name" value="" required="">
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                        </div>
                        <div class="col-md-6 mb-3">
                        
                        <input type="text" class="form-control" id="lastName" placeholder="Last name" value="" required="">
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        
                        <input type="email" class="form-control" id="email" placeholder="Email address">
                        <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                        </div>
                    </div>

                    <div class="mb-3">
                        
                        <input type="text" class="form-control" id="address" placeholder="Address: eg. 1234 Main St" required="">
                        <div class="invalid-feedback">
                        Please enter your shipping address.
                        </div>
                    </div>

                    <div class="mb-3">
                        
                        <input type="text" class="form-control" id="address2" placeholder="Address 2 (Optional): Apartment or suite">
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-3">
                        <label for="country">Country</label>
                        <select class="custom-select d-block w-100" id="country" required="">
                            <option value="">Choose...</option>
                            <option>United States</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                        </div>
                        <div class="col-md-4 mb-3">
                        <label for="state">State</label>
                        <select class="custom-select d-block w-100" id="state" required="">
                            <option value="">Choose...</option>
                            <option>California</option>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                        </div>
                        <div class="col-md-3 mb-3">
                        <label for="zip">Zip</label>
                        <input type="text" class="form-control ship2add" id="zip" placeholder="" required="">
                        <div class="invalid-feedback">
                            Zip code required.
                        </div>
                        </div>
                    </div>
                    </div>
                    <button class="btn btn-primary btn-lg btn-cm" type="submit">Save Changes</button>
                </form>
                </div>
            </div>
        </div>
      </div>
      <!--Main content Ends-->
    </div>
  </div>
</section>
<?php include($_SERVER['DOCUMENT_ROOT'].'/creativemarket/footer.php');?>