<html>
<head>Headings</head>
<body>
	<font color="red">
<?php
	$i=2;
	do {
		echo "<h".$i.">Heading ".$i."</h".$i.">";
		$i+=2;
	} while ($i <= 6);
?>
	</font>
</body>
</html>