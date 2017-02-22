
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header"><i class="fa fa-dashboard fa-fw"></i> Dashboard > Service Category</h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                      <?php
                      $error = $this->session->flashdata('error');
                      //$message = $this->session->flashdata('message');
                      if(!empty($error)){
                        echo '<div class="alert alert-danger">'.$error.'</div>';
                      }
                      // if(!empty($message)){
                      //   echo '<div class="alert alert-info">'.$message.'</div>';
                      // }
                    ?>
                        <div class="panel-heading">
                            Edit Category
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('category/servicecategory/editCategory/'.$page->cat_id);?>">
                                        <div class="form-group">
                                            <label>Select Parent</label>
                                            <?php $cat = getCategory();

                                             ?>
                                            <select class="form-control" name="cat_parent_id">

                                               <option value="0">Root</option>
                                               <?php foreach ($cat as $cats): ?>
                                                 <option value="<?php echo $cats->cat_id;?>" <?php if($cats->cat_id==$page->cat_id){echo 'selected';} ?>><?php echo $cats->cat_name;?></option>
                                               <?php endforeach; ?>


                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Category Name</label>
                                            <input class="form-control" type="text" name="cat_name" placeholder="Enter text" value="<?php echo $page->cat_name;?>">
                                        </div>

                                        <div class="form-group">
                                            <label>Select Image File</label>
                                            <input type="file" name="cat_image">
                                        </div>
                                        <div class="form-group">
                                            <label></label>
                                            <img src="<?php echo base_url('assets/backend/catImage/'.$page->cat_image);?>" alt="">
                                        </div>



                                        <button type="submit" class="btn btn-default">Save</button>
                                        <!-- <button type="reset" class="btn btn-default">Reset</button> -->
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->

                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
