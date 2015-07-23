<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php if ( have_posts() ) : ?>

            <!-- mjc removing header from WP category post 
            <?php
            /*

			<header class="archive-header">

				<h1 class="archive-title"><?php printf( __( 'Category Archives: %s', 'twentyfourteen' ), single_cat_title( '', false ) ); ?></h1>

				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .archive-header -->
            */
            ?>
            -->

            <table width="900" border="0" align="center" cellpadding="0" cellspacing="0"> <!-- main table -->

            <? la_seafood_header() ;?>

    <tr> <!-- begin second row which has the sidebards and the content -->
        <td valign="top" class="background_secondary_repeat">
            <table width="900" border="0" cellspacing="0" cellpadding="0" class="background_secondary_top">
                <tr>
                    <td>
                        <table width="900" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                
                                <?php   
                                    if (is_category('Wholesale'))
                                        la_seafood_leftsidebar_special() ;
                                    else
                                        la_seafood_leftsidebar() ;
                                
                                ?>
                                <td width="14" valign="top">&nbsp;</td> <!-- N.B. don't forget this td in the template -->
                                <!-- this is where the content ends (before-conetent) -->

                                    <?php
					                        // Start the Loop.
					                        while ( have_posts() ) : the_post();

					                        /*
					                         * Include the post format-specific template for the content. If you want to
					                         * use this in a child theme, then include a file called called content-___.php
					                         * (where ___ is the post format) and that will be used instead.
					                         */
					                        get_template_part( 'content-LASeafood_format1', get_post_format() );

					                        endwhile;
					                        // Previous/next page navigation.
					                        //twentyfourteen_paging_nav();

				                        else :
					                        // If no content, include the "No posts found" template.
					                        get_template_part( 'content', 'none' );

				                        endif;
			                        ?>

                                    <!-- this is where the content begins (after content) -->
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


            <? la_seafood_footer() ;?>

            </table> <!-- END main table -->


		</div><!-- #content -->
	</section><!-- #primary -->

<?php
 get_sidebar( 'content' ); 
 get_sidebar(); 
 get_footer(); 
