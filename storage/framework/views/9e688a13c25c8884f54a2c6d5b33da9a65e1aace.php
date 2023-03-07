

<?php $__env->startSection('content'); ?>
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

    <!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <span class="kt-subheader__separator kt-hidden"></span>
                <div class="kt-subheader__breadcrumbs">
                    <a href="<?php echo e(url('/')); ?>" class="kt-subheader__breadcrumbs-home">
                        <i class="flaticon2-shelter"></i>
                    </a>
                    <a href="" class="kt-subheader__breadcrumbs-link">Sms Settings</a>
                </div>
            </div>

        </div>
    </div>

    <!-- end:: Subheader -->

    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid vehicle_data_list">

        <div class="kt-portlet kt-portlet--height-fluid custom-kt-portlet--height-fluid">
            <div class="kt-portlet__head kt-portlet__head--lg">
                <div class="kt-portlet__head-label">
                    <span class="kt-portlet__head-icon">
                        <i class="kt-font-brand flaticon2-line-chart"></i>
                    </span>
                    <h3 class="kt-portlet__head-title">
                      Sms Settings
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <a href="<?php echo e(route('sms.settings.create')); ?>" id="addMasterSetting" class="btn btn-success btn-sm"><i class="la la-plus mr-2"></i>Add New</a>

                </div>
            </div>
            <div class="kt-portlet__body">

                <!--begin: Datatable -->
                <table class="table table-striped- table-bordered table-hover table-checkable" id="user_table">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Provider Name</th>
                            <th>Status</th>
                            <th>Action </th>
                        </tr>
                    </thead>
                </table>

                <!--end: Datatable -->
            </div>
        </div>
    </div>

    <!-- end:: Content -->
</div>

<script>

$(function () {      

var table= $('#user_table').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        url: "<?php echo e(route('sms_settings_index')); ?>",
        data: function (d) {
            d._token = '<?php echo csrf_token(); ?>';
        }
    },
    columns: [
        {data: 'DT_RowIndex', name: 'DT_RowIndex', className: 'text-center'},
        {data: 'provider_name', name: 'provider_name'},
        {data: 'status', name: 'status'},
        {data: 'action', name: 'action', className: 'text-center', orderable: false, searchable: false},
    ],
    
    dom: 'Blfrtip',
    buttons: [
        {
            extend: 'copy',
            text: '<i class="far fa-copy custom-icon"></i>',
            className: 'custom-button-class ml-3 mr-2',
            exportOptions: {
                columns: ':visible :not(:last-child)'
            }
        },
        {
            extend: 'csv',
            text: '<i class="flaticon2-paper custom-icon"></i>',
            className: 'custom-button-class mr-2',
            exportOptions: {
                columns: ':visible :not(:last-child)'
            }
        },
        {
            extend: 'excel',
            text: '<i class="far fa-file-excel custom-icon"></i>',
            className: 'custom-button-class mr-2',
            exportOptions: {
                columns: ':visible :not(:last-child)'
            }
        },
        {
            extend: 'pdf',
            text: '<i class="far fa-file-pdf custom-icon"></i>',
            className: 'custom-button-class mr-2',
            exportOptions: {
                columns: ':visible :not(:last-child)'
            }
        },
        {
            extend: 'print',
            text: '<i class="fas fa-print custom-icon"></i>',
            className: 'custom-button-class mr-2',
            exportOptions: {
                columns: ':visible :not(:last-child)'
            }
        }
    ]
});
table.buttons().container().appendTo('#user_table_length');

});
    

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.enduser.dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vehicle_new\resources\views/enduser/settings/sms/index.blade.php ENDPATH**/ ?>