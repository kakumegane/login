<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "POSTリクエストが受信されました。";
    echo "メールアドレス: " . $_POST['email'];
    echo "パスワード: " . $_POST['password'];
}
?>
