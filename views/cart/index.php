<div class="container">
    <h1>Đăng ký lái thử xe</h1>
    <div class="alert alert-<?php echo isset($message) && $message != '' ? ($message == 'Đăng ký lái thử thành công' ? 'success' : 'danger') : ''; ?>">
        <?php echo isset($message) && $message != '' ? $message : ''; ?>
    </div>
    <form action="index.php?controller=testDriver&action=testDrive" method="post" style="flex-wrap: wrap; flex-direction: row; display: flex;">
        <div class="form-group flex" style="width: 50%;">
            <label for="name">Tên</label>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>
        <div class="form-group flex" style="width: 50%;">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" required>
        </div>
        <div class="form-group flex" style="width: 50%;">
            <label for="phone">Số điện thoại</label>
            <input type="tel" name="phone" class="form-control" id="phone" pattern="[0-9]{10}" minlength="10" maxlength="10" required>
        </div>
        <div class="form-group flex" style="width: 50%;">
            <label for="car_type">Loại xe muốn lái thử</label>
            <input type="text" name="car_type" class="form-control" id="car_type" value="<?php echo isset($product[0]['nameProduct']) ? $product[0]['nameProduct'] : ''; ?>" readonly>
        </div>
        <div class="form-group flex" style="width: 50%;">
            <label for="date">Ngày lái thử</label>
            <input type="date" name="date" class="form-control" id="date" min="<?php echo date('Y-m-d'); ?>" required>
        </div>

        <div class="form-group flex" style="width: 50%;">
            <label for="time">Thời gian lái thử</label>
            <input type="time" name="time" class="form-control" id="time" required>
        </div>
        
        <div class="form-group flex" style="width: 50%;">
            <label for="location">Địa điểm lái thử</label>
            <input type="text" name="location" class="form-control" id="location" required>
        </div>
        <div class="form-group flex" style="width: 50%;">
            <label for="dob">Ngày sinh</label>
            <input type="date" name="dob" class="form-control" id="datens" max="<?php echo date('Y-m-d'); ?>" required>
        </div>
        <div class="form-group flex" style="width: 50%;">
            <label for="gender">Giới tính</label>
            <select name="gender" class="form-control" id="gender" required>
                <option value="">Chọn giới tính</option>
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
            </select>
        </div>
         <div class="form-group flex" style="width: 50%;">
           
        </div>
     
        <button type="submit" name="btnTestDrive" class="btn btn-primary">Gửi</button>
    </form>
</div>
<script>
            const dateInput = document.getElementById('date');
            const timeInput = document.getElementById('time');

            timeInput.addEventListener('change', function() {
                const selectedDate = new Date(dateInput.value);
                const selectedTime = this.value;
                const currentDate = new Date();

                const selectedDateTime = new Date(selectedDate.getFullYear(), selectedDate.getMonth(), selectedDate.getDate(), selectedTime.split(':')[0], selectedTime.split(':')[1]);
                
                const minTime = new Date(selectedDate.getFullYear(), selectedDate.getMonth(), selectedDate.getDate(), 7, 0);
                const maxTime = new Date(selectedDate.getFullYear(), selectedDate.getMonth(), selectedDate.getDate(), 19, 0);

                if (selectedDateTime <= currentDate) {
                    alert('Thời gian lái thử phải lớn hơn thời điểm hiện tại.');
                    this.value = ''; // Xóa giá trị thời gian nếu không hợp lệ
                } else if (selectedDateTime < minTime || selectedDateTime > maxTime) {
                    alert('Vui lòng chọn thời gian từ 7 AM đến 7 PM và năm trong khoảng từ 7 AM đến 7 PM.');
                    this.value = ''; // Xóa giá trị thời gian nếu không hợp lệ
                }
            });
        </script>
         <script>
  
            const dateInputNs = document.getElementById('datens');
        
            dateInputNs.addEventListener('change', function() {
                const selectedDateNs = new Date(dateInputNs.value);
                const currentDate = new Date();
                const selectedDateTimeNs = new Date(selectedDateNs.getFullYear(), selectedDateNs.getMonth(), selectedDateNs.getDate());
        
                const ageDifferenceInMilliseconds = currentDate - selectedDateTimeNs;
                const ageDifferenceInYears = ageDifferenceInMilliseconds / (1000 * 60 * 60 * 24 * 365.25);
        
                if (ageDifferenceInYears < 18) {
                    alert('Ngày sinh phải lớn hơn 18 tuổi.');
                    dateInputNs.value = '';
                }
            });
        </script>