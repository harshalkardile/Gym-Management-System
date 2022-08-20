<!DOCTYPE html>
<html lang="en">
<head>
	<title>Payment Status</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>

<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								
								<tr class="row100 head">
									
									<th class="cell100 column1">MemberID</th>
									<th class="cell100 column2">PaymentID</th>
									<th class="cell100 column3">PaymentStatus</th>				

								</tr>
								
							</thead>
						</table>
					</div>


<?php
$con=pg_connect("host=localhost user=harshal password=root123 dbname=gym") or die ( "unable to connect database");
$qry= "select * from pay_memb";


$rs=pg_query($con,$qry) or die ("problem in slection of query");


while( $rec =pg_fetch_assoc($rs))
{
        $mid=$rec['m_id'];
        $pid=$rec['pay_id'];
        $status=$rec['status'];


        ?>
					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<tr class="row100 body">
									<td class="cell100 column1"><?php echo"$mid ";?></td>
									<td class="cell100 column2"><?php echo"$pid";?></td>
									<td class="cell100 column3"><?php echo"$status";?></td>
									
								</tr>
							</tbody>
						</table>
					</div>
					
<?php
}

pg_close($con);


?>	
				</div>
			</div>
		</div>
	</div>

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="vendor/select2/select2.min.js"></script>

	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
	<script src="js/main.js"></script>
</body>
</html>
