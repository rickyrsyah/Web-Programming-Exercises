<?php 
function gandakanString($s, $n) {
	$out = "";
	for ($i=0; $i < $n; $i++) { 
		$out .= $s;
	}
	printf($out);
}

gandakanString("Hello", 3)
?>