jQuery(document).ready(function($) {

    var mainheight = jQuery(window).height();
    var mainwidth = jQuery(window).width();

    // jQuery(".slider").owlCarousel({
    //      items: 1,
    //      dots: false,
    //      autoplay: true,
    //      loop: true,
    //      nav: true,
    // });

    $(document).find('body').on('click', '.women .size input[type="radio"]', function(event) {
        var checked = $(this).prop('checked');
        if (checked == true) {
            $('.women .size label').removeClass('checked');
            $(this).closest('label').addClass('checked');
        }
    });
    $(document).find('body').on('click', '.pay-Once input[type="radio"]', function(event) {
        var checked = $(this).prop('checked');
        console.log('checked ' , checked);
        if (checked == true) {
            $('.pay-Once label').removeClass('checked');
            $(this).closest('label').addClass('checked');
        }
    });
    $(document).find('body').on('click', '.pay-Monthly input[type="radio"]', function(event) {
        var checked = $(this).prop('checked');
        console.log('checked ' , checked);
        if (checked == true) {
            $('.pay-Monthly label').removeClass('checked');
            $(this).closest('label').addClass('checked');
        }
    });
    $(document).find('body').on('click', '.women .shirttypes input[type="radio"]', function(event) {
        var checked = $(this).prop('checked');
        if (checked == true) {
            $('.women .shirttypes label').removeClass('checked');
            $(this).closest('label').addClass('checked');
        }
    });
    $(document).find('body').on('click', '.women .fav-color input[type="radio"]', function(event) {
        var checked = $(this).prop('checked');
        if (checked == true) {
            $('.women .fav-color label').removeClass('checked');
            $(this).closest('label').addClass('checked');
        }
    });
    $(document).find('body').on('click', '.women .fav-Movie input[type="radio"]', function(event) {
        var checked = $(this).prop('checked');
        if (checked == true) {
            $('.women .fav-Movie label').removeClass('checked');
            $(this).closest('label').addClass('checked');
        }
    });
    $(document).find('body').on('click', '.women .fav-Singer input[type="radio"]', function(event) {
        var checked = $(this).prop('checked');
        if (checked == true) {
            $('.women .fav-Singer label').removeClass('checked');
            $(this).closest('label').addClass('checked');
        }
    });
    $(document).find('body').on('click', '.women .fav-color .btn-blind', function(event) {
        $('.women .fav-color label').toggleClass('text');
    });
});
