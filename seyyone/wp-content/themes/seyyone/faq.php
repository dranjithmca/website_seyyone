<?php
/**
 * Template Name: FAQ Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Seyyone
 * @since Seyyone 1.0
 */
get_header(); 
?>

<!-- rts faq banner area start -->
<div class="rts-case-studies-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="case-studies-banner-top">
                    <h2 class="title">
                        Frequently Asked Questions
                    </h2>
                    <p>Find answers to common questions about our services and solutions.</p>
                </div>
            </div>
        </div>
    </div>
    
</div>
<!-- rts faq banner area end -->

<?php 
// Get and output the page content
if (have_posts()) :
    while (have_posts()) : the_post();
        the_content();
    endwhile;
else:
    // Fallback content if no content is added
    echo '<!-- faq area start -->
    <div class="single-large-case-studies-area rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div style="text-align: center; padding: 80px 20px; background: #f8f9fa; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                        <!-- Title with animated underline -->
                        <h2 style="color: #1F1F25; margin-bottom: 20px; font-size: 36px; font-weight: 700;">
                            <span style="position: relative; display: inline-block;">
                                <span style="position: relative; z-index: 1;">FAQ Content Coming Soon</span>
                                <span style="position: absolute; bottom: 0; left: 0; width: 100%; height: 8px; background-color: rgba(0, 113, 220, 0.2); z-index: 0;"></span>
                            </span>
                        </h2>
                        <!-- Description -->
                        <p style="color: #6c757d; margin-bottom: 30px; font-size: 18px; max-width: 700px; margin-left: auto; margin-right: auto; line-height: 1.6;">
                            We\'re currently compiling answers to frequently asked questions about our services and solutions. Check back soon for helpful information that will address common inquiries about Seyyone\'s offerings.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- faq area end -->';
endif;
?>

<br><br>

<?php get_footer(); ?>
