<?php
/*
Template Name: seafood_description-template
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Harlon's LA Fish &amp; Seafood</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #E4D7B7;
}
.style1 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 24px;
	color: #4c4c4c;
	font-weight: bold;
	letter-spacing: 1px;
	margin: 0px;
	padding: 0px;
	clear: both;
	height: 20px;
}
.titles {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 12px;
	color: #C84920;
	font-weight: bold;
	line-height: 12px;
}
.body_content {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	line-height: 17px;
	color: #605a5a;
    line-height: 12px;
}
.body_content1 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	line-height: 17px;
	color: #605a5a;
    line-height: 12px;
}
.body_content2 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	line-height: 17px;
	color: #605a5a;
    line-height: 12px;
}
.body_content3 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	line-height: 17px;
	color: #605a5a;
    line-height: 12px;
}
.body_content4 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	line-height: 17px;
	color: #605a5a;
    line-height: 12px;
}
.body_content5 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	line-height: 17px;
	color: #605a5a;
    line-height: 12px;
}
.body_content6 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	line-height: 17px;
	color: #605a5a;
    line-height: 12px;
}
-->
</style>
</head>
<body>
<?php
	while ( have_posts() ) : the_post();
		get_template_part( 'content', 'LASeafood_custom_page' );
	endwhile;
?>
</body>
</html>
