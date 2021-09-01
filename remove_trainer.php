<?php
$r=$_POST['r'];


$con=pg_connect("host=localhost user=harshal password=root123 dbname=gym") or die ("Unable to connect database");

$qry="select * from trainer where t_id=$r";

$rs=pg_query($con,$qry) or die ("Can't perform operations on datebase,check your query no1**"); //1st QUERY**

$cnt=pg_num_rows($rs);

if($cnt==0)
{
        die("no record find for this tid $r !!");
}

$qry="delete from trainer where t_id=$r";

pg_query($con,$qry) or die ("Problem to Delete query");   //2nd QUERY**

pg_close($con);

echo "Data of Trainer ID:$r deleted Sucessfully !!";


?><br>
<a href="remove_trainer.html">Go Back</a>
