<div class="post-item">
    <h2 class="headline headline--medium headline--post--title"><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h2>

    <div class="generic-content">
        <?php the_excerpt(); ?>
        <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">Continue Reading ...</a></p>
    </div>
</div>