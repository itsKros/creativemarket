<?php include('header.php');?>

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

      <?php include('my-account-sidebar.php'); ?>

      <!--Main content starts-->
      <div class="col-lg-9 col-md-9 col-sm-12 myaccMain">
        <div class="main order table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th class="number"><span>Order</span></th>
                    <th class="date"><span>Date</span></th>
                    <th class="status"><span>Status</span></th>
                    <th class="total"><span>Total</span></th>
                    <th class="actions"><span>Actions</span></th>
                 </tr>
            </thead>

		    <tbody>
                <tr>
                    <td class="order-number"><a href="#">#15881</a></td>
                    <td class="order-date">June 24, 2018</td>
                    <td class="order-status completed">Completed</td>
                    <td class="order-total">$ 99.00 for 1 item </td>
                    <td class="order-actions"><a href="#">View</a></td>
                </tr>
                <tr>
                    <td class="order-number"><a href="#">#16991</a></td>
                    <td class="order-date">Aug 24, 2018</td>
                    <td class="order-status processing">Processing</td>
                    <td class="order-total">$ 99.00 for 1 item </td>
                    <td class="order-actions"><a href="#">View</a></td>
                </tr>
                <tr>
                    <td class="order-number"><a href="#">#17654</a></td>
                    <td class="order-date">Aug 24, 2018</td>
                    <td class="order-status cancelled">Cancelled</td>
                    <td class="order-total">$ 99.00 for 1 item </td>
                    <td class="order-actions"><a href="#">View</a></td>
                </tr>
			</tbody>
	</table>
        
        </div>
      </div>
      <!--Main content Ends-->
    </div>
  </div>
</section>
<?php include('footer.php');?>