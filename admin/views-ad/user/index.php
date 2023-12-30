<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <div class="row" style="display: flex;">
                        <div class="col-md-6">
                            <h6 class="text-white text-capitalize ps-3">Quản Lý Người Dùng</h6>
                        </div>
                        <div class="col-md-6">
                            <a href="index.php?controller=user&action=insertuser">
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
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mã Người Dùng</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tên Đăng Nhập</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mật Khẩu</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SĐT</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Quyền</th>
                                <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($dataUser as $du) {
                            ?>
                                <tr>
                                    <td class="align-middle text-center">
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm"><?php echo $du['idUser'] ?></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0"><?php echo $du['userName'] ?></p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <p class="text-xs font-weight-bold mb-0"><?php echo $du['pass'] ?></p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <p class="text-xs font-weight-bold mb-0"><?php echo $du['phoneUser'] ?></p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <p class="text-xs font-weight-bold mb-0"><?php echo $du['emailUser'] ?></p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <?php
                                        if ($du['role'] == 1) {
                                        ?>
                                            <p class="text-xs font-weight-bold mb-0"><?php echo 'Người Quản Trị' ?></p>
                                        <?php
                                        } else {
                                        ?>
                                            <p class="text-xs font-weight-bold mb-0"><?php echo 'Khách Vip' ?></p>
                                        <?php
                                        }
                                        ?>

                                    </td>
                                    <td class="align-middle">
                                        <a href="index.php?controller=user&action=deleteuser&id=<?php echo $du['idUser'] ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
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