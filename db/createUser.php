<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>タイトル</title>
</head>
<body>
    <form action="createUserConfirm.php" method="post">
        <table>
            <tr>
                <td>社員名 : </td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td>社員フリガナ : </td>
                <td><input type="text" name="kana" required></td>
            </tr>
            <tr>
                <td>メールアドレス : </td>
                <td><input type="mail" name="mail" required></td>
            </tr>
            <tr>
                <td>パスワード : </td>
                <td><input type="password" name="pass" required></td>
            </tr>
            <tr>
                <td>部署id : </td>
                <td><input type="number" name="depId" required></td>
            </tr>
        </table>
        <input type="submit" value="送信">
    </from>
</body>