<?php
    if(isset($_POST['submit'])){
        $ten_tloai = $_POST['ten_tloai'];
    
    try{
        $conn = new PDO("mysql:host=localhost;dbname=btth01_cse485","root","");
        if(!empty($ten_tloai)){
            $sql = "INSERT INTO theloai_data(ten_tloai) VALUES ('$ten_tloai')";
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