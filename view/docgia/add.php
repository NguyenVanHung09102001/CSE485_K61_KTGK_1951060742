<?php
    require "view/template/header.php";
?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Thêm người mượn </h2>
                    <div style="color: red">
                        <?php echo $error; ?>
                    </div>
                </div>

                <form method="post" action="">
                    Nhập họ tên :
                    <input type="text" name="hovaten" value="" />
                    <br />
                    Nhập giới tính :
                    <input type="text" name="gioitinh" value="" />
                    <br />
                    Nhập năm sinh :
                    <input type="text" name="namsinh" value="" />
                    <br />
                    Nhập ngày cấp thẻ  :
                    <input type="text" name="ngaycapthe" value="" />
                    <br />
                    Nhập ngày ngay hết hạn  :
                    <input type="text" name="ngayhethan" value="" />
                    <br />
                    Nhập Địa chỉ  :
                    <input type="text" name="diachi" value="" />
                    <br />
                    <input type="submit" name="btnSave" value="Save" />
                </form>
            </div>
        </div>
    </main>
<?php
    require "view/template/footer.php";
?>