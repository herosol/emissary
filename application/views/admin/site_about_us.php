<?php echo getBredcrum(ADMIN, array('#' => 'About Us')); ?>
<?php echo showMsg(); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-window"></i> Update <strong>About Us</strong></h2>
    </div>
    <div class="col-md-6 text-right">
        <!--        <a href="<?php echo base_url('admin/services'); ?>" class="btn btn-lg btn-default"><i class="fa fa-arrow-left"></i> Cancel</a>-->
    </div>
</div>
<div>
    <hr>
    <div class="clearfix"></div>
    <div class="panel-body">
        <form role="form"  method="post" class="form-horizontal form-groups-bordered validate" novalidate="novalidate" enctype="multipart/form-data">
        <h3> Main Banner</h3>
        <div class="form-group">
            <div class="col-md-4">
                <div class="panel panel-primary" data-collapsed="0">
                    <div class="panel-heading">
                        <div class="panel-title">
                            Image
                        </div>
                        <div class="panel-options">
                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                <img src="<?= !empty($row['image1']) ? base_url().UPLOAD_PATH.'images/'.$row['image1'] : 'http://placehold.it/3000x1000' ?>" alt="--">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                            <div>
                                <span class="btn btn-white btn-file">
                                    <span class="fileinput-new">Select image</span>
                                    <span class="fileinput-exists">Change</span>
                                    <input type="file" name="image1" accept="image/*" <?php if(empty($row['image1'])){echo 'required=""';}?>>
                                </span>
                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="banner_heading" class="control-label"> Banner Heading <span class="symbol required">*</span></label>
                        <input type="text" name="banner_heading" value="<?= $row['banner_heading'] ?>" class="form-control" required>
                    </div>
                </div>
            </div>
        </div>

        <h3> Section 2</h3>
        <div class="form-group">
            <div class="col-md-8">
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="wwd_colored_heading" class="control-label"> Colored Heading <span class="symbol required">*</span></label>
                        <input type="text" name="wwd_colored_heading" value="<?= $row['wwd_colored_heading'] ?>" class="form-control" required>
                    </div>
                    <div class="col-md-12">
                        <label for="wwd_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                        <input type="text" name="wwd_heading" value="<?= $row['wwd_heading'] ?>" class="form-control" required>
                    </div>
                    <div class="col-md-12">
                        <label for="wwd_detail" class="control-label"> Detail <span class="symbol required">*</span></label>
                        <textarea name="wwd_detail" rows="4" class="form-control ckeditor" ><?= $row['wwd_detail'] ?></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="wwd_button_title" class="control-label">Button Text<span class="symbol required">*</span></label>
                        <input type="text" name="wwd_button_title" id="wwd_button_title" value="<?= $row['wwd_button_title'] ?>" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="wwd_button_link" class="control-label">Button Link<span class="symbol required">*</span></label>
                        <select name="wwd_button_link" id="wwd_button_link" class="form-control" required>
                            <option value=''>-- Select --</option>
                            <?php $pages = get_pages();
                            foreach ($pages as $index => $page) { ?>
                                <option value="<?= $index ?>" <?= ($row['wwd_button_link'] == $index) ? 'selected' : '' ?>> <?= $page ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-primary" data-collapsed="0">
                    <div class="panel-heading">
                        <div class="panel-title">
                            Left Image
                        </div>
                        <div class="panel-options">
                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                <img src="<?= !empty($row['image2']) ? base_url().UPLOAD_PATH.'images/'.$row['image2'] : 'http://placehold.it/3000x1000' ?>" alt="--">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                            <div>
                                <span class="btn btn-white btn-file">
                                    <span class="fileinput-new">Select image</span>
                                    <span class="fileinput-exists">Change</span>
                                    <input type="file" name="image2" accept="image/*" <?php if(empty($row['image2'])){echo 'required=""';}?>>
                                </span>
                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h3>Section 3</h3>
        <div class="form-group">
            <div class="col-md-8">
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="om_colored_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                        <input type="text" name="om_colored_heading" value="<?= $row['om_colored_heading'] ?>" class="form-control" required>
                    </div>
                    <div class="col-md-12">
                        <label for="om_heading" class="control-label"> Short Detail <span class="symbol required">*</span></label>
                        <input type="text" name="om_heading" value="<?= $row['om_heading'] ?>" class="form-control" required>
                    </div>
                    <div class="col-md-12">
                        <label for="om_y_video_link" class="control-label"> Youtube Video Link <span class="symbol required">*</span></label>
                        <input type="text" name="om_y_video_link" value="<?= $row['om_y_video_link'] ?>" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-primary" data-collapsed="0">
                    <div class="panel-heading">
                        <div class="panel-title">
                            Background Image
                        </div>
                        <div class="panel-options">
                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                <img src="<?= !empty($row['image3']) ? base_url().UPLOAD_PATH.'images/'.$row['image3'] : 'http://placehold.it/3000x1000' ?>" alt="--">
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                            <div>
                                <span class="btn btn-white btn-file">
                                    <span class="fileinput-new">Select image</span>
                                    <span class="fileinput-exists">Change</span>
                                    <input type="file" name="image3" accept="image/*" <?php if(empty($row['image3'])){echo 'required=""';}?>>
                                </span>
                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h3>Section 4</h3>
        <div class="form-group">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="ot_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                        <input type="text" name="ot_heading" value="<?= $row['ot_heading'] ?>" class="form-control" required>
                    </div>
                </div>
            </div>
        </div>

       

            <div class="form-group">
                <label for="field-1" class="col-sm-2 control-label "></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary btn-lg col-md-3 pull-right"><i class="fa fa-save"></i> Save</button>
                </div>
            </div>
        </form>
    </div>
</div>