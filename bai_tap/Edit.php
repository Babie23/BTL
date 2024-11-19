<?php
include("config.php");

if (isset($_GET['ID'])) {
    $ID = $_GET['ID'];
    
    // Lấy thông tin khách hàng từ cơ sở dữ liệu
    $sql = "SELECT * FROM SanPham WHERE ID = '$ID'";
    $result = mysqli_query($con, $sql);
    $data = mysqli_fetch_assoc($result);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Hinh = $_POST['Hinh'];
    $TenSua = $_POST['TenSua'];
    $TrongLuong = $_POST['TrongLuong'];
    $DonGia = $_POST['DonGia'];
    
    // Cập nhật thông tin khách hàng
    $sql = "UPDATE SanPham SET Hinh='$Hinh', TenSua='$TenSua', TrongLuong='$TrongLuong', DonGia='$DonGia' WHERE ID='$ID'";
    
    if (mysqli_query($con, $sql)) {
        header("Location: Display.php"); 
        exit();
    } else {
        echo "<div class='alert alert-danger text-center'>Lỗi: " . mysqli_error($con) . "</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sửa khách hàng</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Sửa thông tin khách hàng</h2>
        <form method="POST">
            <div class="form-group">
                <label for="Hinh">Hình</label>
                <input type="text" class="form-control" id="Hinh" name="Hinh" value="<?php echo $data['Hinh']; ?>" required>
            </div>
            <div class="form-group">
                <label for="TenSua">Tên sữa</label>
                <input type="text" class="form-control" id="TenSua" name="TenSua" value="<?php echo $data['TenSua']; ?>" required>
            </div>
            <div class="form-group">
                <label for="TrongLuong">Trọng lượng</label>
                <input type="number" class="form-control" id="TrongLuong" name="TrongLuong" value="<?php echo $data['TrongLuong']; ?>" required>
            </div>
            <div class="form-group">
                <label for="DonGia">Đơn giá</label>
                <input type="number" step="0.001" class="form-control" id="DonGia" name="DonGia" value="<?php echo $data['DonGia']; ?>" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                <a href="Display.php" class="btn btn-secondary">Quay lại</a>
            </div>
        </form>
    </div>
</body>
</html>
