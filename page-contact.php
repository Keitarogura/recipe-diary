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
    <div class="wrapper contact-wrapper">
      <div class="contact-header">
        <h1 class="title" data-en="Contact"><?php the_title(); ?></h1>
        <p>
          フォームからお問い合わせください。<br />
          通常、2～3営業日以内にご返信いたします。
        </p>
      </div>
      <?php the_content(); ?>
    </div>
    <?php 
     endwhile;
    endif; 
    ?>
  </main>

 <?php get_footer(); ?>
  