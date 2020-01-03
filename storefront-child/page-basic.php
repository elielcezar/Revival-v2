
<?php
/*
Template Name: Pagina Basica
*/

//the content of page.php and now you can do what you want.
?>

<?php get_header(); ?>

<section id="principal" class="basic">

  <div class="container">
    <div class="row">

      <div class="col-sm-12">
        <?php
        while ( have_posts() ) : the_post(); ?>
            <?php the_content();
        endwhile
        ?>
      </div>
    </div>

  </div>


</section>


<?php get_footer(); ?>
