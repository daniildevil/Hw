<?php
echo "enter time please \n";
$time = fgets(STDIN);
if ($time<15 and $time>=0) {
	echo"first 1/4";
}
if ($time<=30 and $time>=15) {
	echo "Second 1/4";
}
if ($time<=45 and $time>=31) {
	echo "Third 1/4";
}
if ($time<=60 and $time>=46) {
	echo "Fourth 1/4";
}