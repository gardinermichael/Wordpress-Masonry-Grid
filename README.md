# Wordpress-Masonry-Grid
A masonry grid hosted on a Wordpress page



<h3>Wordpress Plugins:</h3>

* [Custom Post Type UI](https://wordpress.org/plugins/custom-post-type-ui/)
  * Simplify making custom post types in Wordpress and editing them in bulk.
* [Bulk Images to Posts](https://wordpress.org/plugins/bulk-images-to-posts/)
  * Drag and drop images to upload. Preselect the filterable Category/Taxonomy.
* [BJ Lazy Load](https://wordpress.org/plugins/bj-lazy-load/)
  * Lazy load post thumbnails (what the images are saved as in Wordpress).
* [Regenerate Thumbnails](https://wordpress.org/plugins/regenerate-thumbnails/)
  * Regenerate the thumbnails if needed.
* [Fix Image Rotation](https://wordpress.org/plugins/fix-image-rotation/)
  * Auto-fix image rotation on upload based on exif data.
* [iOS images fixer](https://wordpress.org/plugins/ios-images-fixer/)
  * Fix image rotation retroactively.


<h3>Javascript Libraries:</h3>

* [Masonry](https://masonry.desandro.com/)
  * Pinterest-style cascading grid with filterable UI buttons.
* [imagesLoaded](https://masonry.desandro.com/)
  * Masonry is only kicked off when the images are loaded. Doesn't seem to affect Infinite Scroll bugs.
* [Infinite Scroll](https://infinite-scroll.com/)
  * Buggy when paired with Masonry. Problems with loading the images before/after they're filtered. 
* [fancyBox3](http://fancyapps.com/fancybox/3/)
  * Lightbox image gallery for single page navigation. 
  
<h3>Workflow:</h3>
  
* Using Custom Post Type (CPT), create a post type for your images to act as a placeholder.
  * In my case, the post type was Newspaper Covers.
* Decide if you want to use Taxonomies or Categories to filter the images.
  * Category will show up for ALL your posts.
  * Taxonomy will only show up for your custom post type. Use CPT to create it and turn on the hierarchical setting (it'll otherwise act like tags)
* In my case, I used categories as a defining filter (a range of years, per seperate page), than taxonomy tags (published year within the same page) as a subfilter.
  * It helps if images are named descriptively -- i.e. the year/month are included in the image titles.
* Save customized PHP/CSS to the */wp-content/themes/your-theme/* folder
  * Add the css to **style.css**
  * Create a new php file for your HTML (i.e. **newspapers-grid.php**)
  * Add Javascript to **footer.php**
* Turn on debug/logging via **wp-config.php**
  * define('WP_DEBUG', True);
  * define('WP_DEBUG_LOG', true);
   
  
