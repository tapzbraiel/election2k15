					<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="order" class="modal fade">
		                <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Ooppsss !! Something went wrong...</h4>
		                      </div>
		                     	  <div class="modal-body">
										<div class="col-md-12">
											<label class="btn btn-warning text-center">
									       			You've already voted. Thanks :)
									   		</label>
										</div>
		                     	  </div>
		                      <div class="modal-footer">
		                           <input type ="button"  class="btn btn-primary" data-dismiss="modal" value="Close"/><!--onclick="window.location = '/mywebprog/index.php/Checkout/'"--> 
		                      </div>
		                  </div>
		                </div>
		            </div>
		            <?php 
		            		include('../public/index.php');
		            ?>
		      <script type="text/javascript">
			    $(window).load(function(){
			        $('#order').modal('show');
			    });
			</script>