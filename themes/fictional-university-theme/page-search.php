<?= get_header(); ?>
<?php 
while(have_posts()){
    the_post();
    pageBanner();
    //pageBanner(array(
      //'title' => 'Hello this is the title',
      //'subtitle' => ' this  is a subtitle',
      //'photo' => 'https://images.unsplash.com/photo-1684410767605-2a6fd002b346?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=789&q=80'
   // )); // call page banner using function
?>

    <div class="container container--narrow page-section">
        <?php
            //echo wp_get_post_parent_id(get_the_ID());
            $theParent = wp_get_post_parent_id(get_the_ID());
            if ($theParent) { ?>
              <div class="metabox metabox--position-up metabox--with-home-link">
                <p>
                <a class="metabox__blog-home-link" href="<?= get_permalink($theParent) ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent) ?></a> <span class="metabox__main"><?= the_title(); ?></span>
                </p>
              </div>       
        <?php  }   ?>

      <?php 
      $testArray = get_pages(array(
        'child_of' => get_the_ID()
      ));
        
      if ($theParent or $testArray) { 
      ?>
      <div class="page-links">
        <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a></h2>
        <ul class="min-list">
            <?php
                if ($theParent) {
                    $findChildreOf = $theParent;
                } else {
                    $findChildreOf = get_the_ID();
                }

                wp_list_pages(array(
                    'title_li' => NULL,
                    'child_of' => $findChildreOf,
                    'sort_column' => 'menu_order'
                ));
            ?>
        </ul>
      </div>
      <?php } ?>

      <div class="generic-content">
                <?php get_search_form(); ?>
      </div>

    </div>


<?php } ?>
<?= get_footer(); ?>