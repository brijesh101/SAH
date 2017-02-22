
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
                            View Category
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Category Name</th>
                                        <td><?php echo $page->cat_name; ?></td>

                                    </tr>
                                    <tr>
                                      <th>Image</th>
                                      <td><img src="<?php echo base_url('assets/backend/catImage/'.$page->cat_image);?>" alt=""></td>
                                    </tr>
                                    <tr>
                                      <th>Created Date</th>
                                      <td><?php echo $page->cat_created_date; ?></td>
                                    </tr>
                                    <tr>
                                      <th>Updated Date</th>
                                      <td><?php echo $page->cat_updated_date; ?></td>
                                    </tr>
                                    <tr>
                                      <th>Status</th>
                                      <td><?php if ($page->cat_status == 1) {
                                        echo "Enabel";
                                      }else {
                                        echo "Disable";
                                      } ?></td>
                                    </tr>
                                </thead>

                            </table>
                            <!-- /.table-responsive -->

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
