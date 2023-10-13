<?php
require_once 'database.php';

class Book
{
    public static function getAllBooks()
    {
        global $db;
        $query = "SELECT Sach.id, Sach.tenSach, Sach.namXuatBan, TacGia.tenTacGia 
                  FROM Sach 
                  INNER JOIN TacGia ON Sach.idTacGia = TacGia.id";
        $stmt = $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function addBook($tenSach, $namXuatBan, $idTacGia)
    {
        global $db;
        $query = "INSERT INTO Sach (tenSach, namXuatBan, idTacGia)
                  VALUES (:tenSach, :namXuatBan, :idTacGia)";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':tenSach', $tenSach);
        $stmt->bindParam(':namXuatBan', $namXuatBan);
        $stmt->bindParam(':idTacGia', $idTacGia);
        return $stmt->execute();
    }

    public static function getBookById($id)
    {
        global $db;
        $query = "SELECT Sach.id, Sach.tenSach, Sach.namXuatBan, TacGia.tenTacGia 
                  FROM Sach 
                  INNER JOIN TacGia ON Sach.idTacGia = TacGia.id 
                  WHERE Sach.id = :id";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function updateBook($id, $tenSach, $namXuatBan, $idTacGia)
    {
        global $db;
        $query = "UPDATE Sach 
                  SET tenSach = :tenSach, namXuatBan = :namXuatBan, idTacGia = :idTacGia 
                  WHERE id = :id";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':tenSach', $tenSach);
        $stmt->bindParam(':namXuatBan', $namXuatBan);
        $stmt->bindParam(':idTacGia', $idTacGia);
        return $stmt->execute();
    }

    public static function deleteBook($id)
    {
        global $db;
        $query = "DELETE FROM Sach WHERE id = :id";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
?>