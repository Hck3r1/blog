<?php
include('session_2.php');
include('dataconn.php');
$id = 1;
$sql="SELECT * FROM admin WHERE id='$id'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$rows=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $session_fullname; ?> | News Inventory</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

<?php include('menu_2.php'); ?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Staff Inventory</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                       
                        <li class="active">
                            <strong>Staff</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                            
                            </div>
                            <div class="ibox-content">

                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover dataTables-example">
                                    
                                        <thead>
                                            <tr>
                                                <th>UIN</th>
                                                <th>Date</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Passport</th>
                                                <th>Designation</th>
                                                <th>Gender</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                     include('dataconn.php');
                                    $sql = "SELECT * FROM `admin` WHERE designation='Staff'";
                                    $result = mysqli_query($conn, $sql);
                                     if (mysqli_num_rows($result) > 0) {
                                     while($row = mysqli_fetch_array($result)) {
                                    
                                    ?> 
                                        <tr class="gradeC">
                                               <td><?php echo $row['uin']; ?></td> 
                                               <td><?php echo $row['date']; ?></td> 
                                                <td><?php echo $row['name']; ?></td> 
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['phone']; ?></td>
                                                <td><img src="../me/passport/<?php echo $row['passport']; ?>" height="50px"></td>
                                                <td><?php echo $row['designation']; ?></td>
                                                <td><?php echo $row['gender']; ?></td>
                                                
                                                
                                        <!-- <td><a <?php echo "href='update.php?id=".$row['id']."'"; ?> onclick="return confirm('Are you sure to edit?');" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                            <a <?php echo "href='delete.php?id=".$row['id']."'"; ?> onclick="return confirm('Are you sure to delete?');" class="btn btn-white btn-sm"><i class="fa fa-trash"></i> Delete</a>
                                    </td> -->
                                            </tr>
                                             <?php
}
}

mysqli_close($conn);
?>          
                                     </tbody>
                                    </tbody> 
                                        
                                    </table>
                                 </div>
                
                            </div>
                        </div>
                    </div>
               
            </div>
            <div>
                <div class="pull-right">
                    10GB of <strong>250GB</strong> Free.
                </div>
                <div>
                    <strong>Copyright</strong> Example Company &copy; 2014-2015
                </div>
            </div>

        </div>
    </div>



    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/plugins/jeditable/jquery.jeditable.js"></script>

    <script src="js/plugins/dataTables/datatables.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Page-Level Scripts -->
    <!-- <script>
        $(document).ready(function() {
            $('.dataTables-example').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [{
                        extend: 'copy'
                    }, {
                        extend: 'csv'
                    }, {
                        extend: 'excel',
                        title: 'ExampleFile'
                    }, {
                        extend: 'pdf',
                        title: 'ExampleFile'
                    },

                    {
                        extend: 'print',
                        customize: function(win) {
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                        }
                    }
                ]

            });

            /* Init DataTables */
            var oTable = $('#editable').DataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable('../example_ajax.php', {
                "callback": function(sValue, y) {
                    var aPos = oTable.fnGetPosition(this);
                    oTable.fnUpdate(sValue, aPos[0], aPos[1]);
                },
                "submitdata": function(value, settings) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition(this)[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            });


        });

        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData([
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row"
            ]);

        }
    </script> -->

</body>

</html>