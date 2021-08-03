


<?php
$con=pg_connect("host=localhost user=harshal password=root123 dbname=gym") or die ( "unable to connect database");
$qry= "select * from trainer";

$rs=pg_query($con,$qry) or die ("problem in slection of query");
echo "<center>";
echo "<table border=1>";
echo "<tr><th>T_id</th> <th>T_name</th> <th>T_add</th> <th>T_Shift</th> <th>T_email</th> <th>Gym_id</th> ";

while( $rec =pg_fetch_assoc($rs))
{
        $id=$rec['t_id'];
        $name=$rec['t_name'];
        $tadd=$rec['t_add'];
        $tshift=$rec['t_shift'];
        $tmail=$rec['t_email'];
        $gid=$rec['gym_id'];

        echo"<tr>";
        echo"<td>$id</td>";
        echo"<td>$name</td>";
        echo"<td>$tadd</td>";
        echo"<td>$tshift</td>";
        echo"<td>$tmail</td>";
        echo"<td>$gid</td>";
        echo"</tr>";
}

pg_close($con);


?>
</body>
</html>

