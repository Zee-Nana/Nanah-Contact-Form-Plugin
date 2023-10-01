jQuery(document).ready(function($) {
    $('#ncf-contact-form').submit(function(e) {
        e.preventDefault();

        // Add form validation logic here if needed

        var formData = $(this).serialize();

        $.ajax({
            type: 'POST',
            url: ajax_object.ajax_url,
            data: formData + '&action=ncf_process_contact_form', // Include the action parameter
            success: function(response) {
                // Handle the response (e.g., show a success message or error message)
                $('.ncf-response').html(response);
            }
        });
    });
});
