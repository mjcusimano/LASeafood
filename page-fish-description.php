<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 
 
 
 $value = get_query_var('fishid');
 
 echo "This is fish ID: [";
 echo $value;
 echo "]";
 

 
global $wpdb;
//$results = $wpdb->get_results( 'SELECT * FROM wp_las_fishdesc WHERE id = 1', OBJECT );
// echo "<br/>";
// echo "Results: ";
//print_r($results);

$myrow = $wpdb->get_row("SELECT * FROM wp_las_fishdesc WHERE id = $value");

   


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

<table width="400" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="400"><p><img src="http://www.laseafood.com/images/uploads/amberjack.jpg" style="border: 0;" alt="image" width="400" height="140" />
</p></td>
  </tr>
  <tr>
    <td><span class="style1"><p>No Fish Selected
</p></span></td>
  </tr>
  <tr>
    <td><div align="left">
      <table width="400" border="0" cellspacing="0" cellpadding="0">
	  
        <tr>
          <td width="83" height="20" valign="middle"><span  class="titles">Latin Name:</span></td>
          <td width="317" height="20" valign="middle"><span class="body_content"><p><?php echo $myrow->latin_name ?>
</p></span></td>
        </tr>
      </table>
       <table width="400" border="0" cellspacing="0" cellpadding="0">
         <tr>
           <td width="86" height="20" valign="middle"><span  class="titles">Other Name:</span></td>
           <td width="314" height="20" valign="middle"><span class="body_content1"><p>Greater Amberjack
</p></span></td>
         </tr>
       </table>
       <table width="400" border="0" cellspacing="0" cellpadding="0">
         <tr>
           <td width="83" height="20" valign="middle"><span  class="titles">Description:</span></td>
           <td width="317" height="20" valign="middle"><span class="body_content2"><p>description
</p></span></td>
         </tr>
       </table>
       <table width="400" border="0" cellspacing="0" cellpadding="0">
         <tr>
           <td width="72" height="20" valign="middle"><span  class="titles">Food Info:</span></td>
           <td width="328" height="20" valign="middle"><span class="body_content3"><p>Mild flavor and firm texture
</p></span></td>
         </tr>
       </table>
       <table width="400" border="0" cellspacing="0" cellpadding="0">
         <tr>
           <td width="55" height="20" valign="middle"><span  class="titles">Season:</span></td>
           <td width="345" height="20" valign="middle"><span class="body_content4"><p>Jan - Feb, June - December
</p></span></td>
         </tr>
       </table>
       <table width="400" border="0" cellspacing="0" cellpadding="0">
         <tr>
           <td width="81" height="20" valign="middle"><span  class="titles">Availability:</span></td>
           <td width="319" height="20" valign="middle"><span class="body_content5"></span></td>
         </tr>
       </table>
       <table width="400" border="0" cellspacing="0" cellpadding="0">
         <tr>
           <td width="125" height="20" valign="middle"><span  class="titles">Selections Offered:</span></td>
           <td width="275" height="20" valign="middle"><span class="body_content6"><p>Whole, Fillet
</p></span></td>
         </tr>
       </table>
    </div></td>
  </tr>
</table>

</body>
</html>

