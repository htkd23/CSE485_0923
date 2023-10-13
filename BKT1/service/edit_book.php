<?php
// Lấy id sách từ tham số truyền vào
$id = $_GET['id'];

// Thực hiện lấy thông tin sách từ cơ sở dữ liệu bằng PDO

// Kết nối đến cơ sở dữ liệu
$host = 'localhost';
$dbName = 'quanlythuvien';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbName", $username, $password);

    // Chuẩn bị truy vấn SQL
    $sql = "SELECT * FROM books WHERE id = ?";
    $stmt = $pdo->prepare($sql);

    // Thực thi truy vấn với giá trị tham số
    $stmt->execute([$id]);

    // Lấy thông tin sách
    $book = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Quản lý thư viện - Chỉnh sửa thông tin sách</title>
</head>
<body>
    <h1>Chỉnh sửa thông tin sách</h1>
    <form method="POST" action="update_book.php">
        <input type="hidden" name="id" value="<?php echo $book['id']; ?>">
        <label>Tên sách:</label>
        <input type="text" name="tenSach" value="<?php echo $book['tenSach']; ?>" required><br><br>
        <label>Năm xuất bản:</label>
        <input type="number" name="namXuatBan" value="<?php echo $book['namXuatBan']; ?>" required><br><br>
        <label>Tác giả:</label>
        <select name="tacGiaId" required>
            <?php foreach ($authors as $author) { ?>
                <option value="<?php echo $author['id']; ?>" <?php if ($author['id'] == $book['tacGiaId']) echo 'selected'; ?>><?php echo $author['tenTacGia']; ?></option>
            <?php } ?>
        </select><br><br>
        <input type="submit" value="Lưu">
    </form>
</body>
</html>