<?php
function createEmployeeTable() {
    $mysql = new mysqli('localhost', "root", "Pass", "php_practice");

    if (mysqli_connect_error()){
        die("データベースの接続に失敗しました");
        return;
    }

    $query = "CREATE TABLE employee (
        id_employee int AUTO_INCREMENT,
        nm_employee varchar(50),
        kn_employee varchar(50),
        mail varchar(200),
        password varchar(20),
        id_department int
        )AUTO_INCREMENT = 10000;";

    $stmt = $mysql->prepare($query);
    $stmt->execute();
    
    $mysql->close();
}
?>