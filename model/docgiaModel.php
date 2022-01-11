<?php
    require_once 'config/db.php';

    class EmployeeModel{
        private $madg;
        private $hovaten;
        private $gioitinh;
        private $namsinh;
        private $ngaycapthe;
        private $ngayhethan;
        private $diachi;

        // Định nghĩa các phương thức để sau này nhận các thao tác tương ứng với các action
        public function getAlldg(){
            // B1. Khởi tạo kết nối
            $conn = $this->connectDb();
            // B2. Định nghĩa và thực hiện truy vấn
            $sql = "SELECT * FROM docgia";
            $result = mysqli_query($conn,$sql);

            // Tôi khai báo biến lưu kết quả trả về (dạng mảng)
            $arr_emps = [];
            // B3. Xử lý và (KO PHẢI SHOW KẾT QUẢ) TRẢ VỀ KẾT QUẢ
            if(mysqli_num_rows($result) > 0){
                // Lấy tất cả dùng mysqli_fetch_all
                $arr_emps = mysqli_fetch_all($result, MYSQLI_ASSOC); //Sử dụng MYSQLI_ASSOC để chỉ định lấy kết quả dạng MẢNG KẾT HỢP
            }

            return $arr_emps;
        }

        public function getmadg($madg = null) {
            $conn = $this->connectDb();
            $querySelect = "SELECT * FROM docgia WHERE id=$id";
            $results = mysqli_query($conn, $querySelect);
            $b = [];
            if (mysqli_num_rows($results) > 0) {
                $emps = mysqli_fetch_all($results, MYSQLI_ASSOC);
                $emp = $emps[0];
            }
            $this->closeDb($connection);
    
            return $emp;
        }

        public function Adddg($isEmps = []){
            // B1. Khởi tạo kết nối
            $conn = $this->connectDb();
            // B2. Định nghĩa và thực hiện truy vấn
            $sqlInsert = "INSERT INTO docgia(madg, hovaten,gioitinh,namsinh,ngaycapthe,ngayhethan,diachi)
            VALUES ('NUll', '{$isEmps['hovaten']}', '{$isEmps['gioitinh']}', '{$isEmps['namsinh']}', '{$isEmps['ngaycapthe']}', '{$isEmps['ngayhethan']}', '{$isEmps['diachi']}')";
            $isInsert = mysqli_query($conn,$sqlInsert);

            $this->closeDb($conn);

            return $isInsert;
        }

        public function Updatedg($row = []){
            // B1. Khởi tạo kết nối
            $conn = $this->connectDb();
            // B2. Định nghĩa và thực hiện truy vấn
            $sql3 = "UPDATE docgia SET hovaten = '{$row['hovaten']}',gioitinh = '{$row['gioitinh']}', namsinh = '{$row['namsinh']}', ngaycapthe = '{$row['ngaycapthe']}', ngayhethan = '{$row['ngayhethan']}', diachi = '{$row['diachi']}' WHERE madg = '{$row['madg']}'";
            $result3 = mysqli_query($conn,$sql3);

            $this->closeDb($conn);

            return $result3;
        }

        public function Deletedg($bdID = null){
            // B1. Khởi tạo kết nối
            $conn = $this->connectDb();
            // B2. Định nghĩa và thực hiện truy vấn
            $sql4 = "DELETE FROM docgia WHERE madg = '$madg'";
            $result4 = mysqli_query($conn,$sql4);

            $this->closeDb($conn);

            return $result4;
        }

        public function connectDb() {
            $connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
            if (!$connection) {
                die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
            }
    
            return $connection;
        }
    
        public function closeDb($connection = null) {
            mysqli_close($connection);
        }
    }


?>