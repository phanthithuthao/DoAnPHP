<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <div class="row" style="display: flex;">
                        <div class="col-md-6">
                            <h6 class="text-white text-capitalize ps-3">Quản Lý Xe</h6>
                        </div>
                        <div class="col-md-6">
                            <a href="index.php?controller=product&action=insertsp">
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
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mã Xe</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tên Hãng</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tên Xe</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ảnh</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Động Cơ</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mã Lực</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Số Chỗ Ngồi</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Hộp Số</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Chiều Rộng</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Chiều Cao</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($dataSP as $dsp) {
                            ?>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center align-middle text-center">
                                                <h6 class="mb-0 text-sm"><?php echo $dsp['idProduct'] ?></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="">
                                        <p class="text-xs font-weight-bold mb-0"><?php echo $dsp['nameBrand'] ?></p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <p class="text-xs font-weight-bold mb-0"><?php echo $dsp['nameProduct'] ?></p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <img src="../views/image/product/<?php echo $dsp['urlImagePro'] ?>" alt="" width="120px" height="120px">
                                    </td>
                                    <td class="align-middle text-center">
                                        <p class="text-xs font-weight-bold mb-0"><?php echo $dsp['Engine'] ?></p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <p class="text-xs font-weight-bold mb-0"><?php echo $dsp['horsePower'] ?></p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <p class="text-xs font-weight-bold mb-0"><?php echo $dsp['seat'] ?></p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <p class="text-xs font-weight-bold mb-0"><?php echo $dsp['gearBox'] ?></p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <p class="text-xs font-weight-bold mb-0"><?php echo $dsp['width'] ?></p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <p class="text-xs font-weight-bold mb-0"><?php echo $dsp['height'] ?></p>
                                    </td>
                                    <td class="align-middle">
                                        <a href="index.php?controller=product&action=editsp&id=<?php echo $dsp['idProduct'] ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                            Sửa
                                        </a>
                                    </td>
                                    <td class="align-middle">
                                        <a href="index.php?controller=product&action=delete&id=<?php echo $dsp['idProduct'] ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
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