<?php
    require "view/template/header.php";
?>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <a class="btn btn-primary" href="index.php?controller=employee&action=index">Chi tiết</a>
                    </div>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Mã độc giả </th>
                            <th scope="col">Họ tên</th>
                            <th scope="col">Gioi tinh</th>
                            <th scope="col">NĂM SINH</th>
                            <th scope="col">ngaycapthe</th>
                            <th scope="col">ngayhethan</th>
                            <th scope="col">diachi</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach($users as $row){
                        ?>
                            <tr>
                                <th scope="row"><?php echo $row['madg'];?></th>
                                <td><?php echo $row['hovaten']; ?></td>
                                <td><?php echo $row['gioitinh']; ?></td>
                                <td><?php echo $row['namsinh']; ?></td>
                                <td><?php echo $row['ngaycapthe']; ?></td>
                                <td><?php echo $row['ngayhethan']; ?></td>
                                <td><?php echo $row['diachi']; ?></td>
                            </tr>
                        <?php
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
<?php
    require "view/template/footer.php";
?>