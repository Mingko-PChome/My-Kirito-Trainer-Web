<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST')
{
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    exit;
}

$input = file_get_contents('php://input');
$data = json_decode($input, true);
if (!$data)
{
    header($_SERVER['SERVER_PROTOCOL'] . ' 400 Bad Request');
    exit;
}

$file = '/home/wujidadi/workspaces/MyKirito/storage/configs/Players.json';
$json = json_encode($data, 448);
file_put_contents($file, $json);

shell_exec('export LANG=C.UTF-8;  php /home/wujidadi/workspaces/MyKirito/updatetoken');

echo '設定已覆寫！';
