<?php 
	get_header();
?>

<div class="container main-post">

    <?php 
      if ( have_posts() ) :
        while ( have_posts() ) : the_post();

    ?>

      <div class="card">
        <div class="card-image">
          <?php the_post_thumbnail("", [
            "class" => "responsive-img",
            "title" => get_the_title(),
            "alt" => ""
          ]); ?>
          <span class="card-title">
            <h4><?php the_title(); ?></h4>
            <?php edit_post_link("edit <i class='material-icons'>mode_edit</i>"); ?>
          </span>
        </div>
        <div class="card-content">
          <?php the_content(); ?>
        </div>
        <div class="card-action">
          <span id="admin-name"><i class="material-icons">perm_identity</i> <?php the_author_posts_link(); ?> </span>
          <span class="right"><i class="material-icons">query_builder</i> <?php the_time("F, Y"); ?></span>
          <div class="clearfix"></div>
          <div class="tags">
            <i class="material-icons">label_outline</i>
            <?php the_category(" "); ?>
          </div>
        </div>
      </div>

    <?php 
        endwhile;
      endif;
    ?>

  <div class="clearfix"></div>

  <?php if (get_next_post_link() ) : ?>
  <div class="waves-effect waves-light btn black left white-text">
    <?php next_post_link("%link", "%title"); ?>
    <i class="material-icons left">fast_rewind</i>
  </div>
  <?php else: ?>
  <div class="waves-effect waves-light btn black left disabled">
    <?php echo "Prev Article" ?>
    <i class="material-icons left">fast_rewind</i>
  </div>
  <?php endif;?>

  <?php if (get_previous_post_link() ) : ?>
  <div class="waves-effect waves-light btn red right white-text">
    <?php previous_post_link("%link", "%title"); ?>
    <i class="material-icons right">fast_forward</i>
  </div>
  <?php else: ?>
  <div class="waves-effect waves-light btn red right disabled">
    <?php echo "Next Article" ?>
    
    <i class="material-icons right">fast_forward</i>
  </div>
  <?php endif;?>

  <div class="clearfix"></div>

</div>

<?php
	get_footer();