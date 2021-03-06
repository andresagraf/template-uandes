jQuery(document).ready(function ($) {
    $('.advgb-contact-form input.advgb-form-input').on('keydown', function (e) {
        if(e.which === 13) {
            e.preventDefault();
            return false;
        }
    });

    $('.advgb-contact-form form').submit(function (e) {
        e.preventDefault();
        var $thisForm = $(this).closest('.advgb-contact-form');
        var contactName = $(this).find('.advgb-form-input-name').val();
        var contactEmail = $(this).find('.advgb-form-input-email').val();
        var contactMsg = $(this).find('.advgb-form-input-msg').val();
        var date = new Date();
        var submitDate = (date.getMonth() + 1) + '/' + date.getDate() + '/' + date.getFullYear() + ' - ' + date.getHours() + ':' + date.getMinutes();

        if (contactName === '' || contactEmail === '' || contactMsg === '') {
            alert('You need to fill all fields!');
            return false;
        }

        $.ajax( {
            url: advgbContactForm.ajax_url,
            type: "POST",
            data: {
                action: 'advgb_contact_form_save',
                contact_name: contactName,
                contact_email: contactEmail,
                contact_msg: contactMsg,
                submit_date: submitDate
            },
            beforeSend: function () {
                var pos = $thisForm.find('.advgb-form-submit-wrapper').css('text-align');
                if (pos === 'right') {
                    $thisForm.find('.advgb-form-submit-wrapper').prepend('<div class="advgb-form-sending" />');
                } else {
                    $thisForm.find('.advgb-form-submit-wrapper').append('<div class="advgb-form-sending" />');
                }

                $thisForm.find('.advgb-form-submit-success').remove();
            },
            success: function () {
                $thisForm.find('.advgb-form-sending').remove();
                var successText = $thisForm.find('.advgb-form-submit').data('success');
                successText = successText ? successText : 'Message sent with success!';
                $thisForm.append('<div class="advgb-form-submit-success">'+ successText +'</div>');
            },
            error: function ( jqxhr, textStatus, error ) {
                alert(textStatus + " : " + error + ' - ' + jqxhr.responseJSON);
                $thisForm.find('.advgb-form-sending').remove();
            }
        } )
    });
});