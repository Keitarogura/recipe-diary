<?php get_header(); ?>

  <main>
    <?php 
     if ( have_posts()):
      while( have_posts()): the_post(); 
    ?>
    <div class="breadcrumbs-wrapper wrapper">
      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <ol>
        <?php if(function_exists('bcn_display')) bcn_display_list(); ?>
        </ol>
      </div>
    </div>
    <div class="wrapper">
      <h1 class="title" data-en="Privacy Policy"><?php the_title(); ?></h1>
      <article class="about-wrapper">
        <div class="about-content">
          <?php the_content(); ?>
        </div>
      </article>
    </div>
    <div class="button-wrapper"><a class="button" href="<?php echo esc_url(home_url('/')); ?>">トップに戻る</a></div>
  <?php 
     endwhile;
    endif; 
    ?>
  </main>
  
<?php get_footer(); ?>
