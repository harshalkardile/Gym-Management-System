<html>
<head>
<center><h1>Payment Status</h1></center>
</head>
<body bgcolor="skyblue">

<?php
$con=pg_connect("host=localhost user=harshal password=root123 dbname=gym") or die ( "unable to connect database");
$qry= "select * from pay_memb";

$rs=pg_query($con,$qry) or die ("problem in slection of query");
echo "<center>";
echo "<table border=1 style=background-color:white>";
echo "<tr><th> M_ID </th> <th>Payment ID</th> <th>Status</th>";

while( $rec =pg_fetch_assoc($rs))
{
        $mid=$rec['m_id'];
        $pid=$rec['pay_id'];
        $status=$rec['status'];

        echo"<tr>";
        echo"<td>$mid</td>";
        echo"<td>$pid</td>";
        echo"<td>$status</td>";
        echo"</tr>";
}

pg_close($con);

        
?>
</body>
</html>

