<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_db_mmsp135b = "test.35isalive.com";
$database_db_mmsp135b = "mmsp135bmbc";
$username_db_mmsp135b = "kialam";
$password_db_mmsp135b = "c4lif0rni4";
$db_mmsp135b = mysql_pconnect($hostname_db_mmsp135b, $username_db_mmsp135b, $password_db_mmsp135b) or trigger_error(mysql_error(),E_USER_ERROR); 
?>