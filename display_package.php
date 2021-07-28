

<?php
$con=pg_connect("host=localhost user=harshal password=root123 dbname=gym") or die ( "unable to connect database");
$qry= "select * from package";

$rs=pg_query($con,$qry) or die ("problem in slection of query");
echo "<center>";
echo "<table border=1>";
echo "<tr><th> P_id </th> <th>P_name</th> <th>P_amt</th> <th>P_type</th> <th> P_desc </th> <th>Gym_id</th> ";

while( $rec =pg_fetch_assoc($rs))
{
        $id=$rec['p_id'];
        $name=$rec['p_name'];
        $gamt=$rec['p_amt'];
        $gtype=$rec['p_type'];
        $gdesc=$rec['p_desc'];
        $gid=$rec['gym_id'];

        echo"<tr>";
        echo"<td>$id</td>";
        echo"<td>$name</td>";
        echo"<td>$gamt</td>";
        echo"<td>$gtype</td>";
        echo"<td>$gdesc</td>";
        echo"<td>$gid</td>";
        echo"</tr>";
}

pg_close($con);


?>
</body>
</html>

