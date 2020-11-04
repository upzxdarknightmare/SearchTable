<?php
//connect MS SERVER 
$servername = "xxxxxxxxxx";
$connectioninfo=array("Database"=>"Ur DB","UID"=>"root","PWD"=>"Emty");
$conn=sqlsrv_connect($servername,$connectioninfo);
if ($conn)
{
echo "";
}
else{
    echo "Fail";
    die(print_r(sqlsrv_errors(),true));
}

//ตัดข้อความ ERROR
error_reporting( error_reporting() & ~E_NOTICE );
?>
<style>
.form-inline {
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}
.form-inline label {
  margin: 5px 10px 5px 0;
}

body,
html {
  height: 100%;
}
body {
  background: linear-gradient(15deg, #FFF3D8 100%, #908ced 30.1%);
}


}

</style>
<!-- Online -->
<!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">-->
     <!--<link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">-->
   <!-- <script type="application/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>-->
    <!--<script type="application/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
    <!--<link href="style.css" rel="stylesheet" type="text/css" />-->
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link href="jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <script src = "jq.min.js"> </script>
    <script src = "jquery-ui.js"> </script>
    <link href="jquery-ui.css" rel="stylesheet" type="text/css" />
     <link href="jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
     <link rel="stylesheet" type="text/css" href="bootstrap.css">
     <link href="bootstrapzx.min.css" rel="stylesheet" type="text/css" />
     <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <!-- Panel -->
         
     <div class="panel panel panel-warning" style="width:3300px;">
    <div class="panel-heading">Search Report System</div>
    <div class="panel-body">
    <form class="form-inline">
    <table border="0" cellspacing="5" cellpadding="5">
    <!-- Search Start -->
        <tbody>
            <tr>
                <td>From Date:</td>
                <td><input name="min" id="min" type="text"></td>
            </tr>
            
        </tbody>
    </form>
<!-- Free space gab  -->
    <table border="0" cellspacing="5" cellpadding="5">
        <tbody>
            <tr>
                <td>To Date:&nbsp;&nbsp;</td>
                <td><input name="max" id="max" type="text"></td>
            </tr>
        </tbody>
    </div>
  </div>
</div>
<!-- Search End -->
&nbsp;&nbsp;&nbsp;
<br />
<br />

<!-- Start Table TH -->
<script type="application/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>  
<table id="example" class="display" cellspacing="2" style="border:4px solid #fdc086;">
 <thead>
    <tr>                
                        <th bgcolor="#f3db53" style="font-family:MV Boli;border:2px solid white">Loading Date</th>
                        <th bgcolor="#f5e170" style="border:2px solid white;font-family:MV Boli">Customer</th>
                        <th bgcolor="#f7e78d" style="border:2px solid white;font-family:MV Boli">Packing</th>
                        <th bgcolor="#faefb3" style="border:2px solid white;font-family:MV Boli">Remark</th>
                        <th bgcolor="#fdf8de" style="border:2px solid white;font-family:MV Boli">SalesDoc</th>
                        <th bgcolor="#feedb4" style="border:2px solid white;font-family:MV Boli">PurchaseON</th>
                        <th bgcolor="#fddd72"style="border:2px solid white;font-family:MV Boli">DocumentDate</th>
                        <th bgcolor="#fcce36"style="border:2px solid white;font-family:MV Boli">Material</th>
                        <th bgcolor="#fae933"style="border:2px solid white;font-family:MV Boli">Description</th>
                        <th bgcolor="#fbed5b"style="border:2px solid white;font-family:MV Boli">OrderQuantity</th>
                        <th bgcolor="#fcf283"style="border:2px solid white;font-family:MV Boli">Still Delivery</th>
                        <th bgcolor="#fdf6aa"style="border:2px solid white;font-family:MV Boli">RemainQuantity</th>
                        <th bgcolor="#fffbd7"style="border:2px solid white;font-family:MV Boli">On Hand</th>
                        <th bgcolor="#f9fe9f"style="border:2px solid white;font-family:MV Boli">Due Date</th>
                        
    </tr>
  </thead>
  <!-- Loop Table -->
    <tbody>
               <?php
               $sql = " SELECT * FROM demo 
               ORDER BY SalesDoc ASC ";
               $stmt = sqlsrv_query($conn,$sql);
               if($stmt == false)
               {
                   die(print_r(sqlsrv_errors(),true));
               }

                    while ($row=sqlsrv_fetch_Array($stmt,SQLSRV_FETCH_ASSOC) ){
               ?>
                <tr>
                <td style="text-align:center;"><?php echo $row["LoadingDate"];?></td>
                <td style="text-align:center;"><?php echo $row["customer"];?></td>
                <td style="text-align:center;"><?php echo $row["packing"];?></td>
                <td style="text-align:center;"><?php echo $row["Remark"];?></td>
                <td style="text-align:center;"><?php echo $row["SalesDoc"];?></td>
                <td style="text-align:center;"><?php echo $row["PurchaseOrderNum"];?></td>
                <td style="text-align:center;"><?php echo $row["DocumentDate"];?></td>
                <td style="text-align:center;"><?php echo $row["Material"];?></td>
                <td style="text-align:center;"><?php echo $row["Description"];?></td>
                <td style="text-align:center;"><?php echo $row["OrderQuantity"];?></td>
                <td style="text-align:center;"><?php echo $row["StillDeliveryQty"];?></td>
                <td style="text-align:center;"><?php echo $row["RemainQuantity"];?></td>
                <td style="text-align:center;"><?php echo $row["OnHand"];?></td>
                <td style="text-align:center;"><?php echo $row["DueDate"];?></td>
                </tr>
                <?php  } ?>
    </tbody>
    
<tr>
</table>
<!-- Footer -->
<footer class="page-footer font-small blue">
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="#"> UPZA 555 !</a>
    เหยียบย่ำสวรรค์ทำลายสรรพสิ่ง
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->


<!-- SCRIPT -->
    <script>
    $(document).ready(function() {
    $('#example thead tr').clone(true).appendTo( '#example thead' );
    $('#example thead tr:eq(1) th').each( function (i) {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
        
        $( 'input', this ).on( 'keyup change', function () {
            if ( table.column(i).search() !== this.value ) {
                table
                    .column(i)
                    .search( this.value )
                    .draw();
            }
        } );
    } );
 
    var table = $('#example').DataTable( {
        orderCellsTop: true,
        fixedHeader: true,
        orderable: false
    } );
    
//Search Date Range vvvvvv
    $.fn.dataTable.ext.search.push(
        function (settings, data, dataIndex) {
            var min = $('#min').datepicker("getDate");
            var max = $('#max').datepicker("getDate");
            var startDate = new Date(data[0]);
            if (min == null && max == null) { return true; }
            if (min == null && startDate <= max) { return true;}
            if(max == null && startDate >= min) {return true;}
            if (startDate <= max && startDate >= min) { return true; }
            return false;
        }
        );
            $("#min").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
            $("#max").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
            var table = $('#example').DataTable();
            // โชว์ตาราง
            $('#min, #max').change(function () {
                table.draw();
            });
} );
    </script>