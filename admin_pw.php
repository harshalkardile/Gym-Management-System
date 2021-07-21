<html>
<body bgcolor="skyblue">
<center><pre>
</pre>
<?php
$user="harshal";
$pass="root123";
//$i=$_POST['i'];
//$p=$_POST['p'];


if($user==$i && $pass==$p)
//if($i=='harshal' && $p=='root123')
   header("Location: http://localhost/gym/admin.html");
else
   echo "Please Enter Correct User id and Password";
?>
<br>
<a href="admin_pw.html">go back</a>

</body>
</html>
