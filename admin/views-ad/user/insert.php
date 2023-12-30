<section style="background-color: bisque; display: flex; justify-content: center; align-items: center;">
    <form action="index.php?controller=user&action=storeuser" method="POST" enctype="multipart/form-data">
        <table>
            <thead>
                <span class="text-uppercase">form thêm người dùng</span>
            </thead>
            <tbody>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>
                        <label for="name">Tên Đăng Nhập</label>
                    </td>
                    <td>&nbsp;</td>
                    <td>
                        <input type="text" id="name" name="DH52003760_tenuser" required>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>
                        <label for="country">Mật Khẩu</label>
                    </td>
                    <td>&nbsp;</td>
                    <td>
                        <input type="password" id="country" name="DH52003760_mkuser" required>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>
                        <label for="country">Số Điện Thoại: </label>
                    </td>
                    <td>&nbsp;</td>
                    <td>
                        <input type="text" id="country" name="DH52003760_sdtuser" required>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>
                        <label for="country">Email</label>
                    </td>
                    <td>&nbsp;</td>
                    <td>
                        <input type="text" id="country" name="DH52003760_mail" required>
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