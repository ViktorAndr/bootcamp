/*
 * Customizer.js to reload changes on Theme Customizer Preview asynchronously.
 *
 */

( function( $ ) {

	/* Default WordPress Customizer settings */
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '#logo .site-title' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '#logo .site-description' ).text( to );
		} );
	} );
		wp.customize( 'header_color', function( value ) {
		value.bind( function( to ) {
			$( '#header-wrap' ).css('background', value );
		} );
	} );

} )( jQuery );