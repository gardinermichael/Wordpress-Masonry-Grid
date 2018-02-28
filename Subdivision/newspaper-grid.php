/*
This .php file is placed in /wp-content/themes/your-theme/
Note that the name (or how it will appear in the Wordpress dashboard) is "papers"
*/

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

<?php
	$off_1980s = '<button><a style="color: rgb(255,255,255)" href="/papers-1980s">1980s</a></button>';
	$off_1990_1993 = '<button><a style="color: rgb(255,255,255)" href="/papers-1990-1993">1990-1993</a></button>';
	$off_1994_1998 = '<button><a style="color: rgb(255,255,255)" href="/papers-1994-1998">1994-1998</a></button>';
	$off_2000_2004 = '<button><a style="color: rgb(255,255,255)" href="/papers-2000-2004">2000-2004</a></button>';
	$off_2005_2009 = '<button><a style="color: rgb(255,255,255)" href="/papers-2005-2009">2005-2009</a></button>';
	$off_2010s = '<button><a style="color: rgb(255,255,255)" href="/papers-2010s">2010s</a></button>';

	$on_1980s = '<button style="background-color: rgb(255,255,255)"><a href="/papers-1980s">1980s</a></button>';
	$on_1990_1993 = "<button style='background-color: rgb(255,255,255)'><a href='/papers-1990-1993'>1990-1993</a></button>";
	$on_1994_1998 = '<button style="background-color: rgb(255,255,255)"><a href="/papers-1994-1998">1994-1998</a></button>';
	$on_2000_2004 = '<button style="background-color: rgb(255,255,255)"><a href="/papers-2000-2004">2000-2004</a></button>';
	$on_2005_2009 = '<button style="background-color: rgb(255,255,255)"><a href="/papers-2005-2009">2005-2009</a></button>';
	$on_2010s = '<button style="background-color: rgb(255,255,255)"><a href="/papers-2010s">2010s</a></button>';


	$post_slug= get_post_field( 'post_name', get_post() );
	if ($post_slug=="papers-2000-2004") {
		echo '<div class="button-group">';
		echo $off_1980s;
		echo ' ';
		echo $off_1990_1993;
		echo ' ';
		echo $off_1994_1998;
		echo ' ';
		echo $on_2000_2004;
		echo ' ';
		echo $off_2005_2009;
		echo ' ';
		echo $off_2010s;
		echo '</div>';
		echo '<p>';
		echo '<div class="button-group filter-button-group">';
		echo '<button data-filter="*">show all</button>';
		echo ' ';
		echo '<button data-filter=".2000">2000</button>';
		echo ' ';
		echo '<button data-filter=".2002">2002</button>';
		echo ' ';
		echo '<button data-filter=".2003">2003</button>';
		echo ' ';
		echo '<button data-filter=".2004">2004</button>';
		echo '</div>';
		echo '<p>';
		};

	if ($post_slug=="papers-2005-2009") {
		echo '<div class="button-group">';
		echo $off_1980s;
		echo ' ';
		echo $off_1990_1993;
		echo ' ';
		echo $off_1994_1998;
		echo ' ';
		echo $off_2000_2004;
		echo ' ';
		echo $on_2005_2009;
		echo ' ';
		echo $off_2010s;
		echo '</div>';
		echo '<p>';
		echo '<div class="button-group filter-button-group">';
		echo '<button data-filter="*">show all</button>';
		echo ' ';
		echo '<button data-filter=".2005">2005</button>';
		echo ' ';
		echo '<button data-filter=".2006">2006</button>';
		echo ' ';
		echo '<button data-filter=".2007">2007</button>';
		echo ' ';
		echo '<button data-filter=".2008">2008</button>';
		echo ' ';
		echo '<button data-filter=".2009">2009</button>';
		echo '</div>';
		echo '<p>';
		};

	if ($post_slug=="papers-1990-1993") {
		echo '<div class="button-group">';
		echo $off_1980s;
		echo ' ';
		echo $on_1990_1993;
		echo ' ';
		echo $off_1994_1998;
		echo ' ';
		echo $off_2000_2004;
		echo ' ';
		echo $off_2005_2009;
		echo ' ';
		echo $off_2010s;
		echo '</div>';
		echo '<p>';
		echo '<div class="button-group filter-button-group">';
		echo '<button data-filter="*">show all</button>';
		echo ' ';
		echo '<button data-filter=".1990">1990</button>';
		echo ' ';
		echo '<button data-filter=".1992">1992</button>';
		echo ' ';
		echo '<button data-filter=".1993">1993</button>';
		echo ' ';
		echo '</div>';
		echo '<p>';
		};
    
	if ($post_slug=="papers-1994-1998") {
		echo '<div class="button-group">';
		echo $off_1980s;
		echo ' ';
		echo $off_1990_1993;
		echo ' ';
		echo $on_1994_1998;
		echo ' ';
		echo $off_2000_2004;
		echo ' ';
		echo $off_2005_2009;
		echo ' ';
		echo $off_2010s;
		echo '</div>';
		echo '<p>';
		echo '<div class="button-group filter-button-group">';
		echo '<button data-filter="*">show all</button>';
		echo ' ';
		echo '<button data-filter=".1994">1994</button>';
		echo ' ';
		echo '<button data-filter=".1995">1995</button>';
		echo ' ';
		echo '<button data-filter=".1996">1996</button>';
		echo ' ';
		echo '<button data-filter=".1997">1997</button>';
		echo ' ';
		echo '<button data-filter=".1998">1998</button>';
		echo '</div>';
		echo '<p>';
		};

	if ($post_slug=="papers-1980s") {
		echo '<div class="button-group">';
		echo $on_1980s;
		echo ' ';
		echo $off_1990_1993;
		echo ' ';
		echo $off_1994_1998;
		echo ' ';
		echo $off_2000_2004;
		echo ' ';
		echo $off_2005_2009;
		echo ' ';
		echo $off_2010s;
		echo '</div>';
		echo '<p>';
		echo '<div class="button-group filter-button-group">';
		echo '<button data-filter="*">show all</button>';
		echo ' ';
		echo '<button data-filter=".1983">1983</button>';
		echo ' ';
		echo '<button data-filter=".1984">1984</button>';
		echo ' ';
		echo '<button data-filter=".1985">1985</button>';
		echo ' ';
		echo '<button data-filter=".1986">1986</button>';
		echo ' ';
		echo '<button data-filter=".1987">1987</button>';
		echo ' ';
		echo '<button data-filter=".1988">1988</button>';
		echo ' ';
		echo '<button data-filter=".1989">1989</button>';
		echo '</div>';
		echo '<p>';
		};

	if ($post_slug=="papers-2010s") {
		echo '<div class="button-group">';
		echo $off_1980s;
		echo ' ';
		echo $off_1990_1993;
		echo ' ';
		echo $off_1994_1998;
		echo ' ';
		echo $off_2000_2004;
		echo ' ';
		echo $off_2005_2009;
		echo ' ';
		echo $on_2010s;
		echo '</div>';
		echo '<p>';
		echo '<div class="button-group filter-button-group">';
		echo '<button data-filter="*">show all</button>';
		echo ' ';
		echo '<button data-filter=".2010">2010</button>';
		echo ' ';
		echo '<button data-filter=".2011">2011</button>';
		echo ' ';
		echo '<button data-filter=".2012">2012</button>';
		echo ' ';
		echo '<button data-filter=".2013">2013</button>';
		echo ' ';
		echo '<button data-filter=".2014">2014</button>';
		echo ' ';
		echo '<button data-filter=".2015">2015</button>';
		echo ' ';
		echo '<button data-filter=".2016">2016</button>';
		echo '</div>';
		echo '<p>';
		};
?>

<?php
//loop for paged blog posts
if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
else { $paged = 1; }

if ($post_slug=="papers-1990-1993") {
	$args = array(
		'post_type'=>'newspapers',
	    'posts_per_page' => -1,
	    'paged' => $paged,
	    'order' => 'DESC',
	    'category_name' => '1990-1993'
	);
};

if ($post_slug=="papers-1994-1998") {
	$args = array(
		'post_type'=>'newspapers',
	    'posts_per_page' => -1,
	    'paged' => $paged,
	    'order' => 'DESC',
	    'category_name' => '1994-1998'
	);
};

if ($post_slug=="papers-1980s") {
	$args = array(
		'post_type'=>'newspapers',
	    'posts_per_page' => -1,
	    'paged' => $paged,
	    'order' => 'DESC',
	    'category_name' => '1980s'
	);
};

if ($post_slug=="papers-2005-2009") {
	$args = array(
		'post_type'=>'newspapers',
	    'posts_per_page' => -1,
	    'paged' => $paged,
	    'order' => 'DESC',
	    'category_name' => '2005-2009'
	);
};

if ($post_slug=="papers-2000-2004") {
	$args = array(
		'post_type'=>'newspapers',
	    'posts_per_page' => -1,
	    'paged' => $paged,
	    'order' => 'DESC',
	    'category_name' => '2000-2004'
	);
};

if ($post_slug=="papers-2010s") {
	$args = array(
		'post_type'=>'newspapers',
	    'posts_per_page' => -1,
	    'paged' => $paged,
	    'order' => 'DESC',
	    'category_name' => '2010s'
	);
};

$newspapers = new Wp_Query($args);
echo '<div class="grid">
    <div class="grid-sizer"></div>
    <div class="gutter-sizer"></div>';
if($newspapers->have_posts()) : while ($newspapers->have_posts()) : $newspapers->the_post();
?>

<div class="grid-item <?php isotope_classes(get_the_id()); ?>">
  <?php
		echo "<a data-fancybox='gallery' data-caption='" . get_the_title(get_the_ID()) . "' href='" . get_the_post_thumbnail_url( get_the_ID(), 'full' ) . "'>";
		echo "<img src='" . get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' ) . "'></a>";
		echo '<p>'
	?>
</div>

<?php endwhile; ?>

// Closes '<div class="grid">
</div>

<!--  <div class="pagination">
        <?php //previous_posts_link( '« Newer posts' ); ?>
        <?php //next_posts_link( 'Older posts »', $newspapers->max_num_pages ); ?>
 </div> -->

<?php else: endif; ?>
<?php get_footer(); ?>
