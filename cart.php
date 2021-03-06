<?php include('header.php'); ?>
<!-- Hero Section -->
<section id="pageTitleSec" class="inGrid cart">
	<div class="container">
		<div class="row">
			<div class="col-md-8 content">
				<h1>Cart</h1>
			</div>
		</div>
	</div>
</section>


<section id="cartSec">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wrap cf">
					<div class="heading cf">
						<h1>View Cart</h1>
						<a href="#" class="continue">Continue Shopping</a>
					</div>
					<div class="cart">
						<!--   <ul class="tableHead"><li class="prodHeader">Product</li><li>Quantity</li><li>Total</li><li>Remove</li></ul>-->
						<ul class="cartWrap">
							<li class="items odd">
								<div class="infoWrap">
									<div class="cartSection">
										<img src="https://dummyimage.com/430x430/ec3560/ffffff&text=List+Gears" alt="" class="itemImg" />
										<p class="itemNumber">#QUE-007544-002</p>
										<h3>Item Name 1</h3>
										<p>
											<input type="text"  class="qty" placeholder="3"/> x $5.00
										</p>
										<p class="stockStatus"> In Stock</p>
									</div>
									<div class="prodTotal cartSection">
										<p>$15.00</p>
									</div>
									<div class="cartSection removeWrap">
										<a href="#" class="remove"><i class="fa fa-window-close" aria-hidden="true"></i></a>
									</div>
								</div>
							</li>
							<li class="items even">
								<div class="infoWrap">
									<div class="cartSection">
										<img src="https://dummyimage.com/430x430/ec3560/ffffff&text=List+Gears" alt="" class="itemImg" />
										<p class="itemNumber">#QUE-007544-002</p>
										<h3>Item Name 1</h3>
										<p>
											<input type="text"  class="qty" placeholder="3"/> x $5.00
										</p>
										<p class="stockStatus"> In Stock</p>
									</div>
									<div class="prodTotal cartSection">
										<p>$15.00</p>
									</div>
									<div class="cartSection removeWrap">
										<a href="#" class="remove"><i class="fa fa-window-close" aria-hidden="true"></i></a>
									</div>
								</div>
							</li>
							<li class="items odd">
								<div class="infoWrap">
									<div class="cartSection">
										<img src="https://dummyimage.com/430x430/ec3560/ffffff&text=List+Gears" alt="" class="itemImg" />
										<p class="itemNumber">#QUE-007544-002</p>
										<h3>Item Name 1</h3>
										<p>
											<input type="text"  class="qty" placeholder="3"/> x $5.00
										</p>
										<p class="stockStatus out"> Out of Stock</p>
									</div>
									<div class="prodTotal cartSection">
										<p>$15.00</p>
									</div>
									<div class="cartSection removeWrap">
										<a href="#" class="remove"><i class="fa fa-window-close" aria-hidden="true"></i></a>
									</div>
								</div>
							</li>
							<li class="items even">
								<div class="infoWrap">
									<div class="cartSection info">
										<img src="https://dummyimage.com/430x430/ec3560/ffffff&text=List+Gears" alt="" class="itemImg" />
										<p class="itemNumber">#QUE-007544-002</p>
										<h3>Item Name 1</h3>
										<p>
											<input type="text"  class="qty" placeholder="3"/> x $5.00
										</p>
										<p class="stockStatus"> In Stock</p>
									</div>
									<div class="prodTotal cartSection">
										<p>$15.00</p>
									</div>
									<div class="cartSection removeWrap">
										<a href="#" class="remove"><i class="fa fa-window-close" aria-hidden="true"></i></a>
									</div>
								</div>
								
							</li>
							<!--<li class="items even">Item 2</li>-->
						</ul>
					</div>
					<div class="promoCode">
						<label for="promo">Have A Promo Code?</label>
						<input type="text" name="promo" placholder="Enter Code" />
						<a href="#" class="btn"></a>
					</div>
					  <div class="subtotal cf">
						<ul>
							<li class="totalRow">
								<span class="label">Subtotal</span>
								<span class="value">$35.00</span>
							</li>
							<li class="totalRow">
								<span class="label">Shipping</span>
								<span class="value">$5.00</span>
							</li>
							<li class="totalRow">
								<span class="label">Tax</span>
								<span class="value">$4.00</span>
							</li>
							<li class="totalRow final">
								<span class="label">Total</span>
								<span class="value">$44.00</span>
							</li>
							<li class="totalRow">
								<a href="#" class="btn continue">Checkout</a>
							</li>
						</ul>
					  </div>
				  </div>
			  </div>
		  </div>
	  </div>
  </div>
</section>



<?php include('footer.php'); ?>