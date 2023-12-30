<section style="background-color: bisque; display: flex; justify-content: center; align-items: center;">
    <form action="index.php?controller=brand&action=storehang" method="POST" enctype="multipart/form-data">
        <table>
            <thead>
                <span class="text-uppercase">form thêm hãng</span>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <label for="idbrand">Mã Hãng:</label>
                    </td>
                    <td>&nbsp;</td>
                    <td>
                        <input type="text" id="idbrand" name="DH52003760_mahang" required>
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
                        <input type="text" id="name" name="DH52003760_tenhang" required>
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
                        <input type="file" id="image" name="DH52003760_anh" required accept=".png, .jpg, .jpeg">
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
                        <input type="text" id="country" name="DH52003760_quocgia" required>
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
</section>