<!DOCTYPE html>
<html>
<head>
    <title>Quản lý thư viện - Danh sách sách và tác giả</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <h1>Danh sách sách</h1>
    <table>
        <tr>
            <th>Tên sách</th>
            <th>Năm xuất bản</th>
            <th>Tác giả</th>
            <th>Thao tác</th>
        </tr>
        <?php foreach ($Sach as $book) { ?>
        <tr>
            <td><?php echo $book['tenSach']; ?></td>
            <td><?php echo $book['namXuatBan']; ?></td>
            <td><?php echo $book['tenTacGia']; ?></td>
            <td>
                <a href="edit_book.php?id=<?php echo $book['id']; ?>">Chỉnh sửa</a>
                <a href="delete_book.php?id=<?php echo $book['id']; ?>">Xóa</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <a href="add_book.php">Thêm sách</a>

    <h1>Danh sách tác giả</h1>
    <table>
        <tr>
            <th>Tên tác giả</th>
            <th>Quốc tịch</th>
            <th>Thao tác</th>
        </tr>
        <?php foreach ($author as $author) { ?>
        <tr>
            <td><?php echo $author['tenTacGia']; ?></td>
            <td><?php echo $author['quocTich']; ?></td>
            <td>
                <a href="edit_author.php?id=<?php echo $author['id']; ?>">Chỉnh sửa</a>
                <a href="delete_author.php?id=<?php echo $author['id']; ?>">Xóa</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <a href="add_author.php">Thêm tác giả</a>
</body>
</html>