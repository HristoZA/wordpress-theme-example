
    <?php get_header(); ?>

      <!-- Commented Out Code At The Bottom Goes Here -->

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'content', get_post_format() ); ?>    

            <?php endwhile; endif; ?>
            
        </div><!-- /.blog-main -->

        <?php get_sidebar();?>

      </div><!-- /.row -->

    </main><!-- /.container -->

    <?php get_footer(); ?>