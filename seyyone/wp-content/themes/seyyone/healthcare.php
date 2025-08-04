<?php
/**
 * Template Name: Healthcare KPO Template
 * Using Custom Modal System with Dynamic Content
 */
get_header(); 
?>

<!-- Your Modal HTML -->
<div id="modalOverlay"></div>
<div id="myModal">
    <div class="modal-header-bar">
        <span class="close-button" onclick="closeModal()">&times;</span>
    </div>
    <div id="modalContent" class="modal-scroll-body">
        <!-- Content will be dynamically inserted here -->
    </div>
</div>

<!-- Banner Section -->
<div class="rts-service-banner-area ptb--80 position-relative">
    <div class="container">
        <div class="row d-flex align-items-center">
          
              <div class="col-lg-7 mb_md--30 mb_sm--30">
                      <div class="banner-wrapper-one">
                        <h1 class="title wow fadeInUp" data-wow-delay=".3s" style="font-size: 55px; visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">End-to-End<br><span>KPO Services</span><br>Tailored To Suit Your <span>Healthcare</span> Practice</h1>
                        
                        <p class="wow fadeInUp" data-wow-delay=".5s">We provides complete revenue cycle management solutions to the healthcare community, that allow our exclusive clientele to have more face time with their patients and no stress about <br> billing and collections.</p>
                        <a href="#healthcare-services" class="rts-btn btn-primary wow fadeInUp" data-wow-delay=".7s">
                            View Solutions
                         <img class="injectable" src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/01.svg" alt="icons">
                        </a>
                    </div>
                </div>
            <div class="col-lg-5">
               <div class="thumbnail-bannr-service-right jarallax">
    <div id="jarallax-container-0" class="jarallax-container">
        <?php 
        $healthcare_hero_bg = get_field('healthcare_hero_background');
        if($healthcare_hero_bg): ?>
            <img class=" " 
                 src="<?php echo esc_url($healthcare_hero_bg['url']); ?>" 
                 alt="<?php echo esc_attr($healthcare_hero_bg['alt'] ? $healthcare_hero_bg['alt'] : 'Healthcare Services'); ?>">
        <?php else: ?>
            <img class=" " 
                 src="<?php echo get_template_directory_uri(); ?>/assets/images/seyyone/home/medical-banner-with-stethoscope.jpg" 
                 alt="service-area">
        <?php endif; ?>
    </div>
</div>

                
            </div>
        </div>
    </div>
     <div class="shape-area-start">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/06.png" alt="service-banner-shape" class="one wow move-right">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/07.png" alt="service-banner-shape" class="two wow move-left">

    </div>
</div>
 


 <!-- Healthcare Services Section -->
<div class="rts-service-area">
    <div class="container">
        <div class="bg-gradient-one-industry">
            <br><br>
            <div class="title-area-center-inner-with-sub" id="healthcare-services">
                <span>Our Services</span>
            </div>
            <br>
            <div class="rts-case-studies-area rts-section-gapBottom mt_sm--30">
                <div class="container">
                    <div class="row g-4">
                        <?php
                        // Get Healthcare Services from WordPress - Ordered by custom order field
                        $healthcare_services = new WP_Query(array(
                            'post_type' => 'healthcare_service',
                            'posts_per_page' => -1,
                            'post_status' => 'publish',
                            'meta_key' => '_healthcare_service_order',
                            'orderby' => 'meta_value_num',
                            'order' => 'ASC'
                        ));

                        if ($healthcare_services->have_posts()) :
                            $delay_counter = 0;
                            while ($healthcare_services->have_posts()) : $healthcare_services->the_post();
                                $post_id = get_the_ID();
                                $title = get_the_title();
                                $excerpt = get_the_excerpt();
                                $service_id = get_post_meta($post_id, '_healthcare_service_id', true);
                                
                                // Calculate delay for animation
                                $delay_values = array('', '.2s', '.4s');
                                $delay_attr = $delay_counter > 0 ? ' data-wow-delay="' . $delay_values[$delay_counter % 3] . '"' : '';
                        ?>
                        
                        <!-- Healthcare Service Card with ID for URL anchoring -->
                        <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-offset="120"<?php echo $delay_attr; ?> id="<?php echo esc_attr($service_id); ?>" style="margin-bottom: 30px;">
                            <div class="single-case-studies-three" style="background-color: #f8f9fa; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); overflow: hidden; transition: all 0.3s ease; height: 100%; display: flex; flex-direction: column; ">
                                <!-- Service Image -->
                                <a href="#" onclick="openModal('<?php echo esc_js($service_id); ?>')" class="thumbnail" style="display: block; flex-shrink: 0; margin-bottom: 1px;">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium', array(
                                            'alt' => 'healthcare-service',
                                            'style' => 'width: 100%; height: 280px; object-fit: cover;'
                                        )); ?>
                                    <?php else : ?>
                                        <div style="width: 100%; height: 280px; background: #f8f9fa; display: flex; align-items: center; justify-content: center; color: #6c757d; border-bottom: 2px dashed #dee2e6;">
                                            <div style="text-align: center;">
                                                <i class="fa fa-heartbeat" style="font-size: 48px; margin-bottom: 10px; display: block; color: #28a745;"></i>
                                                <strong>No Image Set</strong><br>
                                                <small>Add featured image</small>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </a>
                                
                                <!-- Service Content -->
                                <div class="inner-content" style="padding: 12px 12px 20px; flex-grow: 1; display: flex; flex-direction: column;">
                                    <a href="#" onclick="openModal('<?php echo esc_js($service_id); ?>')" style="text-decoration: none; color: inherit;">
                                        <h4 class="title" style="margin-top: 0; margin-bottom: 8px; font-size: 20px; color: #333; min-height: 50px; display: flex; align-items: center;"><?php echo esc_html($title); ?></h4>
                                    </a>
                                    <p style="color: #666; font-size: 16px; line-height: 1.6; margin-bottom: 0; flex-grow: 1; display: -webkit-box; -webkit-line-clamp: 4; -webkit-box-orient: vertical; overflow: hidden; height: 102px;"><?php echo $excerpt ? esc_html($excerpt) : 'Click to learn more about this healthcare service.'; ?></p>
                                </div>
                            </div>
                        </div>
                        
                        <?php
                            $delay_counter++;
                            endwhile;
                            wp_reset_postdata();
                        else :
                        ?>
                            <div class="col-12 text-center">
                                <p>No healthcare services found. Please add some services to display here.</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


 


<!-- Healthcare Services Section -->
<!-- <div class="rts-service-area">
    <div class="container">
        <div class="bg-gradient-one-industry">
            <br><br>
            <div class="title-area-center-inner-with-sub" id="healthcare-services">
                <span>Our Services</span>
            </div>
             <br><br>
            <div class="rts-case-studies-area rts-section-gapBottom mt_sm--30">
                <div class="container">
                    <div class="row">
                        <?php
                       
                        $healthcare_services = new WP_Query(array(
                            'post_type' => 'healthcare_service',
                            'posts_per_page' => -1,
                            'post_status' => 'publish',
                            'meta_key' => '_healthcare_service_order',
                            'orderby' => 'meta_value_num',
                            'order' => 'ASC'
                        ));

                        if ($healthcare_services->have_posts()) :
                            // Store all posts in an array
                            $all_posts = array();
                            while ($healthcare_services->have_posts()) : $healthcare_services->the_post();
                                $all_posts[] = get_post();
                            endwhile;
                            wp_reset_postdata();
                            
                            // Calculate how many posts to show in each column
                            $total_posts = count($all_posts);
                            $column1_count = min(2, $total_posts);
                            $column3_count = min(2, max(0, $total_posts - $column1_count));
                            $column2_count = $total_posts - $column1_count - $column3_count;
                            
                            // Column 1 (2 cards)
                            if ($column1_count > 0) :
                            ?>
                            <div class="col-md-4 d-flex flex-column justify-content-center">
                                <?php 
                                for ($i = 0; $i < $column1_count; $i++) :
                                    $post = $all_posts[$i];
                                    setup_postdata($post);
                                    $post_id = $post->ID;
                                    $title = get_the_title($post_id);
                                    $excerpt = get_the_excerpt($post_id);
                                    $service_id = get_post_meta($post_id, '_healthcare_service_id', true);
                                    $delay = $i == 0 ? '' : '.2s';
                                ?>
                                <div class="service-card <?php echo ($i < $column1_count - 1) ? 'mb-4' : ''; ?> wow fadeInUp" data-wow-delay="<?php echo $delay; ?>" data-wow-offset="120" id="<?php echo esc_attr($service_id); ?>">
                                    <div class="single-case-studies-three" style="background-color: #f8f9fa; border-radius: 15px !important; box-shadow: 0 10px 30px rgba(0,0,0,0.08); overflow: hidden; transition: all 0.3s ease; max-width: 90%; margin: 0 auto;">
                                        
                                        <a href="#" onclick="openModal('<?php echo esc_js($service_id); ?>')" class="thumbnail">
                                            <?php if (has_post_thumbnail($post_id)) : ?>
                                                <?php echo get_the_post_thumbnail($post_id, 'medium', array(
                                                    'alt' => 'healthcare-service',
                                                    'style' => 'width: 100%; height: 200px; object-fit: cover;'
                                                )); ?>
                                            <?php else : ?>
                                                <div style="width: 100%; height: 200px; background: #f8f9fa; display: flex; align-items: center; justify-content: center; color: #6c757d; border-bottom: 2px dashed #dee2e6;">
                                                    <div style="text-align: center;">
                                                        <i class="fa fa-heartbeat" style="font-size: 48px; margin-bottom: 10px; display: block; color: #28a745;"></i>
                                                        <strong>No Image Set</strong><br>
                                                        <small>Add featured image</small>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </a>
                                        
                                         
                                        <div class="inner-content" style="padding: 20px; text-align: center;">
                                            <a href="#" onclick="openModal('<?php echo esc_js($service_id); ?>')" style="text-decoration: none; color: inherit;">
                                                <h4 class="title" style="margin-bottom: 15px; font-size: 20px; color: #333;"><?php echo esc_html($title); ?></h4>
                                            </a>
                                            <p style="color: #666; font-size: 15px; line-height: 1.6;"><?php echo $excerpt ? esc_html($excerpt) : 'Click to learn more about this healthcare service.'; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                endfor;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <?php endif; ?>
                            
                            
                            <?php if ($column2_count > 0) : ?>
                            <div class="col-md-4">
                                <?php 
                                for ($i = 0; $i < $column2_count; $i++) :
                                    $post = $all_posts[$i + $column1_count];
                                    setup_postdata($post);
                                    $post_id = $post->ID;
                                    $title = get_the_title($post_id);
                                    $excerpt = get_the_excerpt($post_id);
                                    $service_id = get_post_meta($post_id, '_healthcare_service_id', true);
                                    $delay = $i * 0.2 . 's';
                                ?>
                                <div class="service-card <?php echo ($i < $column2_count - 1) ? 'mb-4' : ''; ?> wow fadeInUp" data-wow-delay="<?php echo $delay; ?>" data-wow-offset="120" id="<?php echo esc_attr($service_id); ?>">
                                    <div class="single-case-studies-three" style="background-color: #f8f9fa; border-radius: 15px !important; box-shadow: 0 10px 30px rgba(0,0,0,0.08); overflow: hidden; transition: all 0.3s ease; max-width: 90%; margin: 0 auto;">
                                        
                                        <a href="#" onclick="openModal('<?php echo esc_js($service_id); ?>')" class="thumbnail">
                                            <?php if (has_post_thumbnail($post_id)) : ?>
                                                <?php echo get_the_post_thumbnail($post_id, 'medium', array(
                                                    'alt' => 'healthcare-service',
                                                    'style' => 'width: 100%; height: 200px; object-fit: cover;'
                                                )); ?>
                                            <?php else : ?>
                                                <div style="width: 100%; height: 200px; background: #f8f9fa; display: flex; align-items: center; justify-content: center; color: #6c757d; border-bottom: 2px dashed #dee2e6;">
                                                    <div style="text-align: center;">
                                                        <i class="fa fa-heartbeat" style="font-size: 48px; margin-bottom: 10px; display: block; color: #28a745;"></i>
                                                        <strong>No Image Set</strong><br>
                                                        <small>Add featured image</small>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </a>
                                        
                                      
                                        <div class="inner-content" style="padding: 20px; text-align: center;">
                                            <a href="#" onclick="openModal('<?php echo esc_js($service_id); ?>')" style="text-decoration: none; color: inherit;">
                                                <h4 class="title" style="margin-bottom: 15px; font-size: 20px; color: #333;"><?php echo esc_html($title); ?></h4>
                                            </a>
                                            <p style="color: #666; font-size: 15px; line-height: 1.6;"><?php echo $excerpt ? esc_html($excerpt) : 'Click to learn more about this healthcare service.'; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                endfor;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <?php endif; ?>
                            
                            
                            <?php if ($column3_count > 0) : ?>
                            <div class="col-md-4 d-flex flex-column justify-content-center">
                                <?php 
                                for ($i = 0; $i < $column3_count; $i++) :
                                    $post = $all_posts[$i + $column1_count + $column2_count];
                                    setup_postdata($post);
                                    $post_id = $post->ID;
                                    $title = get_the_title($post_id);
                                    $excerpt = get_the_excerpt($post_id);
                                    $service_id = get_post_meta($post_id, '_healthcare_service_id', true);
                                    $delay = $i == 0 ? '' : '.2s';
                                ?>
                                <div class="service-card <?php echo ($i < $column3_count - 1) ? 'mb-4' : ''; ?> wow fadeInUp" data-wow-delay="<?php echo $delay; ?>" data-wow-offset="120" id="<?php echo esc_attr($service_id); ?>">
                                    <div class="single-case-studies-three" style="background-color: #f8f9fa; border-radius: 15px !important; box-shadow: 0 10px 30px rgba(0,0,0,0.08); overflow: hidden; transition: all 0.3s ease; max-width: 90%; margin: 0 auto;">
                                       
                                        <a href="#" onclick="openModal('<?php echo esc_js($service_id); ?>')" class="thumbnail">
                                            <?php if (has_post_thumbnail($post_id)) : ?>
                                                <?php echo get_the_post_thumbnail($post_id, 'medium', array(
                                                    'alt' => 'healthcare-service',
                                                    'style' => 'width: 100%; height: 200px; object-fit: cover;'
                                                )); ?>
                                            <?php else : ?>
                                                <div style="width: 100%; height: 200px; background: #f8f9fa; display: flex; align-items: center; justify-content: center; color: #6c757d; border-bottom: 2px dashed #dee2e6;">
                                                    <div style="text-align: center;">
                                                        <i class="fa fa-heartbeat" style="font-size: 48px; margin-bottom: 10px; display: block; color: #28a745;"></i>
                                                        <strong>No Image Set</strong><br>
                                                        <small>Add featured image</small>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                                        </a>
                                        
                                        
                                        <div class="inner-content" style="padding: 20px; text-align: center;">
                                            <a href="#" onclick="openModal('<?php echo esc_js($service_id); ?>')" style="text-decoration: none; color: inherit;">
                                                <h4 class="title" style="margin-bottom: 15px; font-size: 20px; color: #333;"><?php echo esc_html($title); ?></h4>
                                            </a>
                                            <p style="color: #666; font-size: 15px; line-height: 1.6;"><?php echo $excerpt ? esc_html($excerpt) : 'Click to learn more about this healthcare service.'; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                endfor;
                                wp_reset_postdata();
                                ?>
                            </div>
                            <?php endif; ?>
                            
                        <?php else : ?>
                            <div class="col-12 text-center">
                                <p>No healthcare services found. Please add some services to display here.</p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->


<!-- CTA Section -->
<div class="rts-cts-area pt--120 pt_md--60 pt_sm--50">
    <div class="container">
        <div class="row">
            <div class="col-gl-12">
                <div class="cta-one-wrapper">
                    <div class="shape-area">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cta/02.png" alt="cta-area">
                    </div>
                    <div class="left-area">
                        <h3 class="title wow fadeInUp" data-wow-delay=".1s">Book a Free Consultation</h3>
                        <p class="wow fadeInUp" data-wow-delay=".3s">
                            Schedule a no-obligation consultation to discuss your healthcare outsourcing needs and how Seyyone can enhance your medical operations.
                        </p>
                        <a href="<?php echo home_url('/contact'); ?>" class="rts-btn btn-primary wow fadeInUp" data-wow-delay=".5s">
                            Get in Touch
                            <img class="injectable" src="<?php echo get_template_directory_uri(); ?>/assets/images/service/icons/13.svg" alt="arrow">
                        </a>
                    </div>
                    <div class="right wow move-out" data-wow-offset="140">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cta/01.png" alt="cta-image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br>

<!-- Your Modal CSS - Healthcare Theme -->
<style> 
#modalOverlay {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.6);
  z-index: 999;
}

/* Modal box */
#myModal {
  display: none;
  position: fixed;
  top: 50%;
  left: 50%;
  width: 90%;
  max-height: 90vh;
  background: #fff;
  border-radius: 10px;
  transform: translate(-50%, -50%);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
  z-index: 1000;
  overflow: hidden;
}

/* Scroll-lock when modal is open */
body.modal-open {
  overflow: hidden;
  position: fixed;
  width: 100%;
}

/* Scrollable content area inside modal */
#modalContent.modal-scroll-body {
  max-height: calc(90vh - 50px);
  overflow-y: auto;
  padding: 20px;
}

/* Close button */
.close-button {
  position: absolute;
  top: 0;
  right: 0;
  font-size: 28px;
  background: #eee;
  border-radius: 0 0 0 12px;
  width: 40px;
  height: 40px;
  text-align: center;
  line-height: 40px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.close-button:hover {
  background: #ddd;
}

/* Modal image styling */
#modalContent img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  border-radius: 8px;
  margin-bottom: 10px;
}

/* Feature item section only layout */
.feature-item {
  margin-bottom: 20px;
}

/* Remove extra font styling to inherit site-wide styles */
#modalContent h1,
#modalContent h2,
#modalContent h3,
#modalContent h4,
#modalContent h5,
#modalContent h6,
#modalContent p,
#modalContent ul,
#modalContent li {
  
  display: revert;
  margin-bottom: 15px;
  line-height: 1.6;
}

/* Modal body layout */
.content-body {
  padding: 0 20px;
}

/* Header row (top of modal) */
.header-row {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 25px;
  padding: 0px 20px;
  border-radius: 10px;
}

/* Modal image on left */
.left-image {
  flex: 0 0 auto;
  margin-right: 15px;
}

/* Make circular image */
.left-image img {
  width: 70px;
  height: 70px;
  object-fit: cover;
  border-radius: 50%;
  border: 3px solid #3498db;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

/* Modal title in header */
.center-title {
  flex: 1;
  text-align: center;
  padding: 0 10px;
  min-width: 0;
}

/* Mobile responsive */
@media (max-width: 768px) {
  #myModal {
    width: 95%;
  }

  .header-row {
    flex-direction: column;
    text-align: center;
  }

  .left-image {
    margin-right: 0;
    margin-bottom: 15px;
  }
}
</style>
 <script>
// Store current scroll position
let currentScrollY = 0;

function openModal(serviceId) {
    console.log('Opening modal for service:', serviceId);
    
    // Store current scroll position
    currentScrollY = window.scrollY;
    
    // Get modal and overlay elements
    const modal = document.getElementById('myModal');
    const overlay = document.getElementById('modalOverlay');
    
    // Show loading
    document.getElementById('modalContent').innerHTML = '<div style="text-align: center; padding: 40px;"><div style="font-size: 24px; color: #28a745; margin-bottom: 15px;"><i class="fa fa-spinner fa-spin"></i></div><p>Loading...</p></div>';
    
    // Show modal immediately
    document.body.classList.add('modal-open');
    document.body.style.top = `-${currentScrollY}px`;
    modal.style.display = 'block';
    overlay.style.display = 'block';
    modal.scrollTop = 0;
    
    // AJAX call to get service content
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '<?php echo admin_url('admin-ajax.php'); ?>', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                document.getElementById('modalContent').innerHTML = xhr.responseText;
            } else {
                document.getElementById('modalContent').innerHTML = '<div style="text-align: center; padding: 40px;"><p style="color: #dc3545;">Error loading healthcare service. Please try again.</p></div>';
            }
        }
    };
    
    xhr.send('action=get_healthcare_service_by_id&service_id=' + encodeURIComponent(serviceId));
}

// Function to close modal
function closeModal() {
    const modal = document.getElementById('myModal');
    const overlay = document.getElementById('modalOverlay');
    
    // Hide modal
    modal.style.display = 'none';
    overlay.style.display = 'none';
    
    // Restore body scroll
    document.body.classList.remove('modal-open');
    document.body.style.position = '';
    document.body.style.top = '';
    document.body.style.width = '';
    
    // Restore scroll position
    window.scrollTo(0, currentScrollY);
}

// Event listeners
const modal = document.getElementById('myModal');
const overlay = document.getElementById('modalOverlay');

// Close when clicking outside the modal (on overlay)
overlay.onclick = (e) => {
    closeModal();
};

// Close with Escape key
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        closeModal();
    }
});

// Prevent clicks inside modal from closing it
modal.onclick = (e) => {
    e.stopPropagation();
};
</script>


<?php get_footer(); ?>

