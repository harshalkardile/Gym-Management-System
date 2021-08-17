<?php 
$r=$_POST['r'];
$p=$_POST['p'];

$con=pg_connect("host=localhost user=harshal password=root123 dbname=gym") or die ("Unable to connect database");

$qry="select * from member where m_id=$r";

$rs=pg_query($con,$qry) or die ("Can't perform operations on datebase,check your query no1**"); //1st QUERY**

$cnt=pg_num_rows($rs);

if($cnt==0)
{
	die("no record find for this rno $r !!");
}

$qry="update member set m_no=$p where m_id=$r";

pg_query($con,$qry) or die ("Problem to update query");   //2nd QUERY**

pg_close($con);

echo "updated Sucessfully !!!<br>";


?><br>
<a href="update_memb.html">Go Back</a>

