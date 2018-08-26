<?php include('header.php'); ?>
<!-- Hero Section -->
<section id="pageTitleSec" class="inGrid singleproductpage">
  <div class="container">
    <div class="row">
        <div class="col-md-8 content">
            <h1>Single Gear</h1>
        </div>
    </div>
  </div>
</section>

<div class="container shop single">
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
                    <li class="list-group-item"><a href="#">Cras justo odio <span class="badge badge-primary">14</span></a></li>
                    <li class="list-group-item"><a href="#">Dapibus ac facilisis in <span class="badge badge-primary">25</span></a></li>
                    <li class="list-group-item"><a href="#">Morbi leo risus <span class="badge badge-primary"></span></a></li>
                    <li class="list-group-item"><a href="#">Porta ac consectetur ac <span class="badge badge-primary">35</span></a></li>
                    <li class="list-group-item"><a href="#">Vestibulum at eros <span class="badge badge-primary">54</span></a></li>
                </ul>
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
                    <div class="product-categories">
                        <p>SKU: <span>004</span></p>
                        <p>CATEGORIES: <a href="#">Camera</a><a href="#">Lenses</a></p>
                    </div>
                    <!--Accordion-->
                    <div class="panel-group product-desc" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">Description</h4>
                                </div>
                            </a>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">Addition Info</h4>
                                </div>
                            </a>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                   <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                                </div>
                            </div>
                        </div>

                    </div><!-- panel-group -->
                    <!--Accordion-->
                </div>
                
                
            </div>
        </div>
    </div>

    
</div>
<?php include('footer.php'); ?>