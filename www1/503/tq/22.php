<?php
	$url='https://cdn.heweather.com/china-city-list.json';
	$res=file_get_contents($url);
	echo $res;
?>