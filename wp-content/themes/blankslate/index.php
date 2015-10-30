<?php get_header(); ?>
          <div class="row">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="main-banner">
              <?php the_post_thumbnail(); ?>
            </div>
            <div class="col-md-12 text-left page-title">
              <?php if ( $post->ID != 2 ): ?>
              <h2><?php $parents = get_post_ancestors( $post->ID );
		foreach ( $parents as $parent ):
		  echo get_the_title( $parent ).' | ';
		endforeach;
		?>
		<?php the_title(); ?></h2>
            <?php endif; ?>
            </div>
            <div class="content col-md-12">
              <?php the_content(); ?>
	      <?php endwhile;
		    endif; ?>
            </div>
          </div>
<?php get_footer(); ?>
