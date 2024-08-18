<?php

function remove_port($ip) {
    // ポート番号が含まれている場合は取り除く
    if (strpos($ip, ':') !== false) {
        $ip = explode(':', $ip)[0];
    }
    return $ip;
}

// クライアントのIPアドレスを取得
$ip = !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
$ip = remove_port($ip);
// テンプレートにデータを渡して表示
$title = 'IPアドレス確認くん';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <p>IPアドレス: <?php echo $ip; ?></p>
</body>
</html>