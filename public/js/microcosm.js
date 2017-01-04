$(function() {
    var $lightbox = $("<div class='lightbox'></div>");
    var $img = $("<img>");
    var $caption = $("<p class='caption'></p>");

    $lightbox
      .append($img)
      .append($caption);

    $('body').append($lightbox);

    $(".sampleimg").on('click', function(e) {
        e.preventDefault();

        var src = $(this).attr("src").replace(/-mini/, "");
        var cap = $(this).attr("alt");

        $img.attr('src', src);
        $caption.text(cap);

        $lightbox.fadeIn('fast');

        $lightbox.click(function() {
            $lightbox.fadeOut('fast');
        });
    });
});

//# sourceMappingURL=microcosm.js.map
