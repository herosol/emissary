<?php echo getBredcrum(ADMIN, array('#' => 'Home Page')); ?>
<?php echo showMsg(); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-window"></i> Update <strong>Home Page</strong></h2>
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
                                    <label for="banner_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                                    <input type="text" name="banner_heading" value="<?= $row['banner_heading'] ?>" class="form-control" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="banner_detail" class="control-label"> Short Detail <span class="symbol required">*</span></label>
                                    <textarea name="banner_detail" rows="2" class="form-control" ><?= $row['banner_detail'] ?></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="banner_button_text_left" class="control-label">Button Text<span class="symbol required">*</span></label>
                                    <input type="text" name="banner_button_text_left" id="banner_button_text_left" value="<?= $row['banner_button_text_left'] ?>" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="banner_button_link_left" class="control-label">Button Link<span class="symbol required">*</span></label>
                                    <select name="banner_button_link_left" id="banner_button_link_left" class="form-control" required>
                                        <option value=''>-- Select --</option>
                                        <?php $pages = get_pages();
                                        foreach ($pages as $index => $page) { ?>
                                            <option value="<?= $index ?>" <?= ($row['banner_button_link_left'] == $index) ? 'selected' : '' ?>> <?= $page ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="banner_button_text_right" class="control-label">Button Text<span class="symbol required">*</span></label>
                                    <input type="text" name="banner_button_text_right" id="banner_button_text_right" value="<?= $row['banner_button_text_right'] ?>" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="banner_button_link_right" class="control-label">Button Link<span class="symbol required">*</span></label>
                                    <select name="banner_button_link_right" id="banner_button_link_right" class="form-control" required>
                                        <option value=''>-- Select --</option>
                                        <?php $pages = get_pages();
                                        foreach ($pages as $index => $page) { ?>
                                            <option value="<?= $index ?>" <?= ($row['banner_button_link_right'] == $index) ? 'selected' : '' ?>> <?= $page ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                    </div>
                </div>

            <h3>Section 2</h3>
            <div class="form-group">
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="erc_left_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="erc_left_heading" value="<?= $row['erc_left_heading']?>" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="erc_left_button_heading" class="control-label">Button Text<span class="symbol required">*</span></label>
                            <input type="text" name="erc_left_button_heading" id="erc_left_button_heading" value="<?= $row['erc_left_button_heading'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="erc_left_button_link" class="control-label">Button Link<span class="symbol required">*</span></label>
                            <select name="erc_left_button_link" id="erc_left_button_link" class="form-control" required>
                                <option value=''>-- Select --</option>
                                <?php $pages = get_pages();
                                foreach ($pages as $index => $page) { ?>
                                    <option value="<?= $index ?>" <?= ($row['erc_left_button_link'] == $index) ? 'selected' : '' ?>> <?= $page ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="col-md-12"> 
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="erc_right_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                                <textarea name="erc_right_heading" rows="2" class="form-control" ><?= $row['erc_right_heading'] ?></textarea>
                            </div>
                        </div>
                    </div>
                    <?php for($i = 1; $i <= 3; $i++):?>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="erc_card_heading<?=$i?>" class="control-label"> Heading <span class="symbol required">*</span></label>
                                    <input type="text" name="erc_card_heading<?=$i?>" value="<?= $row['erc_card_heading'.$i] ?>" class="form-control" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="erc_card_detail<?=$i?>" class="control-label"> Card <?=$i?> Short Description <span class="symbol required">*</span></label>
                                    <textarea name="erc_card_detail<?=$i?>" id="erc_card_detail<?=$i?>" rows="3" class="form-control" required=""><?= $row['erc_card_detail'.$i] ?></textarea>
                                </div>
                            </div>
                        </div>
                    <?php endfor?>
                </div>
            </div>
            <h3>Section 3</h3>
            <div class="form-group">
                <?php for($i = 1; $i <=2; $i++):?>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="panel panel-primary" data-collapsed="0">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            Card <?=$i?> Image 
                                        </div>
                                        <div class="panel-options">
                                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                                <img src="<?=get_site_image_src("images", $row['image'.($i+1)]) ?>" alt="--">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                            <div>
                                                <span class="btn btn-white btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="image<?=($i+1)?>" accept="image/*" <?php if(empty($row['image'.($i+1)])){echo 'required=""';}?>>
                                                </span>
                                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="two_card_heading<?=$i?>" class="control-label"> Heading <span class="symbol required">*</span></label>
                                <input type="text" name="two_card_heading<?=$i?>" value="<?= $row['two_card_heading'.$i] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label for="two_card_detail<?=$i?>" class="control-label"> Card <?=$i?> Short Description <span class="symbol required">*</span></label>
                                <textarea name="two_card_detail<?=$i?>" id="two_card_detail<?=$i?>" rows="3" class="form-control" required=""><?= $row['two_card_detail'.$i] ?></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="two_card_button_text<?=$i?>" class="control-label">Button Text<span class="symbol required">*</span></label>
                                <input type="text" name="two_card_button_text<?=$i?>" id="two_card_button_text<?=$i?>" value="<?= $row['erc_left_button_heading'.$i] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="two_card_button_link<?=$i?>" class="control-label">Button Link<span class="symbol required">*</span></label>
                                <select name="two_card_button_link<?=$i?>" id="two_card_button_link<?=$i?>" class="form-control" required>
                                    <option value=''>-- Select --</option>
                                    <?php $pages = get_pages();
                                    foreach ($pages as $index => $page) { ?>
                                        <option value="<?= $index ?>" <?= ($row['erc_left_button_link'.$i] == $index) ? 'selected' : '' ?>> <?= $page ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                <?php endfor?>
            </div>

            <h3>Section 4</h3>
            <div class="form-group">
                    <div class="col-md-12"> 
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="fsdm_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                                <input type="text" name="fsdm_heading" value="<?= $row['fsdm_heading'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label for="fsdm_heading" class="control-label"> Short Detail <span class="symbol required">*</span></label>
                                <textarea name="fsdm_heading" rows="2" class="form-control" ><?= $row['fsdm_heading'] ?></textarea>
                            </div>
                        </div>
                    </div>
                    <?php for($i = 1; $i <= 3; $i++):?>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="panel panel-primary" data-collapsed="0">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                Card <?=$i?> Image 
                                            </div>
                                            <div class="panel-options">
                                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                                    <img src="<?=get_site_image_src("images", $row['image'.($i+3)]) ?>" alt="--">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                                <div>
                                                    <span class="btn btn-white btn-file">
                                                        <span class="fileinput-new">Select image</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="image<?=($i+3)?>" accept="image/*" <?php if(empty($row['image'.($i+3)])){echo 'required=""';}?>>
                                                    </span>
                                                    <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="fsdm_card_heading<?=$i?>" class="control-label"> Heading <span class="symbol required">*</span></label>
                                    <input type="text" name="fsdm_card_heading<?=$i?>" value="<?= $row['fsdm_card_heading'.$i] ?>" class="form-control" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="fsdm_card_detail<?=$i?>" class="control-label"> Card <?=$i?> Short Description <span class="symbol required">*</span></label>
                                    <textarea name="fsdm_card_detail<?=$i?>" id="fsdm_card_detail<?=$i?>" rows="3" class="form-control" required=""><?= $row['fsdm_card_detail'.$i] ?></textarea>
                                </div>
                            </div>
                        </div>
                    <?php endfor?>
            </div>

            <h3>Section 5</h3>
            <div class="form-group">
                <?php for($i = 1; $i <=1; $i++):?>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="panel panel-primary" data-collapsed="0">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            Card <?=$i?> Image 
                                        </div>
                                        <div class="panel-options">
                                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                                <img src="<?=get_site_image_src("images", $row['image'.($i+6)]) ?>" alt="--">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                            <div>
                                                <span class="btn btn-white btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="image<?=($i+6)?>" accept="image/*" <?php if(empty($row['image'.($i+6)])){echo 'required=""';}?>>
                                                </span>
                                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="ic_colored_heading<?=$i?>" class="control-label"> Card Colored Heading <span class="symbol required">*</span></label>
                                <input type="text" name="ic_colored_heading<?=$i?>" value="<?= $row['ic_colored_heading'.$i] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label for="ic_heading<?=$i?>" class="control-label"> Card Heading <span class="symbol required">*</span></label>
                                <input type="text" name="ic_heading<?=$i?>" value="<?= $row['ic_heading'.$i] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label for="ic_detail<?=$i?>" class="control-label"> Card Short Description <span class="symbol required">*</span></label>
                                <textarea name="ic_detail<?=$i?>" id="ic_detail<?=$i?>" rows="3" class="form-control ckeditor" required=""><?= $row['ic_detail'.$i] ?></textarea>
                            </div>
                        </div>
                    </div>
                <?php endfor?>
            </div>
            <h3> Section 6</h3>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="blogs_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="blogs_heading" value="<?= $row['blogs_heading'] ?>" class="form-control" required>
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