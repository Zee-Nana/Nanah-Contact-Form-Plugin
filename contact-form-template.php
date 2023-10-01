<!-- contact-form-template.php -->
<div class="g-recaptcha" data-sitekey="YOUR_RECAPTCHA_SITE_KEY"></div>

<!-- contact-form-template.php -->
<form id="ncf-contact-form">
    <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Message:</label>
        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
    </div>
    <!--<div class="g-recaptcha" data-sitekey="YOUR_RECAPTCHA_SITE_KEY"></div> -->
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<div class="ncf-response"></div>


