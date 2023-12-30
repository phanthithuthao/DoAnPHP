<?php
$count = ceil(count($dataAll) / 3);
?>
<section class="featured-places">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <span class="text-uppercase">TẤT CẢ HÃNG</span>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($dataLimit as $dl) {
            ?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="featured-item">
                        <div class="thumb">
                            <div class="thumb-img">
                                <img src="./views/image/brand/<?php echo $dl['urlImageBrand'] ?>" alt="" width="300px" height="300px">
                            </div>
                        </div>
                        <div class="down-content">
                            <p>Tên Hãng: <?php echo $dl['nameBrand'] ?></p>
                            <p>Quốc Gia: <?php echo $dl['country'] ?></p>
                            <div class="text-button">
                                <a href="index.php?controller=hang&action=getspbyid&id=<?php echo $dl['idBrand'] ?>">Xem Thêm</a>
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
                <li><a href="index.php?controller=hang&action=getAll&page=<?php echo $i ?>"><?php echo $i ?></a></li>
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