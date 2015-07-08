<section id= "footer" class= "main-footer">
			<div class= "row">
				<div class= "logo text-center">
					<h1>Renessa</h1>
				</div>
			</div>
			<div class= "row">
				<div class= "copyright text-center">
					<p> © 2014 Technext. Designed and Developed by <a href="http://themewagon.com"><span class= "theme">Themewagon</span></a></p>
				</div>
			</div>
		</section><!-- footer -->

		<!-- js -->
		<script>
			$(document).ready(function() {
  				$("#client-speech").owlCarousel({
  					autoPlay: 3000,
      				navigation : false, // Show next and prev buttons
      				slideSpeed : 700,
      				paginationSpeed : 1000,
      				singleItem:true
  				});
			});
		</script>
		<script>
 			new WOW().init();
		</script>
		<script>
			$( function() {
				  // init Isotope
			  	var $container = $('.isotope').isotope
			  	({
				    itemSelector: '.element-item',
				    layoutMode: 'fitRows'
			  	});


  				// bind filter button click
  				$('#filters').on( 'click', 'button', function() 
  				{
				    var filterValue = $( this ).attr('data-filter');
				    // use filterFn if matches value
				    $container.isotope({ filter: filterValue });
				 });
  
			  // change is-checked class on buttons
			  	$('.button-group').each( function( i, buttonGroup ) 
			  	{
			    	var $buttonGroup = $( buttonGroup );
			    	$buttonGroup.on( 'click', 'button', function() 
			    	{
			      		$buttonGroup.find('.is-checked').removeClass('is-checked');
			      		$( this ).addClass('is-checked');
			    	});
			  	});
			  
			});
		</script>
        <script src="js/jquery-ui-1.10.3.min.js"></script>
        <script src="js/jquery.knob.js"></script>
        <script src="js/daterangepicker.js"></script>
        <script src="js/bootstrap3-wysihtml5.all.min.js"></script>
        <script src="js/dashboard.js"></script>
       
	</body>
</html>
