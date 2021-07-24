<?php
include_once("blogger/bloggerClass.php");
	if(isset($_GET['url'])){
		$stream = new bloggerStream();
$stream->loadApi($_GET['url']);
$videoLink = $stream->grab();
	}
?>