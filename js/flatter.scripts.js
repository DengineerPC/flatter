jQuery( function( $ ) {
	
 $("a[href='#go-to-top']").click(function() {
		$("html, body").animate({ scrollTop: 0 }, "slow");
		return false;
  });
	
 $(".bg").css( "background-size", "cover" );
	
	$(document).ready(function() {
 		 $('#side-menu').sidr({
			side: 'right'
		});
	});
	

});