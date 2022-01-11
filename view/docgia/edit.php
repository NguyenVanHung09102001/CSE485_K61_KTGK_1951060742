<?php
    require "view/template/header.php";
?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Sửa thông tin gửi đăng ký</h2>
                    <form action="process-update-employee.php" method="post">
                </div>
                <form action="" method="post">
                    <!-- <div class="form-group">
                    <label for="txtbdName">Họ tên</label>
                    <input type="tel" class="form-control" id="txtbdName" name="bdName" placeholder="Nhập số máy bàn" value="<?php echo $row['sodt_coquan']; ?>">
                    </div> -->
                    Họ tên:
                    <input type="text" name="hovaten"
                     value="<?php echo isset($_POST['name']) ? $_POST['name'] : $book['name']?>"
                    />
                    <br />

                    Giới tính:
                    <input type="text" name="gioitinh"
                     value="<?php echo isset($_POST['name']) ? $_POST['name'] : $book['name']?>"
                    />
                    <br />

                    Ngày sinh:
                    <input type="text" name="namsinh"
                     value="<?php echo isset($_POST['name']) ? $_POST['name'] : $book['name']?>"
                    />
                    <br />

                    Nhóm máu:
                    <input type="text" name="ngaycapthe"
                     value="<?php echo isset($_POST['name']) ? $_POST['name'] : $book['name']?>"
                    />
                    <br />

                    Ngày đăng ký:
                    <input type="text" name="ngayhethan"
                     value="<?php echo isset($_POST['name']) ? $_POST['name'] : $book['name']?>"
                    />
                    <br />

                    Số điện thoại:
                    <input type="text" name="diachi"
                     value="<?php echo isset($_POST['name']) ? $_POST['name'] : $book['name']?>"
                    />
                    <br />

                    <input type="submit" name="submit" value="Update" />
                </form>
            </div>
        </div>
    </main>
<?php
    require "view/template/footer.php";
?>