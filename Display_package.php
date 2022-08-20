<!DOCTYPE html>
<html lang="en">
<head>
        <title>Package details</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        

        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

        <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">

        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>

        <div class="limiter">
                <div class="container-table100">
                        <div class="wrap-table100">
                                <div class="table100 ver1 m-b-110">
                                        <div class="table100-head">
                                                <table>
                                                        <thead>

                                                                <tr class="row100 head">

                                                                        <th class="cell100 column4">PackageID</th>
                                                                        <th class="cell100 column4">PackagenName</th>
                                                                        <th class="cell100 column4">PackageAmount</th>
                                                                        <th class="cell100 column4">PackageType</th>
                                                                        <th class="cell100 column4">PackageDesc</th>
                                                                        <th class="cell100 column4">GymID</th>

                                                                </tr>

                                                        </thead>
                                                </table>
                                        </div>


<?php
$con=pg_connect("host=localhost user=harshal password=root123 dbname=gym") or die ( "unable to connect database");
$qry= "select * from package";

$rs=pg_query($con,$qry) or die ("problem in slection of query");

while( $rec=pg_fetch_assoc($rs))
{
        $id=$rec['p_id'];
        $name=$rec['p_name'];
        $gamt=$rec['p_amt'];
        $gtype=$rec['p_type'];
        $gdesc=$rec['p_desc'];
        $gid=$rec['gym_id'];
?>

                        <div class="table100-body js-pscroll">
                                                <table>
                                                        <tbody>
                                                                <tr class="row100 body">
                                                                        <td class="cell100 column4"><?php echo"$id";?></td>
                                                                        <td class="cell100 column4"><?php echo"$name";?></td>
                                                                        <td class="cell100 column4"><?php echo"$gamt";?></td>
                                                                        <td class="cell100 column4"><?php echo"$gtype";?></td>
                                                                        <td class="cell100 column4"><?php echo"$gdesc";?></td>
                                                                        <td class="cell100 column4"><?php echo"$gid";?></td>
                                                                </tr>
                                                        </tbody>
                                                </table>
                        </div>
<?php
}

pg_close($con);


?>
                                </div>
                        </div>
                </div>
        </div>

        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

        <script src="vendor/select2/select2.min.js"></script>

        <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script>
                $('.js-pscroll').each(function(){
                        var ps = new PerfectScrollbar(this);

                        $(window).on('resize', function(){
                                ps.update();
                        })
                });
                        
                
        </script>
        <script src="js/main.js"></script>
</body>
</html>                                         
