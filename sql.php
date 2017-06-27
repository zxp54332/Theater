<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
error_reporting(1);
date_default_timezone_set("Asia/Taipei");
mysql_connect("localhost","admin","0000");
mysql_query("SET NAMES 'UTF8'");
mysql_select_db("theater");
$mr=mysql_result;
$mq=mysql_query;
$mnr=mysql_num_rows;
$mfa=mysql_fetch_array;
if($_GET[m]==1)
{
	$splits=explode(" ",$_GET[seat]);
	$num=mktime(date("H"),date("i"),date("s"),date("n"),date("j"),date("Y"));
	for($i=1;$i<=$_GET[seats];$i++)
	{
		$mq("insert into book(_sid,_number,_seat) values('$_GET[book]','$num','$splits[$i]')");
		$name=$_POST[_name][$i];
		$phone=$_POST[_phone][$i];
		$email=$_POST[_email][$i];
		$mq("insert into booker(_bookid,_name,_phone,_email) values('$_GET[book]','$name','$phone','$email')");
	}
	?>
	<title>傳送中...</title>
    <script>
    alert('完成訂位\n訂單編號:<?=$num?>')
	location.replace('../index.php')
    </script>
	<?php
}
?>