<?php 
function insertEmployee($name, $kana, $mail, $pass, $depId){
    $mysql = new mysqli('localhost', "root", "Pass", "php_practice");

    if (mysqli_connect_error()){
        die("データベースの接続に失敗しました");
        return;
    }
    $stmt = $mysql->prepare("INSERT INTO employee (nm_employee, kn_employee, mail, password, id_department) VALUES (?, ?, ?, ?, ?)");

    $stmt->bind_param(1, $name);
    $stmt->bind_param(2, $kana);
    $stmt->bind_param(3, $mail);
    $stmt->bind_param(4, $pass);
    $stmt->bind_param(5, $depId);
}
?>