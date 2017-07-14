<?php 
	get_header();
?>

<div class="container home-page">

 <div class="row">
    <?php 
      if ( have_posts() ) :
        while ( have_posts() ) : the_post();

    ?>
    <div class="col s6">
      <div class="card">
        <div class="card-image">
          <?php the_post_thumbnail("", [
            "class" => "responsive-img",
            "title" => get_the_title(),
            "alt" => ""
          ]); ?>
          <span class="card-title">
           <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
           <div class="tags">
            <i class="material-icons">label_outline</i>
            <?php the_category(" "); ?>
          </div>
          </span>
        </div>
        <div class="card-content">
          <?php the_excerpt(); ?>
        </div>
        <div class="card-action">
          <a href="<?php the_permalink(); ?>">Read More <i class="left material-icons">open_in_new</i></a> 
        </div>
        <div class="card-action">
          <span id="admin-name"><i class="material-icons">perm_identity</i> <?php the_author_posts_link(); ?> </span>
          <span><i class="material-icons">query_builder</i> <?php the_time("F, Y"); ?></span>
          <span><i class="material-icons">comment</i> <?php comments_number(); ?></span>
        </div>
      </div>
    </div>
    <?php 
        endwhile;
      endif;
    ?>
  </div>
  <div class="clearfix"></div>

  <?php if (get_next_posts_link() ) : ?>
  <div class="waves-effect waves-light btn black right white-text">
    <?php next_posts_link("next"); ?>
    <i class="material-icons left">fast_forward</i>
  </div>
  <?php else: ?>
  <div class="waves-effect waves-light btn black right white-text disabled">
    <?php echo "Next Page" ?>
    <i class="material-icons left">fast_forward</i>
  </div>
  <?php endif;?>

  <?php if (get_previous_posts_link() ) : ?>
  <div class="waves-effect waves-light btn red left white-text">
    <?php previous_posts_link("prev"); ?>
    <i class="material-icons left">fast_rewind</i>
  </div>
  <?php else: ?>
  <div class="waves-effect waves-light btn red left white-text disabled">
    <?php echo "Prev Page" ?>
    <i class="material-icons left">fast_rewind</i>
  </div>
  <?php endif;?>

  <div class="clearfix"></div>

</div>

<?php
	get_footer();