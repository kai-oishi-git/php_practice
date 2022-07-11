<?php 
function insertEmployee($name, $kana, $mail, $pass, $depId){
    $mysql = new mysqli('localhost', "root", "Pass", "php_practice");

    if (mysqli_connect_error()){
        die("データベースの接続に失敗しました");
        return;
    }
    $stmt = $mysql->prepare("INSERT INTO employee (nm_employee, kn_employee, mail, password, id_department) VALUES (?, ?, ?, ?, ?)");

    $stmt->bind_param('ssssd',$name, $kana, $mail, $pass, $depId);

    $stmt->execute();

    $stmt->close();
    $mysql->close();
}

function escape($inputText){
  return htmlspecialchars($inputText, ENT_QUOTES, 'UTF-8');
}

$name = escape($_POST['name']);
$kana = escape($_POST['kana']);
$mail = escape($_POST['mail']);
$pass = escape($_POST['pass']);
$depId = escape($_POST['depId']);

insertEmployee($name, $kana, $mail, $pass, $depId);

header("Location:createUser.php");
?>