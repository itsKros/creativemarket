<?php include('header.php'); ?>
<!-- Hero Section -->
<section id="pageTitleSec" class="inGrid">
  <div class="container">
    <div class="row">
      <div class="col-md-8 content">
        <h1>List Gears</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab sint asperiores voluptate
          doloremque deserunt at sed quidem.</p>
        
      </div>
    </div>
  </div>
</section>

<div class="container shop">
    <div class="row">
        <div class="col-12 col-sm-3 categories">
            <div class="card bg-light mb-3">
                <div class="card-header  text-white text-uppercase"><i class="fa fa-list"></i> Categories</div>
                <ul class="list-group category_block">
                    <li class="list-group-item"><a href="#">Cras justo odio <span class="badge badge-primary">14</span></a></li>
                    <li class="list-group-item"><a href="#">Dapibus ac facilisis in <span class="badge badge-primary">25</span></a></li>
                    <li class="list-group-item"><a href="#">Morbi leo risus <span class="badge badge-primary"></span></a></li>
                    <li class="list-group-item"><a href="#">Porta ac consectetur ac <span class="badge badge-primary">35</span></a></li>
                    <li class="list-group-item"><a href="#">Vestibulum at eros <span class="badge badge-primary">54</span></a></li>
                </ul>
            </div>
            <div class="card mb-3 latestproduct">
                <div class="card-header  text-white text-uppercase">Latest product</div>
                <img class="img-fluid" src="https://dummyimage.com/600x400/ffffff/ec3561&text=Latest+Gear" />
                <div class="card-body">
                    
                    <h5 class="card-title">Product title</h5>
                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet, est. Nobis possimus amet ipsa, praesentium quam nostrum impedit cum dicta.</p>
                    <p class="rprice">99.00 $ <br><small>10 hours</small></p>
                </div>
            </div>
        </div>
        <div class="col gears single">
            <div class="row">
                <div class="col-md-6 productimage">
                 <img class="img-fluid" src="https://dummyimage.com/600x765/f8f8f8/636363&text=Single+Gear" alt="">
               </div>
               <div class="col-md-6 productdetail">
                 <h2 class="product-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h2>
                 <h3 class="product-price">$ 75.00 <span>for 10 Hrs</span></h3>
                 <p class="product-brief">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet, est. Nobis possimus amet ipsa, praesentium quam nostrum impedit cum dicta.</p>
                 <div class="addToCart">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-number btn-cm" disabled="disabled" data-type="minus" data-field="quant[1]" style="border-bottom-left-radius: 38px;border-top-left-radius: 38px;">
                            <i class="fa fa-minus" aria-hidden="true"></i>
                            </button>
                        </span>
                        <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-number btn-cm" data-type="plus" data-field="quant[1]" style="border-bottom-right-radius: 38px;border-top-right-radius: 38px;">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </span>
                    </div>
                   <a href="" class="btn btn-cm">Add To Cart</a>
                 </div>
                 <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Collapsible Group Item #1
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Collapsible Group Item #2
                                </button>
                            </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Collapsible Group Item #3
                                </button>
                            </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                            </div>
                        </div>
                        </div>
                                </div>
                            </div>
                        </div>
               </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>