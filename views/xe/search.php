<?php
$count = ceil(count($dataTK) / 6);
?>
<section class="featured-places">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <span class="text-uppercase">Kết quả tìm kiếm</span>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($dataTK as $dtk) {
            ?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <div class="thumb-img">
                                <img src="./views/image/product/<?php echo $dtk['urlImagePro'] ?>" alt="" width="300px" height="300px">
                            </div>
                        </div>
                        <div class="down-content">
                            <p>Hãng: <?php echo $dtk['nameBrand'] ?></p>
                            <p>Tên xe: <?php echo $dtk['nameProduct'] ?></p>
                            <p>Giá: <?php echo $dtk['priceProduct'] ?></p>
                            <div class="text-button">
                                <a href="index.php?controller=sanpham&id=<?php echo $dtk['idProduct'] ?>&action=getID">Xem Thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>
    <nav aria-label="Page navigation" style="display: flex; justify-content: center; align-items: center;">
        <ul class="pagination">
            <li>
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <?php
            for ($i = 1; $i <= $count; $i++) {
            ?>
                <li><a href="#"><?php echo $i ?></a></li>
            <?php
            }

            ?>
            <li>
                <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</section>