<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>停止所有自動腳本</title>
<?php

require_once 'storage/token.php';

if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) || $_SERVER['PHP_AUTH_USER'] !== HTTP_USERNAME || $_SERVER['PHP_AUTH_PW'] !== HTTP_PASSWORD)
{
    header('www-authenticate: Basic realm="Wujidadi\'s MyKirito Trainer"');
    header($_SERVER['SERVER_PROTOCOL'] . ' 401 Unauthorized');

?>
</head>
<body>
</body>
</html><?php

    exit;
}
else
{
    require_once 'lib/helpers.php';

?>
</head>
<body>
    <pre><?php

require_once 'lib/helpers.php';

$output = recoverCliOutput(shell_exec('php /home/wujidadi/MyKiritoCommands/KillAutoProcess'));
echo $output

?></pre>
</body>
</html><?php

}

?>