<?php
// 获取客户端IP
$ip = $_SERVER['HTTP_X_FORWARDED_FOR'] ?? $_SERVER['REMOTE_ADDR'];
$date = date('Y-m-d H:i:s');

// 写入日志文件
file_put_contents('ip_log.txt', "$date - IP: $ip\n", FILE_APPEND);

// 可选：输出IP（用于测试）
echo "您的IP已被记录：$ip";
?>
