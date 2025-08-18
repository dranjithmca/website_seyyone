<?php
/**
 * Template Name: Home Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Seyyone
 * @since Seyyone 1.0
 */
get_header(); 

$banner_url = get_field('home_banner_image');
 
?>
  
<!-- Banner Section Start -->
 <div class="about-banner-area-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/seyyone/home/gradientdesignshade.jpg'); background-size: cover; background-position: center; clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%); position: relative;">
   <!-- <div class="banner-four-area banner-four-bg rts-section-gap jarallax" style="background-image: url('<?php echo esc_url($banner_url); ?>');">-->
   <div class="banner-four-area rts-section-gap jarallax">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="banner-four-wrapper">
                  <div class="inner-left" style="background-color: #f0f8ff4d;  border-radius: 10px;max-width: 98%; padding:20px;">
                     <h1 class="title wow fadeInUp" data-wow-offset="120" data-wow-delay=".2s" style="visibility: visible;animation-delay: 0.2s;animation-name: fadeInUp;text-align: center; color: #262626;">
                        Transforming
                        <span class="wow move-right" data-wow-offset="120" style="color: blue; display: inline-block;margin-right: 10px;visibility: visible;animation-name: moveright;">Businesses</span>
                        Through
                        <span class="wow move-right" data-wow-offset="120" style="color: blue; display: inline-block;margin-right: 10px;visibility: visible;animation-name: moveright;">Technology</span>
                        &amp; Expertise
                     </h1>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   
   <!-- Wave effect at the bottom of the banner -->
   <div class="position-absolute w-100 z-index-1 bottom-0">
      <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
         <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
         </defs>
         <g class="moving-waves">
            <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40)"></use>
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)"></use>
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)"></use>
            <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)"></use>
            <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)"></use>
            <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,0.95)"></use>
         </g>
      </svg>
   </div>
</div>
<!-- Banner Section End -->

 <div class="banner-why-choose-us" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="" style="width: 100%; padding-right: 30px; padding-left: 30px;  padding-top: 40px; text-align: center; margin: 0 auto;">
                    <h5 class="title">
                        <i>"For over 
                             <span   style="color: blue; "><strong>25 years</strong></span>,
                             Seyyone has been delivering innovative solutions in Healthcare KPO and Software Development to clients worldwide. Our HIPAA-compliant services and cutting-edge technology solutions help businesses achieve operational excellence."</i>
                    </h>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Banner Section Start -->
 <!--
<div class="about-banner-area-bg" style="   background-color: #e1dcda; clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);">
      <div class="banner-four-area   rts-section-gap jarallax">
         <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-four-wrapper">
                        <div class="inner-left" style="background-color: #e1dcda;padding: 20px;border-radius: 10px;max-width: 98%;">
                            <h1 class="title wow fadeInUp" data-wow-offset="120" data-wow-delay=".2s" style="font-size: 75px;visibility: visible;animation-delay: 0.2s;animation-name: fadeInUp;text-align: center; color: #262626;">
                                Transforming
                                <span class="wow move-right" data-wow-offset="120" style="color: #3534ff; display: inline-block;margin-right: 10px;visibility: visible;animation-name: moveright;">Businesses</span>
                                Through
                                <span class="wow move-right" data-wow-offset="120" style="color: #3534ff; display: inline-block;margin-right: 10px;visibility: visible;animation-name: moveright;">Technology</span>
                                &amp; Expertise
                            </h1>
                            <p class="disc wow fadeInUp" data-wow-offset="120" data-wow-delay=".4s" style="visibility: visible;animation-delay: 0.4s;animation-name: fadeInUp;text-align: center; color: #262626;">
                                For over 25 years, Seyyone has been delivering innovative solutions in Healthcare KPO and Software Development to clients worldwide. Our
                                HIPAA-compliant services and cutting-edge technology solutions help businesses achieve operational excellence.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Banner Section End -->

<!-- Statistics Section Start -->
 <!--
 <div class="counter-up-wrapper mt-dec-80">
    <div class="container">
        <div class="row g-0">
            <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                <div class="single-counter-up-one border-top border-left card" style="padding: 30px 10px;">
                    <div class="icon-area">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone/index/v1/calendar_1.png" style="width: 33px; height: 32px;" alt="icon">
                    </div>
                    <h3 class="title" style="font-size: clamp(18px, 3vw, 24px);">
                        <span class="counter">25</span>+ Years
                    </h3>                    <p style="font-size: clamp(12px, 2vw, 14px);">Industry Experience</p>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                <div class="single-counter-up-one border-top" style="padding: 30px 10px;">
                    <div class="icon-area">
                        
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/icons/08.svg" alt="icon">
                    </div>
                    <h3 class="title" style="font-size: clamp(18px, 3vw, 24px);">
                        <span class="counter">70</span>+ Clients
                    </h3>
                    <p style="font-size: clamp(12px, 2vw, 14px);">across 8 countries</p>
                </div>
            </div>
          
            <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                <div class="single-counter-up-one border-top" style="padding: 30px 10px;">
                    <div class="icon-area">
                        
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/icons/04.svg" alt="icon">
                    </div>
                    <h3 class="title" style="font-size: clamp(18px, 3vw, 24px);">
                        <span class="counter">150</span>+
                    </h3>
                    <p style="font-size: clamp(12px, 2vw, 14px);">Employees</p>
                </div>
            </div>
            
            <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                <div class="single-counter-up-one border-top" style="padding: 30px 10px;">
                    <div class="icon-area">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone/index/icons8-application-32.png" alt="icon">
                    </div>
                    <h3 class="title" style="font-size: clamp(18px, 3vw, 24px);">
                        <span class="counter">40</span>+
                    </h3>
                    <p style="font-size: clamp(12px, 2vw, 14px);">Software Projects</p>
                </div>
            </div>
           
            
             <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                <div class="single-counter-up-one border-top" style="padding: 16px 10px;">
                    <div class="icon-area">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/icons/02.svg" alt="icon">
                    </div>
                    <h3 class="title" style="font-size: clamp(18px, 3vw, 24px);">
                            <span class="counter">25</span>+ <br>EMR Modules
                    </h3>
                    <p style="font-size: clamp(12px, 2vw, 14px);">Exposure </p>
                </div>
            </div>

             <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                <div class="single-counter-up-one border-top" style="padding: 16px 10px;">
                    <div class="icon-area">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/icons/03.svg" alt="icon">
                    </div>
                    <h3 class="title" style="font-size: clamp(18px, 3vw, 24px);">
                          Scribed <span class="counter">40</span> Mn <br>Lines
                    </h3>
                    <p style="font-size: clamp(12px, 2vw, 14px);">Summarized 8 Mn pages </p>
                </div>
            </div>
        </div>
    </div>
</div>  -->
<!-- Statistics Section End -->

 <!-- Statistics Section Start -->
  <!--
<div class="counter-up-wrapper mt-dec-80">
    <div class="container">
        <div class="col-lg-11 z-index-2 border-radius-xl mt-n10 mx-auto py-4 blur shadow-blur">
            <div class="row">
                <div class="col-md-3 position-relative">
                    
                    <div class="p-4 text-center stat-box">
                        
                        <h2 class="title "  ><span class="counter">25</span>+ </h2>
                        <h4 class="mt-2">Years</h4>
                        <p class="text-sm mb-0">Industry Experience</p>
                    </div>
                    <hr class="vertical dark">
                </div>
                
                <div class="col-md-3 position-relative">
                    <div class="p-4 text-center stat-box">
                       <h2 class="title"  ><span class="counter">70</span>+ </h2>
                        <h4 class="mt-2">Clients</h4>
                        <p class="text-sm mb-0">Across 8 Countries</p>
                    </div>
                    <hr class="vertical dark">
                </div>
                <div class="col-md-3 position-relative">
                    <div class="p-4 text-center stat-box">
                       <h2 class="title"  ><span class="counter">150</span>+ </h2>
                        <h4 class="mt-2">Employees</h4>
                        <p class="text-sm mb-0">Dedicated Team</p>
                    </div>
                    <hr class="vertical dark">
                </div>
                <div class="col-md-3">
                    <div class="p-4 text-center stat-box">
                             <h2 class="title"  ><span class="counter">40</span>+ </h2>
                        <h4 class="mt-2">Projects</h4>
                        <p class="text-sm mb-0">Software Solutions</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->
<!-- Statistics Section End -->


<br>

<!-- Dual Expertise Section Start -->
 <!--
<div class="container">
    <div class="row">
 
        <div class="col-lg-6 mb-4">
           <div class="service-card bg-light p-5 rounded h-100 wow fadeInLeft" data-wow-delay="0.3s" style="border-radius: 10px !important;">

                <h3 class="mb-3"><span class="blue-underline">Hea</span>lthcare KPO</h3>
                <p class="mb-4" >
                    Our HIPAA-compliant healthcare knowledge process outsourcing services help medical facilities streamline operations, reduce costs, and improve patient
                    care. With over 25 years of experience, we deliver accurate and timely solutions.
                </p>
                <div class="row">
                    <div class="col-md-7">
                        <div class="service-list mb-4" style="margin-left: 5px; ">
                            <div class="service-item" style="margin-bottom: 12px; "><i class="fa fa-chevron-right" style="color: #3f5cd6; margin-right: 5px;"></i> Medical Record Summarization</div>
                            <div class="service-item" style="margin-bottom: 12px;"><i class="fa fa-chevron-right" style="color: #3f5cd6; margin-right: 5px;"></i> Peer Review Summary</div>
                            <div class="service-item" style="margin-bottom: 12px;"><i class="fa fa-chevron-right" style="color: #3f5cd6; margin-right: 5px;"></i> APS Summary</div>
                            <div class="service-item" style="margin-bottom: 12px;"><i class="fa fa-chevron-right" style="color: #3f5cd6; margin-right: 5px;"></i> Medical Transcription</div>
                            <div class="service-item" style="margin-bottom: 12px;"><i class="fa fa-chevron-right" style="color: #3f5cd6; margin-right: 5px;"></i> Medical Scribe</div>
                            <div class="service-item" style="margin-bottom: 12px;"><i class="fa fa-chevron-right" style="color: #3f5cd6; margin-right: 5px;"></i> Medical Billing</div>
                            <div class="service-item" style="margin-bottom: 12px;"><i class="fa fa-chevron-right" style="color: #3f5cd6; margin-right: 5px;"></i> EHR/EMR – Virtual Assistance</div>
                             

                             
                        </div>
                        
                            <a href="<?php echo home_url('/healthcare'); ?>" class="rts-btn btn-border mb-4">
                                Explore Healthcare KPO
                                <img class="injectable" src="<?php echo get_template_directory_uri(); ?>/assets/images/service/icons/13.svg" alt="arrow">
                            </a>
                       
                    </div>
                    <div class="col-md-5">
                        <div class="h-100 d-flex align-items-center">
                                <?php 
                                $healthcare_image = get_field('healthcare_kpo_image');
                                if($healthcare_image): ?>
                                    <img src="<?php echo esc_url($healthcare_image['url']); ?>" 
                                        alt="<?php echo esc_attr($healthcare_image['alt'] ? $healthcare_image['alt'] : 'Healthcare KPO'); ?>" 
                                        class="img-fluid rounded" 
                                        style="width: 100%; object-fit: cover;">
                                <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone/home/Home - healthcare kpo1.jpg" 
                                        alt="Healthcare KPO" 
                                        class="img-fluid rounded" 
                                        style="width: 100%; object-fit: cover;">
                                <?php endif; ?>
                        </div>
                    </div>
        
                </div>
            </div>
        </div>
         
        <div class="col-lg-6 mb-4">
            <div class="service-card bg-light p-5 rounded h-100 wow fadeInRight" data-wow-delay="0.3s"  style="border-radius: 10px !important;">
               
                <h3 class="mb-3"><span class="blue-underline">Sof</span>tware Solutions</h3>
                
                <p class="mb-4">
                    Our software development team creates custom solutions tailored to your specific business needs. We specialize in healthcare software, web
                    applications, mobile apps, and enterprise solutions that drive efficiency and growth.
                </p>
                <div class="row">
                    <div class="col-md-7">
                        <div class="service-list mb-4" style="margin-left: 4px;">
                            <div class="service-item" style="margin-bottom: 12px;"><i class="fa fa-chevron-right" style="color: #3f5cd6; margin-right: 5px;"></i> Software Services</div>
                            <div class="service-item" style="margin-bottom: 12px;"><i class="fa fa-chevron-right" style="color: #3f5cd6; margin-right: 5px;"></i> Mobile Solutions</div>
                            <div class="service-item" style="margin-bottom: 12px;"><i class="fa fa-chevron-right" style="color: #3f5cd6; margin-right: 5px;"></i> Cloud Solutions</div>
                            <div class="service-item" style="margin-bottom: 12px;"><i class="fa fa-chevron-right" style="color: #3f5cd6; margin-right: 5px;"></i> AI/ML Solutions</div>
                            <div class="service-item" style="margin-bottom: 12px;"><i class="fa fa-chevron-right" style="color: #3f5cd6; margin-right: 5px;"></i> Analytical and Reporting</div>
                            <div class="service-item" style="margin-bottom: 12px;"><i class="fa fa-chevron-right" style="color: #3f5cd6; margin-right: 5px;"></i> Talent Management</div>
                            <div class="service-item" style="margin-bottom: 12px;"><i class="fa fa-chevron-right" style="color: #3f5cd6; margin-right: 5px;"></i> Remote Hardware Infra</div>
                        </div>
                        <a href="<?php echo home_url('/software'); ?>" class="rts-btn btn-border mb-4">
                            Explore Software Solutions
                            <img class="injectable" src="<?php echo get_template_directory_uri(); ?>/assets/images/service/icons/13.svg" alt="arrow">
                        </a>
                    </div>
                    <div class="col-md-5">
                        <div class="h-100 d-flex align-items-center">
    <?php 
    $software_image = get_field('software_solutions_image');
    if($software_image): ?>
        <img src="<?php echo esc_url($software_image['url']); ?>" 
             alt="<?php echo esc_attr($software_image['alt'] ? $software_image['alt'] : 'Software Solutions'); ?>" 
             class="img-fluid rounded" 
             style="width: 100%; object-fit: cover;">
    <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone/home/Home - software services.jpg" 
             alt="Software Solutions" 
             class="img-fluid rounded" 
             style="width: 100%; object-fit: cover;">
    <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Dual Expertise Section End -->


 


<!-- Dual Expertise Section Start -->
<div class=" ">
    <div class="row">
        <!-- Healthcare KPO Card -->
        <div class="col-lg-6 mb-4">
           <div class="service-card bg-light p-5 rounded h-100 wow fadeInLeft" data-wow-delay="0.3s" style="border-radius: 10px !important;">

             <h3 class="mb-3  fadeIn" style="text-align: center;"><span class="blue-underline">Healthcare KPO</span></h3>
                <p class="mb-4" style="
                    font-size: large;
                    padding-top: 7px;
                    ">
                                    Our HIPAA-compliant healthcare knowledge process outsourcing services help medical facilities streamline operations, reduce costs, and improve patient care. With over 25 years of experience, we deliver accurate and timely solutions.
                </p>

                 <div class="container">
                    <div class="row">
                        <!-- First Column - 2 Cards -->
                        <div class="col-md-4 d-flex flex-column justify-content-center">
                            <!-- Card 1 --> 

                           
                            <div class="service-card mb-4 wow fadeInUp" data-wow-offset="120">
                                  <div class="single-case-studies-three" style="background-color: transparent; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/seyyone/home/sw_hc_card_imgs/Medical Record Summarization.png'); background-position: center; background-size: cover; border-radius: 15px !important; box-shadow: 0 10px 30px rgba(0,0,0,0.08); overflow: hidden; transition: all 0.3s ease; max-width: 90%; margin: 0 auto; min-height: 103px; align-content: center; position: relative;">
                                    <!-- Reduced blur overlay -->
                                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(255,255,255,0.6); backdrop-filter: blur(1.5px); -webkit-backdrop-filter: blur(1.5px);"></div>
                                            <div class="inner-content" style="padding: 17px; text-align: center; position: relative; z-index: 1;">
                                            <h4 class="title" style="font-size: 20px; color: #333; margin-bottom: 0px !important; text-shadow: 0 0 2px rgba(255,255,255,0.8);">Medical Record Summarization</h4>
                                        </div>
                                  </div>
                             </div>
                            
                            <!-- Card 2 -->
                            <div class="service-card wow fadeInUp" data-wow-delay=".2s" data-wow-offset="120">
                                 <div class="single-case-studies-three" style="background-color: transparent; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/seyyone/home/sw_hc_card_imgs/APS Summary.png'); background-position: center; background-size: cover; border-radius: 15px !important; box-shadow: 0 10px 30px rgba(0,0,0,0.08); overflow: hidden; transition: all 0.3s ease; max-width: 90%; margin: 0 auto; min-height: 103px; align-content: center; position: relative;">
                                    <!-- Reduced blur overlay -->
                                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(255,255,255,0.6); backdrop-filter: blur(1.5px); -webkit-backdrop-filter: blur(1.5px);"></div>
                                            <div class="inner-content" style="padding: 17px; text-align: center; position: relative; z-index: 1;">
                                            <h4 class="title" style="font-size: 20px; color: #333; margin-bottom: 0px !important; text-shadow: 0 0 2px rgba(255,255,255,0.8);">APS Summary</h4>
                                        </div>
                                  </div>
                                 
                            </div>
                        </div>
                        
                        <!-- Second Column - 3 Cards -->
                        <div class="col-md-4">
                            <!-- Card 3 -->
                            <div class="service-card mb-4 wow fadeInUp" data-wow-offset="120">
                                <div class="single-case-studies-three" style="background-color: transparent; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/seyyone/home/sw_hc_card_imgs/Peer Review Summaries.png'); background-position: center; background-size: cover; border-radius: 15px !important; box-shadow: 0 10px 30px rgba(0,0,0,0.08); overflow: hidden; transition: all 0.3s ease; max-width: 90%; margin: 0 auto; min-height: 103px; align-content: center; position: relative;">
                                    <!-- Reduced blur overlay -->
                                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(255,255,255,0.6); backdrop-filter: blur(1.5px); -webkit-backdrop-filter: blur(1.5px);"></div>
                                            <div class="inner-content" style="padding: 17px; text-align: center; position: relative; z-index: 1;">
                                            <h4 class="title" style="font-size: 20px; color: #333; margin-bottom: 0px !important; text-shadow: 0 0 2px rgba(255,255,255,0.8);">Peer Review Summary</h4>
                                        </div>
                                  </div>
                                 
                                 
                            </div>
                            
                            <!-- Card 4 -->
                            <div class="service-card mb-4 wow fadeInUp" data-wow-delay=".2s" data-wow-offset="120">
                                <div class="single-case-studies-three" style="background-color: transparent; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/seyyone/home/sw_hc_card_imgs/Medical Transcription.png'); background-position: center; background-size: cover; border-radius: 15px !important; box-shadow: 0 10px 30px rgba(0,0,0,0.08); overflow: hidden; transition: all 0.3s ease; max-width: 90%; margin: 0 auto; min-height: 103px; align-content: center; position: relative;">
                                    <!-- Reduced blur overlay -->
                                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(255,255,255,0.6); backdrop-filter: blur(1.5px); -webkit-backdrop-filter: blur(1.5px);"></div>
                                            <div class="inner-content" style="padding: 17px; text-align: center; position: relative; z-index: 1;">
                                            <h4 class="title" style="font-size: 20px; color: #333; margin-bottom: 0px !important; text-shadow: 0 0 2px rgba(255,255,255,0.8);">Medical Transcription</h4>
                                        </div>
                                  </div>
                                 
                            </div>
                            
                            <!-- Card 5 -->
                            <div class="service-card wow fadeInUp" data-wow-delay=".4s" data-wow-offset="120">
                                   <div class="single-case-studies-three" style="background-color: transparent; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/seyyone/home/sw_hc_card_imgs/Remote Medical Scribe.png'); background-position: center; background-size: cover; border-radius: 15px !important; box-shadow: 0 10px 30px rgba(0,0,0,0.08); overflow: hidden; transition: all 0.3s ease; max-width: 90%; margin: 0 auto; min-height: 103px; align-content: center; position: relative;">
                                    <!-- Reduced blur overlay -->
                                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(255,255,255,0.6); backdrop-filter: blur(1.5px); -webkit-backdrop-filter: blur(1.5px);"></div>
                                            <div class="inner-content" style="padding: 17px; text-align: center; position: relative; z-index: 1;">
                                            <h4 class="title" style="font-size: 20px; color: #333; margin-bottom: 0px !important; text-shadow: 0 0 2px rgba(255,255,255,0.8);">Medical Scribe</h4>
                                        </div>
                                  </div>
                            </div>
                        </div>
                        
                        <!-- Third Column - 2 Cards -->
                        <div class="col-md-4 d-flex flex-column justify-content-center">
                            <!-- Card 6 -->
                            <div class="service-card mb-4 wow fadeInUp" data-wow-offset="120">
                                <div class="single-case-studies-three" style="background-color: transparent; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/seyyone/home/sw_hc_card_imgs/Medical Billing.png'); background-position: center; background-size: cover; border-radius: 15px !important; box-shadow: 0 10px 30px rgba(0,0,0,0.08); overflow: hidden; transition: all 0.3s ease; max-width: 90%; margin: 0 auto; min-height: 103px; align-content: center; position: relative;">
                                    <!-- Reduced blur overlay -->
                                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(255,255,255,0.6); backdrop-filter: blur(1.5px); -webkit-backdrop-filter: blur(1.5px);"></div>
                                            <div class="inner-content" style="padding: 17px; text-align: center; position: relative; z-index: 1;">
                                            <h4 class="title" style="font-size: 20px; color: #333; margin-bottom: 0px !important; text-shadow: 0 0 2px rgba(255,255,255,0.8);">Medical Billing</h4>
                                        </div>
                                  </div>
                            </div>
                            
                            <!-- Card 7 -->
                            <div class="service-card wow fadeInUp" data-wow-delay=".2s" data-wow-offset="120">
                                 
                                <div class="single-case-studies-three" style="background-color: transparent; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/seyyone/home/sw_hc_card_imgs/EMR EHR Virtual Assistance.png'); background-position: center; background-size: cover; border-radius: 15px !important; box-shadow: 0 10px 30px rgba(0,0,0,0.08); overflow: hidden; transition: all 0.3s ease; max-width: 90%; margin: 0 auto; min-height: 103px; align-content: center; position: relative;">
                                    <!-- Reduced blur overlay -->
                                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(255,255,255,0.6); backdrop-filter: blur(1.5px); -webkit-backdrop-filter: blur(1.5px);"></div>
                                            <div class="inner-content" style="padding: 17px; text-align: center; position: relative; z-index: 1;">
                                            <h4 class="title" style="font-size: 20px; color: #333; margin-bottom: 0px !important; text-shadow: 0 0 2px rgba(255,255,255,0.8);">EHR/EMR</h4>
                                        </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
        <!-- Software Solutions Card -->
        <div class="col-lg-6 mb-4">
            <div class="service-card bg-light p-5 rounded h-100 wow fadeInRight" data-wow-delay="0.3s"  style="border-radius: 10px !important;">
               
           
              <h3 class="mb-3  fadeIn" style="text-align: center;"><span class="blue-underline">Software Solutions</span></h3>
                <p class="mb-4" style="
                    font-size: large;
                    padding-top: 7px;
                    ">
                    Our software development team creates custom solutions tailored to your specific business needs. We specialize in healthcare software, web
                    applications, mobile apps, and enterprise solutions that drive efficiency and growth.
                </p>

                <div class="container">
                    <div class="row">
                        <!-- First Column - 2 Cards -->
                        <div class="col-md-4 d-flex flex-column justify-content-center">
                            <!-- Card 1 -->
                          <div class="service-card mb-4 wow fadeInUp" data-wow-offset="120">
                                <div class="single-case-studies-three" style="background-color: transparent; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/seyyone/home/software/Cloud.jpg'); background-position: center; background-size: cover; border-radius: 15px !important; box-shadow: 0 10px 30px rgba(0,0,0,0.08); overflow: hidden; transition: all 0.3s ease; max-width: 90%; margin: 0 auto; min-height: 103px; align-content: center; position: relative;">
                                    <!-- Reduced blur overlay -->
                                    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(255,255,255,0.6); backdrop-filter: blur(1.5px); -webkit-backdrop-filter: blur(1.5px);"></div>
                                    <div class="inner-content" style="padding: 17px; text-align: center; position: relative; z-index: 1;">
                                        <h4 class="title" style="font-size: 20px; color: #333; margin-bottom: 0px !important; text-shadow: 0 0 2px rgba(255,255,255,0.8);">Software Services</h4>
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                             <div class="service-card mb-4 wow fadeInUp" data-wow-offset="120">

                                <div class="single-case-studies-three" style="background-color: transparent; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/industry/07.webp'); background-position: center; background-size: cover; border-radius: 15px !important; box-shadow: 0 10px 30px rgba(0,0,0,0.08); overflow: hidden; transition: all 0.3s ease; max-width: 90%; margin: 0 auto; min-height: 103px; align-content: center; position: relative;">
                                    <!-- Blur overlay -->
                                        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(255,255,255,0.6); backdrop-filter: blur(1.5px); -webkit-backdrop-filter: blur(1.5px);">
                                            
                                        </div>
                                        <div class="inner-content" style="padding: 17px; text-align: center; position: relative; z-index: 1;">
                                            <h4 class="title" style="font-size: 20px; color: #333; margin-bottom: 0px !important; text-shadow: 0 0 2px rgba(255,255,255,0.8);">Mobile Solutions</h4>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        <!-- Second Column - 3 Cards -->
                        <div class="col-md-4">
                            <!-- Card 3 -->
                            <div class="service-card mb-4 wow fadeInUp" data-wow-offset="120">
                                  <div class="single-case-studies-three" style="background-color: #f8f9fa;border-radius: 15px !important;box-shadow: 0 10px 30px rgba(0,0,0,0.08);overflow: hidden;transition: all 0.3s ease;max-width: 90%;margin: 0 auto;min-height: 103px;align-content: center;">
                                    <div class="inner-content" style="padding: 17px; text-align: center;">
                                        <h4 class="title" style="font-size: 20px;color: #333;margin-bottom: 0px !important;">Cloud Solutions</h4>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <!-- Card 4 -->
                            <div class="service-card mb-4 wow fadeInUp" data-wow-delay=".2s" data-wow-offset="120">
                                 <div class="single-case-studies-three" style="background-color: #f8f9fa;border-radius: 15px !important;box-shadow: 0 10px 30px rgba(0,0,0,0.08);overflow: hidden;transition: all 0.3s ease;max-width: 90%;margin: 0 auto;min-height: 103px;align-content: center;">
                                    <div class="inner-content" style="padding: 17px; text-align: center;">
                                        <h4 class="title" style="font-size: 20px;color: #333;margin-bottom: 0px !important;">AI/ML Solutions</h4>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <!-- Card 5 -->
                            <div class="service-card wow fadeInUp" data-wow-delay=".4s" data-wow-offset="120">
                                 <div class="single-case-studies-three" style="background-color: #f8f9fa;border-radius: 15px !important;box-shadow: 0 10px 30px rgba(0,0,0,0.08);overflow: hidden;transition: all 0.3s ease;max-width: 90%;margin: 0 auto;min-height: 103px;align-content: center;">
                                    <div class="inner-content" style="padding: 17px; text-align: center;">
                                        <h4 class="title" style="font-size: 20px;color: #333;margin-bottom: 0px !important;">Analytical and Reporting</h4>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        
                        <!-- Third Column - 2 Cards -->
                        <div class="col-md-4 d-flex flex-column justify-content-center">
                            <!-- Card 6 -->
                            <div class="service-card mb-4 wow fadeInUp" data-wow-offset="120">
                                  <div class="single-case-studies-three" style="background-color: #f8f9fa;border-radius: 15px !important;box-shadow: 0 10px 30px rgba(0,0,0,0.08);overflow: hidden;transition: all 0.3s ease;max-width: 90%;margin: 0 auto;min-height: 103px;align-content: center;">
                                    <div class="inner-content" style="padding: 17px; text-align: center;">
                                        <h4 class="title" style="font-size: 20px;color: #333;margin-bottom: 0px !important;">Talent Management</h4>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <!-- Card 7 -->
                            <div class="service-card wow fadeInUp" data-wow-delay=".2s" data-wow-offset="120">
                                <div class="single-case-studies-three" style="background-color: #f8f9fa;border-radius: 15px !important;box-shadow: 0 10px 30px rgba(0,0,0,0.08);overflow: hidden;transition: all 0.3s ease;max-width: 90%;margin: 0 auto;min-height: 103px;align-content: center;">
                                    <div class="inner-content" style="padding: 17px; text-align: center;">
                                        <h4 class="title" style="font-size: 20px;color: #333;margin-bottom: 0px !important;">Remote Hardware Infra</h4>
                                    </div>
                                </div>
                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dual Expertise Section End -->



<!-- Our Values Section Start -->
<div class="keybenefits-area bg-light">
    <br>
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="title-area-center-inner-with-sub">
                    <span>Our Core Values</span><br>
                    <h2 class="">The Principles That Guide Us</h2>
                    <p class="disc">
                        Our values form the foundation of our company culture and drive our approach to every client engagement.
                    </p>
                </div>
            </div>
        </div>
        <div class="row g-0 mt--15">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="single-benefits-area-wrapper bg-light">
                    <div class="single-project-area-5">
                        <a href="javascript:void(0);" class="thumbnail">
                             <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/04.webp" alt="case-studies">
                        </a>
                        <div class="inner-content">
                            <div class="inner">
                                <div class="left-content">
                                    <span>Delivering the highest quality in everything we do</span>
                                    <a href="javascript:void(0);">
                                        <h4 class="">Excellence</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="over_link"></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="single-benefits-area-wrapper bg-light">
                    <div class="single-project-area-5">
                        <a href="javascript:void(0);" class="thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/industry/07.webp" alt="case-studies">
                        </a>
                        <div class="inner-content">
                            <div class="inner">
                                <div class="left-content">
                                 <span>Maintaining the highest ethical standards</span>
                                    <a href="javascript:void(0);">
                                        <h4 class="">Integrity</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="over_link"></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="single-benefits-area-wrapper bg-light">
                    <div class="single-project-area-5">
                        <a href="javascript:void(0);" class="thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/02.webp" alt="case-studies">
                        </a>
                        <div class="inner-content">
                            <div class="inner">
                                <div class="left-content">
                                 <span>Constantly improving our solutions and processes</span>
                                    <a href="javascript:void(0);">
                                        <h4 class="">Innovation</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="over_link"></a>
                    </div>
                </div>
           </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="single-benefits-area-wrapper bg-light">
                    <div class="single-project-area-5">
                        <a href="javascript:void(0);" class="thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service/03.webp" alt="case-studies">
                        </a>
                        <div class="inner-content">
                            <div class="inner">
                                <div class="left-content">
                                 <span>Putting our clients' needs at the center of our work</span>
                                    <a href="javascript:void(0);">
                                        <h4 class="">Client Focus</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="over_link"></a>
                    </div>
                </div>
           </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="single-benefits-area-wrapper bg-light">
                    <div class="single-project-area-5">
                        <a href="javascript:void(0);" class="thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-studies/21.webp" alt="case-studies">
                        </a>
                        <div class="inner-content">
                            <div class="inner">

                                                  <div class="left-content">
                                 <span>Working together to achieve exceptional results</span>
                                    <a href="javascript:void(0);">
                                        <h4 class="">Collaboration</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="over_link"></a>
                    </div>
                </div>
           </div>

           <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="single-benefits-area-wrapper bg-light">
                    <div class="single-project-area-5">
                        <a href="javascript:void(0);" class="thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-studies/22.webp" alt="case-studies">
                        </a>
                        <div class="inner-content">
                            <div class="inner">
                                <div class="left-content">
                                 <span>Adhering to all regulatory requirements</span>
                                    <a href="javascript:void(0);">
                                        <h4 class="">Compliance</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="over_link"></a>
                    </div>
                </div>
           </div>

           <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="single-benefits-area-wrapper bg-light">
                    <div class="single-project-area-5">
                        <a href="javascript:void(0);" class="thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-studies/23.webp" alt="case-studies">
                        </a>
                        <div class="inner-content">
                            <div class="inner">
                                <div class="left-content">
                                 <span>Protecting sensitive data with robust measures</span>
                                    <a href="javascript:void(0);">
                                        <h4 class="">Security</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="over_link"></a>
                    </div>
                </div>
           </div>

           <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="single-benefits-area-wrapper bg-light">
                    <div class="single-project-area-5">
                        <a href="javascript:void(0);" class="thumbnail">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/case-studies/24.webp" alt="case-studies">
                        </a>
                        <div class="inner-content">
                            <div class="inner">
                                <div class="left-content">
                                 <span>Leveraging deep domain knowledge</span>
                                    <a href="javascript:void(0);">
                                        <h4 class="">Expertise</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="over_link"></a>
                    </div>
                </div>
           </div>
        </div>
    </div>
</div>
<!-- Our Values Section End -->
 
<!--
<div class="counter-up-wrapper mt-dec-80">
    <div class="container">
        <div class="row g-0">
            <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                <div class="single-counter-up-one border-top border-left card" style="padding: 30px 10px;">
                    <div class="icon-area">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone/index/v1/calendar_1.png" style="width: 33px; height: 32px;" alt="icon">
                    </div>
                    <h3 class="title" style="font-size: clamp(18px, 3vw, 24px);">
                        <span class="counter">25</span>+ Years
                    </h3>                    <p style="font-size: clamp(12px, 2vw, 14px);">Industry Experience</p>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                <div class="single-counter-up-one border-top" style="padding: 30px 10px;">
                    <div class="icon-area">
                        
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/icons/08.svg" alt="icon">
                    </div>
                    <h3 class="title" style="font-size: clamp(18px, 3vw, 24px);">
                        <span class="counter">70</span>+ Clients
                    </h3>
                    <p style="font-size: clamp(12px, 2vw, 14px);">across 8 countries</p>
                </div>
            </div>
          
            <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                <div class="single-counter-up-one border-top" style="padding: 30px 10px;">
                    <div class="icon-area">
                        
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/icons/04.svg" alt="icon">
                    </div>
                    <h3 class="title" style="font-size: clamp(18px, 3vw, 24px);">
                        <span class="counter">150</span>+
                    </h3>
                    <p style="font-size: clamp(12px, 2vw, 14px);">Employees</p>
                </div>
            </div>
            
            <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                <div class="single-counter-up-one border-top" style="padding: 30px 10px;">
                    <div class="icon-area">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone/index/icons8-application-32.png" alt="icon">
                    </div>
                    <h3 class="title" style="font-size: clamp(18px, 3vw, 24px);">
                        <span class="counter">40</span>+
                    </h3>
                    <p style="font-size: clamp(12px, 2vw, 14px);">Software Projects</p>
                </div>
            </div>
           
            
             <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                <div class="single-counter-up-one border-top" style="padding: 16px 10px;">
                    <div class="icon-area">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/icons/02.svg" alt="icon">
                    </div>
                    <h3 class="title" style="font-size: clamp(18px, 3vw, 24px);">
                            <span class="counter">25</span>+ <br>EMR Modules
                    </h3>
                    <p style="font-size: clamp(12px, 2vw, 14px);">Exposure </p>
                </div>
            </div>

             <div class="col-6 col-sm-6 col-md-4 col-lg-2">
                <div class="single-counter-up-one border-top" style="padding: 16px 10px;">
                    <div class="icon-area">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/icons/03.svg" alt="icon">
                    </div>
                    <h3 class="title" style="font-size: clamp(18px, 3vw, 24px);">
                          Scribed <span class="counter">40</span> Mn <br>Lines
                    </h3>
                    <p style="font-size: clamp(12px, 2vw, 14px);">Summarized 8 Mn pages </p>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- Our Clients Section Start -->
 
<div class="single-benefits-area-wrapper bg-light" id="clients">
    <div class="rts-brand-area-start pt--20" dir="ltr" >
        <div class="container">
            <div class="title-area-center-inner-with-sub">
                <span>Our Clients & EMRs</span><br>
            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-area-main-wrapper" style="padding: 20px;">
                        <div class="swiper mySwiper-brand swiper-initialized swiper-horizontal swiper-backface-hidden">
                            <div class="swiper-wrapper" id="swiper-wrapper-0e4197335dd454510" aria-live="off"
                                style="transition-duration: 0ms; transform: translate3d(-1919.12px, 0px, 0px); transition-delay: 0ms;">

                                <div class="swiper-slide" role="group" aria-label="7 / 10" data-swiper-slide-index="6" style="width: 270.25px; margin-right: 25px;">
                                    <div class="single-brand">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone_clients/220px-Epic.png" alt="brand">
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="8 / 10" style="width: 270.25px; margin-right: 25px;" data-swiper-slide-index="7">
                                    <div class="single-brand">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone_clients/bkg-login-CaretrackerHarris-1.png" alt="brand">
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="9 / 10" style="width: 270.25px; margin-right: 25px;" data-swiper-slide-index="8">
                                    <div class="single-brand">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone_clients/bkg-login-CaretrackerHarris.png" alt="brand">
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="10 / 10" style="width: 270.25px; margin-right: 25px;" data-swiper-slide-index="9">
                                    <div class="single-brand">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone_clients/curemd-142-52.png" alt="brand">
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="1 / 10" style="width: 270.25px; margin-right: 25px;" data-swiper-slide-index="0">
                                    <div class="single-brand">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone_clients/salesforce.png" alt="brand">
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="2 / 10" style="width: 270.25px; margin-right: 25px;" data-swiper-slide-index="1">
                                    <div class="single-brand">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone_clients/main-logo.png" alt="brand">
                                    </div>
                                </div>
                                <div class="swiper-slide" role="group" aria-label="3 / 10" data-swiper-slide-index="2" style="width: 270.25px; margin-right: 25px;">
                                    <div class="single-brand">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone_clients/netsuite.png" alt="brand">
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-prev" role="group" aria-label="4 / 10" data-swiper-slide-index="3"
                                    style="width: 270.25px; margin-right: 25px;">
                                    <div class="single-brand">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone_clients/nextgen-logo-color.png" alt="brand">
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-active" role="group" aria-label="5 / 10" data-swiper-slide-index="4"
                                    style="width: 270.25px; margin-right: 25px;">
                                    <div class="single-brand">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone_clients/logo-color.png" alt="brand">
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-next" role="group" aria-label="6 / 10" data-swiper-slide-index="5"
                                    style="width: 270.25px; margin-right: 25px;">
                                    <div class="single-brand">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone_clients/Workday.png" alt="brand">
                                    </div>
                                </div>
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Disclaimer text -->
            <div class="row mt-3">
                <div class="col-lg-12 text-center">
                    <p class="small text-muted">Disclaimer: All brand logos are owned by the respective companies and are used here for identification purposes only.</p>
                </div>
            </div>
        </div>
    </div>
</div>


 

 <!-- Testimonials Section Start -->
 <div class="rts-testimonials-area-about rts-section-gap bg-dark-1" dir="ltr" id="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="testimonails-title-wrapper-between">
                    <h2 class="title">What they said about us</h2>
                    <div class="swiper-btn">
                        <a href="<?php echo home_url('/testimonials'); ?>" class="rts-btn btn-primary">
                            View More
                            <img class="injectable" src="<?php echo get_template_directory_uri(); ?>/assets/images/service/icons/13.svg" alt="arrow">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt--55">
                <div class="row" style="display: flex; flex-wrap: wrap;">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="single-testimonials-about" style="height: 100%; display: flex; flex-direction: column;">
                            <p class=" " style="flex-grow: 1; overflow: hidden; font-style: italic;">
                                "Thx for all of your help. You're a good teammate.
                                I know that it has saved my practice and enjoyment of medicine."
                            </p>
                            <div class="author-area" style="margin-top: auto;">
                                <div class="information">
                                    <h5 class="title">Plastic Surgeon on the West Coast</h5>
                                    <p>USA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="single-testimonials-about" style="height: 100%; display: flex; flex-direction: column;">
                            <p class=" " style="flex-grow: 1; overflow: hidden; font-style: italic;">
                                "We feel your company is trustworthy and would like to give you the business instead of looking
                                elsewhere and thanks for keeping up a high standard."
                            </p>
                            <div class="author-area" style="margin-top: auto;">
                                <div class="information">
                                    <h5 class="title">Orthopedic Physician</h5>
                                    <p>Australia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="single-testimonials-about" style="height: 100%; display: flex; flex-direction: column;">
                            <p class=" " style="flex-grow: 1; overflow: hidden; font-style: italic;">
                                "Thank you for continuing to do a wonderful job with our transcription!
                                Great job! I'm impressed. Thank you so much! I'm excited that this transition is turning out to be easier
                                than I was expecting."
                            </p>
                            <div class="author-area" style="margin-top: auto;">
                                <div class="information">
                                    <h5 class="title">Office Manager, Oregon Eye Clinic</h5>
                                    <p>USA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonials Section End -->


<!-- Contact area start -->
<div class="contact-area-start rts-section-gap bg_color-dark-5" style="padding: 40px 0;" id="ourclients">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-center-footer-5">
                    <h5 class="title">Our Client Geographies</h5>
                </div>
            </div>
        </div>
       <div class="row mt-4 d-none d-md-block">
            <div class="col-lg-12">
                 <div class="thumbnail-map" style="position: relative; height: 350px; overflow: hidden;">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact/01.webp" alt="World Map" style="width: 100%; height: auto; max-height: 350px; object-fit: contain;">
            <!-- USA tooltip -->
            <div class="map-tool-tip-single" style="position: absolute; top: 35%; left: 35%;">
                <a href="#" class="map-tooltip" data-tooltip="United States" tabindex="0">
                    <span></span>
                </a>
            </div>
            <!-- UK tooltip -->
            
             <div class="map-tool-tip-single" style="position: absolute; top: 23%; left: 47%;">
                <a href="#" class="map-tooltip" data-tooltip="United Kingdom" tabindex="0">
                    <span></span>
                </a>
            </div>
            <!-- Ireland tooltip -->
            <div class="map-tool-tip-single seven" style="position: absolute; top: 27%; left: 46%;">
                <a href="#" class="map-tooltip" data-tooltip="Ireland" tabindex="0">
                    <span></span>
                </a>
            </div>

              <!-- Germany tooltip -->
            <div class="map-tool-tip-single six" style="position: absolute; top: 28%; left: 50%;">
                <a href="#" class="map-tooltip" data-tooltip="Germany" tabindex="0">
                    <span></span>
                </a>
            </div>

              <!-- Netherlands tooltip -->
            <div class="map-tool-tip-single eight" style="position: absolute; top: 26%; left: 49%;">
                <a href="#" class="map-tooltip" data-tooltip="Netherlands" tabindex="0">
                    <span></span>
                </a>
            </div>

            <!-- Canada tooltip -->
            <div class="map-tool-tip-single three" style="position: absolute; top: 21%; left: 30%;">
                <a href="#" class="map-tooltip" data-tooltip="Canada" tabindex="0">
                    <span></span>
                </a>
            </div>
            <!-- Australia tooltip -->
            <div class="map-tool-tip-single four" style="position: absolute; top: 75%; left: 68%;">
                <a href="#" class="map-tooltip" data-tooltip="Australia" tabindex="0">
                    <span></span>
                </a>
            </div>
            <!-- India tooltip -->
            <div class="map-tool-tip-single four" style="position: absolute; top: 55%; left: 60%;">
                <a href="#" class="map-tooltip" data-tooltip="Inda" tabindex="0">
                    <span></span>
                </a>
            </div>
           


        </div>
            </div>
        </div>

        <div class="row mt-3 d-none d-md-block">
            <div class="col-lg-24">
                <div class="map-location-area" style="display: flex; flex-wrap: wrap; gap: 5px;">
                    <div class="location-single" style="flex: 0 0 3%; margin-bottom: 5px;">
                        <h3 class="title" style="font-size: 18px; margin-bottom: 5px;">USA</h3>
                    </div>
                    <div class="location-single" style="flex: 0 0 2%; margin-bottom: 5px;">
                        <h3 class="title" style="font-size: 18px; margin-bottom: 5px;">UK</h3>
                    </div>
                    <div class="location-single" style="flex: 0 0 45; margin-bottom: 5px;">
                        <h3 class="title" style="font-size: 18px; margin-bottom: 5px;">Canada</h3>
                    </div>
                    <div class="location-single" style="flex: 0 0 6%; margin-bottom: 5px;">
                        <h3 class="title" style="font-size: 18px; margin-bottom: 5px;">Australia</h3>
                    </div>
                    <div class="location-single" style="flex: 0 0 6%; margin-bottom: 5px;">
                        <h3 class="title" style="font-size: 18px; margin-bottom: 5px;">Ireland</h3>
                    </div>
                    <div class="location-single" style="flex: 0 0 6%; margin-bottom: 5px;">
                        <h3 class="title" style="font-size: 18px; margin-bottom: 5px;">Germany</h3>
                    </div>
                    <div class="location-single" style="flex: 0 9%; margin-bottom: 5px;">
                        <h3 class="title" style="font-size: 18px; margin-bottom: 5px;">Netherlands</h3>
                    </div>
                    <div class="location-single" style="flex: 0 0 4%; margin-bottom: 5px;">
                        <h3 class="title" style="font-size: 18px; margin-bottom: 5px;">India</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3 d-block d-md-none">
            <div class="col-12">
                <div class="mobile-countries-grid">
                    <div class="row g-2">
                        <div class="col-6">
                            <div class="country-card text-center p-3">
                                <h4 style="font-size: 14px; margin: 0; color: #fff;">USA</h4>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="country-card text-center p-3">
                                <h4 style="font-size: 14px; margin: 0; color: #fff;"> UK</h4>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="country-card text-center p-3">
                                <h4 style="font-size: 14px; margin: 0; color: #fff;"> Canada</h4>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="country-card text-center p-3">
                                <h4 style="font-size: 14px; margin: 0; color: #fff;"> Australia</h4>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="country-card text-center p-3">
                                <h4 style="font-size: 14px; margin: 0; color: #fff;">Ireland</h4>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="country-card text-center p-3">
                                <h4 style="font-size: 14px; margin: 0; color: #fff;">Germany</h4>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="country-card text-center p-3">
                                <h4 style="font-size: 14px; margin: 0; color: #fff;">Netherlands</h4>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="country-card text-center p-3">
                                <h4 style="font-size: 14px; margin: 0; color: #fff;">India</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact area end -->

<br><br>

<!-- Call to Action Section -->
<div class="rts-call-to-action-area-about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="title">Ready to Transform Your Business?</h2>
                <p class="disc">
                    Schedule a no-obligation consultation to discuss your unique needs and how Seyyone can help streamline your operations and technology solutions.
                </p>
                <a href="<?php echo home_url('/contact'); ?>" class="rts-btn btn-primary wow fadeInUp" data-wow-delay=".5s">
                   Get in touch
                    <img class="injectable" src="<?php echo get_template_directory_uri(); ?>/assets/images/service/icons/13.svg" alt="arrow">
                </a>
            </div>
        </div>
    </div>
</div>

<br><br>

<?php get_footer(); ?>


<style>

/* Wave animation styles */
.waves {
  position: relative;
  width: 100%;
  height: 15vh;
  margin-bottom: -7px;
  min-height: 100px;
  max-height: 150px;
}

.moving-waves > use {
  animation: move-forever 25s cubic-bezier(0.55, 0.5, 0.45, 0.5) infinite;
}

.moving-waves > use:nth-child(1) {
  animation-delay: -2s;
  animation-duration: 7s;
}

.moving-waves > use:nth-child(2) {
  animation-delay: -3s;
  animation-duration: 10s;
}

.moving-waves > use:nth-child(3) {
  animation-delay: -4s;
  animation-duration: 13s;
}

.moving-waves > use:nth-child(4) {
  animation-delay: -5s;
  animation-duration: 20s;
}

.moving-waves > use:nth-child(5) {
  animation-delay: -6s;
  animation-duration: 25s;
}

.moving-waves > use:nth-child(6) {
  animation-delay: -7s;
  animation-duration: 30s;
}

@keyframes move-forever {
  0% {
    transform: translate3d(-90px, 0, 0);
  }
  100% {
    transform: translate3d(85px, 0, 0);
  }
}

/* For smaller screens, adjust the wave height */
@media (max-width: 767px) {
  .waves {
    height: 40px;
    min-height: 40px;
  }
}

/* Make sure the banner container has proper positioning */
.about-banner-area-bg {
  position: relative;
  overflow: hidden;
}

.position-absolute {
  position: absolute !important;
}

.w-100 {
  width: 100% !important;
}

.z-index-1 {
  z-index: 1 !important;
}

.bottom-0 {
  bottom: 0 !important;
}


/* Statistics Section Styling */
.border-radius-xl {
    border-radius: 1rem;
}

.shadow-blur {
    box-shadow: rgba(255, 255, 255, 0.9) 0px 0px 1px 1px inset, rgba(0, 0, 0, 0.05) 0px 20px 27px 0px !important;
}

.blur {
    box-shadow: rgba(254, 254, 254, 0.82) 0px 0px 2px inset;
    backdrop-filter: saturate(200%) blur(30px);
    background-color: rgba(255, 255, 255, 0.8) !important;
}

.z-index-2 {
    z-index: 2 !important;
}

.mt-n10 {
    margin-top: -6rem !important;
}

.text-gradient.text-primary {
    background-image: linear-gradient(310deg, #3534ff, #7928ca);
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    position: relative;
    z-index: 1;
    font-size: 3.5rem;
    font-weight: 700;
}

.vertical.dark {
    height: 100%;
    right: 0;
    top: 0;
    position: absolute;
    border-right: 1px solid rgba(0, 0, 0, 0.13);
}

.text-sm {
    font-size: 1.5rem !important;
    line-height: 1.4;
    color: #67748e;
}

.counter-up-wrapper {
    position: relative;
    z-index: 1;
    padding-top: 3rem;
    padding-bottom: 1rem;
}

.counter-up-wrapper h4 {
    font-size: 2rem;
    /*font-weight: 600;*/
    margin-bottom: 0.25rem;
}

.stat-box {
    min-height: 180px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 1.5rem !important;
}


 </style>   