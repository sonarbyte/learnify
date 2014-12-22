<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<title>Preview</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<script src="./ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js"></script>
		<link href="./ckeditor/plugins/codesnippet/lib/highlight/styles/monokai_sublime.css" rel="stylesheet">
		<script>hljs.initHighlightingOnLoad();</script>
	</head>
	<body>
<?php

	$data = $_POST['htmlData'];

	if ( get_magic_quotes_gpc() )
		$data = stripslashes( $data ) ;

	echo $data ;
?>

	</body>
</html>
