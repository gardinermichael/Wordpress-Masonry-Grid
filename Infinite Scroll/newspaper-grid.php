<?php get_header(); /* Template Name: papers */ ?>



<?php

function isotope_classes($id){
	$terms = wp_get_post_terms(get_the_id(), 'published_year');
	foreach ($terms as $term){
		echo $term->slug.' ';
	}
	$categories = get_the_category(get_the_id());
	foreach ($categories as $category) {
		echo $category->slug.' ';
	}
}

?>






<div class="button-group filter-button-group" background-color=#337ab7>
<button data-filter="*">show all</button>
<?php

	$categories = get_categories();
	foreach ($categories as $category){
		echo '<button data-filter=".'.$category->slug.'">'.$category->name.'</button>';
		echo ' ';
	}


?>
</div>
<p>

<div class="button-group filter-button-group">

<?php

	$terms = get_terms( array (
		'taxonomy' => 'published_year',
		'hide_empty' => false,
	) );
	foreach ($terms as $term){
		echo '<button data-filter=".'.$term->slug.'">'.$term->name.'</button>';
		echo ' ';
	}


?>
</div>





<?php
//loop for paged blog posts
if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
else { $paged = 1; }

$args = array(
	'post_type'=>'newspapers',
    'posts_per_page' => -1,
    'paged' => $paged,
    'order' => 'DESC'
);

$newspapers = new Wp_Query($args);

echo '<div class="grid">
    <div class="grid-sizer"></div>
    <div class="gutter-sizer"></div>';

if($newspapers->have_posts()) : while ($newspapers->have_posts()) : $newspapers->the_post();

?>
<div class="post">
<div class="grid-item <?php isotope_classes(get_the_id()); ?>">

	<?php
		echo "<a data-fancybox='gallery' data-caption='" . get_the_title(get_the_ID()) . "' href='" . get_the_post_thumbnail_url( get_the_ID(), 'full' ) . "'>";
		echo "<img src='" . get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' ) . "'></a>";
		echo '<p>'
	?>
</div>
</div>

<?php endwhile; ?>

// for echo '<div class="grid">
</div>

<!--  <div class="pagination">
        <?php //previous_posts_link( '« Newer posts' ); ?>
        <?php //next_posts_link( 'Older posts »', $newspapers->max_num_pages ); ?>
 </div> -->

<?php else: endif; ?>

<?php get_footer(); ?>
