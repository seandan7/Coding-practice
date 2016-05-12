<?php
$featured_query_args = array(
	'post_type' => 'property_listing',
	'meta_query' => array(
		array(
			'key' => 'featured_listing',
			'value' => '1',
			'compare' => '='
		)
	)
);

/* featured_listing */
$qryFeatured = new WP_Query( $featured_query_args );
while ( $qryFeatured->have_posts() ) {
	$qryFeatured->the_post();
	$listing = get_post();
	$price = get_post_meta( $listing->ID, 'price', true );
	$bedrooms = get_post_meta( $listing->ID, 'bedrooms', true);
	$bathrooms = get_post_meta( $listing->ID, 'bathrooms', true);
	$featured_description= get_post_meta( $listing->ID, 'featured_listing_description', true);
	$permalink = get_permalink( $listing->ID );
	if ( has_post_thumbnail() ) {
		$thumbnail = get_the_post_thumbnail( $listing->ID, array( 200, 200 ) );
	} else {
		$thumbnail = '<img src="https://placeholdit.imgix.net/~text?txtsize=19&txt=No%20Image%20Available&w=200&h=200" alt="No Image Avaiable" width="200" height="200">';
	}
	include('featured-listing-template.php');
}
wp_reset_postdata();