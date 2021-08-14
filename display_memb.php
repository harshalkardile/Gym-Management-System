
<head>
<center><h1>Members Informaton</h1></center>
</head>
<body bgcolor="skyblue">


<?php
$con=pg_connect("host=localhost user=harshal password=root123 dbname=gym") or die ( "unable to connect database");
$qry= "select * from member";

$rs=pg_query($con,$qry) or die ("problem in slection of query");
echo "<center>";
echo "<table border=1>";
echo "<tr><th> M_id </th> <th>M_name</th> <th>M_no</th> <th>M_addr</th> <th> M_username </th> <th>Gym_id</th> <th>T_id</th> ";

while( $rec =pg_fetch_assoc($rs))
{
	$id=$rec['m_id'];  
	$name=$rec['m_name'];
	$mno=$rec['m_no'];
	$madd=$rec['m_addr'];
	$muser=$rec['m_username'];
	$gid=$rec['gym_id'];
	$tid=$rec['t_id'];

	echo"<tr>";	
	echo"<td>$id</td>";	
	echo"<td>$name</td>";
	echo"<td>$mno</td>";
	echo"<td>$madd</td>";
	echo"<td>$muser</td>";
	echo"<td>$gid</td>";
	echo"<td>$tid</td>";
	echo"</tr>";
}

pg_close($con);


?>
</body>
</html>
