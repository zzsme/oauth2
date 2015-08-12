<?php
if (!isset($_GET['result']) || empty($_GET['result'])) {
    exit('非法的请求！');
} else {
    $result = base64_decode($_GET['result']);
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>用户资料 -这是应用</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>

<h2>这是应用</h2>

<div style="margin: 20px; border: solid 1px #ccc;">
    <p class="para">我已经获得了用户资料</p>

    <p class="para">附：用户资料JSON为：</p>

    <p><?php print_r($result) ?></p>
</div>
</body>
</html>