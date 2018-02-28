/* 
One of the portions (two different approaches) below goes INTO /wp-content/themes/your-theme/footer.php
*/

<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>


// This approach calls Infinite Scroll outside of imagesLoaded (only Isotope is wrapped in imagesLoaded)
<script>
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
            append: '.post', // This could also be and/or should be '.grid-item'. newspapers-grid.php has a .post div tag wrapping the .grid-item div tag.
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


// This approach wraps everything (including Infinite Scroll) in imagesLoaded
<script>
jQuery('.grid').imagesLoaded(function () {

	var $grid = jQuery('.grid');

	$grid.isotope({
	    itemSelector: '.grid-item',
	    percentPosition: true
		// masonry: {
	 //        columnWidth: '.grid-sizer'
	 //        }
	    });


	var iso = $grid.data('isotope');

	$grid.infiniteScroll({
		path: 'a.pagination__next', // This needs to be div.pagination like above. Relevant version of newspapers-grid.php doesn't have this tag. 
	    append: '.grid-item',
	    debug: true,
	    status: '.infinite-scroll-request',
	    outlayer: iso//,
	    // onInit: function () {
     //                this.on('load', function () {
     //                    $grid.isotope('layout');
     //                })
     //            }
		});

	// filter items on button click
	jQuery('.filter-button-group').on( 'click', 'button', function() {
	  var filterValue = jQuery(this).attr('data-filter');
	  $grid.isotope({ filter: filterValue });
	});
});
</script>
