<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Đăng Nhập</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="username">Tên đăng nhập</label>
                <input type="text" class="form-control" id="username" name="username" required placeholder="Nhập tên đăng nhập">
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" class="form-control" id="password" name="password" required placeholder="Nhập mật khẩu">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Đăng Nhập</button>
        </form>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include("config.php");

        // Lấy dữ liệu từ form
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Kiểm tra trong cơ sở dữ liệu
        $sql = "SELECT * FROM a WHERE Username = '$username' AND Password = '$password'";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) > 0) {
            // Nếu có kết quả, chuyển hướng đến Display.php
            header("Location: Display.php");
            exit();
        } else {
            // Hiển thị thông báo lỗi nếu đăng nhập không thành công
            echo "<div class='alert alert-danger text-center mt-3'>Tên đăng nhập hoặc mật khẩu không đúng</div>";
        }
    }
    ?>
</body>
</html>
