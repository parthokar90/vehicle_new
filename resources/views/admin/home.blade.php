@extends('layouts.admin.master')

@section('content')
<style>
/* .caret {
        display: inline-block;
        width: 0;
        height: 0;
        margin-left: 2px;
        vertical-align: middle;
        border-top: 4px dashed;
        border-top: 4px solid\9;
        border-right: 4px solid transparent;
        border-left: 4px solid transparent;
    } */
</style>
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

    <!-- begin:: Content Head -->
    <div class="kt-subheader  kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <span class="kt-subheader__separator kt-hidden"></span>
                <div class="kt-subheader__breadcrumbs">
                    <a href="{{url('/')}}" class="kt-subheader__breadcrumbs-home">
                        <i class="flaticon2-shelter"></i>
                    </a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="{{url('/')}}" class="kt-subheader__breadcrumbs-link">Dashboard</a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                </div>
            </div>
        </div>
    </div>

    <!-- end:: Content Head -->

    <!-- begin:: Content -->

    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="kt-portlet kt-portlet--height-fluid custom-kt-portlet--height-fluid ">
                    <div class="kt-portlet__head ">
                        <div class="kt-portlet__head-label">
                            <h5 class="kt-portlet__head-title">Account Information</h5>
                        </div>
                    </div>

                    <div class="kt-portlet__body">
                        <div class="row custom-at-a-glance" style="min-height:200px">
                            <select class="mt-multiselect btn btn-default mt-noicon" multiple="multiple"
                                data-clickable-groups="true" data-collapse-groups="true" data-width="100%"
                                name="selected_vehicles" id="selected_vehicles">
                                @php
                                echo generate_dropdown('html',true,'vehicle_groups', 'name', 'vehicles',
                                'vehicle_group_id',
                                'vehicle_name','vehicle_no');
                                @endphp
                            </select>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="kt-portlet kt-portlet--height-fluid custom-kt-portlet--height-fluid ">
                    <div class="kt-portlet__head ">
                        <div class="kt-portlet__head-label">
                            <h5 class="kt-portlet__head-title">Device Summary (Status wise)</h5>
                        </div>
                    </div>

                    <div class="kt-portlet__body">
                        <div class="row custom-at-a-glance" style="min-height:200px">
                            <div id="dealer_graph_chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="kt-portlet kt-portlet--height-fluid custom-kt-portlet--height-fluid ">
                    <div class="kt-portlet__head ">
                        <div class="kt-portlet__head-label">
                            <h5 class="kt-portlet__head-title">Account details</h5>
                        </div>
                    </div>

                    <div class="kt-portlet__body">
                        <div class="row custom-at-a-glance">
                            <div class="col-md-3">
                                <div class="card custom-card"
                                    style="background-image: url('{{asset("assets/media/misc/bg-1.jpg")}}')">
                                    <div class="card-body custom-card-body">
                                        <h5 class="card-title text-center"></i>Total Account
                                        </h5>
                                        <h5 class="card-title text-center" id="total_v">
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="kt-portlet kt-portlet--height-fluid custom-kt-portlet--height-fluid ">
                    <div class="kt-portlet__head ">
                        <div class="kt-portlet__head-label">
                            <h5 class="kt-portlet__head-title">Device details</h5>
                        </div>
                    </div>

                    <div class="kt-portlet__body">
                        <div class="row custom-at-a-glance">

                            <div class="col-md-3">
                                <div class="card custom-card"
                                    style="background-image: url('{{asset("assets/media/misc/bg-1.jpg")}}')">
                                    <div class="card-body custom-card-body">
                                        <h5 class="card-title text-center">Device
                                        </h5>
                                        <h5 class="card-title text-center" id="assigned_v"></h5>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end:: Content -->

</div>

<script type="text/javascript">
$(document).ready(function() {
    /*  $.ajax({
         url: "{{url('')}}/" + id,
         type: "GET",

         success: function(data) {
             console.log(data);
             $('#assign_group_id').val(data.vehicleGroup.id);
             $('#assign_group_name').val(data.vehicleGroup.name);
             $('#assign_modal_title').text('Assign to ' + data.vehicleGroup.name);
             $('#AssingGroupModal').modal('show');
         },
         error: function(data) {
             console.log('Error:', data);
             if (data.status === 500) {
                 warningMsg('Data ID not exist!');
             }
         }
     }); */

    // $('.mt-multiselect').multiselect({
    //     enableClickableOptGroups: true,
    //     enableCollapsibleOptGroups: true,
    //     enableFiltering: true,
    //     includeSelectAllOption: true,
    //     enableCaseInsensitiveFiltering:true
    // });
});
</script>



@endsection