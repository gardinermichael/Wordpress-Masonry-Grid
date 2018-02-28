<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>


<script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>



<script>

// // init Isotope
// var $grid = jQuery('.grid').isotope({
//   // options
// });

var $container = jQuery('.grid');

jQuery(window).on('load', function () {
    // Fire Isotope only when images are loaded
    $container.imagesLoaded(function () {
        $container.isotope({
            itemSelector: '.grid-item',
        });
    });

    // Filter
    jQuery('.filter-button-group').on('click', 'button', function () {
        var filterValue = jQuery(this).attr('data-filter');
        $container.isotope({filter: filterValue});
    });

    // Infinite Scroll
    jQuery('.grid').infiniteScroll({
    		debug: true,
            navSelector: 'div.pagination',
            nextSelector: 'div.pagination a:first',
            itemSelector: '.post',
            path: 'page/{{#}}',
            bufferPx: 200,
            append: '.post',
            loading: {
                finishedMsg: 'We\'re done here.',
            }
        },

        // Infinite Scroll Callback
        function (newElements) {
            var $newElems = jQuery(newElements).hide();
            $newElems.imagesLoaded(function () {
                $newElems.fadeIn();
                $container.isotope('appended', $newElems);
            });
        });
});


</script>


</script>
