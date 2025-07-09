<?php
/**
 * Template Name: Blogs Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Seyyone
 * @since Seyyone 1.0
 */
get_header(); 
?>

<div class="rts-blog-list-area rts-section-gapTop">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center-title-bg-white">
                    <h2 class="title">  Blog</h2>
                    
                </div>
            </div>
        </div>
        
        <div class="row g-5 mt-4">
            <?php
            // Get blog posts
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            
            $args = array(
                'post_type' => 'seyyone_blog',
                'posts_per_page' => 9,
                'paged' => $paged,
                'post_status' => 'publish',
                'orderby' => 'date',
                'order' => 'DESC'
            );
            
            $blog_posts = new WP_Query($args);

            if ($blog_posts->have_posts()) :
                $delay_counter = 0;
                while ($blog_posts->have_posts()) : $blog_posts->the_post();
                    $post_id = get_the_ID();
                    $title = get_the_title();
                    $excerpt = get_the_excerpt();
                   // $blog_id = get_post_meta($post_id, '_blog_id', true);
                    $date = get_the_date('d M, Y');
                    $author = get_the_author();
                    
                    // Calculate delay for animation
                    $delay_values = array('', '.2s', '.4s');
                    $delay_attr = $delay_counter > 0 ? ' data-wow-delay="' . $delay_values[$delay_counter % 3] . '"' : '';
            ?>

            <div class="col-xl-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-offset="120"<?php echo $delay_attr; ?>  id="<?php echo esc_attr($post_id); ?>">
                <div class="single-blog-area-start border-none mb--30">
                   <a href="<?php echo esc_url(home_url('/blog-details/?id=' . urlencode($post_id))); ?>" class="thumbnail">
    <div class="blog_img">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('medium_large', array(
                'alt' => esc_attr($title), 
                'style' => 'width: 100%; height: 250px; object-fit: cover;'
            )); ?>
        <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone/blogs/2.jpg" alt="<?php echo esc_attr($title); ?>" style="width: 100%; height: 250px; object-fit: cover;">
        <?php endif; ?>
        <div class="post_date">
            <?php echo get_the_date('M d Y'); ?>
        </div>
    </div>
</a>

                    <div class="inner-content-area">
                        <div class="top-area">
                            <a href="<?php echo esc_url(home_url('/blog-details/?id=' . urlencode($post_id))); ?>">
                                <h6 class=" animated fadeIn"><?php echo esc_html($title); ?></h6>
                            </a>
                            <p class="disc">
                                <?php echo wp_trim_words($excerpt, 20, '...'); ?>
                            </p>
                           
                            <div class="button-area-right-header">
                         <a href="<?php echo esc_url(home_url('/blog-details/?id=' . urlencode($post_id))); ?>" class="rts-btn btn-border">
                            Read More
                             
                        </a>
                        <div class="menu-btn-toggle">
                            <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect y="14" width="20" height="2" fill="#1F1F25"></rect>
                                <rect y="7" width="20" height="2" fill="#1F1F25"></rect>
                                <rect width="20" height="2" fill="#1F1F25"></rect>
                            </svg>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>

            
            
            
            <?php 
                    $delay_counter++;
                endwhile;
            else :
            ?>
            
            <div class="col-12">
                <div style="text-align: center; padding: 60px 20px; background: #f8f9fa; border-radius: 15px; border: 2px dashed #dee2e6;">
                    <div style="font-size: 48px; color: #6c757d; margin-bottom: 20px;">
                        <i class="fa fa-newspaper-o"></i>
                    </div>
                    <h3 style="color: #495057; margin-bottom: 15px;">No Blog Posts Found</h3>
                    <p style="color: #6c757d; margin-bottom: 25px;">We'll be adding new content soon. Check back later!</p>
                    
                    <?php if (current_user_can('edit_posts')) : ?>
                        <a href="<?php echo admin_url('post-new.php?post_type=seyyone_blog'); ?>" class="rts-btn btn-primary">
                            <i class="fa fa-plus" style="margin-right: 8px;"></i>Add New Blog Post
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            
            <?php endif; ?>
        </div>
        
        <!-- Pagination -->
        <?php if ($blog_posts->max_num_pages > 1) : ?>
<div class="row">
    <div class="col-lg-12">
        <div class="pagination-one">
            <ul class="justify-content-center">
                <?php
                // Previous page button
                if (get_query_var('paged') > 1) {
                    echo '<li><button class="prev-page" onclick="window.location.href=\'' . get_pagenum_link(get_query_var('paged') - 1) . '\'"><i class="fa-solid fa-chevrons-left"></i></button></li>';
                }
                
                // Calculate page range
                $current_page = max(1, get_query_var('paged'));
                $total_pages = $blog_posts->max_num_pages;
                $end_size = 3; // How many numbers on either end of the pagination
                $mid_size = 3; // How many numbers to either side of the current page
                
                // Start of pagination
                $start = max(1, $current_page - $mid_size);
                $end = min($total_pages, $current_page + $mid_size);
                
                // Adjust if we're close to the beginning or end
                if ($start <= $end_size) {
                    $end = min($total_pages, $end_size * 2);
                }
                if ($end >= $total_pages - $end_size + 1) {
                    $start = max(1, $total_pages - $end_size * 2);
                }
                
                // Generate the page numbers
                for ($i = $start; $i <= $end; $i++) {
                    $active_class = ($i == $current_page) ? 'active' : '';
                    $page_num = str_pad($i, 2, '0', STR_PAD_LEFT); // Format as 01, 02, etc.
                    echo '<li><button class="' . $active_class . '" onclick="window.location.href=\'' . get_pagenum_link($i) . '\'">' . $page_num . '</button></li>';
                }
                
                // Next page button
                if ($current_page < $total_pages) {
                    echo '<li><button class="next-page" onclick="window.location.href=\'' . get_pagenum_link($current_page + 1) . '\'"><i class="fa-solid fa-chevrons-right"></i></button></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</div>
<?php endif; ?>

        
        <?php wp_reset_postdata(); ?>
    </div>
</div>

<br><br>

<?php get_footer(); ?>
