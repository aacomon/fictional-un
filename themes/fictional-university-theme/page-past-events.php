<?php
get_header();
pageBanner(array(
  'title' => 'Past Events',
  'subtitle' => 'Recap of pass events'
));
?>

    <div class="container container--narrow page-section">
        
        <?php 
            $today = date('Ymd');
            $pastEvents = new Wp_Query(array(
              'paged' => get_query_var('paged', 1), // for pagination
             // 'posts_per_page' => 1, //for pagination
              'post_type' => 'event',
              'meta_key' => 'event_date', // sort by evendate date
              'orderby' => 'meta_value_num', // ordering by event date acf
              'order' => 'ASC',
              'meta_query' => array(    // hide the past event
                array(
                  'key' => 'event_date', // event_date >= today's date
                  'compare' => '<',
                  'value' => $today,
                  'type' => 'numeric'
                )
              )
            ));

            while ($pastEvents->have_posts()) {
                $pastEvents->the_post();

            get_template_part('template-parts/content', 'event');

            }
            echo paginate_links(array(
                'total' => $pastEvents->max_num_pages
            ));
        ?>

    </div>

<?php
get_footer();
?>