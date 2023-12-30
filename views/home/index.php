<section class="featured-places">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <span class="text-uppercase">SẢN PHẨM NỔI BẬT</span>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($dataRandom as $dr) {
            ?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <div class="thumb-img">
                                <img src="./views/image/product/<?php echo $dr['urlImagePro'] ?>" alt="" width="300px" height="300px">
                            </div>
                        </div>
                        <div class="down-content">
                            <p>Hãng: <?php echo $dr['nameBrand'] ?></p>
                            <p>Tên xe: <?php echo $dr['nameProduct'] ?></p>
                            <p>Giá: <?php echo $dr['priceProduct'] ?></p>
                            <div class="text-button">
                                <a href="index.php?controller=sanpham&id=<?php echo $dr['idProduct'] ?>&action=getID">Xem Thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
        <div class="row" >
            <div class="col-md-12" style="display: flex; justify-content: center; align-items: center;">
                <div class="btn btn-info">
                    <a href="index.php?controller=sanpham&action=getAll" class="text-uppercase" style="text-decoration: none; color: azure;">tất cả sản phẩm</a>
                </div>
            </div>
        </div>

    </div>
</section>