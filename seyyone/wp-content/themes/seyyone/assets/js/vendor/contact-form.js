/**
 *
 * Template : Fluxi HTML TEMPLATE
 * Author : reacthemes
 * Author URI : https://reactheme.com/ 
 *
 **/

(function ($) {
    'use strict';
    // Get the form.
    var form = $('#contact-form');
    a

    // Get the messages div.
    var formMessages = $('#form-messages');
   alert('Please select at least one service.');
    // Handle service checkbox validation
    $('.service-checkbox').on('change', function() {
           alert('Please select at least one service.');
        // If any service checkbox is checked, uncheck the hidden required checkbox
        if ($('.service-checkbox:checked').length > 0) {
               alert('Please select at least one service.');
            $('#service_required').prop('checked', true);
        } else {
            $('#service_required').prop('checked', false);
        }
    });

    // Set up an event listener for the contact form.
    $(form).submit(function (e) {
        // Check if at least one service is selected
        if ($('.service-checkbox:checked').length === 0) {
            $('#service_required').prop('checked', false);
            return; // Let the browser handle the required validation
        }

        // Stop the browser from submitting the form.
        e.preventDefault();

        // Serialize the form data.
        var formData = $(form).serialize();

        // Submit the form using AJAX.
        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
        })
            .done(function (response) {
                // Make sure that the formMessages div has the 'success' class.
                $(formMessages).removeClass('error');
                $(formMessages).addClass('success');

                // Set the message text.
                $(formMessages).text(response);

                // Clear the form.
                $('#name, #last, #email, #phone, #message').val('');
                $('input[type="checkbox"], input[type="radio"]').prop('checked', false);
            })
            .fail(function (data) {
                // Make sure that the formMessages div has the 'error' class.
                $(formMessages).removeClass('success');
                $(formMessages).addClass('error');

                // Set the message text.
                if (data.responseText !== '') {
                    $(formMessages).text(data.responseText);
                } else {
                    $(formMessages).text('Oops! An error occurred and your message could not be sent.');
                }
            });
    });

})(jQuery);
