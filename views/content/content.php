<section class="featured-places">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <span>SẢN PHẨM NỔI BẬT</span>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($dataNgauNhien as $dnn) {
            ?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <div class="thumb-img">
                                <img src="../views/image/product/<?php echo $dnn['urlImagePro'] ?>" alt="">
                            </div>
                        </div>
                        <div class="down-content">
                            <p>Hãng: <?php echo $dnn['nameBrand'] ?></p>
                            <p>Tên xe: <?php echo $dnn['nameProduct'] ?></p>
                            <p>Giá: <?php echo $dnn['priceProduct'] ?></p>
                            <div class="text-button">
                                <a href="car-details.html">Xem Thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>
</section>