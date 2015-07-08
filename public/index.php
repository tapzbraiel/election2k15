<?php
	include('inc/header.php');
?>
		<div id="wrapper">
			<div id="overlay-1">
<?php
	include('inc/nav.php');
	session_start();
?>
				<section id="starting">
					<div class="text-center starting-text">
						<form method="post" action="../functions/user_login.php">
						<?php
							
							if (isset($_SESSION['HAS_ERROR'])) {
								if ($_SESSION['HAS_ERROR']) {
								echo '<label class="alert alert-danger">Invalid username/password</label>';
							}
							}
							
						?>
						<div class="margin-bottom-sm">
							<input class="form-control" type="text" name="usn" placeholder="Enter your Student USN here">
						</div>
						<div class="margin-bottom-sm">
							<input class="form-control" type="text" name="password" placeholder="Enter your password here">
						</div>
							<input class="btn btn-primary send" type="submit" value="Submit" onclick="windows.location('localhost/voting/voting-page.php')">
						</form>
						
						<!--<h1 class="rene">RENESSA</h1>
						<h2>Welcome to our world</h2>-->
					</div>
				</section>
				<div id="bottom" class="bottom text-center">
			        <a href="#about"><i class="ion-ios7-arrow-down"></i></a>
			    </div>
			</div><!-- overlay-1 -->
		</div>	<!-- wrapper -->	
  	
<?php
	include('inc/header.php')
?>