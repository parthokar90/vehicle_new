
@extends('layouts.admin.dealer-home.master')

@section('content')

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

    <!-- begin:: Subheader -->
    <div class="kt-subheader  kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
           <div class="kt-subheader__main">
                <span class="kt-subheader__separator kt-hidden"></span>
                <div class="kt-subheader__breadcrumbs">
                    <a href="{{route('admin.dashboard')}}" class="kt-subheader__breadcrumbs-home">
                        <i class="flaticon2-shelter"></i>
                    </a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="javascript:;" class="kt-subheader__breadcrumbs-link">Home </a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                </div>
            </div>
            <div class="kt-subheader__toolbar">
                <div class="kt-subheader__wrapper">
                    <a href="#" class="btn kt-subheader__btn-secondary">Today</a>
                    <a href="#" class="btn kt-subheader__btn-secondary">Month</a>
                    <a href="#" class="btn kt-subheader__btn-secondary">Year</a>
                    <a href="#" class="btn kt-subheader__btn-primary">
                        Actions

                        <!--<i class="flaticon2-calendar-1"></i>-->
                    </a>
                    <div class="dropdown dropdown-inline" data-toggle-="kt-tooltip" title="Quick actions" data-placement="left">
                        <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--md">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon id="Shape" points="0 0 24 0 24 24 0 24" />
                                    <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" id="Combined-Shape" fill="#000000" />
                                </g>
                            </svg>

                            <!--<i class="flaticon2-plus"></i>-->
                        </a>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">

                            <!--begin::Nav-->
                            <ul class="kt-nav">
                                <li class="kt-nav__head">
                                    Add anything or jump to:
                                    <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
                                </li>
                                <li class="kt-nav__separator"></li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-drop"></i>
                                        <span class="kt-nav__link-text">Order</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                        <span class="kt-nav__link-text">Ticket</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-link"></i>
                                        <span class="kt-nav__link-text">Goal</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                        <span class="kt-nav__link-text">Support Case</span>
                                        <span class="kt-nav__link-badge">
                                            <span class="kt-badge kt-badge--brand kt-badge--rounded">5</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="kt-nav__separator"></li>
                                <li class="kt-nav__foot">
                                    <a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade plan</a>
                                    <a class="btn btn-clean btn-bold btn-sm kt-hidden" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                                </li>
                            </ul>

                            <!--end::Nav-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end:: Subheader -->

    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head kt-portlet__head--lg">
                <div class="kt-portlet__head-label">
                    <h5 class="kt-portlet__head-title">
                        My Account
                    </h5>
                </div>
            </div>
            <div class="kt-portlet__body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <!-- Profile Image -->
                                        <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle"
                                            src="{{asset('assets/media/users/100_3.jpg')}}"
                                            alt="User profile picture">
                                        </div>
                                        <h5 class="profile-username text-center mt-3">Nina Mcintire</h5>
                                    </div>
                                    <div class="col-md-8">
                                        <ul class="list-group list-group-unbordered mb-3">
                                            <li class="list-group-item">
                                                <b>Account </b> <span class="float-right">1,322</span>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Users </b> <span class="float-right">543</span>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Expired Device</b> <span class="float-right">13,287</span>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Device Quantity</b> <span class="float-right">13,287</span>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Balance </b> <span class="float-right">13,287</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- <div class="row mt-3">
                            <div class="col-md-12">
                                <h5 class="custom-h5 ml-2 mb-4">Supplier Account</h5>
                                <div class="row ">
                                    <div class="col-md-4 mt-2">
                                        <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle"
                                            src="{{asset('assets/media/users/100_5.jpg')}}"
                                            alt="User profile picture">
                                        </div>
                                        <h5 class="profile-username text-center mt-3">Nina Mcintire</h5>
                                    </div>
                                    <div class="col-md-8">
                                        <ul class="list-group list-group-unbordered mb-3">
                                            <li class="list-group-item">
                                                <b>User name  </b> <span class="float-right">1,322</span>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Contact  </b> <span class="float-right">543</span>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Telephone </b> <span class="float-right">13,287</span>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Email </b> <span class="float-right">13,287</span>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Address  </b> <span class="float-right">13,287</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div> -->
                    </div>
                    <div class="col-lg-6">
                        <table class="table table-bordered table-success">
                            <tbody>
                                <tr>
                                    <td  colspan="2">
                                        <div class="kt-header-menu custom-header-menu">
                                            <ul class="nav">
                                                <li class="nav-item ">
                                                    <a href="javascript:;" class="nav-link">
                                                    <span class="kt-menu__link-text custom-kt-menu__link-text custom-link"><i class="far fa-edit mr-1"></i>Edit</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item "><a href="javascript:;" class="nav-link"><span class="kt-menu__link-text custom-kt-menu__link-text custom-link"><i class="fas fa-tv mr-1"></i>Monitor</span></a>
                                                </li>
                                                <li class="nav-item "><a href="javascript:;" class="nav-link"><span class="kt-menu__link-text custom-kt-menu__link-text custom-link"><i class="far fa-bell mr-1"></i>Notification</span></a>
                                                </li>
                                                <li class="nav-item "><a href="javascript:;" class="nav-link"><span class="kt-menu__link-text custom-kt-menu__link-text custom-link"><i class="far fa-envelope mr-1"></i>Send Message</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span><lable class="custom-table-td">Account:</lable> Gm0124657</span>
                                    </td>
                                    <td>
                                        <span><lable class="custom-table-td">Roll:</lable> Distributor</span>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <span><lable class="custom-table-td">Contact:</lable> 0124657</span>
                                    </td>
                                    <td>
                                        <span><lable class="custom-table-td">Phone:</lable> 01245678</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td  colspan="2">
                                        <span><lable class="custom-table-td">Address:</lable> House# 646, Road# 9, Avenue# 4, Mirpur DOSH</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <span><lable class="custom-table-td">Balance:</lable> 25</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end:: Content -->
</div>

@endsection