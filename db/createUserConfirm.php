<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>タイトル</title>
</head>
<body>
    <form action="InsertEmployee.php" method="post">
        <table>
            <tr>
                <td>社員名 : </td>
                <td><input type="text" name="name" value="<?php echo $_POST['name'];?>" readonly></td>
            </tr>
            <tr>
                <td>社員フリガナ : </td>
                <td><input type="text" name="kana" value="<?php echo $_POST['kana'];?>" readonly></td>
            </tr>
            <tr>
                <td>メールアドレス : </td>
                <td><input type="mail" name="mail" value="<?php echo $_POST['mail'];?>" readonly></td>
            </tr>
            <tr>
                <td>パスワード : </td>
                <td><input type="password" name="pass" value="<?php echo $_POST['pass'];?>" readonly></td>
            </tr>
            <tr>
                <td>部署id : </td>
                <td><input type="number" name="depId" value="<?php echo $_POST['depId'];?>" readonly></td>
            </tr>
        </table>
        <input type="submit" value="送信">
    </from>
</body>