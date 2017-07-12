<?php 
	get_header();
?>

<div class="container">

 <div class="row">
    <?php 
      if ( have_posts() ) :
        while ( have_posts() ) : the_post();

    ?>
    <div class="col s6">
      <div class="card">
        <div class="card-image">
          <?php the_post_thumbnail("", [
            "class" => "responsive-img"
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
</div>


<!--
    <div class="col s6">
      <div class="card">
        <div class="card-image">
          <img src="http://lorempixel.com/400/200/city/4">
          <span class="card-title">
           <a href="#">Name of the Post</a>
           <div class="tags">
            <i class="material-icons">label_outline</i>
            <a href="#">HTML</a>
            <a href="#">CSS</a>
          </div>
          </span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">Read More <i class="left material-icons">open_in_new</i></a> 
        </div>
        <div class="card-action">
          <span><i class="material-icons">perm_identity</i>Osama </span>
          <span><i class="material-icons">query_builder</i>7/2018</span>
          <span><i class="material-icons">comment</i>7 comments</span>
        </div>
      </div>
    </div>

    <div class="col s6">
      <div class="card">
        <div class="card-image">
          <img src="http://lorempixel.com/400/200/city/2">
          <span class="card-title">
           <a href="#">Name of the Post</a>
           <div class="tags">
            <i class="material-icons">label_outline</i>
            <a href="#">HTML</a>
            <a href="#">CSS</a>
          </div>
          </span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">Read More <i class="left material-icons">open_in_new</i></a> 
        </div>
        <div class="card-action">
          <span><i class="material-icons">perm_identity</i>Osama </span>
          <span><i class="material-icons">query_builder</i>7/2018</span>
          <span><i class="material-icons">comment</i>7 comments</span>
        </div>
      </div>
    </div>

    <div class="col s6">
      <div class="card">
        <div class="card-image">
          <img src="http://lorempixel.com/400/200/city/3">
          <span class="card-title">
           <a href="#">Name of the Post</a>
           <div class="tags">
            <i class="material-icons">label_outline</i>
            <a href="#">HTML</a>
            <a href="#">CSS</a>
          </div>
          </span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">Read More <i class="left material-icons">open_in_new</i></a> 
        </div>
        <div class="card-action">
          <span><i class="material-icons">perm_identity</i>Osama </span>
          <span><i class="material-icons">query_builder</i>7/2018</span>
          <span><i class="material-icons">comment</i>7 comments</span>
        </div>
      </div>
    </div>

  
-->
<?php
	get_footer();