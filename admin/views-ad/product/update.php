<section style="background-color: bisque; display: flex; justify-content: center; align-items: center;">
    <?php
    foreach ($dataSP as $dsp) {
    ?>
        <form action="index.php?controller=product&action=updatesp" method="POST" enctype="multipart/form-data">
            <table>
                <thead>
                    <span class="text-uppercase">form sửa thông tin xe</span>
                </thead>
                <tbody>
                    <tr>
                        <td><label for="idbrand">Loại Hãng:</label></td>
                        <td>&nbsp;</td>
                        <td>
                            <select name="DH52003760_mahang" id="">
                                <?php
                                foreach ($dataHang as $dh) {
                                    $selected = '';
                                    if ($dh['idBrand'] == $dsp['idBrand'])
                                        $selected = 'selected';
                                ?>
                                    <option value="<?php echo $dh['idBrand'] ?>" <?php echo $selected ?>><?php echo $dh['nameBrand'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="idbrand">Mã Xe:</label>
                        </td>
                        <td>&nbsp;</td>
                        <td>
                            <input type="text" id="idbrand" name="DH52003760_maxe" value="<?php echo $dsp['idProduct'] ?>" required readonly />
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="name">Tên Xe:</label>
                        </td>
                        <td>&nbsp;</td>
                        <td>
                            <input type="text" id="name" name="DH52003760_tenxe" value="<?php echo $dsp['nameProduct'] ?>" required />
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="price">Giá:</label>
                        </td>
                        <td>&nbsp;</td>
                        <td>
                            <input type="number" id="price" name="DH52003760_giaxe" value="<?php echo $dsp['priceProduct'] ?>" required />
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
                            <img src="../views/image/product/<?php echo $dsp['urlImagePro'] ?>" alt="" width="150px" height="150px">
                            <input type="file" id="image" name="DH52003760_anh" accept=".png, .jpg, .jpeg" />
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>

                    <tr>
                        <td>
                            <label for="engine">Động Cơ:</label>
                        </td>
                        <td>&nbsp;</td>
                        <td>
                            <input type="text" id="engine" name="DH52003760_dcxe" value="<?php echo $dsp['Engine'] ?>" required />
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="hp">Mã Lực:</label>
                        </td>
                        <td>&nbsp;</td>
                        <td>
                            <input type="text" id="hp" name="DH52003760_mlxe" value="<?php echo $dsp['horsePower'] ?>" required />
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="seat">Số Chỗ Ngồi:</label>
                        </td>
                        <td>&nbsp;</td>
                        <td>
                            <input type="number" id="seat" name="DH52003760_cho" value="<?php echo $dsp['seat'] ?>" required />
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="hs">Hộp Số:</label>
                        </td>
                        <td>&nbsp;</td>
                        <td>
                            <input type="text" id="hs" name="DH52003760_hopso" value="<?php echo $dsp['gearBox'] ?>" required />
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="cr">Chiều Rộng:</label>
                        </td>
                        <td>&nbsp;</td>
                        <td>
                            <input type="number" id="cr" name="DH52003760_cr" value="<?php echo $dsp['width'] ?>" required />
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="cc">Chiều Cao:</label>
                        </td>
                        <td>&nbsp;</td>
                        <td>
                            <input type="number" id="cc" name="DH52003760_cc" value="<?php echo $dsp['height'] ?>" required />
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