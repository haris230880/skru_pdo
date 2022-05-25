<?php
include('./database.php');

$stm = $db_con->prepare("UPDATE members SET name = :name, surname = :surname, username = :username WHERE id = :id");
$stm->bindParam("name", $name, PDO::PARAM_STR);
$stm->bindParam("surname", $surname, PDO::PARAM_STR);
$stm->bindParam("username", $username, PDO::PARAM_STR);
$stm->bindParam("id", $id, PDO::PARAM_INT);


$id = 2;
$name = "Sakarin";
$surname = "Nakomah";
$username = "oo.n";
 
$result = $stm->execute();
if($result){
   echo "<script>alert(`ปรับปรุงข้อมูลได้สำเร็จ`)</script>";
}
else{
   echo "<script>alert(`เกิดข้อผิดพลาดระหว่างปรับปรุงข้อมูล`)</script>";
}