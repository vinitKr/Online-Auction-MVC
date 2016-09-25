<?php

if(!isset($_SESSION['user'])){
	echo "<script type='text/javascript'>alert('Please Login First!')</script>";
				include 'view/home.php';
}
else {
	?>

<!DOCTYPE html>
<html>
	<head>
		<?php
		require 'view/common/head.php';
		?>
		<style>
			table, th, td {

				border: 2px solid black;
				padding: 5px;
			}
		</style>
		
		<link type="text/css" rel="stylesheet" href="clock_assets/flipclock.css" />
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
							<h4><b>Time Remaining:</b></h4>
						</dt>
												
						<dd class="clock-builder-output"></dd><hr>
						<?php $con = mysql_connect("localhost", "root", "");
						if (!$con) {
							die('could not connect : ' . mysql_error());
						}
						$id = $_REQUEST['pid'];
						mysql_select_db("nilamee", $con);
						$rr = mysql_query("select * from addproducts where pid=$id") or die("Error!!");

						while ($rw = mysql_fetch_array($rr)) {
							$btime = $rw['btime'];
						}
						$t = strtotime($btime);
					?>

							
						<!-- clock -->								

						<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
						<script type="text/javascript" src="clock_assets/flipclock.js"></script>
						<style text="text/css">
							body .flip-clock-wrapper ul li a div div.inn, body .flip-clock-small-wrapper ul li a div div.inn {
								color: #CCCCCC;
								background-color: #333333;
							}
							body .flip-clock-dot, body .flip-clock-small-wrapper .flip-clock-dot {
								background: #323434;
							}
							body .flip-clock-wrapper .flip-clock-meridium a, body .flip-clock-small-wrapper .flip-clock-meridium a {
								color: #323434;
							}
						</style>
						<script type="text/javascript">
							$(function() {
								FlipClock.Lang.Custom = {
									days : 'Days',
									hours : 'Hours',
									minutes : 'Minutes',
									seconds : 'Seconds'
								};
								var opts = {
									clockFace : 'DailyCounter',
									countdown : true,
									language : 'Custom'
								};
								opts.classes = {
									active : 'flip-clock-active',
									before : 'flip-clock-before',
									divider : 'flip-clock-divider',
									dot : 'flip-clock-dot',
									label : 'flip-clock-label',
									flip : 'flip',
									play : 'play',
									wrapper : 'flip-clock-small-wrapper'
								};
								var t=<?php echo $t ?>;
								var countdown = t - ((new Date().getTime()) / 1000);
								// from: 03/28/2016 01:02 am +0530
								countdown = Math.max(1, countdown);
								$('.clock-builder-output').FlipClock(countdown, opts);
							});
						</script>

												
													
						<!-- end clock -->					
						
					
					<dt><form method="post">
						<input name="bAmount" type="text" required class="form-control" placeholder="Bidding Amount"></dt> 
					<dd><input class="btn btn-success btn-default btn-block" type="submit" name="submit" value="Bid" />
					
					</dd></form><br>
					<?php 
					$conn = new mysqli("localhost", "root", "", "nilamee");
					if ($conn -> connect_error) {
						die("Connection failed:" . $conn -> connect_error);
					}
					if (isset($_POST['submit'])) {
						$amount = $_REQUEST['bAmount'];
						$name = $_SESSION['user'];
						$id = $_GET['pid'];
						$ss = "SELECT * FROM addproducts WHERE pid= $id";	
						$res = $conn -> query($ss);
						while ($r = $res -> fetch_assoc()) {

							$bt= $r["btime"];
						}
						if ($bt > 0) {
						
						if($amount > $product -> price){
						$sql = "SELECT Name,Price FROM bid WHERE pid= $id ORDER BY Price DESC";						
						$result = $conn -> query($sql);						

						$sig = 0;

						while ($row = $result -> fetch_assoc()) {

							if ($name == $row["Name"] && $amount == $row["Price"])
								$sig = 1;
						}
						

						$amount = $_REQUEST['bAmount'];
						$name = $_SESSION['user'];
						$id = $_REQUEST['pid'];
													
						
						$sql = "INSERT INTO bid (Name, Price, pid) VALUES ('$name', '$amount', '$id')";
						if ($sig == 0) {
							if ($conn -> query($sql) === TRUE) {
								echo "<script type='text/javascript'>alert('successfull')</script>";

							} else {
								echo "Error: " . $conn -> error;
							}
						}
						else {
							echo "<script type='text/javascript'>alert('Already Exist!')</script>";
						}
						}
						else {
							echo "<script type='text/javascript'>alert('Amount is less then current price!')</script>";
						}
						}
						else {
							echo "<script type='text/javascript'>alert('you cannot bid right now')</script>";
						}
					}
					?>  
					<dt>
							<h4><b>Current Price:</b></h4>
						</dt>
						<dd>
							<h4>
							<?php
								$id = $_GET['pid'];
								$sql = "SELECT Name,Price FROM bid WHERE pid= $id ORDER BY Price DESC";
								$result = $conn -> query($sql);
								$count = 1;

								if ($result -> num_rows > 0) {
									echo '
							<table class="table table-striped table-bordered table-hover table-condensed" style="width:100%">
								<tr class="info">
									<th>S.No.</th>
									<th>USER</th>
									<th>PRICE</th>
								</tr>';

									while ($row = $result -> fetch_assoc()) {
										echo "
											<tr>
												<td>" . $count . "</td><td>" . $row["Name"] . "</td><td>" . $row["Price"] . "</td>
											</tr>";
										$count++;
									}

									echo "
							</table>
							";
								} else {
									echo "0 results";
								}
								$conn -> close();
							?>
							</h4>
						</dd> </dl>
				</div>
			</div>
		</div>		
		<?php
		require 'common/footer.php';
 ?>
	</body>

</html>

<?php } ?>