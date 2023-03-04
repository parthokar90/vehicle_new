<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
    <div class="kt-portlet kt-portlet--height-fluid custom-kt-portlet--height-fluid vehicle-view">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">Vehicle Information</h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <a href="javascript:;" id="vehicleEdit" class="btn btn-info btn-sm"><i
                        class="far fa-edit mr-2"></i>Edit</a>
                <a href="javascript:;" class="btn btn-danger btn-sm back_to_data_list ml-3"><i
                        class="far fa-arrow-alt-circle-left mr-2"></i>Back</a>
            </div>
        </div>
        <div class="kt-portlet__body">
            <div class="kt-section kt-section--first">
                <div class="kt-section__body text-dark">
                    <div class="row">
                        <div class="col-lg-9 custom-form-group-border">

                            <div class="form-group row">
                                <label class="col-label col-sm-4">Vehicle Name </label>
                                <div class="col-sm-8">
                                    <span class="form-control"><?php echo e($vehicle->vehicle_name); ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-label col-sm-4">Vehicle Plate No </label>
                                <div class="col-sm-8">
                                    <span class="form-control"><?php echo e($vehicle->vehicle_no); ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-label col-sm-4">Vehicle Type </label>
                                <div class="col-sm-8">
                                    <span class="form-control"> <?php echo e($vehicle->vt_name); ?></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-label col-sm-4">Model Name </label>
                                <div class="col-sm-8">
                                    <span class="form-control"> <?php echo e($vehicle->model_name); ?> </span>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-label col-sm-4">Vehicle Color </label>
                                <div class="col-sm-8">
                                    <span class="form-control"> <?php echo e($vehicle->vehicle_color); ?> </span>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-label col-sm-4">Vehicle Year</label>
                                <div class="col-sm-8">
                                    <span class="form-control"> <?php echo e($vehicle->vehicle_year); ?> </span>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-label col-sm-4">Vehicle Engine No</label>
                                <div class="col-sm-8">
                                    <span class="form-control"> <?php echo e($vehicle->vehicle_engine_no); ?>

                                    </span>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-label col-sm-4">Avarage Mileage</label>
                                <div class="col-sm-8">
                                    <span class="form-control"> <?php echo e($vehicle->avarage_mileage); ?>

                                    </span>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-label col-sm-4">Vehicle ownership</label>
                                <div class="col-sm-8">
                                    <span class="form-control"> <?php echo e($vehicle->ownership_name); ?> </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-label col-sm-4">Vehicle Group</label>
                                <div class="col-sm-8">
                                    <span class="form-control"> <?php echo e($vehicle->vg_name); ?> </span>

                                </div>
                            </div>
                            <!-- <div class="form-group row">
                                <label class="col-label col-sm-4">Assign GPS</label>
                                <div class="col-sm-8">
                                    <?php if($vehicle->object_id>0): ?>
                                    <span class="form-control"> <?php echo e($vehicle->device_name); ?> - <span
                                            class="ml-2 mr-2 badge badge-pill badge-<?php echo e($vehicle->other_value); ?>"><?php echo e($vehicle->imei_status); ?></span>
                                        <?php echo e($vehicle->imei); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div> -->

                            <div class="form-group row">
                                <label class="col-label col-sm-4">Vehicle Status </label>
                                <div class="col-sm-8">
                                    <?php if($vehicle->status==1): ?>
                                    <span class="badge badge-pill badge-success btn-sm ml-3">Active</span>
                                    <?php elseif($vehicle->status==0): ?>
                                    <span class="badge badge-pill badge-warning btn-sm ml-3">Inactive</span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end: client view -->

    <!-- begin: client edit -->

    <div class="kt-portlet kt-portlet--height-fluid custom-kt-portlet--height-fluid d-none vehicle-edit">
        <div class="kt-portlet__head">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">Edit Vehicle Information</h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <a href="#" id="closeEdit" class="btn btn-success btn-sm"><i class="far fa-eye mr-2"></i>View</a>
                <a href="javascript:;" class="btn btn-danger btn-sm back_to_data_list ml-3"><i
                        class="far fa-arrow-alt-circle-left mr-2"></i>Back</a>

            </div>
        </div>
        <form class="" id="editVehicleForm">
            <?php echo csrf_field(); ?>
            <div class="kt-portlet__body">
                <div class="kt-section kt-section--first px-3">
                    <div class="form-group row">
                        <input type="hidden" id="id" value="<?php echo e($vehicle->id); ?>">
                        <label class="col-md-3 col-form-label"> Vehicle Name <span class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" value="<?php echo e($vehicle->vehicle_name); ?>"
                                name="vehicle_name">
                            <small id="vehicle_name-error" class="text-danger"></small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">
                            Vehicle Plate No <span class="text-danger">*</span></label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" value="<?php echo e($vehicle->vehicle_no); ?>"
                                name="vehicle_plate_no">
                            <small id="vehicle_plate_no-error" class="text-danger"></small>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Vehicle Type</label>
                        <div class="col-md-7">
                            <select name="vehicle_type" class="form-control kt-select2-2">
                                <?php $__currentLoopData = $vehicleType; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($v_type->id); ?>"
                                    <?php echo e(($vehicle->vehicle_type==$v_type->id) ? 'selected': ''); ?>>
                                    <?php echo e($v_type->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <small id="vehicle_type-error" class="text-danger"></small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mother_name" class="col-md-3 col-form-label">Model Name</label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" value="<?php echo e($vehicle->model_name); ?>" name="model_name">
                            <small id="model_name-error" class="text-danger"></small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mother_name" class="col-md-3 col-form-label">Vehicle Color
                        </label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" value="<?php echo e($vehicle->vehicle_color); ?>"
                                name="vehicle_color">
                            <small id="vehicle_color-error" class="text-danger"></small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mother_name" class="col-md-3 col-form-label">Vehicle Year <span
                                class="text-danger">*</span> </label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" value="<?php echo e($vehicle->vehicle_year); ?>"
                                name="vehicle_year">
                            <small id="vehicle_year-error" class="text-danger"></small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mother_name" class="col-md-3 col-form-label"> Vehicle Engine No
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" value="<?php echo e($vehicle->vehicle_engine_no); ?>"
                                name="vehicle_engine_no">
                            <small id="vehicle_engine_no-error" class="text-danger"></small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="mother_name" class="col-md-3 col-form-label">Avarage Mileage
                        </label>
                        <div class="col-lg-7">
                            <div class="input-group date">
                                <input type="text" name="avarage_mileage" class="form-control"
                                    value="<?php echo e($vehicle->avarage_mileage); ?>" />
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        Per litter or Galon
                                    </span>
                                </div>
                            </div>
                            <small id="avarage_mileage-error" class="text-danger"></small>
                        </div>
                    </div>
                    <!-- <div class="form-group row">
                        <label class="col-md-3 col-form-label">Assign GPS</label>
                        <div class="col-md-7">
                            <select name="assign_gps" class="form-control kt-select2-2">
                                <option value="0">Select</option>
                                <?php $__currentLoopData = $gs_objects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gs_object): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($gs_object->gs_id); ?>"
                                    <?php echo e(($vehicle->object_id==$gs_object->gs_id) ? 'selected': ''); ?>>
                                    <?php echo e($gs_object->device_name); ?> - <?php echo e($gs_object->cd_name); ?> -
                                    <?php echo e($gs_object->imei); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <small id="assign_gps-error" class="text-danger"></small>
                        </div>
                    </div> -->

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Vehicle Ownership</label>
                        <div class="col-md-7">
                            <select name="vehicle_ownership" class="form-control kt-select2-2">
                                <?php $__currentLoopData = $ownershipType; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($w_type->id); ?>"
                                    <?php echo e(($vehicle->vehicle_ownership==$w_type->id) ? 'selected': ''); ?>>
                                    <?php echo e($w_type->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <small id="vehicle_ownership-error" class="text-danger"></small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Vehicle Group</label>
                        <div class="col-md-7">
                            <select name="vehicle_group" class="form-control kt-select2-2">
                                <?php $__currentLoopData = $vehicleGroup; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v_group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($v_group->id); ?>"
                                    <?php echo e(($vehicle->vehicle_group_id==$v_group->id) ? 'selected': ''); ?>>
                                    <?php echo e($v_group->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <small id="vehicle_group-error" class="text-danger"></small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Vehicle Status</label>
                        <div class="col-md-7">
                            <select name="status" class="form-control kt-select2-2">
                                <option value="1" <?php echo e(($vehicle->status==1) ? 'selected': ''); ?>>Active
                                </option>
                                <option value="0" <?php echo e(($vehicle->status==0) ? 'selected': ''); ?>>
                                    Inactive
                                </option>
                            </select>
                            <small id="status-error" class="text-danger"></small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="role" class="col-lg-3 col-form-label">Vehicle Photo</label>
                        <div class="col-lg-7">
                            <div class="row justify-content-center">
                                <div class="kt-avatar kt-avatar--outline kt-avatar--circle">
                                    <div>
                                        <?php if($vehicle->vehicle_photo): ?>
                                        <img class="vehicle_photo_holder custom_img_holder2"
                                            src="<?php echo e(asset('public/uploads/vehicle/'.$vehicle->vehicle_photo)); ?>"
                                            alt="image">
                                        <?php else: ?>
                                        <img class="vehicle_photo_holder custom_img_holder2"
                                            src="<?php echo e(asset('assets/media/cars/private.jpg')); ?>" alt="image">
                                        <?php endif; ?>
                                    </div>
                                    <label class="kt-avatar__upload" data-toggle="kt-tooltip" title=""
                                        data-original-title="Change Template Logo">
                                        <i class="fa fa-pen"></i>
                                        <input type="file" name="vehicle_photo" id="vehicle_photo"
                                            accept=".png, .jpg, .jpeg">
                                    </label>
                                    <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title=""
                                        data-original-title="Cancel Template Logo">
                                        <i class="fa fa-times"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <small id="vehicle_photo-error" class="text-danger text-center"></small>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-5">
                        <div class="col-md-10 col-sm-12">
                            <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                            <button type="submit" class="btn btn-brand btn-sm float-right">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>

<script>
$(document).ready(function(e) {
    $('#vehicle_photo').change(function() {
        let reader = new FileReader();
        reader.onload = (e) => {
            $('.vehicle_photo_holder').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    });

    $('.kt-select2-2').select2({
        placeholder: "Select"
    });

    $('.datepicker').datepicker({
        todayBtn: "linked",
        clearBtn: true,
        todayHighlight: true,
        autoclose: true,
        format: 'dd M yyyy'
    });

});
$('#vehicleEdit').click(function(e) {
    $('.vehicle-view').addClass('d-none');
    $('.vehicle-edit').removeClass('d-none');
});

$('#closeEdit').click(function(e) {
    e.preventDefault();

    $('.vehicle-view').removeClass('d-none');
    $('.vehicle-edit').addClass('d-none');

});

$('.back_to_data_list').click(function(e) {
    e.preventDefault();
    $(".vehicle_data_list").css('display', 'block');
    $('.vehicle_detail').css('display', 'none');

});

$('#editVehicleForm').submit(function(event) {

    event.preventDefault();
    var id = $('#id').val();
    var viewType = $('#vehicle_view_type').val();
    $("[id$=-error]").text('');

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "<?php echo e(url('dashboard/saveVehicleData')); ?>/" + id,
        // data: $('#editVehicleForm').serialize(),
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function(response) {
            successMsg('Vehicle updated successfully.');
            if (viewType == 'all') {
                view_data(id);
                at_a_glance();
                $('#vehicle_table').DataTable().ajax.reload(null, false);
            } else if (viewType == 'single') {
                $('#searchVehicle').click();
            }

        },
        error: function(reject) {
            errorMsg();
            if (reject.status === 422 || reject.status === 403) {
                var errors = $.parseJSON(reject.responseText);
                $.each(errors.error.message, function(key, val) {
                    console.log(key + ' : ' + val);
                    $("small#" + key + "-error").text(val[0]);
                });
            }
        }
    });
});
</script><?php /**PATH C:\xampp\htdocs\angular\resources\views/enduser/dashboard/vehicle/vehicle_information.blade.php ENDPATH**/ ?>