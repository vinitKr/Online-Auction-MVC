<?php
require_once 'config.php';
?>

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
				<div class="col-md-7">
					<img class="img-thumbnail" alt="Bootstrap Image Preview" style="width: 100%;height: 500px" src="<?php echo $product -> image; ?>"/>
					
				</div>
				<div class="col-md-5">
					<h3 class="text-center text-info" style="font-size: 60px"> <?php echo $product -> title; ?> </h3>
					<dl class="dl-horizontal">
						<dt>
							<h4><b>Start Price:</b></h4>
						</dt>
						<dd>
							<h4><?php echo $product -> price; ?></h4>
						</dd>
						<dt>
							<h4><b>Current Price:</b></h4>
						</dt>
						<dd>
							<h4>
								<?php
								$this -> conset = new config();
								$conn = new mysqli($this -> conset -> servername, $this -> conset -> username, $this -> conset -> password, $this -> conset -> dbname);
								if ($conn -> connect_error) {
									die("Connection failed:" . $conn -> connect_error);
								}
								$id = $_GET['pid'];
								$sql = "SELECT MAX(Price) AS max FROM bid WHERE pid=$id";
								$result = $conn -> query($sql);
								
								if ($result -> num_rows > 0) {
										
									while ($row = $result -> fetch_assoc()) {
										echo $row["max"];										
									}

								}
								else {
									echo "0 results";
								}
								$conn -> close();
							?>
							</h4>
						</dd>
						<dt>
							<h4><b>Discription:</b></h4>
						</dt>
						<dd>
							<h4><?php echo $product -> descri; ?></h4>
						</dd>						
						<dt>
							<h4><b>Owner:</b></h4>
						</dt>
						<dd>
							<h4><?php echo $product -> name; ?></h4>
						</dd>
						<dt>
							<h4><b>Contect No.:</b></h4>
						</dt>
						<dd>
							<h4><?php echo $product -> mob; ?></h4>
						</dd>
						<dt>
							<h4><b>Email:</b></h4>
						</dt>
						<dd>
							<h4><?php echo $product -> email; ?></h4>
						</dd>
						
					</dl>
					<a class="btn btn-success btn-default btn-block" href="products.php?op=buy&pid=<?php echo $product -> pid; ?>">
						Buy Now
						</a>
					<a class="btn btn-success btn-default btn-block" href="products.php?op=bid&pid=<?php echo $product -> pid; ?>">
						Start Bidding!
						</a>   
				</div>
			</div>
		</div>		
		<?php
		require 'common/footer.php';
 ?>
	</body>

</html>