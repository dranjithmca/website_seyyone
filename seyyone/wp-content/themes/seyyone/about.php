<?php
/**
 * Template Name: About Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Seyyone
 * @since Seyyone 1.0
 */
get_header(); 
?>

<!-- rts service banner area start -->
<div class="rts-service-banner-area ptb--80 position-relative">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-7 mb_md--30 mb_sm--30">
                <div class="banner-wrapper-one">
                    <h1 class="title wow fadeInUp" data-wow-delay=".3s" style="font-size: 55px">
                        Trusted partner for <br> <span>enterprises</span> and <span>healthcare</span> providers across the globe
                    </h1>
                    <p class="wow fadeInUp" data-wow-delay=".5s">
                        For over 25 years, Seyyone has been at the forefront of delivering comprehensive Healthcare Process Management and IT Solutions, blending deep domain expertise with technology-driven innovation.
                    </p>
                </div>
            </div>
            
            <div class="col-lg-5">
                <div class="thumbnail-bannr-service-right jarallax">
                  <div id="jarallax-container-0" class="jarallax-container">
    <?php 
    $hero_image = get_field('about_hero_image');
    if($hero_image): ?>
        <img class=" " src="<?php echo esc_url($hero_image['url']); ?>" alt="<?php echo esc_attr($hero_image['alt'] ? $hero_image['alt'] : 'service-area'); ?>">
    <?php else: ?>
        <img class=" " src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone/home/core_values_2.png" alt="service-area">
    <?php endif; ?>
</div>

                </div>
            </div>
        </div>
    </div>
    <div class="shape-area-start ">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/06.png" alt="service-banner-shape" class="one wow move-right">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/07.png" alt="service-banner-shape" class="two wow move-left">
    </div>
</div>
<!-- rts service banner area end -- >

<!-- why choose us banner area -->
<div class="banner-why-choose-us" >
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="banner-inner-why-choose-us">
                    <h4 class="title">
                        <i>"Behind our success is a people-first culture that nurtures talent, encourages innovation, and empowers every voice."</i>
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- why choose us banner area end -->

<div class="keybenefits-area" id="about-at-seyyone">
    <br>
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="why-choose-us-working-process rts-section-gap">
                    <div class="container">
                        <div class="row g-5">
                             <div class="col-lg-6 pr--50">
                                <div class="why-choose-process-left pb--50">
                                    <div class="text-left-title-bg-white">
                                        <h2 class="title">About Us</h2>
                                        <p>For over 25 years, Seyyone has been at the forefront of delivering comprehensive Healthcare Process Management and IT Solutions, blending deep domain expertise with technology-driven innovation.</p>
                                    </div>
                                </div>
                                <div class="thumbnail-working-process">
    <?php 
    $about_image = get_field('about_section_image');
    if($about_image): ?>
        <img src="<?php echo esc_url($about_image['url']); ?>" alt="<?php echo esc_attr($about_image['alt'] ? $about_image['alt'] : 'About Seyyone'); ?>">
    <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone/home/26975.jpg" alt="">
    <?php endif; ?>
</div>

                            </div>
                            <div class="col-lg-6">
                                <div class="single-working-process-choose-us wow fadeInUp">
                                    <h5 class="title">Global Healthcare Expertise</h5>
                                    <i class="far fa-check-circle"></i> With over 25 years of experience, Seyyone has been a trusted partner for healthcare providers, payers, and businesses across the USA, Australia, Canada, Ireland, Germany, and beyond. Our deep domain knowledge allows us to simplify complex healthcare operations and deliver comprehensive healthcare process management and IT solutions.
                                </div>
                                <div class="single-working-process-choose-us wow fadeInUp" data-wow-delay=".2s">
                                    <h5 class="title">Skilled Professionals & Advanced Technology</h5>
                                    <i class="far fa-check-circle"></i> Seyyone blends a highly skilled workforce with advanced technologies, enabling us to offer a wide spectrum of healthcare and IT services. Operating from our HIPAA-compliant, world-class infrastructure in Coimbatore, India, we ensure secure, efficient, and technology-driven service delivery that meets international standards.
                                </div>
                                <div class="single-working-process-choose-us wow fadeInUp" data-wow-delay=".4s">
                                    <h5 class="title">Client Commitment & Service Excellence</h5>
                                    <i class="far fa-check-circle"></i> At Seyyone, client satisfaction is at the heart of everything we do. We are dedicated to relieving our clients from the challenges of managing their back-office operations, allowing them to focus on their core business. Our unwavering commitment to quality, customer satisfaction, and continuous improvement ensures long-term partnerships built on trust and excellence.
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- working process area why choose us -->
<div class="why-choose-us-working-process rts-section-gap" id="life-at-seyyone">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 pr--50">
                <div class="why-choose-process-left pb--50">
                    <div class="text-left-title-bg-white">
                        <h2 class="title">Our Team</h2>
                        <p>Behind our success is a people-first culture that nurtures talent, encourages innovation, and empowers every voice.</p>
                    </div>
                </div>
                <div class="thumbnail-working-process">
    <?php 
    $team_image = get_field('team_section_image');
    if($team_image): ?>
        <img src="<?php echo esc_url($team_image['url']); ?>" alt="<?php echo esc_attr($team_image['alt'] ? $team_image['alt'] : 'Our Team'); ?>">
    <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone/home/our_team_1.jpg" alt="">
    <?php endif; ?>
</div>

            </div>
            <div class="col-lg-6">
                <div class="single-working-process-choose-us wow fadeInUp">
                    <h5 class="title">A Woman-Empowered Workforce</h5>
                    <i class="far fa-check-circle"></i> 80% of our team are women—leaders, coders, strategists, and innovators
                    <br> <i class="far fa-check-circle"></i> We champion diversity and create equal growth opportunities for all.
                </div>
                <div class="single-working-process-choose-us wow fadeInUp" data-wow-delay=".2s">
                    <h5 class="title">Experienced & Skilled Team</h5>
                    <i class="far fa-check-circle"></i> 100% graduate professionals.<br>
                    <i class="far fa-check-circle"></i> 60% with over 12 years of dedicated experience.<br>
                    <i class="far fa-check-circle"></i> Continuous learning through in-house training and certifications.
                </div>
                <div class="single-working-process-choose-us wow fadeInUp" data-wow-delay=".4s">
                    <h5 class="title">Empowering IT Talent</h5>
                    At Seyyone, our software professionals work on cutting-edge technologies across web, mobile, and cloud platforms. We provide:<br>
                    <i class="far fa-check-circle"></i> Exposure to real-time projects in healthcare tech, enterprise apps, and cloud-native solutions.<br>
                    <i class="far fa-check-circle"></i> Internal mentorship, code reviews, and career paths tailored for tech growth and leadership.
                </div>
            </div>
        </div>
    </div>
</div>

<div class="why-choose-us-working-process rts-section-gap">
    <div class="container">
        <div class="row g-5">
             <div class="col-lg-6 pr--50">
                <div class="why-choose-process-left pb--50">
                    <div class="text-left-title-bg-white">
                        <h2 class="title">Our Culture</h2>
                        <p>Behind our success is a people-first culture that nurtures talent, encourages innovation, and empowers every voice.</p>
                    </div>
                </div>
                <div class="thumbnail-working-process">
    <?php 
    $culture_image = get_field('culture_section_image');
    if($culture_image): ?>
        <img src="<?php echo esc_url($culture_image['url']); ?>" alt="<?php echo esc_attr($culture_image['alt'] ? $culture_image['alt'] : 'Our Culture'); ?>">
    <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone/home/our_culture_1.jpg" alt="">
    <?php endif; ?>
</div>

            </div>
            <div class="col-lg-6">
                <div class="single-working-process-choose-us wow fadeInUp">
                    <h5 class="title">Collaborative, Transparent Culture</h5>
                    <i class="far fa-check-circle"></i> Open-door policy with zero hierarchy barriers.
                    <br> <i class="far fa-check-circle"></i> Cross-functional teamwork and knowledge sharing.
                    <br> <i class="far fa-check-circle"></i> Regular feedback, performance recognition, and peer appreciation.
                </div>
                <div class="single-working-process-choose-us wow fadeInUp" data-wow-delay=".2s">
                    <h5 class="title">Personal Growth & Work-Life Harmony</h5>
                    <i class="far fa-check-circle"></i> Flexible work options including remote and hybrid models.<br>
                    <i class="far fa-check-circle"></i> Family-friendly policies and employee wellness initiatives.<br>
                    <i class="far fa-check-circle"></i> Career development programs tailored to individual goals.
                </div>
                <div class="single-working-process-choose-us wow fadeInUp" data-wow-delay=".4s">
                    <h5 class="title">Fun, Festivities & Community</h5>
                    <i class="far fa-check-circle"></i> Celebrations, team outings, wellness days<br>
                    <i class="far fa-check-circle"></i> Vibrant workplace culture filled with creativity and camaraderie.
                </div>
            </div>
           
        </div>
    </div>
</div>
<!-- working process area why choose us end -->

<div class="why-choose-us-working-process rts-section-gap">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 pr--50">
                <div class="why-choose-process-left pb--50">
                    <div class="text-left-title-bg-white">
                        <h2 class="title">Why Choose Seyyone?</h2>
                        <p>Behind our success is a people-first culture that nurtures talent, encourages innovation, and empowers every voice.</p>
                    </div>
                </div>
                <div class="thumbnail-working-process">
    <?php 
    $why_choose_image = get_field('why_choose_section_image');
    if($why_choose_image): ?>
        <img src="<?php echo esc_url($why_choose_image['url']); ?>" alt="<?php echo esc_attr($why_choose_image['alt'] ? $why_choose_image['alt'] : 'Why Choose Seyyone'); ?>" style="height: 550px;">
    <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone/home/why_choose_seyyone.jpg" style="height: 550px;" alt="">
    <?php endif; ?>
</div>

            </div>
            <div class="col-lg-6">
                <div class="single-working-process-choose-us wow fadeInUp">
                    <h5 class="title">Proven Experience & Industry Trust</h5>
                    <i class="far fa-check-circle"></i> Seyyone brings decades of proven experience, trusted by healthcare organizations worldwide. Our industry expertise transforms healthcare providers by delivering reliable, efficient, and results-driven solutions that simplify operations and support growth.
                </div>
                <div class="single-working-process-choose-us wow fadeInUp" data-wow-delay=".2s">
                    <h5 class="title">Global Delivery & Client-Focused Solutions</h5>
                    <i class="far fa-check-circle"></i> With global delivery capabilities, Seyyone offers flexible service models that cater to each client's specific needs. Our client-centric approach ensures tailored solutions, seamless collaboration, and consistent service excellence across diverse geographies.
                </div>
                <div class="single-working-process-choose-us wow fadeInUp" data-wow-delay=".4s">
                    <h5 class="title">Quality & Compliance Excellence</h5>
                    <i class="far fa-check-circle"></i> We prioritize quality and compliance, adhering to HIPAA and global regulatory standards. By integrating cutting-edge technology with personalized service, Seyyone delivers innovative solutions that drive operational excellence while maintaining the highest standards of security and compliance.
                </div>
            </div>
        </div>
    </div>
</div>

<br><br>

<?php get_footer(); ?>
