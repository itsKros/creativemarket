<?php include('header.php'); ?>

<!-- Hero Section -->
<section id="pageTitleSec" class="inGrid checkout">
  <div class="container">
    <div class="row">
        <div class="col-md-8 content">
            <h1>Checkout</h1>
        </div>
    </div>
  </div>
</section>


<section id="checkoutSec">
<div class="container">
  <div class="row">

    <!--Billing Address-->
    <div class="col-md-5 order-md-1 billingaddress">
      <h4 class="mb-3">Billing address</h4>
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
        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
        </div>
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="save-info">
          <label class="custom-control-label" for="save-info">Save this information for next time</label>
        </div>
        <hr class="mb-4">

        <h4 class="mb-3">Payment</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
            <label class="custom-control-label" for="credit">Credit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
            <label class="custom-control-label" for="debit">Debit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
            <label class="custom-control-label" for="paypal">Paypal</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">Name on card</label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required="">
            <small class="text-muted">Full name as displayed on card</small>
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Credit card number</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required="">
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="cc-expiration">Expiration</label>
            <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-expiration">CVV</label>
            <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block btn-cm" type="submit">Continue to checkout</button>
      </form>
    </div>
    
    <!--Space-->
    <div class="col-md-1 order-md-2"></div>

    <!--Shipping Address -->
    <div class="col-md-5 order-md-3 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill">3</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Product name</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$12</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Second product</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$8</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Third item</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success promocode">
            <h6 class="my-0">Promo code</h6>
            <small>CM5OFF2K18</small>
          </div>
          <span class="text-success">-$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between chkTotal">
          <span>Total (USD)</span>
          <strong>$20</strong>
        </li>
      </ul>

    </div>

    
    
    
  </div>
</div>
</section>
<?php include('footer.php'); ?>