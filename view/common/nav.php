<div class="row">
	<div class="col-md-12">

		<h1 style="margin-bottom: 10px"><a href="index.php"><u>AuXon</u></a><small>Try your luck!</small></h1>
		<hr>

	</div>

	<div class="row clearfix" style="margin-top:40px;">
		<div class="col-md-12 col-xs-12 column">
			<ul class="nav nav-pills navbar-static-top">

				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="#">About</a>
				</li>
				<li>
					<a href="#">Services</a>
				</li>
				<li>
					<a href="#">Achievements</a>
				</li>
				<li>
					<a href="#">Contacts</a>
				</li>
				
				
				<?php
if (isset( $_SESSION['user'])) {
				?>
				<li>
					<?php
					require 'view/submit_ad.php';
					?>
				</li>
				<?php } ?>
				
								
				<li class="pull-right"> . </li>

				<?php
if (!isset($_SESSION['user'])) {
				?>
				<li class="pull-right">
					<?php
					require 'login_signup.php';
					?>
				</li>
				<?php } ?>
				
				<?php
if (isset( $_SESSION['user'])) {
				?>
				<li class="pull-right">
					<form method="post" action="user.php">
						<input name="logout"  class="btn btn-info" value="Logout" type="submit" />
					</form>
				</li>
				<?php } ?> <li class="pull-right"> . </li>

				<li class="pull-right">
					<form method="get" action="products.php">
						<input name="srch" type="text" class="form-control" placeholder="Search for...">
						<input type="submit" style="display: none;" name="search" />
					</form>

				</li>
				
			</ul>
		</div>
	</div>
