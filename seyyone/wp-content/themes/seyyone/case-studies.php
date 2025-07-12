<?php
/**
 * Template Name: Case Studies Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Seyyone
 * @since Seyyone 1.0
 */
get_header(); 
?>

<!-- rts case studies banner area start -->
<div class="rts-case-studies-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="case-studies-banner-top">
                    <h1 class="title">
                        Case Studies
                    </h1>
                    <p>Here are our featured projects that empower businesses.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-left-top">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-studies/01.png" alt="case">
    </div>
</div>
<!-- rts case studies banner area end -->

<?php 
// Get and output the page content
if (have_posts()) :
    while (have_posts()) : the_post();
        the_content();
    endwhile;
else:
    // Fallback content if no content is added
    echo '<!-- case studies area start -->
    <div class="single-large-case-studies-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div style="text-align: center; padding: 80px 20px; background: #f8f9fa; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                        <!-- Title with animated underline -->
                        <h2 style="color: #1F1F25; margin-bottom: 20px; font-size: 36px; font-weight: 700;">
                            <span style="position: relative; display: inline-block;">
                                <span style="position: relative; z-index: 1;">Exciting Case Studies Coming Soon</span>
                                <span style="position: absolute; bottom: 0; left: 0; width: 100%; height: 8px; background-color: rgba(0, 113, 220, 0.2); z-index: 0;"></span>
                            </span>
                        </h2>
                        <!-- Description -->
                        <p style="color: #6c757d; margin-bottom: 30px; font-size: 18px; max-width: 700px; margin-left: auto; margin-right: auto; line-height: 1.6;">
                            We\'re currently preparing detailed case studies that showcase our successful client partnerships and innovative solutions. Check back soon to explore real-world examples of how we\'ve helped businesses transform and grow.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- case studies area end -->';
endif;
?>

<br><br>

<?php get_footer(); ?>
