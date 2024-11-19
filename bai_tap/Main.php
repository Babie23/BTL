<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh mục sản phẩm</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
    <div class="header">
    </div>
    
    <!-- Main Container -->
    <div class="main-container">
        <!-- Side Image Left -->
        <div class="sidebar">
            <p>Sản phẩm theo hãng sữa</p>
            <a href="#">Vinamilk</a><br>
            <a href="#">Nutifood</a><br>
            <a href="#">Abbott</a><br>
            <a href="#">Daisy</a><br>
            <a href="#">Dutch Lady</a><br>
            <a href="#">Dumex</a><br>
            <a href="#">Mead Johnson</a><br>
            <p>Sản phẩm theo loại</p>
            <a href="#">Sữa đặc</a><br>
            <a href="#">Sữa tươi</a><br>
            <a href="#">Sữa chua</a><br>
            <a href="#">Sữa bột</a><br>
        </div>

        <!-- Content Center -->
        <div class="content">
            <h3>DANH MỤC SẢN PHẨM</h3>
            <a href="Admin.php" class="btn btn-primary btn-sm">Admin</a>
            <?php
                include("config.php");
                $sql = "SELECT * FROM SanPham";
                $result = mysqli_query($con, $sql);
            ?>
            <table>
                <thead>
                    <tr>
                        <th>Hình</th>
                        <th style="width: 400px;">Tên sữa</th>
                        <th>Trọng lượng (gr)</th>
                        <th>Đơn giá (VNĐ)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($data = mysqli_fetch_assoc($result)){ ?>
                    <tr>
                        <td><img src="<?php echo $data['Hinh']; ?>" alt="Hình sản phẩm"></td>
                        <td style="width: 400px; text-align: left;"><?php echo $data["TenSua"] ?></td>
                        <td><?php echo $data["TrongLuong"] ?></td>
                        <td><?php echo number_format($data["DonGia"], 0, ',', '.'); ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- Side Image Right -->
        <div class="side-image">
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>© 2007 - 2008 Siêu thị sữa Happy Milk</p>
        <p>Địa chỉ: Số 1bis Đường Nguyễn Du Quận 1 TP.HCM - Điện thoại: (08) 8741258</p>
    </div>
</body>
</html>
