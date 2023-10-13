<!DOCTYPE html>
<html>
<head>
    <title>Quản lý thư viện - Thêm sách mới</title>
</head>
<body>
    <h1>Thêm sách mới</h1>
    <form method="POST" action="save_book.php">
        <label>Tên sách:</label>
        <input type="text" name="tenSach" required><br><br>
        <label>Năm xuất bản:</label>
        <input type="number" name="namXuatBan" required><br><br>
        <label>Tác giả:</label>
        <select name="tacGiaId" required>
            <?php foreach ($authors as $author) { ?>
                <option value="<?php echo $author['id']; ?>"><?php echo $author['tenTacGia']; ?></option>
            <?php } ?>
        </select><br><br>
        <input type="submit" value="Lưu">
    </form>
</body>
</html>