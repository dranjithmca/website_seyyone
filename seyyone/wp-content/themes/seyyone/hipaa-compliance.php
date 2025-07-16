<?php
/**
 * Template Name: HIPAA Compliance Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Seyyone
 * @since Seyyone 1.0
 */
get_header(); 
?>

<!-- rts hipaa compliance banner area start -->
<div class="rts-case-studies-banner-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="case-studies-banner-top">
                    <h2 class="title">
                        HIPAA Compliance
                    </h2>
                    <p>Our commitment to healthcare data security and privacy standards.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- rts hipaa compliance banner area end -->

<!-- Blog content area start -->
<div class="rts-blog-list-area rts-section-gapTop">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="blog-single-post-listing details mb--0">
                    <div class="blog-listing-content">
                        <h3 class="title animated fadeIn">
                            <?php 
                            // Get and output the page content
                            if (have_posts()) :
                                while (have_posts()) : the_post();
                                    the_content();
                                endwhile;
                            else:
                                // Fallback content if no content is added
                                echo '<!-- hipaa compliance area start -->
                                <div class="single-large-case-studies-area rts-section-gapBottom">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div style="text-align: center; padding: 80px 20px; background: #f8f9fa; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
                                                    <!-- Title with animated underline -->
                                                    <h2 style="color: #1F1F25; margin-bottom: 20px; font-size: 36px; font-weight: 700;">
                                                        <span style="position: relative; display: inline-block;">
                                                            <span style="position: relative; z-index: 1;">HIPAA Compliance Information Coming Soon</span>
                                                            <span style="position: absolute; bottom: 0; left: 0; width: 100%; height: 8px; background-color: rgba(0, 113, 220, 0.2); z-index: 0;"></span>
                                                        </span>
                                                    </h2>
                                                    <!-- Description -->
                                                    <p style="color: #6c757d; margin-bottom: 30px; font-size: 18px; max-width: 700px; margin-left: auto; margin-right: auto; line-height: 1.6;">
                                                        We\'re currently preparing detailed information about our HIPAA compliance policies and procedures. Check back soon to learn more about how we protect healthcare data and maintain the highest standards of privacy and security.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- hipaa compliance area end -->';
                            endif;
                            ?>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog content area end -->

<br><br>

<?php get_footer(); ?>
