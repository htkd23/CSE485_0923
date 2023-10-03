<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>
    <?php
        include "header.php";
        ?>
    <div class="container">
    <a href="category_add.php"> <button type="submit" class="btn btn-success mt-5">Thêm mới</button></a>
    <table class="table mt-4">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Tên thể loại</th>
            <th scope="col">Sửa</th>
            <th scope="col">Xóa</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td><a href="category_edit.php"><i class="bi bi-pencil-square"></i></a></td>
            <td><a href=""><i class="bi bi-trash-fill"></i></a></td>
            </tr>
        </tbody>
        </table>
    </div>

    <?php
        include "footer.php";
        ?>
</body>
</html>