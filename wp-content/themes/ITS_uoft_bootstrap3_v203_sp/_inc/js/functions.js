(function($) {

    /////////////////////////////////////////////////////////////////////
    // To prevent conflicts, your jQuery code goes here. Use $ as normal.
    /////////////////////////////////////////////////////////////////////

    $('table').addClass("table");
    $('.table').wrap( "<div class='table-responsive'></div>" );

    // jQuery HTML5 placeholder fix.js
    $('[placeholder]').focus(function() {
        var input = $(this);
        if (input.val() == input.attr('placeholder')) {
            input.val('');
            input.removeClass('placeholder');
        }
    }).blur(function() {
            var input = $(this);
            if (input.val() === '' || input.val() == input.attr('placeholder')) {
                input.addClass('placeholder');
                input.val(input.attr('placeholder'));
            }
        }).blur().parents('form').submit(function() {
            $(this).find('[placeholder]').each(function() {
                var input = $(this);
                if (input.val() == input.attr('placeholder')) {
                    input.val('');
                }
            });
        });



    var closeBtnHtml = '<button class="overlay-close"><i class="fa fa-times"></i><span class="btn-label">Close menu</span></button>';
    $(".searchdrawer-container, .navdrawer-container" ).prepend(closeBtnHtml);

    /* Primary Navigation: show/hide the container div when the toggle/close button clicked */
    $('.navdrawer-btn, .navdrawer-container .overlay-close').click(function(){
        var body = $('body');
        var btn = $('.navdrawer-btn');
        if(body.hasClass('navdrawer-open')) {
            body.removeClass('navdrawer-open');
            btn.removeClass('toggle');
        }
        else {
            body.addClass('navdrawer-open');
            btn.addClass('toggle');
        }
    });

    $('.searchdrawer-btn, .searchdrawer-container .overlay-close').click(function(){
        var body = $('body');
        var btn = $('.searchdrawer-btn');
        if(body.hasClass('searchdrawer-open')) {
            body.removeClass('searchdrawer-open');
            btn.removeClass('toggle');
        }
        else {
            body.addClass('searchdrawer-open');
            btn.addClass('toggle');
        }

    });


    var uoftsearchform =  $("#uoftSearchform");
    var thisSiteUrl = uoftsearchform.attr("action");
    $("#thisSiteBtn").click(function() {
        uoftsearchform.attr( {
          action: thisSiteUrl, method: 'get'
        });
        $("#keywordInput").attr('name', 's');
        uoftsearchform.submit();
    });

    $("#uoftBtn").click(function() {
        uoftsearchform.attr( {
          action: 'http://find.utoronto.ca/search', method: 'get'
        });
        $("#keywordInput").attr('name', 'q');
        var formStr = '<input type="hidden" name="output" value="xml_no_dtd">';
            formStr += '<input type="hidden" name="ie" value="UTF-8">';
            formStr += '<input type="hidden" name="oe" value="UTF-8">';
            formStr += '<input type="hidden" name="client" value="default_frontend">';
            formStr += '<input type="hidden" name="proxystylesheet" value="default_frontend">';
        uoftsearchform.append(formStr);
        uoftsearchform.submit();
    });

})(jQuery);




