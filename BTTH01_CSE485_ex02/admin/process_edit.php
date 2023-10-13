<?php
    if(isset($_POST['submit'])){
        $ma_tloai = $_POST['ma_tloai'];
        $ten_tloai = $_POST['ten_tloai'];

    
    try{
        $conn = new PDO("mysql:host=localhost;dbname=btth01_cse485","root","");
        if(!empty($ten_tloai)){
            $sql1 = "DELETE FROM theloai_data WHERE theloai_data.ma_tloai = $ma_tloai";
            $stmt1 = $conn -> prepare($sql1);
            $stmt1 ->execute();
            $sql = "INSERT INTO theloai_data VALUES ($ma_tloai,'$ten_tloai')";
            $stmt = $conn -> prepare($sql);
            // $stmt->bindParam(':ten_tloai', $ten_tloai);
            $stmt -> execute();

            if ($stmt->rowCount() > 0) {
                header("Location:category.php");
            } else {
                echo "Thêm mới thể loại thất bại!";
            }
        }
        else echo "Vui lòng viết tên thể loại";
    }
    catch(PDOException $e){
        $e ->getMessage();
    }
}
?>