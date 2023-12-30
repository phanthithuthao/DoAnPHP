<section class="featured-places">
    <div class="container">
        <?php
        foreach ($dataById as $dbi) {
        ?>
            <div class="row">
                <div class="col-md-6 col-xs-12" style="margin-top: 2em;">
                    <div>
                        <img src="./views/image/product/<?php echo $dbi['urlImagePro'] ?>" alt="" class="img-responsive wc-image">
                    </div>
                </div>

                <div class="col-md-6 col-xs-12">
                    <form action="index.php?controller=cart&action=getproduct" method="get" class="form">
                        <input type="hidden" name="controller" value="cart">
                        <input type="hidden" name="action" value="getproduct">
                        <input type="hidden" name="id" value="<?php echo $dbi['idProduct'] ?>">
                        <!-- <input type="hidden" name="qty" value="1"> -->
                        <h2><?php echo $dbi['nameBrand'] ?>&nbsp;<?php echo $dbi['nameProduct'] ?></h2>

                        <br>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Hãng:</span>

                                    <strong class="pull-right"><?php echo $dbi['nameBrand'] ?></strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Tên Xe:</span>

                                    <strong class="pull-right"><?php echo $dbi['nameProduct'] ?></strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left"> Giá: </span>

                                    <strong class="pull-right"><?php echo $dbi['priceProduct'] ?>&nbsp;<span>VNĐ</span></strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Dung Tích Động Cơ: </span>

                                    <strong class="pull-right"><?php echo $dbi['Engine'] ?>&nbsp;<span>CC</span></strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Mã Lực: </span>

                                    <strong class="pull-right"><?php echo $dbi['horsePower'] ?>&nbsp;<span>HP</span></strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Số Chỗ Ngồi: </span>

                                    <strong class="pull-right"><?php echo $dbi['seat'] ?>&nbsp;<span>Chỗ</span></strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Cấp số: </span>

                                    <strong class="pull-right"><?php echo $dbi['gearBox'] ?>&nbsp;<span>Cấp</span></strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Chiều Rộng: </span>

                                    <strong class="pull-right"><?php echo $dbi['width'] ?>&nbsp;<span>mm</span></strong>
                                </div>
                            </li>


                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Chiều Cao</span>

                                    <strong class="pull-right"><?php echo $dbi['height'] ?>&nbsp;<span>mm</span></strong>
                                </div>
                            </li>
                        </ul>
                        <ul style="display: flex; justify-content: center; align-items: center;">
                            <!--<li style="width: 100%; height: 5em; ">-->
                                <button type="submit" style="width: 100%; height: 3em; font-size: 14pt;">
                                    Đăng kí lái thử&nbsp;<i class="fa fa-cart-plus"></i>
                                    <!-- <a href="https://kristdh52003760.000webhostapp.com/index.php?controller=cart&action=get_product&id=P14" style="text-decoration: none; font-size: 16pt;">Thêm Vào Giỏ Hàng&nbsp;<i class="fa fa-cart-plus"></i></a> -->
                                </button>
                            <!--</li>-->
                        </ul>
                        <div class="accordions">
                            <ul class="accordion">
                                <li>
                                    <a class="accordion-trigger">Vehicle Extras</a>

                                    <div class="accordion-content">
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-12">
                                                <p>ABS</p>
                                            </div>

                                            <div class="col-sm-6 col-xs-12">
                                                <p>Leather seats</p>
                                            </div>

                                            <div class="col-sm-6 col-xs-12">
                                                <p>Power Assisted Steering</p>
                                            </div>

                                            <div class="col-sm-6 col-xs-12">
                                                <p>Electric heated seats</p>
                                            </div>

                                            <div class="col-sm-6 col-xs-12">
                                                <p>New HU and AU</p>
                                            </div>

                                            <div class="col-sm-6 col-xs-12">
                                                <p>Xenon headlights</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="accordion-trigger">Vehicle Description</a>
                                    <div class="accordion-content">
                                        <p>- Colour coded bumpers<br>- Tinted glass<br>- Immobiliser<br>- Central locking - remote<br>- Passenger airbag<br>- Electric windows<br>- Rear head rests<br>- Radio<br>- CD player<br>- Ideal first car<br>- Warranty<br>- High level brake light<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </li>
                                <li>
                                    <a class="accordion-trigger">Contact Details</a>

                                    <div class="accordion-content">

                                        <p>
                                            <span>Name</span>

                                            <br>

                                            <strong>John Smith</strong>

                                        </p>

                                        <p>
                                            <span>Phone</span>

                                            <br>

                                            <strong>
                                                <a href="tel:123-456-789">123-456-789</a>
                                            </strong>
                                        </p>

                                        <p>
                                            <span>Mobile phone</span>

                                            <br>

                                            <strong>
                                                <a href="tel:456789123">456789123</a>
                                            </strong>
                                        </p>

                                        <p>

                                            <span>Email</span>

                                            <br>

                                            <strong>
                                                <a href="mailto:john@carsales.com">john@carsales.com</a>
                                            </strong>
                                        </p>
                                    </div>
                                </li>

                            </ul> <!-- / accordion -->
                        </div>
                    </form>
                </div>
            </div>
        <?php
        }
        ?>

    </div>
</section>