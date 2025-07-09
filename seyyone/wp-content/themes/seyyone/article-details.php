<?php
/**
 * Template Name: Article Details Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Seyyone
 * @since Seyyone 1.0
 */
get_header(); 

// Get article ID from URL
$post_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Get article post data
$article_post = $post_id ? seyyone_get_article_by_id($post_id) : false;

if (!$article_post) {
    // No article post found, show error message
    ?>
    <div class="rts-blog-list-area rts-section-gapTop">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div style="text-align: center; padding: 60px 20px; background: #f8f9fa; border-radius: 15px; border: 2px dashed #dee2e6;">
                        <div style="font-size: 48px; color: #dc3545; margin-bottom: 20px;">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <h3 style="color: #495057; margin-bottom: 15px;">Article Not Found</h3>
                        <p style="color: #6c757d; margin-bottom: 25px;">The article you're looking for doesn't exist or has been removed.</p>
                        <a href="<?php echo esc_url(home_url('/articles/')); ?>" class="rts-btn btn-primary">
                            Back to Articles
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    get_footer();
    return;
}

// Get article post data
$title = $article_post['title'];
$content = $article_post['content'];
$date = $article_post['date'];
$author = $article_post['author'];
?>

<div class="rts-blog-list-area rts-section-gapTop">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="blog-single-post-listing details mb--0">
                    <?php if (!empty($article_post['image'])) : ?>
                    <div class="thumbnail">
                        <img src="<?php echo esc_url($article_post['image']); ?>" alt="<?php echo esc_attr($title); ?>">
                    </div>
                    <?php endif; ?>
                    
                  <div class="blog-listing-content">
                       <h3 class="title animated fadeIn">
    <?php
    // Get the title
    $full_title = esc_html($title);
    
    // Check if the title contains spaces
    if (strpos($full_title, ' ') !== false) {
        // Split the title by spaces
        $words = explode(' ', $full_title);
        
        // Get the first word
        $first_word = $words[0];
        
        // Remove the first word from the array
        array_shift($words);
        
        // Join the remaining words
        $rest_of_title = implode(' ', $words);
        
        // Check length of first word
        $first_word_length = mb_strlen($first_word);
        
        if ($first_word_length >= 3) {
            // If first word has 3 or more characters, underline first 3 chars
            $underlined_part = mb_substr($first_word, 0, 3);
            $remaining_part = mb_substr($first_word, 3);
            echo '<b><span class="blue-underline">' . $underlined_part . '</span>' . $remaining_part . ' ' . $rest_of_title . '</b>';
        } else if ($first_word_length == 2) {
            // If first word has 2 characters, underline both
            echo '<b><span class="blue-underline">' . $first_word . '</span> ' . $rest_of_title . '</b>';
        } else if ($first_word_length == 1) {
            // If first word has 1 character, underline it
            echo '<b><span class="blue-underline">' . $first_word . '</span> ' . $rest_of_title . '</b>';
        } else {
            // Empty first word (shouldn't happen)
            echo '<b>' . $full_title . '</b>';
        }
    } else {
        // No spaces in title, handle as a single word
        $title_length = mb_strlen($full_title);
        
        if ($title_length >= 3) {
            // If title has 3 or more characters, underline first 3
            $first_three = mb_substr($full_title, 0, 3);
            $rest_of_title = mb_substr($full_title, 3);
            echo '<b><span class="blue-underline">' . $first_three . '</span>' . $rest_of_title . '</b>';
        } else if ($title_length == 2) {
            // If title has 2 characters, underline both
            echo '<b><span class="blue-underline">' . $full_title . '</span></b>';
        } else if ($title_length == 1) {
            // If title has 1 character, underline it
            echo '<b><span class="blue-underline">' . $full_title . '</span></b>';
        } else {
            // Empty title (shouldn't happen)
            echo $full_title;
        }
    }
    ?>
</h3>


                        
                        <!-- Article Content -->
                        <div class="blog-content">
                            <?php echo apply_filters('the_content', $content); ?>
                        </div>
                    </div>
                </div>
                <!-- single post End-->
            </div>
        </div>
    </div>
</div>

<br><br>

<?php get_footer(); ?>
