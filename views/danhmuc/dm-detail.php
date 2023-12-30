<section class="featured-places">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <span class="text-uppercase">TẤT CẢ SẢN PHẨM</span>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($dataId as $did) {
            ?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <div class="thumb-img">
                                <img src="./views/image/product/<?php echo $did['urlImagePro'] ?>" alt="" width="300px" height="300px">
                            </div>
                        </div>
                        <div class="down-content">
                            <p>Hãng: <?php echo $did['nameBrand'] ?></p>
                            <p>Tên xe: <?php echo $did['nameProduct'] ?></p>
                            <p>Giá: <?php echo $did['priceProduct'] ?></p>
                            <div class="text-button">
                                <a href="index.php?controller=sanpham&id=<?php echo $did['idProduct'] ?>&action=getID">Xem Thêm</a>
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