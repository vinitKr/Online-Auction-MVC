<!DOCTYPE html>
<html>
	<head>
		<?php
		require 'common/head.php';
		?>
	</head>
	<body>
		<div class="container-fluid">
			<?php
			require 'common/nav.php';
			?>
			<div class="row">
				<?php
				require 'common/categories.php';
				?>
				<div class="col-md-10">
					<div class="row">
						<?php

foreach ($products as $product) {

						?>
						<!-- thumbnail -->
						<div class="col-md-3 col-sm-4">
							<div class="thumbnail">
								<img alt="Bootstrap Thumbnail First" src="<?php echo $product -> image; ?>" style="width: 100%; height: 220px">
								<div class="caption">
									<h4><?php echo $product -> title; ?></h4>
									<p>
										Price: $<?php echo $product -> price; ?>
									</p>
									<p>
										<a class="btn btn-primary" style="width: 100%;" href="products.php?op=pdesc&pid=<?php echo $product -> pid; ?>">View product</a>
									</p>
								</div>
							</div>
						</div>
						<?php } ?>
						<!--end thumbnail-->
					</div>
		<!--			<ul class="pagination" style="position: relative; left: 75%">
						<li>
							<a href="#">Prev</a>
						</li>
						<li>
							<a href="#">1</a>
						</li>
						<li>
							<a href="#">2</a>
						</li>
						<li>
							<a href="#">3</a>
						</li>
						<li>
							<a href="#">4</a>
						</li>
						<li>
							<a href="#">5</a>
						</li>
						<li>
							<a href="#">Next</a>
						</li>
						</ul>	-->
				</div>
			</div>
		</div>
		<?php
		require 'view/common/footer.php';
		?>
	</body>

</html>