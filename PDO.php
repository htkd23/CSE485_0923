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
        include "admin/header.php";
        try{
            $conn = new PDO("mysql:host=localhost;dbname=btth01_cse485","root","");
            $sql = "SELECT * FROM theloai_data";
            $stmt = $conn -> prepare($sql);
            $stmt -> execute();
            $theloai_data = $stmt ->fetchAll();
        }
        catch(PDOException $e){
            $e ->getMessage();
        }
        if (!empty($conn)) {
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
            <?php
                foreach ($theloai_data as $theloai){
            ?>
            <tr>
            <th scope="row"><?php echo $theloai['ma_tloai'];?></th>
            <td><?php echo $theloai['ten_tloai'];?></td>
            <td><a href="category_edit.php"><i class="bi bi-pencil-square"></i></a></td>
            <td><a href=""><i class="bi bi-trash-fill"></i></a></td>
            <td><a href="category_edit.php?id=<?php echo $theloai['ma_tloai']; ?>"><i class="bi bi-pencil-square"></i></a></td>
            <td><a href="delete.php?id=<?php echo $theloai['ma_tloai']; ?>"><i class="bi bi-trash-fill"></i></a></td>
            </tr>
            <?php }
             ?>
        </tbody>
        </table>
    </div>
    <?php
        }
        else echo "Loi ket noi";
        include "admin/footer.php";
        ?>
</body>
</html>