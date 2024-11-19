<?php
include("config.php");

if (isset($_GET['ID'])) {
    $ID = $_GET['ID'];
    
    // Xóa khách hàng khỏi cơ sở dữ liệu
    $sql = "DELETE FROM SanPham WHERE ID = '$ID'";
    
    if (mysqli_query($con, $sql)) {
        $message = "<div class='alert alert-success text-center'>Xóa thành công</div>";
    } else {
        $message = "<div class='alert alert-danger text-center'>Lỗi: " . mysqli_error($con) . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Xóa khách hàng</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Xóa khách hàng</h2>
        <?php if (isset($message)) echo $message; ?>
        <div class="text-center mt-4">
            <a href="Display.php" class="btn btn-info">Quay lại danh sách</a>
        </div>
    </div>
</body>
</html>
