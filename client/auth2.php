<?php
if (isset($_POST['oauth_token'])) {
    require_once 'http.class.php';

    $http = new PPHTTP();
    $array = $_POST;
    $result = $http->httppost('http://server.oauth.org/userinfo_api.php', $array);
    $pjson = base64_encode($result);
    Header('Location:http://client.oauth.org/auth3.php?result=' . $pjson);
    exit();
}

if (!isset($_GET['token']) || empty($_GET['token'])) {
    exit('非法的请求！');
} else {
    $token = $_GET['token'];
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>请求用户资料 -这是应用</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="style.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>

<h2>这是应用</h2>

<div style="margin: 20px; border: solid 1px #ccc;">
    <p>我已经获得了TOKEN，现在要请求用户资料吗？</p>

    <p>附：TOKEN为：<?php echo $token ?></p>

    <form name="form1" method="post" action=''>
        <p><input type="submit" value="请求用户资料"></p>
        <input type="hidden" name="oauth_token" id="oauth_token" value="<?php echo $token ?>">
    </form>
</div>
</body>
</html>