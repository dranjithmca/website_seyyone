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
       <!-- <div class="row">
            <div class="col-lg-12">
                <div class="case-studies-banner-top">
                    <h1 class="title">
                        Case Studies
                    </h1>
                    <p>Here are our featured projects that empower businesses.</p>
                </div>
            </div>
        </div>
    </div>-->
    <div class="shape-left-top">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-studies/01.png" alt="case">
    </div>
</div>  
<!-- rts case studies banner area end -->

<!-- case studies area start -->
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
                        We're currently preparing detailed case studies that showcase our successful client partnerships and innovative solutions. Check back soon to explore real-world examples of how we've helped businesses transform and grow.
                    </p>
                    
                      <!-- Features preview -->
                    <div class="row justify-content-center" style="margin-bottom: 40px;">
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div style="background: white; padding: 25px; border-radius: 10px; height: 100%; box-shadow: 0 5px 15px rgba(0,0,0,0.03);">
                                <div style="font-size: 36px; color: #0071DC; margin-bottom: 15px;">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <h4 style="font-size: 20px; margin-bottom: 10px; color: #1F1F25;">Business Growth</h4>
                                <p style="color: #6c757d; font-size: 15px;">Success stories of businesses achieving remarkable growth through our solutions.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div style="background: white; padding: 25px; border-radius: 10px; height: 100%; box-shadow: 0 5px 15px rgba(0,0,0,0.03);">
                                <div style="font-size: 36px; color: #0071DC; margin-bottom: 15px;">
                                    <i class="fas fa-cogs"></i>
                                </div>
                                <h4 style="font-size: 20px; margin-bottom: 10px; color: #1F1F25;">Technical Solutions</h4>
                                <p style="color: #6c757d; font-size: 15px;">Complex technical challenges solved with innovative approaches.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div style="background: white; padding: 25px; border-radius: 10px; height: 100%; box-shadow: 0 5px 15px rgba(0,0,0,0.03);">
                                <div style="font-size: 36px; color: #0071DC; margin-bottom: 15px;">
                                    <i class="fas fa-users"></i>
                                </div>
                                <h4 style="font-size: 20px; margin-bottom: 10px; color: #1F1F25;">Client Success</h4>
                                <p style="color: #6c757d; font-size: 15px;">Real testimonials and measurable results from our satisfied clients.</p>
                            </div>
                        </div>
                    </div>
                    
                   
                </div>
            </div>
        </div>
    </div>
</div>
<!-- case studies area end -->

<!-- rts call to action area start -->
<!--<div class="rts-call-to-action-area-about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="title">Book a Free Consultation</h2>
                <p class="disc">
                    Schedule a no-obligation consultation to discuss your unique needs and how Seyyone can elevate
                    your business technology.
                </p>
                <a href="<?php echo home_url('/contact'); ?>" class="rts-btn btn-primary wow fadeInUp" data-wow-delay=".5s">
                    View Solutions
                    <img class="injectable" src="<?php echo get_template_directory_uri(); ?>/assets/images/service/icons/13.svg" alt="arrow">
                </a>
            </div>
        </div>
    </div>
</div>-->
<!-- rts call to action area end -->

<br><br>

<?php get_footer(); ?>
