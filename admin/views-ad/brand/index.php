<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <div class="row" style="display: flex;">
                        <div class="col-md-6">
                            <h6 class="text-white text-capitalize ps-3">Quản Lý Hãng</h6>
                        </div>
                        <div class="col-md-6">
                            <a href="index.php?controller=brand&action=inserthang">
                                <button type="submit">Thêm</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mã Hãng</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tên Hãng</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ảnh</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Quốc Gia</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($dataBrand as $db) {
                            ?>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm"><?php echo $db['idBrand'] ?></h6>
                                                <p class="text-xs text-secondary mb-0"><?php echo $db['idBrand'] ?>@cardealer.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0"><?php echo $db['nameBrand'] ?></p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <img src="../views/image/brand/<?php echo $db['urlImageBrand'] ?>" alt="" width="100px" height="100px">
                                    </td>
                                    <td class="align-middle text-center">
                                        <p class="text-xs font-weight-bold mb-0"><?php echo $db['country'] ?></p>
                                    </td>
                                    <td class="align-middle">
                                        <a href="index.php?controller=brand&action=edithang&id=<?php echo $db['idBrand'] ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                            Sửa
                                        </a>
                                    </td>
                                    <td class="align-middle">
                                        <a href="index.php?controller=brand&action=delete&id=<?php echo $db['idBrand'] ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                            Xoá
                                        </a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>