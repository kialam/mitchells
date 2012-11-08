<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$maxRows_Quotes = 2;
$pageNum_Quotes = 0;
if (isset($_GET['pageNum_Quotes'])) {
  $pageNum_Quotes = $_GET['pageNum_Quotes'];
}
$startRow_Quotes = $pageNum_Quotes * $maxRows_Quotes;

mysql_select_db($database_db_mmsp135b, $db_mmsp135b);
$query_Quotes = "SELECT quote_author, quote_text FROM klam_quotes WHERE quote_page = 'home' ORDER BY quote_date DESC";
$query_limit_Quotes = sprintf("%s LIMIT %d, %d", $query_Quotes, $startRow_Quotes, $maxRows_Quotes);
$Quotes = mysql_query($query_limit_Quotes, $db_mmsp135b) or die(mysql_error());
$row_Quotes = mysql_fetch_assoc($Quotes);

if (isset($_GET['totalRows_Quotes'])) {
  $totalRows_Quotes = $_GET['totalRows_Quotes'];
} else {
  $all_Quotes = mysql_query($query_Quotes);
  $totalRows_Quotes = mysql_num_rows($all_Quotes);
}
$totalPages_Quotes = ceil($totalRows_Quotes/$maxRows_Quotes)-1;
?>