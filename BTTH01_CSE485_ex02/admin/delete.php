<?php
   
        $ma_tloai = $_GET['id'];
       
    try{
        $conn = new PDO("mysql:host=localhost;dbname=btth01_cse485","root","");
        
            $sql = "DELETE FROM theloai_data WHERE theloai_data.ma_tloai = $ma_tloai";
            $stmt = $conn -> prepare($sql);
            $stmt ->execute();
            header("Location:category.php");
           
    }
    catch(PDOException $e){
        $e ->getMessage();
    }