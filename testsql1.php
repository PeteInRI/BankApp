<!DOCTYPE html>
<html>
<body>
<h1>Application Status</h1>
<p>Authorized Use Only</p><br><br>
<p>Web site is up<p>
<?php
$servername = "jwu-bankapp-server.mysql.database.azure.com";
$username = "ogvxwnfife";
$password = "tX24DD$ss468";
$dbname = "jwu-bankapp-database";

echo " PHP is working";

$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "/var/www/html/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, 'jwu-bankapp-server.mysql.database.azure.com', 'ogvxwnfife', 'tX24DD$ss468', 'jwu-bankapp-database', 3306, MYSQLI_CLIENT_SSL);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$conn = null;

?>
<br><br><a id="querytest" href="testquery.php">Run Test Query</a><br><br>
<br><a id="exit" href="index.html">Exit Test Page</a><br>
</body>
</html>