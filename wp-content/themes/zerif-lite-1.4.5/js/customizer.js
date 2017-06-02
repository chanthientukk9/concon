/**
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */
( function( $ ) {
	/* Site title and description. */
	
	wp.customize( 'zerif_logo', function( value ) {
	
	/* zerif_minititle_title */
	wp.customize( 'zerif_bigtitle_minititle', function( value ) {
		value.bind( function( to ) {
			if( to != '' ) {
				$( '.header-content-wrap p.intro-text-mini' ).removeClass( 'zerif_hidden_if_not_customizer' );
			}
			else {
				$( '.header-content-wrap p.intro-text-mini' ).addClass( 'zerif_hidden_if_not_customizer' );
			}
			$( '.header-content-wrap p.intro-text-mini' ).html( to );
		} );
	} );
	
	
	
	
	
	
	
	
	
	
	wp.customize( 'zerif_contactus_show', function( value ) {
	
	
	

} )( jQuery );