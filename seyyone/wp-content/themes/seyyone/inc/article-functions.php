<?php
// =============================================================================
// CUSTOM SEYYONE FUNCTIONS - ARTICLE SYSTEM
// =============================================================================

// Article Post Type
function seyyone_article_posts_post_type() {
    register_post_type('seyyone_article', array(
        'labels' => array(
            'name' => __('Articles', 'seyyone'),
            'singular_name' => __('Article', 'seyyone'),
            'add_new' => __('Add New Article', 'seyyone'),
            'add_new_item' => __('Add New Article', 'seyyone'),
            'edit_item' => __('Edit Article', 'seyyone'),
            'view_item' => __('View Article', 'seyyone'),
            'all_items' => __('All Articles', 'seyyone'),
        ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-media-document',
        'show_in_rest' => true,
        'menu_position' => 28,
        'rewrite' => array('slug' => 'article'),
        'taxonomies' => array('category', 'post_tag'),
    ));
}
add_action('init', 'seyyone_article_posts_post_type');

// Add Meta Box for Article Instructions
function add_article_meta_boxes() {
    add_meta_box(
        'article_instructions',
        'Article Instructions',
        'article_instructions_meta_box_callback',
        'seyyone_article',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'add_article_meta_boxes');

// Meta Box Callback for Instructions
function article_instructions_meta_box_callback($post) {
    ?>
    <div style="background: #f0f0f1; padding: 15px; border-radius: 5px; margin-top: 15px;">
        <h4>📝 How to Add Article Content:</h4>
        <ol>
            <li><strong>Title:</strong> Enter article title above</li>
            <li><strong>Featured Image:</strong> Set featured image (shows in article list)</li>
            <li><strong>Excerpt:</strong> Write short description in excerpt box</li>
            <li><strong>Content:</strong> Write your complete article content in the main editor</li>
        </ol>
        <p><strong>💡 Tip:</strong> You can write full HTML in the content editor including divs, classes, etc.</p>
    </div>
    <?php
}

// Get Article by ID
function seyyone_get_article_by_id($post_id) {
    $article_post = get_post($post_id);
    
    if ($article_post && $article_post->post_type === 'seyyone_article' && $article_post->post_status === 'publish') {
        $post_data = array(
            'id' => $article_post->ID,
            'title' => get_the_title($article_post),
            'content' => $article_post->post_content,
            'excerpt' => get_the_excerpt($article_post),
            'permalink' => get_permalink($article_post),
            'date' => get_the_date('d M, Y', $article_post),
            'author' => get_the_author_meta('display_name', $article_post->post_author),
            'image' => has_post_thumbnail($article_post) ? get_the_post_thumbnail_url($article_post, 'large') : '',
        );
        return $post_data;
    }
    
    return false;
}

// =============================================================================
// END ARTICLE FUNCTIONS
// =============================================================================
?>
