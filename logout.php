<?php
  require 'config.php';
  require 'database.php';
  $g_title = BLOG_NAME . ' - logout';
  $g_page = 'logout';
 require 'header.php';
  require 'nav.php';
//require 'banner.php';
?>


<div id="all_blogs">
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>


<?php 
// Put this code in first line of web page. 
//session_start();

session_destroy();
$message = 'Logged Out Successfully!!';
echo "<script type='text/javascript'>
	alert('$message');
	</script>";
header("Refresh:0; url=index.php", true, 303);

?>

</tr>
</table>
</div>
<?php
  require 'footer.php';
?>
