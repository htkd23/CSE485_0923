
<?php
// Lấy dữ liệu từ biểu mẫu
$tenSach = $_POST['tenSach'];
$namXuatBan = $_POST['namXuatBan'];
$tacGiaId = $_POST['tacGiaId'];

// Thực hiện lưu sách vào cơ sở dữ liệu bằng PDO

// Kết nối đến cơ sở dữ liệu
$host = 'localhost';
$dbName = 'quanlythuvien';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);

    // Chuẩn bị truy vấn SQL
    $sql = "INSERT INTO sach`(id`,`tenSach`,`namXuatBan`,`idTacGia`)VALUES('$id','$tenSach','$namXuatBan','$idTacGia')";
    $sql = "INSERT INTO tacgia`(id`, tenTacGia)VALUES('$id', '$tenTacGia')";

    $stmt = $pdo->prepare($sql);

    // Thực thi truy vấn với các giá trị tham số
    $stmt->execute([$tenSach, $namXuatBan, $tacGiaId]);

    // Chuyển hướng về trang danh sách sách
    header("Location: index.php");
    exit();
} catch (PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
}
?>