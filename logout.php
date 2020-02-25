<?php
session_destroy();
$message = 'Logged Out Successfully!!';
echo "<script type='text/javascript'>
	alert('$message');
	</script>";
header("Refresh:0; url=index.php", true, 303);

?>
