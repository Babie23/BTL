<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <title>Document</title>
    </head>
    <div class="container mt-5">
            <div class="d-flex justify-content-between">
                <a href="Design.php" class="btn btn-info">Thêm mới</a>
            </div>
            <h1 class="mb-4 text-center">DANH MỤC SẢN PHẨM</h1>
            <?php
                include("config.php");
                $sql = "SELECT * FROM SanPham";
                $result = mysqli_query($con, $sql);
            ?>
            <table class="table table-bordered table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Hình</th>
                        <th scope="col">Tên sữa</th>
                        <th scope="col">Trọng lượng</th>
                        <th scope="col">Đơn giá</th>
                        <th scope="col" colspan="2" class="text-center">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($data = mysqli_fetch_assoc($result)){?>
                    <tr class="border-bottom">
                        <td><img src="<?php echo $data['Hinh']; ?>" alt="Hình sản phẩm" style="width: 100px; height: 100px;"></td>
                        <td><?php echo $data["TenSua"] ?></td>
                        <td><?php echo $data["TrongLuong"] ?></td>
                        <td><?php echo $data["DonGia"] ?></td>
                        <td class="text-center"><a href="Edit.php?ID=<?php echo $data['ID']; ?>" class="btn btn-primary btn-sm">Sửa</a></td>
                        <td class="text-center"><a href="delete.php?ID=<?php echo $data['ID']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>