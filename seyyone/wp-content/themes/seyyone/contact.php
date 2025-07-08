<?php
/**
 * Template Name: Contact Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Seyyone
 * @since Seyyone 1.0
 */
get_header(); 
?>

<!-- contact banner areas start -->
<div class="contact-page-banner jarallax bg_iamge"></div>
<!-- contact banner areas end -->

<!-- contact area form wrapper start -->
<div class="contact-area-form-wrapper rts-section-gapTop">
    <div class="container-contact">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center-title-bg-white">
                    <h2 class="title">Get in touch</h2>
                    <p>We'd love to hear from you. Please fill out this form.</p>
                </div>
            </div>

            <div class="col-lg-12">
                <form id="contact-form" class="contact-form" method="POST" action="https://formspree.io/f/myzjqebg">
                    <div class="half-input-wrapper">
                        <div class="single">
                            <label for="name">First name</label>
                            <input type="text" id="name" name="first_name" placeholder="First name" required>
                        </div>
                        <div class="single">
                            <label for="last">Last name</label>
                            <input type="text" id="last" name="last_name" placeholder="Last name" required>
                        </div>
                    </div>
                    <div class="single">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="you@company.com" required>
                    </div>
                    <div class="single">
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" name="phone" placeholder="+1 (555) 000-0000">
                    </div>
                    <div class="single">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" placeholder="Leave us a message..." required></textarea>
                    </div>

                    <!-- Radio Buttons -->
                    <div class="form-group mb-3">
                        <fieldset class="gfield_radio">
                            <label>I am a <span style="color: red;">*</span></label><br>
                            <input type="radio" name="user_type" value="Client" required> Client
                            <input type="radio" name="user_type" value="Jobseeker" required> Jobseeker
                        </fieldset>
                    </div>

                    <!-- Checkboxes -->
                    <div class="form-group mb-3">
                        <fieldset class="gfield_checkbox">
                            <label>Our Services <span style="color: red;">*</span></label><br>
                            <input type="checkbox" name="services[]" value="Healthcare KPO"> Healthcare KPO
                            <input type="checkbox" name="services[]" value="Software"> Software Services
                        </fieldset>
                    </div>

                    <!-- Agreement -->
                    <div class="form-check">
                        <input type="checkbox" id="agree" name="agree" value="yes" required>
                        <label for="agree">
                            You agree to our friendly <a href="/policy" target="_blank">privacy policy</a>.
                        </label>
                    </div>

                    <br>

                    <button type="submit" class="rts-btn btn-primary">
                        Send message
                        <img class="injectable" src="<?php echo get_template_directory_uri(); ?>/assets/images/service/icons/13.svg" alt="arrow">
                    </button>

                    <!-- Message box -->
                    <div id="form-messages" style="margin-top: 1rem;"></div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- contact area form wrapper end -->

<!-- contact map and address (no changes here) -->
<div class="rts-google-map-area rts-section-gapTop">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="google-map-wrapper">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.4691124052!2d76.99833857465073!3d10.997699855732064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba859de62eed28d%3A0xad06f849d619bbf!2sSeyyone%20Group%20of%20Companies!5e0!3m2!1sen!2sin!4v1695127865421!5m2!1sen!2sin"
                        width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rts-location-contact-area pt--70">
    <div class="container">
        <div class="row section-seperator-b pb--90 g-5">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="single-location-area-contact">
                    <div class="icon">
                        <i class="fa-sharp fa-regular fa-location-dot"></i>
                    </div>
                    <p>Registered Office</p>
                    <span>73, Anna Nagar, Ramanathapuram,</span>
                    <span>Coimbatore-641045. TN, India.</span>
                    <span>Mon-Sat 9am to 5pm.</span>
                    <br> <span>Phone : 91 (422) 2310240</span> 
                    <br><span>Email : info@seyyone.com</span> 
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

<!-- AJAX submit script -->
<script>
document.getElementById("contact-form").addEventListener("submit", async function (e) {
    e.preventDefault();

    const form = e.target;
    const formData = new FormData(form);
    const formMessages = document.getElementById("form-messages");

    try {
        const response = await fetch("https://formspree.io/f/myzjqebg", {
            method: "POST",
            headers: {
                "Accept": "application/json"
            },
            body: formData
        });

        if (response.ok) {
            formMessages.innerHTML = '<div style="color:green;">✅ Thank you! Your message has been sent.</div>';
            form.reset();
        } else {
            const data = await response.json();
            if (data.errors) {
                const errors = data.errors.map(error => error.message).join("<br>");
                formMessages.innerHTML = '<div style="color:red;">❌ ' + errors + '</div>';
            } else {
                formMessages.innerHTML = '<div style="color:red;">❌ Something went wrong. Please try again.</div>';
            }
        }
    } catch (error) {
        formMessages.innerHTML = '<div style="color:red;">❌ Network error. Please check your internet connection.</div>';
    }
});
</script>
