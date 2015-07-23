<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<!-- mjc replacing wordpress doctype need to fix this <!DOCTYPE html> -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->

<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
 	<title><?php wp_title( '|', true, 'right' ); ?></title> 
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!-- mjc begin adding header reference from EE -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/SpryCollapsiblePanel.js" type="text/javascript"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/SpryEffects.js" type="text/javascript"></script>
    <script type="text/javascript">
        <!--
        function MM_effectSlide(targetElement, duration, from, to, toggle)
        {
	        Spry.Effect.DoSlide(targetElement, {duration: duration, from: from, to: to, toggle: toggle});
        }
        function MM_swapImgRestore() { //v3.0
          var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
        }
        function MM_findObj(n, d) { //v4.01
          var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
            d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
          if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
          for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
          if(!x && d.getElementById) x=d.getElementById(n); return x;
        }

        function MM_swapImage() { //v3.0
          var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
           if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
        }
        //-->
    </script>
	
	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-12713568-45', 'auto');
	  ga('send', 'pageview');

	</script>
	

    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
    <!--
    #apDiv1 {
	    position:absolute;
	    width:646px;
	    height:27px;
	    z-index:1;
	    visibility: hidden;
    }
    -->
    </style>  
    <!-- mjc end adding header reference from EE -->

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->

	
	<?php wp_head(); ?>
</head>

<!-- mjc replacing their body with LA Seafood <body <?php body_class(); ?> -->
<body onload="MM_preloadImages('<?php echo get_stylesheet_directory_uri(); ?>/images/nav_over_08.jpg','<?php echo get_stylesheet_directory_uri(); ?>/images/nav_over_09.jpg','<?php echo get_stylesheet_directory_uri(); ?>/images/nav_over_10.jpg','<?php echo get_stylesheet_directory_uri(); ?>/images/nav_over_11.jpg','<?php echo get_stylesheet_directory_uri(); ?>/images/nav_over_12.jpg','<?php echo get_stylesheet_directory_uri(); ?>/images/nav_over_13.jpg','<?php echo get_stylesheet_directory_uri(); ?>/images/footer_over_23.jpg','<?php echo get_stylesheet_directory_uri(); ?>/images/footer_over_24.jpg','<?php echo get_stylesheet_directory_uri(); ?>/images/footer_over_25.jpg','<?php echo get_stylesheet_directory_uri(); ?>/images/footer_over_26.jpg','<?php echo get_stylesheet_directory_uri(); ?>/images/footer_over_27.jpg','<?php echo get_stylesheet_directory_uri(); ?>/images/footer_over_28.jpg','<?php echo get_stylesheet_directory_uri(); ?>/images/footer_29.jpg','<?php echo get_stylesheet_directory_uri(); ?>/images/footer_over_30.jpg','<?php echo get_stylesheet_directory_uri(); ?>/images/fish_finder_sm_over_08.jpg','<?php echo get_stylesheet_directory_uri(); ?>/images/buy_la_sm_over_11.jpg','<?php echo get_stylesheet_directory_uri(); ?>/images/stay_connected_over_28.png','<?php echo get_stylesheet_directory_uri(); ?>/images/stay_connected_over_30.png','<?php echo get_stylesheet_directory_uri(); ?>/images/stay_connected_over_31.png','<?php echo get_stylesheet_directory_uri(); ?>/images/stay_connected_over_34.png')" class="background_page">
<div id="page" class="hfeed site">


	<header id="masthead" class="site-header" role="banner">
		<div class="header-main">
  
		</div>
   
        
	</header><!-- #masthead -->

	<div id="main" class="site-main">
