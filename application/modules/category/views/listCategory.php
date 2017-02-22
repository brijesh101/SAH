<script type="text/javascript">
$(function() {
   $('.ajax-link').click( function() {
         $.get( $(this).attr('href'), function(msg) {
            //alert( "Data Saved: " + msg );
            if(msg){
              //alert("cvc");
              <?php
              //$url1=$_SERVER['REQUEST_URI'];
             //header("Refresh:10; URL=$url1");
              ?>
            }



         });

         return false; // don't follow the link!
   });




});

</script>
<script>
  function ConfirmDialog() {
  var x=confirm("Are you sure to delete record?")
  if (x) {
    return true;
  } else {
    return false;
  }
}
</script>
<script type="text/javascript">
$(document).ready(function() {
  $('#dataTables-example').DataTable();
} );
</script>
<div id="page-wrapper" class="category">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><i class="fa fa-dashboard fa-fw"></i> Dashboard > Service Category</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List Category
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Category Name</th>
                                        <th>Image</th>
                                        <th>Created Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($category as $cat) {
                                          if ($cat->cat_id % 2 == 0) {?>
                                            <tr class="even gradeC">
                                                <td><?php echo $cat->cat_name; ?></td>
                                                <td><img src="<?php echo base_url('assets/backend/catImage/'.$cat->cat_image); ?>" alt="<?php echo $cat->cat_name; ?>"></td>
                                                <td><?php echo $cat->cat_created_date; ?></td>
                                                <td class="center"><a href="<?php echo base_url('category/servicecategory/status?id='.$cat->cat_id.'&status='.$cat->cat_status);?>" class="ajax-link"><?php if ($cat->cat_status==1) {
                                                echo 'Enabel';
                                              }else{echo 'Disable';} ?></a></td>
                                                <td class="center"><a href="<?php echo base_url('category/servicecategory/viewCategory/'.$cat->cat_id);?>">View</a> | <a href="<?php echo base_url('category/servicecategory/editCategory/'.$cat->cat_id);?>">Edit</a> | <a href="<?php echo base_url('category/servicecategory/remove/'.$cat->cat_id);?>" onclick="return ConfirmDialog();">Delete</a></td>
                                            </tr>
                                        <?php  }else {?>
                                            <tr class="odd gradeX">
                                              <td><?php echo $cat->cat_name; ?></td>
                                              <td><img src="<?php echo base_url('assets/backend/catImage/'.$cat->cat_image); ?>" alt="<?php echo $cat->cat_name; ?>"></td>
                                              <td><?php echo $cat->cat_created_date; ?></td>
                                              <td class="center"><a href="<?php echo base_url('category/servicecategory/status?id='.$cat->cat_id.'&status='.$cat->cat_status);?>" class="ajax-link"><?php if ($cat->cat_status==1) {
                                              echo 'Enabel';
                                            }else{echo 'Disable';} ?></a></td>
                                              <td class="center"><a href="<?php echo base_url('category/servicecategory/viewCategory/'.$cat->cat_id);?>">View</a> | <a href="<?php echo base_url('category/servicecategory/editCategory/'.$cat->cat_id);?>">Edit</a> | <a href="<?php echo base_url('category/servicecategory/remove/'.$cat->cat_id);?>" onclick="return ConfirmDialog();">Delete</a></td>
                                            </tr>
                                        <?php  }
                                        }
                                     ?>



                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            <div class="well">
                                <h4>DataTables Usage Information</h4>
                                <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                                <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <!-- /.row -->

            <!-- /.row -->

            <!-- /.row -->
        </div>
