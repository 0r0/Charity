/* ------------------------------------------------------------------------------
*
*  # Form validation
*
*  Specific JS code additions for form_validation.html page
*
*  Version: 1.3
*  Latest update: Feb 5, 2016
*
* ---------------------------------------------------------------------------- */

$(function () {


    // Form components
    // ------------------------------

    // Switchery toggles
    var elems = Array.prototype.slice.call(document.querySelectorAll('.switchery'));
    elems.forEach(function (html) {
        var switchery = new Switchery(html);
    });


    // Bootstrap switch
    $(".switch").bootstrapSwitch();


    // Bootstrap multiselect
    $('.multiselect').multiselect({
        checkboxName: 'vali'
    });


    // Touchspin
    $(".touchspin-postfix").TouchSpin({
        min: 0,
        max: 100,
        step: 0.1,
        decimals: 2,
        postfix: '%'
    });


    // Select2 select
    $('.select').select2({
        minimumResultsForSearch: Infinity
    });


    // Styled checkboxes, radios
    $(".styled, .multiselect-container input").uniform({radioClass: 'choice'});


    // Styled file input
    $(".file-styled").uniform({
        fileButtonClass: 'action btn bg-blue'
    });


    // Setup validation
    // ------------------------------

    // Initialize
    var validator = $(".form-validate-jquery").validate({
        ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
        errorClass: 'validation-error-label',
        successClass: 'validation-valid-label',
        highlight: function (element, errorClass) {
            $(element).removeClass(errorClass);
        },
        unhighlight: function (element, errorClass) {
            $(element).removeClass(errorClass);
        },

        // Different components require proper error label placement
        errorPlacement: function (error, element) {

            // Styled checkboxes, radios, bootstrap switch
            if (element.parents('div').hasClass("checker") || element.parents('div').hasClass("choice") || element.parent().hasClass('bootstrap-switch-container')) {
                if (element.parents('label').hasClass('checkbox-inline') || element.parents('label').hasClass('radio-inline')) {
                    error.appendTo(element.parent().parent().parent().parent());
                } else {
                    error.appendTo(element.parent().parent().parent().parent().parent());
                }
            }

            // Unstyled checkboxes, radios
            else if (element.parents('div').hasClass('checkbox') || element.parents('div').hasClass('radio')) {
                error.appendTo(element.parent().parent().parent());
            }

            // Input with icons and Select2
            else if (element.parents('div').hasClass('has-feedback') || element.hasClass('select2-hidden-accessible')) {
                error.appendTo(element.parent());
            }

            // Inline checkboxes, radios
            else if (element.parents('label').hasClass('checkbox-inline') || element.parents('label').hasClass('radio-inline')) {
                error.appendTo(element.parent().parent());
            }

            // Input group, styled file input
            else if (element.parent().hasClass('uploader') || element.parents().hasClass('input-group')) {
                error.appendTo(element.parent().parent());
            } else {
                error.insertAfter(element);
            }
        },
        validClass: "validation-valid-label",
        success: function (label) {
            label.addClass("validation-valid-label").text("موفقیت آمیز")
        },
        rules: {
            FirstName: {
                minlength: 2
            },
            LastName: {
                minlength: 2
            }
            ,
            password: {
                required:false,
                minlength: 5
            },
            repeat_password: {
                required:false,
                equalTo: "#password"
            },
            email: {
                email: true
            },
            repeat_email: {
                equalTo: "#email"
            },
            mobile: {
                // required:true,
                // minlength:9,
                // maxlength:13,
                number: true,
                pattern: /^(\+98|0)?9\d{9}$/g,
                require_from_group: [1, '.phone-group'],

            },
            phone_number: {
                minlength: 11,
                require_from_group: [1, '.phone-group']
            },
            resume_file:{
                required: true,
                accept: "application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document",
                filesize: 3
            },
            profile_picture:{
              required:true,
              accept:'image/*',
                filesize: 2,

            },
            minimum_characters: {
                minlength: 10
            },
            maximum_characters: {
                maxlength: 10
            },
            minimum_number: {
                min: 10
            },
            maximum_number: {
                max: 10
            },
            number_range: {
                range: [10, 20]
            },
            url: {
                url: true
            },
            date: {
                date: true
            },
            date_iso: {
                dateISO: true
            },
            numbers: {
                number: true
            },
            digits: {
                digits: true
            },
            creditcard: {
                creditcard: true
            },
            basic_checkbox: {
                minlength: 2
            },
            styled_checkbox: {
                minlength: 2
            },
            switchery_group: {
                minlength: 2
            },
            switch_group: {
                minlength: 2
            }
        },
        messages: {
            custom: {
                required: "This is a custom error message",
            },
            mobile: {
                pattern: 'فرمت وارده شماره موبایل اشتباه است.مثال:09121234567 یا 9121234567',
                require_from_group:'حداقل یکی از فیلدهای شماره موبایل یا تلفن ثابت را پر کنید'
            },
            phone_number: {
                require_from_group:'حداقل یکی از فیلدهای شماره موبایل یا تلفن ثابت را پر کنید'
            },
            resume_file:{
              accept: 'لطفا فایلهابی با پسوند pdf و doc را آپلود کنید'
            },
            profile_picture:{
                accept:'لطفا فایلهابی با پسوند های jpg/png/bmp را آپلود کنید'
            },
            agree: "Please accept our policy"
        }
    });


    // Reset form
    $('#reset').on('click', function () {
        validator.resetForm();
    });

});
