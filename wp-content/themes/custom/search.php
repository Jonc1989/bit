<?php get_header(); ?>
<?php
$search_string = get_search_query();
$args = array(
	's' => $search_string
);

$query = new WP_Query( $args );?>
<div style="height: 100%;">
<?php if ( $query->have_posts() ) {
	_e("<h2 style='font-weight:bold;color:#000'>Search Results for: ".get_query_var('s')."</h2>");
	while ( $query->have_posts() ) {
		$query->the_post();
		?>
		<li>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</li>
		<?php
	}
}else{
	?>
	<h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
	<div class="alert alert-info">
		<p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
	</div>
<?php } ?>

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>


