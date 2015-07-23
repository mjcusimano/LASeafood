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
            <table width="900" border="0" align="center" cellpadding="0" cellspacing="0"> <!-- main table -->

            <?php la_seafood_header() ;?>

    <tr> <!-- begin second row which has the sidebards and the content -->
        <td valign="top" class="background_secondary_repeat">
            <table width="900" border="0" cellspacing="0" cellpadding="0" class="background_secondary_top">
                <tr>
                    <td>
                        <table width="900" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <?php 
                                  $pagename = get_query_var('pagename');

                                    switch ($pagename) {
                                        case "wholesale":
                                            la_seafood_leftsidebar_special() ;
                                            break;
                                        case "fish-finder":
                                            la_seafood_leftsidebar_fish_finder_page() ;
                                            break;
                                        default:
                                            la_seafood_leftsidebar() ;
                                    }                                    

                                ?>
                                <td width="14" valign="top">&nbsp;</td> <!-- N.B. don't forget this td in the template -->
								<td width="538" valign="top">
                                <!-- this is where the content ends (before-conetent) -->

            
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'LASeafood_custom_page' );
                    /* MJC - Removing comments
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
                        */
				endwhile;
			?>

                                    <!-- this is where the content begins (after content) -->
									</td>
                                    <td width="15" valign="top">&nbsp;</td> <!-- N.B. don't forget this td in the template -->
                                    <?php   la_seafood_rightsidebar() ;?>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr> <!-- END second row which has the sidebards and the content -->
        <!-- this is where the content ends (after-content) -->


            <?php la_seafood_footer() ;?>

            </table> <!-- END main table -->


		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
