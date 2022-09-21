<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


<script>
    $(".slider").slick({
        dots: true,
        fade: true,
        arrows: true
    });

    $('#toggle').click(function() {
        if ($(this).html() == 'Pause') {
            $('.slider').slick('slickPause')
            $(this).html('Play')
        } else {
            $('.slider').slick('slickPlay')
            $(this).html('Pause')
        }
    });
</script>