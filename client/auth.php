<?php
if (isset($_POST['code'])) {
    require_once 'http.class.php';

    $http = new PPHTTP();
    $array = $_POST;
    $result = $http->httppost('http://server.oauth.org/token.php', $array);
    $assoc = json_decode($result, true);
    Header('Location: http://client.oauth.org/auth2.php?token=' . $assoc['access_token']);
    exit();
}

if (!isset($_GET['code']) || empty($_GET['code'])) {
    exit('非法的请求！');
} else {
    $code = $_GET['code'];
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>请求TOKEN -这是应用</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>
<body>
<h2>这是应用</h2>

<div style="margin: 20px; border: solid 1px #ccc;">
    <p>我已经获得了CODE，现在要请求TOKEN吗？</p>

    <p>附：CODE为：<?php echo $code ?></p>

    <form name="form1" method="post" action=''>

        <p>
            <label for="grant_type">grant_type:</label>
            <input type="text" name="grant_type" id="grant_type" value="authorization_code">
        </p>
        <p>
            <label for="client_id">client_id:</label>
            <input type="text" name="client_id" id="client_id" value="1000000012">
        </p>
        <p>
            <label for="client_secret">client_secret:</label>
            <input type="text" name="client_secret" id="client_secret" value="doeLO2vJOlnwhA4Cv08YAUoxzJRtWisK">
        </p>
        <p>
            <label for="code">code:</label>
            <input type="text" name="code" id="code" value="<?php echo $code ?>">
        </p>
        <p>
            <label for="redirect_uri">redirect_uri:</label>
            <input type="text" name="redirect_uri" id="redirect_uri" value="http://client.oauth.org/auth.php">
        </p>
        <p>
            <input type="submit" value="请求TOKEN">
        </p>
    </form>
</div>
</body>
</html>