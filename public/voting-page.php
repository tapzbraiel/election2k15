<?php
	include('inc/header.php');
	include('inc/nav.php');
	session_start();
?>
		
		<section id="team">
	    	<div class="container">
		    	<div class="team-members">
		    		<div class="row text-center" id="heading">
		    			<div class="col-md-6 col-md-offset-3 wow animated zoomInDown" id="heading-text">

		        		</div>
		    		</div>
			    	<div class="row main_content">
			    	<h3>President</h3>
		                	<hr class="full">
		                	<br/>
			    		<?php
				    		include('../classes/class.candidate.php');
				    		include('../classes/class.partylist.php');
				    		include('../classes/class.yearlevel.php');


				    		$c =new Candidate();
				    		$list_of_president=array();
				    		$list_of_president=$c->loadPresidents();
				    		foreach ($list_of_president as $pres) {
				    	?>
				    	<div class="col-lg-5 col-md-5 col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-sm-4 text-center candi">
				    		<div class="row wow animated zoomIn" data-wow-delay="0.1s">
				    			<div class="col-md-8 col-md-offset-2">
				    				<img class="img-circle img-responsive center-block" src="img/<?php echo $pres->fname. " ". $pres->lname; ?>.jpg" alt="Syed Rezwanul Haque Rubel">
				    			</div>
				    		</div>	    	
				        	<h4 class="wow animated fadeInUp" data-wow-delay= "0.2s"><?php echo $pres->fname. " ". $pres->lname; ?></h4>
				        	<?php $p= new Partylist();
				        	$p->loadPartyName($pres->id);
				        	 ?>
				        	<p class= "member-title wow animated fadeIn" data-wow-delay= "0.3s"><i><?php echo $p->partyname; ?></i></p>
				        	<p class= "team-member-description wow animated fadeIn" data-wow-delay= "0.4s">Si Gina ky Programmer . Woooh Idol kaau namu na siya. Go Gina! Go Gina!. HAHAHA</p>
				        	<div class= "row text-center wow animated fadeInDown" data-wow-delay= "0.5s">
				        		<div class= "team-member-contact">
				        			<label class="btn btn-success">
							       		<input type="radio"  value="aw" name="sex">Choose
							   		</label>
				        		</div>	
				        	</div>
				    	</div>	<!-- col-md-4 -->
				    	<?php
				    	}
				    	?>
				    	<div class="col-md-5"></div>	<!-- col-md-4 -->
			    	</div> <!-- row main_content -->
			    </div>	<!-- team-members -->
			</div>	<!-- container -->
	    </section>	<!-- team -->


		<section id="team">
	    	<div class="container">
		    	<div class="team-members">
		    		<div class="row text-center" id="heading">
		    			<div class="col-md-6 col-md-offset-3 wow animated zoomInDown" id="heading-text">
		        			
		        		</div>
		    		</div>
			    	<div class="row main_content">
			    	<h3>Vice President</h3>
		                	<hr class="full">
		                	<br/>
			    		<?php
				    		$c =new Candidate();
				    		$list_of_vicepresident=array();
				    		$list_of_vicepresident=$c->loadVicePresidents();
				    		foreach ($list_of_vicepresident as $vpres) {
				    	?>
				    	<div class="col-lg-5 col-md-5 col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-sm-4 text-center candi">
				    		<div class="row wow animated zoomIn" data-wow-delay="0.1s">
				    			<div class="col-md-8 col-md-offset-2">
				    				<img class="img-circle img-responsive center-block" src="img/<?php echo $vpres->fname. " ". $vpres->lname; ?>.jpg" alt="Syed Rezwanul Haque Rubel">
				    			</div>
				    		</div>				    	
				        	<h4 class="wow animated fadeInUp" data-wow-delay= "0.2s"><?php echo $vpres->fname. " ". $vpres->lname; ?></h4>
				        	<?php $p= new Partylist();
				        	$p->loadPartyName($vpres->id);
				        	 ?>
				        	<p class= "member-title wow animated fadeIn" data-wow-delay= "0.3s"><i><?php echo $p->partyname; ?></i></p>
				        	<p class= "team-member-description wow animated fadeIn" data-wow-delay= "0.4s">Si Gina ky Programmer . Woooh Idol kaau namu na siya. Go Gina! Go Gina!. HAHAHA</p>
				        	<div class= "row text-center wow animated fadeInDown" data-wow-delay= "0.5s">
				        		<div class= "team-member-contact">
				        			<label class="btn btn-success">
							       		<input type="radio"  value="aw" name="sex">Choose
							   		</label>
				        		</div>	
				        	</div>
				    	</div>	<!-- col-md-4 -->
				    	<?php
				    	}
				    	?>
				    	<div class="col-md-5"></div>	<!-- col-md-4 -->
			    	</div> <!-- row main_content -->
			    </div>	<!-- team-members -->
			</div>	<!-- container -->
	    </section>	


	    <section id="team">
	    	<div class="container">
		    	<div class="team-members">
		    		<div class="row text-center" id="heading">
		    			<div class="col-md-6 col-md-offset-3 wow animated zoomInDown" id="heading-text">
		        			
		        		</div>
		    		</div>
			    	<div class="row main_content">
			    	<h3> Executive Secretary</h3>
		                	<hr class="full">
		                	<br/>
			    		<?php
				    		$c =new Candidate();
				    		$list_of_secretary=array();
				    		$list_of_secretary=$c->loadSecretaries();
				    		foreach ($list_of_secretary as $sec) {
				    	?>
				    	<div class="col-lg-5 col-md-5 col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-sm-4 text-center candi">
				    		<div class="row wow animated zoomIn" data-wow-delay="0.1s">
				    			<div class="col-md-8 col-md-offset-2">
				    				<img class="img-circle img-responsive center-block" src="img/<?php echo $sec->fname. " ". $sec->lname; ?>.jpg" alt="Syed Rezwanul Haque Rubel">
				    			</div>
				    		</div>    	
				        	<h4 class="wow animated fadeInUp" data-wow-delay= "0.2s"><?php echo $sec->fname. " ". $sec->lname; ?></h4>

				        	<?php $p= new Partylist();
				        	$p->loadPartyName($sec->id);
				        	 ?>
				        	<p class= "member-title wow animated fadeIn" data-wow-delay= "0.3s"><i><?php echo $p->partyname; ?></i></p>
				        	<p class= "team-member-description wow animated fadeIn" data-wow-delay= "0.4s">Si Gina ky Programmer . Woooh Idol kaau namu na siya. Go Gina! Go Gina!. HAHAHA</p>
				        	<div class= "row text-center wow animated fadeInDown" data-wow-delay= "0.5s">
				        		<div class= "team-member-contact">
				        			<label class="btn btn-success">
							       		<input type="radio"  value="aw" name="sex">Choose
							   		</label>
				        		</div>	
				        	</div>
				    	</div>	<!-- col-md-4 -->
				    	<?php
				    	}
				    	?>
				    	<div class="col-md-5"></div>	<!-- col-md-4 -->
			    	</div> <!-- row main_content -->
			    </div>	<!-- team-members -->
			</div>	<!-- container -->
	    </section>	


	        <section id="team">
	    	<div class="container">
		    	<div class="team-members">
		    		<div class="row text-center" id="heading">
		    			<div class="col-md-6 col-md-offset-3 wow animated zoomInDown" id="heading-text">
		        			
		        		</div>
		    		</div>
			    	<div class="row main_content">
			    	<h3>Budget and Finance Officer</h3>
		                	<hr class="full">
		                	<br/>
			    		<?php
				    		$c =new Candidate();
				    		$list_of_treasurer=array();
				    		$list_of_treasurer=$c->loadTreasurers();
				    		foreach ($list_of_treasurer as $treas) {
				    	?>
				    	<div class="col-lg-5 col-md-5 col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-sm-4 text-center candi">
				    		<div class="row wow animated zoomIn" data-wow-delay="0.1s">
				    			<div class="col-md-8 col-md-offset-2">
				    				<img class="img-circle img-responsive center-block" src="img/<?php echo $treas->fname. " ". $treas->lname; ?>.jpg" alt="Syed Rezwanul Haque Rubel">
				    			</div>
				    		</div>
				        	<h4 class="wow animated fadeInUp" data-wow-delay= "0.2s"><?php echo $treas->fname. " ". $treas->lname; ?></h4>

				        	<?php $p= new Partylist();
				        	$p->loadPartyName($treas->id);
				        	 ?>
				        	<p class= "member-title wow animated fadeIn" data-wow-delay= "0.3s"><i><?php echo $p->partyname; ?></i></p>
				        	<p class= "team-member-description wow animated fadeIn" data-wow-delay= "0.4s">Si Gina ky Programmer . Woooh Idol kaau namu na siya. Go Gina! Go Gina!. HAHAHA</p>
				        	<div class= "row text-center wow animated fadeInDown" data-wow-delay= "0.5s">
				        		<div class= "team-member-contact">
				        			<label class="btn btn-success">
							       		<input type="radio"  value="aw" name="sex">Choose
							   		</label>
				        		</div>	
				        	</div>
				    	</div>	<!-- col-md-4 -->
				    	<?php
				    	}
				    	?>
				    	<div class="col-md-5"></div>	<!-- col-md-4 -->
			    	</div> <!-- row main_content -->
			    </div>	<!-- team-members -->
			</div>	<!-- container -->
	    </section>	

	    <section id="team">
	    	<div class="container">
		    	<div class="team-members">
		    		<div class="row text-center" id="heading">
		    			<div class="col-md-6 col-md-offset-3 wow animated zoomInDown" id="heading-text">
		        			
		        		</div>
		    		</div>
			    	<div class="row main_content">
			    	<h3> Internal Auditor</h3>
		                	<hr class="full">
		                	<br/>
			    		<?php
				    		$c =new Candidate();
				    		$list_of_auditor=array();
				    		$list_of_auditor=$c->loadAuditors();
				    		foreach ($list_of_auditor as $aud) {
				    	?>
				    	<div class="col-lg-5 col-md-5 col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-sm-4 text-center candi">
				    		<div class="row wow animated zoomIn" data-wow-delay="0.1s">
				    			<div class="col-md-8 col-md-offset-2">
				    				<img class="img-circle img-responsive center-block" src="img/<?php echo $aud->fname. " ". $aud->lname; ?>.jpg" alt="Syed Rezwanul Haque Rubel">
				    			</div>
				    		</div>
				        	<h4 class="wow animated fadeInUp" data-wow-delay= "0.2s"><?php echo $aud->fname. " ". $aud->lname; ?></h4>

				        	<?php $p= new Partylist();
				        	$p->loadPartyName($aud->id);
				        	 ?>
				        	<p class= "member-title wow animated fadeIn" data-wow-delay= "0.3s"><i><?php echo $p->partyname; ?></i></p>
				        	<p class= "team-member-description wow animated fadeIn" data-wow-delay= "0.4s">Si Gina ky Programmer . Woooh Idol kaau namu na siya. Go Gina! Go Gina!. HAHAHA</p>
				        	<div class= "row text-center wow animated fadeInDown" data-wow-delay= "0.5s">
				        		<div class= "team-member-contact">
				        			<label class="btn btn-success">
							       		<input type="radio"  value="aw" name="sex">Choose
							   		</label>
				        		</div>	
				        	</div>
				    	</div>	<!-- col-md-4 -->
				    	<?php
				    	}
				    	?>
				    	<div class="col-md-5"></div>	<!-- col-md-4 -->
			    	</div> <!-- row main_content -->
			    </div>	<!-- team-members -->
			</div>	<!-- container -->
	    </section>	


	    <section id="team">
	    	<div class="container">
		    	<div class="team-members">
		       		<div class="row text-center" id="heading">
		    			<div class="col-md-6 col-md-offset-3 wow animated zoomInDown" id="heading-text">
		        			
		        		</div>
		    		</div>	
			    	<div class="row main_content">
			    		<h3>Senators</h3>
		                <hr class="full">
		               	<br/>
						<?php
				    		$c =new Candidate();
				    		$list_of_senator=array();
				    		$list_of_senator=$c->loadSenators();
				    		foreach ($list_of_senator as $sen) {
				    	?>
				    	<div class="col-lg-3 col-md-3  col-sm-3 text-center candi-border">
				    		<div class="row wow animated zoomIn" data-wow-delay="0.1s">
				    			<div class="col-md-8 col-md-offset-2">
				    				<img class="img-circle img-responsive center-block" src="img/<?php echo $sen->fname. " ". $sen->lname; ?>.jpg" alt="Syed Rezwanul Haque Rubel">
				    			</div>
				    		</div>
				        	<h4 class="wow animated fadeInUp" data-wow-delay= "0.2s"><?php echo $sen->fname. " ". $sen->lname; ?></h4>

				        	<?php $p= new Partylist();
				        	$p->loadPartyName($sen->id);
				        	 ?>
				        	<p class= "member-title wow animated fadeIn" data-wow-delay= "0.3s"><i><?php echo $p->partyname; ?></i></p>
				        	<p class= "team-member-description wow animated fadeIn" data-wow-delay= "0.4s">Si Gina ky Programmer . Woooh Idol kaau namu na siya. Go Gina! Go Gina!. HAHAHA</p>
				        	<div class= "row text-center wow animated fadeInDown" data-wow-delay= "0.5s">
				        		<div class= "team-member-contact">
				        			<label class="btn btn-success">
							       		<input type="radio"  value="aw" name="sex">Choose
							   		</label>
				        		</div>	
				        	</div>
				    	</div>
				    	<?php
				    	}
				    	?>
	    			</div> <!-- row main_content -->
			    </div>	<!-- team-members -->
			</div>	<!-- container -->
	    </section>	<!-- team -->

	    <section id="team">
	    	<div class="container">
		    	<div class="team-members">
		    		<div class="row text-center" id="heading">
		    			<div class="col-md-6 col-md-offset-3 wow animated zoomInDown" id="heading-text">
		        			
		        		</div>
		    		</div>
			    	<div class="row main_content">
			    	<h3> Representative</h3>
		                	<hr class="full">
		                	<br/>
			    		<?php
			    		
				    		$c =new Candidate();
				    		$y=new Yearlevel();
				    		$yearlevel_id=$y->getMyYearLevelId($_SESSION['usn']);
				    		$list_of_representative=array();

				    		$list_of_representative=$c->loadRepresentatives($yearlevel_id);
				    		foreach ($list_of_representative as $rep) {
				    	?>
				    	<div class="col-lg-5 col-md-5 col-md-offset-1 col-lg-offset-1 col-sm-offset-1 col-sm-4 text-center candi">
				    		<div class="row wow animated zoomIn" data-wow-delay="0.1s">
				    			<div class="col-md-8 col-md-offset-2">
				    				<img class="img-circle img-responsive center-block" src="img/<?php echo $rep->fname. " ". $aud->rep; ?>.jpg" alt="Syed Rezwanul Haque Rubel">
				    			</div>
				    		</div>
				        	<h4 class="wow animated fadeInUp" data-wow-delay= "0.2s"><?php echo $rep->fname. " ". $rep->lname; ?></h4>

				        	<?php $p= new Partylist();
				        	$p->loadPartyName($rep->id);
				        	 ?>
				        	<p class= "member-title wow animated fadeIn" data-wow-delay= "0.3s"><i><?php echo $p->partyname; ?></i></p>
				        	<p class= "team-member-description wow animated fadeIn" data-wow-delay= "0.4s">Si Gina ky Programmer . Woooh Idol kaau namu na siya. Go Gina! Go Gina!. HAHAHA</p>
				        	<div class= "row text-center wow animated fadeInDown" data-wow-delay= "0.5s">
				        		<div class= "team-member-contact">
				        			<label class="btn btn-success">
							       		<input type="radio"  value="aw" name="sex">Choose
							   		</label>
				        		</div>	
				        	</div>
				    	</div>	<!-- col-md-4 -->
				    	<?php
				    	}
				    	?>
				    	<div class="col-md-5"></div>	<!-- col-md-4 -->
			    	</div> <!-- row main_content -->
			    </div>	<!-- team-members -->
			</div>	<!-- container -->
	    </section>	
  	
<?php
	include('inc/header.php')
?>