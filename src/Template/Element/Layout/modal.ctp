<!-- Modal -->
<div class="modal fade" id="productModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="modal-tab">
                            <div class="product-details-large tab-content">
                                <div class="tab-pane active" id="image-1">
                                    <img src="<?php echo $BASE_URL;?>/images/product/quickview-l4.jpg" alt="" />
                                </div>
                                <div class="tab-pane" id="image-2">
                                    <img src="<?php echo $BASE_URL;?>/images/product/quickview-l2.jpg" alt="" />
                                </div>
                                <div class="tab-pane" id="image-3">
                                    <img src="<?php echo $BASE_URL;?>/images/product/quickview-l3.jpg" alt="" />
                                </div>
                                <div class="tab-pane" id="image-4">
                                    <img src="<?php echo $BASE_URL;?>/images/product/quickview-l5.jpg" alt="" />
                                </div>
                            </div>
                            <div class="product-details-small quickview-active owl-carousel">
                                <a class="active" href="#image-1"><img src="<?php echo $BASE_URL;?>/images/product/quickview-s4.jpg" alt="" /></a>
                                <a href="#image-2"><img src="<?php echo $BASE_URL;?>/images/product/quickview-s2.jpg" alt="" /></a>
                                <a href="#image-3"><img src="<?php echo $BASE_URL;?>/images/product/quickview-s3.jpg" alt="" /></a>
                                <a href="#image-4"><img src="<?php echo $BASE_URL;?>/images/product/quickview-s5.jpg" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="modal-pro-content">
                            <h3>Chaz Kangeroo Hoodie3</h3>
                            <div class="price">
                                <span>$70.00</span>
                            </div>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet.</p>
                            <div class="quick-view-select">
                                <div class="select-option-part">
                                    <label>Size*</label>
                                    <select class="select">
                                        <option value="">S</option>
                                        <option value="">M</option>
                                        <option value="">L</option>
                                    </select>
                                </div>
                                <div class="quickview-color-wrap">
                                    <label>Color*</label>
                                    <div class="quickview-color">
                                        <ul>
                                            <li class="blue">b</li>
                                            <li class="red">r</li>
                                            <li class="pink">p</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <form action="#">
                                <input type="number" value="1" />
                                <button>Add to cart</button>
                            </form>
                            <span><i class="fa fa-check"></i> In stock</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->