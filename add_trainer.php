<?php
$m=$_POST['tid'];
$n=$_POST['tname'];
$o=$_POST['tadd'];
$p=$_POST['tshift'];
$q=$_POST['tuser'];
$r=$_POST['gid'];


//<!--tid,tname,tadd,tshift,tuser,gid-->

//$m=$_POST['m'];

$con=pg_connect("host=localhost user=harshal password=root123 dbname=gym")or die ("unable to connect DATABASE**");

$qry="insert into trainer values($m,'$n','$o','$p','$q',$r)";

pg_query($con,$qry) or die ("unable to insert values in DATABASE**");

pg_close($con);

echo "Record is Added SUCCESSFFULLY**";


?>
<a href="form2.html">Go Back</a>

