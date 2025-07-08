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
                <form id="contact-form" class="contact-form">
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
                        <input type="checkbox" id="agree" name="agree" value="Yes" required>
                        <label for="agree">
                            You agree to our friendly <a href="/policy" target="_blank">privacy policy</a>.
                        </label>
                    </div>

                    <br>

                    <button type="submit" class="rts-btn btn-primary">
                        Send message
                        <img class="injectable" src="<?php echo get_template_directory_uri(); ?>/assets/images/service/icons/13.svg" alt="arrow">
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Success Modal -->
<div id="successModal" style="
    display: none;
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background-color: rgba(0,0,0,0.6);
    z-index: 9999;
    align-items: center;
    justify-content: center;
">
  <div style="
      background-color: white;
      padding: 2rem;
      border-radius: 8px;
      max-width: 400px;
      text-align: center;
  ">
    <h3>✅ Message Sent!</h3>
    <p>Thank you for contacting us.</p>
    <button onclick="closeModal()">Close</button>
  </div>
</div>

<!-- contact map and address -->
<div class="rts-google-map-area rts-section-gapTop">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="google-map-wrapper">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18..."
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

<!-- JS SCRIPT -->
<script>
function closeModal() {
    document.getElementById("successModal").style.display = "none";
    window.location.href = window.location.pathname; // same page
}

document.getElementById("contact-form").addEventListener("submit", async function (e) {
    e.preventDefault();

    const form = e.target;
    const formData = new FormData(form);

    // Format form content into a readable message
    const fullName = formData.get("first_name") + " " + formData.get("last_name");
    const services = formData.getAll("services[]").join(", ");
    const formattedMessage = `
        <strong>New Contact Submission</strong><br><br>
        <b>Name:</b> ${fullName}<br>
        <b>Email:</b> ${formData.get("email")}<br>
        <b>Phone:</b> ${formData.get("phone")}<br>
        <b>User Type:</b> ${formData.get("user_type")}<br>
        <b>Services:</b> ${services}<br>
        <b>Agreed to Policy:</b> ${formData.get("agree")}<br>
        <b>Message:</b><br>${formData.get("message")}
    `;

    const payload = new FormData();
    payload.append("email", formData.get("email"));
    payload.append("name", fullName);
    payload.append("message", formattedMessage);

    // Choose correct endpoint based on user_type
    const userType = formData.get("user_type");
    const formspreeURL = userType === "Client"
        ? "https://formspree.io/f/xvgrjkya"    // Replace with your actual Formspree endpoint for Client
        : "https://formspree.io/f/your_jobseeker_id"; // Replace with your actual Formspree endpoint for Jobseeker

    try {
        const res = await fetch(formspreeURL, {
            method: "POST",
            headers: { "Accept": "application/json" },
            body: payload
        });

        if (res.ok) {
            form.reset();
            document.getElementById("successModal").style.display = "flex";
        } else {
            alert("❌ Error sending message.");
        }
    } catch (error) {
        alert("❌ Network error.");
    }
});
</script>
