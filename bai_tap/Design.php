<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Thêm sản phẩm</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="Hinh">Hình</label>
                <input type="text" class="form-control" id="Hinh" name="Hinh" required placeholder="Nhập vào hình ( định dạng và đường dẫn)">
            </div>
            <div class="form-group">
                <label for="TenSua">Tên sữa</label>
                <input type="text" class="form-control" id="TenSua" name="TenSua" required placeholder="Nhập vào tên sữa">
            </div>
            <div class="form-group">
                <label for="TrongLuong">Trọng lượng</label>
                <input type="number" class="form-control" id="TrongLuong" name="TrongLuong" required placeholder="Nhập vào trọng lượng">
            </div>
            <div class="form-group">
                <label for="DonGia">Đơn giá</label>
                <input type="number" step="0.001" class="form-control" id="DonGia" name="DonGia" required placeholder="Nhập vào đơn giá">
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Thêm</button>
                <button type="reset" class="btn btn-secondary">Nhập lại</button>
                <a href="Display.php" class="btn btn-info">Hiển thị</a>
            </div>
        </form>
    </div>
</body>
</html>

<?php
if (!empty($_POST)) {
    try {
        $Hinh = $_POST['Hinh'];   
        $TenSua = $_POST['TenSua'];
        $TrongLuong = $_POST['TrongLuong'];
        $DonGia = $_POST['DonGia'];
        
        include("config.php");
        $sql = "INSERT INTO SanPham (Hinh, TenSua, TrongLuong, DonGia) VALUES ('$Hinh','$TenSua','$TrongLuong','$DonGia')";
        
        if (mysqli_query($con, $sql)) {
            echo "<div class='alert alert-success text-center'>Thêm mới thành công</div>";
        } else {
            echo "<div class='alert alert-danger text-center'>Error: ". $sql. "<br>". mysqli_error($con) . "</div>";
        }
    } catch (Exception $e) {
        echo "<div class='alert alert-danger text-center'>Thất bại</div>";
    }
}
?>
