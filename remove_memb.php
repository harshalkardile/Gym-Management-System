<?php
$r=$_POST['r'];


$con=pg_connect("host=localhost user=harshal password=root123 dbname=gym") or die ("Unable to connect database");

$qry="select * from member where m_id=$r";

$rs=pg_query($con,$qry) or die ("Can't perform operations on datebase,check your query no1**"); //1st QUERY**

$cnt=pg_num_rows($rs);

if($cnt==0)
{
        die("no record find for this tid $r !!");
}

$qry="delete from member where m_id=$r";

pg_query($con,$qry) or die ("check query of Deletion");   //2nd QUERY**

pg_close($con);

echo "Data of Member ID:$r is deleted Sucessfully !!! ";


?>
<br>
<a href="remove_memb.html">Go Back</a>
