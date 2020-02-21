<?php
function spupof($str) {
	$str = strtolower($str)."\n";
	return strtr($str, "abcdefghijklmnopqrstuvwz", "bcdefghijklmnopqrstuvwza");
}
?>
