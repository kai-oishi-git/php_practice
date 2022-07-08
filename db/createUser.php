<?php 
    require_once 'CreateTable.php';
    createEmployeeTable();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>タイトル</title>
</head>
<body>
    <from action="post">
        <table>
            <tr>
                <td>社員名 : </td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>社員フリガナ : </td>
                <td><input type="text" name="kana"></td>
            </tr>
            <tr>
                <td>メールアドレス : </td>
                <td><input type="mail" name="mail"></td>
            </tr>
            <tr>
                <td>パスワード : </td>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr>
                <td>部署id : </td>
                <td><input type="number" name="name"></td>
            </tr>
        </table>
    </from>
</body>