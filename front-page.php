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
 
get_header(); ?>

<div id="main-content" class="main-content">

<?php
/* MJC - Removing this because I have a static front page
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
*/
?>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
  <?php la_seafood_header() ;?>
  <tr>
    <td valign="top"><table width="900" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><div style="position: relative;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo_bottom.png" style="position: absolute; z-index: 10" width="170" height="89" alt="Logo Bottom">
<style type="text/css" media="screen">
  #gallery { height: 390px; }
  #gallery img {
    position: absolute;
    left: 0;
    top: 0;
    }
    .inactive {
      /* IE 8 */
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";

  /* IE 5-7 */
  filter: alpha(opacity=0);
    opacity:0;
    -webkit-transition: opacity 1s ease-in;
    -moz-transition: opacity 1s ease-in;
    -o-transition: opacity 1s ease-in;
    -ms-transition: opacity 1s ease-in;
    transition: opacity 1s ease-in;
     }
  .active { opacity: 1;
    /* IE 8 */
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";

  /* IE 5-7 */
  filter: alpha(opacity=100);
    -webkit-transition: opacity 1s ease-in;
    -moz-transition: opacity 1s ease-in;
    -o-transition: opacity 1s ease-in;
    -ms-transition: opacity 1s ease-in;
    transition: opacity 1s ease-in;
}
</style>
<div id="gallery">
<img class="active first" src="<?php echo get_stylesheet_directory_uri(); ?>/widgets/galleries/home/commitment.jpg" />
<img class="inactive" src="<?php echo get_stylesheet_directory_uri(); ?>/widgets/galleries/home/location.jpg" />
<img class="inactive" src="<?php echo get_stylesheet_directory_uri(); ?>/widgets/galleries/home/vacuum_packed.jpg" />
<img class="inactive" src="<?php echo get_stylesheet_directory_uri(); ?>/widgets/galleries/home/testimonials.jpg" link="<?php echo get_page_link('testimonials'); ?>" target="_self" />
<img class="inactive" src="<?php echo get_stylesheet_directory_uri(); ?>/widgets/galleries/home/trip_tickets.jpg" />
<img class="inactive" src="<?php echo get_stylesheet_directory_uri(); ?>/widgets/galleries/home/quality.jpg" />
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf-8">
  jQuery(document).ready(function(){
    var el = $('#gallery img');
    var i = 0;
    setInterval(function() {
      $('img.active').addClass('finished'); 
      $('img.active').next('img').removeClass('inactive').addClass('active');
      $('img.finished').removeClass('active').addClass('inactive').removeClass('finished');
      check = i != el.length-1 ? i++ : (i=0, $('img.first').removeClass('inactive').addClass('active'));
    }, 9000);
  });
</script></div>
        </td>
        </tr>
      <tr>
        <td><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home_rope_divider_17.jpg" width="900" height="19" /></td>
        </tr>
      <tr>
        <?php la_seafood_front_page_bottom_gallery_nav() ;?>
        </tr>
    </table></td>
  </tr>
  <?php la_seafood_footer() ;?>
</table>

<map name="Map" id="Map"><area shape="rect" coords="20,1,161,87" href=<?php echo home_url(); ?>" />
</map>


		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
