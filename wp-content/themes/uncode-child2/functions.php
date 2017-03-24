<?php
add_action('after_setup_theme', 'uncode_language_setup');
function uncode_language_setup()
{
	load_child_theme_textdomain('uncode', get_stylesheet_directory() . '/languages');
}

function theme_enqueue_styles()
{
	$production_mode = ot_get_option('_uncode_production');
	$resources_version = ($production_mode === 'on') ? null : rand();
	$parent_style = 'uncode-style';
	$child_style = array('uncode-custom-style');
	wp_enqueue_style($parent_style, get_template_directory_uri() . '/library/css/style.css', array(), $resources_version);
	wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', $child_style, $resources_version);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

add_shortcode( 'crometrics_list_team_members', 'crometrics_query_team_shortcode' );
function crometrics_query_team_shortcode( $atts ) {
    ob_start();

    $query_args = array(
        'post_type' => 'team_member',
        'posts_per_page' => -1,
    );

    if($atts['group']):
        $query_args['group'] = $atts['group'];
    endif;
    
    $count = 0;
    $query = new WP_Query($query_args );
    $num_posts = $query->post_count;
    
    if ( $query->have_posts() ) { ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <?php if($count %4 == 0):?>
                <div class="row team-members">
                    <div id="post-<?php the_ID(); ?>" class="team-member">
                        <div class="headshot">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <h3>
                            <?php the_title(); ?>
                        </h3>
                        <?php the_content(); ?>
                    </div>
            <?php elseif($count %4 == 3 || $count == $num_posts-1 ): ?>
                    <div id="post-<?php the_ID(); ?>" class="team-member">
                        <div class="headshot">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <h3>
                            <?php the_title(); ?>
                        </h3>
                        <?php the_content(); ?>
                    </div>
                </div><!--close .row-->
            <?php else: ?>
                    <div id="post-<?php the_ID(); ?>" class="team-member">
                        <div class="headshot">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <h3>
                            <?php the_title(); ?>
                        </h3>
                        <?php the_content(); ?>
                    </div>
            <?php endif; ?>
            <?php $count++; ?>
        <?php endwhile;
        wp_reset_postdata(); ?>
        
    <?php
        $html = ob_get_clean();
        return $html;
    }
}