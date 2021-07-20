<html>
<head>
<center><h1>Payment Details</h1></center>
</head>
<body bgcolor="skyblue">


<?php
$con=pg_connect("host=localhost user=harshal password=root123 dbname=gym") or die ( "unable to connect database");
$qry= "select * from payment";

$rs=pg_query($con,$qry) or die ("problem in slection of query");
echo "<center>";
echo "<table border=1s style=background-color:white>";
echo "<tr><th> Pay_ID </th> <th>Pay_date</th> <th>Pay_amt</th> <th>Pay_desc.</th>";

while( $rec =pg_fetch_assoc($rs))
{
        $pid=$rec['pay_id'];
        $pdate=$rec['pay_date'];
        $pamt=$rec['pay_amt'];
        $pdesc=$rec['pay_desc'];

        echo"<tr>";
        echo"<td>$pid</td>";
        echo"<td>$pdate</td>";
        echo"<td>$pamt</td>";
        echo"<td>$pdesc</td>";
        echo"</tr>";
}

pg_close($con);




