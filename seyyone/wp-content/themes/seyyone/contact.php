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
<div class="contact-page-banner jarallax bg_iamge">
</div>
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
                <form class="contact-form" id="contact-form">
                    <!-- Do not use action or method for JS-based fetch submission -->

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

                    <!-- Radio: I am a -->
                    <div class="form-group mb-3">
                        <fieldset class="gfield_radio">
                            <label class="form-label">I am a <span style="color: red;">*</span></label>
                            <div>
                                <input name="user_type" type="radio" value="Client" id="client_radio" required> Client
                            </div>
                            <div>
                                <input name="user_type" type="radio" value="Jobseeker" id="jobseeker_radio" required> Jobseeker
                            </div>
                        </fieldset>
                    </div>

                    <!-- Checkbox: Our Services -->
                    <div class="form-group mb-3">
                        <fieldset class="gfield_checkbox">
                            <label>Our Services <span style="color: red;">*</span></label>
                            <div>
                                <input type="checkbox" value="Healthcare KPO" id="healthcare_check" name="services[]"> Healthcare KPO
                            </div>
                            <div>
                                <input type="checkbox" value="Software" id="software_check" name="services[]"> Software Services
                            </div>
                        </fieldset>
                    </div>

                    <!-- Agree to policy -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="defaultCheck1" name="agree" required>
                        <label class="form-check-label" for="defaultCheck1">
                            You agree to our <a href="/policy" class="text-primary" target="_blank">privacy policy</a>.
                        </label>
                    </div>

                    <br>

                    <button type="submit" class="rts-btn btn-primary">
                        Send message
                        <img class="injectable" src="<?php echo get_template_directory_uri(); ?>/assets/images/service/icons/13.svg" alt="arrow">
                    </button>
                </form>

                <!-- Success/Error Message -->
                <div id="form-messages" style="margin-top: 1rem;"></div>
            </div>
        </div>
    </div>
</div>
<!-- contact area form wrapper end -->

<!-- Map and contact info remain unchanged -->
<!-- (you can keep your map + footer below this point) -->

<?php get_footer(); ?>

<script>
document.getElementById("contact-form").addEventListener("submit", function (e) {
    e.preventDefault(); // prevent default form submission

    const form = e.target;
    const formData = new FormData(form);
    const messageContainer = document.getElementById("form-messages");

    fetch("https://formspree.io/f/myzjqebg", {
        method: "POST",
        headers: { "Accept": "application/json" },
        body: formData
    })
    .then(response => {
        if (response.ok) {
            messageContainer.innerHTML = "<div style='color: green;'>Thank you! Your message has been sent successfully.</div>";
            form.reset();
        } else {
            return response.json().then(data => {
                if (data.errors) {
                    messageContainer.innerHTML = "<div style='color: red;'>Error: " + data.errors.map(e => e.message).join(", ") + "</div>";
                } else {
                    messageContainer.innerHTML = "<div style='color: red;'>Something went wrong. Please try again later.</div>";
                }
            });
        }
    })
    .catch(error => {
        messageContainer.innerHTML = "<div style='color: red;'>Request failed. Please check your internet connection.</div>";
        console.error("Form submission error:", error);
    });
});
</script>
