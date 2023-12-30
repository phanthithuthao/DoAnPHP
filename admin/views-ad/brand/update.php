<section style="background-color: bisque; display: flex; justify-content: center; align-items: center;">
    <?php
    foreach ($dataBrand as $db) {
    ?>
        <form action="index.php?controller=brand&action=updatehang" method="POST" enctype="multipart/form-data">
            <table>
                <thead>
                    <span class="text-uppercase">form sửa hãng</span>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <label for="idbrand">Mã Hãng:</label>
                        </td>
                        <td>&nbsp;</td>
                        <td>
                            <input type="text" id="idbrand" name="DH52003760_mahang" value="<?php echo $db['idBrand'] ?>" required readonly />
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="name">Tên Hãng:</label>
                        </td>
                        <td>&nbsp;</td>
                        <td>
                            <input type="text" id="name" name="DH52003760_tenhang" value="<?php echo $db['nameBrand'] ?>" required />
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="image">Ảnh:</label>
                        </td>
                        <td>&nbsp;</td>
                        <td>
                            <img src="../views/image/brand/<?php echo $db['urlImageBrand'] ?>" alt="" width="150px" height="150px" />
                            <input type="file" id="image" name="DH52003760_anh" /><br>

                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="country">Quốc Gia:</label>
                        </td>
                        <td>&nbsp;</td>
                        <td>
                            <input type="text" id="country" name="DH52003760_quocgia" value="<?php echo $db['country'] ?>" required />
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center">
                            <a href="">
                                <button>Thêm</button>
                            </a>
                        </td>
                    </tr>
                </tbody>

            </table>
        </form>
    <?php
    }
    ?>

</section>