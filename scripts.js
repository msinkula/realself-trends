window.onload = function() {	
		
	// Search Toggle Open
	$('#search-toggle-open').click( function() {		
		
		$('#search-toggle-close').css('display', 'block');
		$('#search-toggle-open').css('display', 'none');
		$('#search-modal').slideToggle();
		
	});
	//	
	
	// Search Toggle Close
	$('#search-toggle-close').click( function() {		
		
		$('#search-toggle-open').css('display', 'block');
		$('#search-toggle-close').css('display', 'none');
		$('#search-modal').slideToggle();
	});
	//
	
	// create placeholder attribute in search input
	$( 'input#s' ).attr( 'placeholder','Search RealSelf Trends Blog' );
	//
	
	// Disable light-box 
	/*if (window.innerWidth < 801) {
		
		$('div.post-single a').click.preventDefault();
		
	}*/
	
	
}; // end window load