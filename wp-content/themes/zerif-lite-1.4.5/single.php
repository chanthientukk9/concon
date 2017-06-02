<?php
/**
 * The Template for displaying all single posts.
 */
get_header(); 
$cat = get_the_category( get_the_ID() ); ?>


<div class="header-post">  
    <div class="header-content-wrap">
	<div class="header-post-title"> <?php the_title(); ?> </div>	
    </div>
</div>
<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->
<?php zerif_after_header_trigger(); ?>

<div id="content" class="site-content">

	<div class="container">

		<?php zerif_before_single_post_trigger(); ?>
		<div class="content-left-wrap col-md-9">

		<!-- BreadScrumb -->
		<?php
			if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('<p id="breadcrumbs">','</p>');
			}
		?> 
		<!-- End BreadScrumb -->

			<?php zerif_top_single_post_trigger(); ?>
			<div id="primary" class="content-area">
				<main itemscope itemtype="http://schema.org/WebPageElement" itemprop="mainContentOfPage" id="main" class="site-main">
				<?php while ( have_posts() ) : the_post(); 
						
						 get_template_part( 'content', 'single' );
						 
						 zerif_post_nav(); 
					 	
						
		if ($cat) {
                $t = $cat[0];
                $r = new WP_Query(array('posts_per_page'=> 4, 'post__not_in'=> array( get_the_ID() ), 'cat'=> $t->term_id ));
                echo '<h3 style="text-align:left;" class="relate-title">Bài viết liên quan</h3>';
                echo '<div class="show-more-post">';
                while ( $r->have_posts()): $r->the_post();
                    echo '<div style="text-align:left;" class="ovf">';
                    echo '&nbsp<a href="'.get_permalink().'">'. get_the_post_thumbnail(get_the_ID(), 'thumbnail').'<span class="mh block">'.get_the_title().'</span></a>';
                    echo '</div>';
                endwhile;
                echo '</div><hr>';
                wp_reset_postdata();
}

						// If comments are open or we have at least one comment, load up the comment template
						/*if ( comments_open() || '0' != get_comments_number() ) :
							comments_template('');
						endif;*/ /*data-href="'.the_permalink().'"*/
						echo '<div id="respond" class="fb-comments" data-numposts="20" width="100%" data-colorscheme="light" data-version="v2.3"></div>';
					endwhile; // end of the loop. ?>
				</main><!-- #main -->
			</div><!-- #primary -->

			<?php zerif_bottom_single_post_trigger(); ?>
			
		</div><!-- .content-left-wrap -->
		<?php zerif_after_single_post_trigger(); ?>
		<?php zerif_sidebar_trigger(); ?>

	</div><!-- .container -->
<?php get_footer(); ?>