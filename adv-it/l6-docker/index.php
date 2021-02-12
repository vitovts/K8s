<?php
$ip_server_out = $_SERVER['SERVER_NAME'];
$ip_server_in = $_SERVER['SERVER_ADDR'];
$ip_host_user = $_SERVER['REMOTE_HOST'];


echo "<h1>Hello puzzle_ns from K8s!)</h1></br>";
echo "<h2>IP (DNS) : $ip_server_out</h2></br>";
echo "<h2>IP local : $ip_server_in</h2></br>";
echo "<h2>IP host user : $ip_host_user</h2></br>";


echo "Made by <front color=blue>WS+puzzle_ns";

?>