<div class="container">
    <h1>Thông tin đăng ký lái thử</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Loại xe muốn lái thử</th>
                <th>Thời gian lái thử</th>
                <th>Ngày lái thử</th>
                <th>Địa điểm lái thử</th>
                <th>Ngày sinh</th>
                <th>Giới tính</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dataById as $row) : ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['car_type']; ?></td>
                    <td><?php echo $row['time']; ?></td>
                    <td><?php echo $row['ngay']; ?></td>
                    <td><?php echo $row['location']; ?></td>
                    <td><?php echo $row['dob']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>