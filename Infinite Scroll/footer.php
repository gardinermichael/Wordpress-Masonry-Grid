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
		path: 'a.pagination__next',
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
