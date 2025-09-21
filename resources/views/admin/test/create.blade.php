@extends('layouts.app')

@section('content')
    <!--begin::Toolbar-->
    <div class="toolbar mb-5 mb-lg-7" id="kt_toolbar">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column me-3">
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7 my-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-gray-600">
                    <a href="javascript:void(0)" class="text-gray-600 text-hover-primary">Home</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-gray-500">Add New Test</li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->
    </div>
    <!--end::Toolbar-->

    <div class="card mb-6 mb-xl-9">
        <div class="card-body pt-9 pb-9">
            <h1 class="text-dark fw-bolder mt-1 mb-10 fs-3">Test Details</h1>

            <form action="{{ route('admin.test.store') }}" method="post">
                @csrf

                <div class="row g-9 mb-8">
               
                    <div class="col-md-6">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Test Name</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid required" placeholder="Enter name" name="name" />
                    </div>

                 
                    <div class="col-md-6">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Test Type</span>
                        </label>
                        <!--end::Label-->
                        <select class="form-control form-control-solid required" name="type">
                            <option value="">Select type</option>
                            <option value="2">Paid</option>
                            <option value="1">Mock</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                 
                </div>

           

            

                <div class="row g-9 mb-8">
                    <div class="col-md-6">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Test Category</span>
                        </label>
                        <!--end::Label-->
                        <select class="form-control form-control-solid required" name="category">
                            <option value="">Select Category</option>
                            <option value="1">Acadamic</option>
                            <option value="2">General Traning</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                 

                    <div class="col-md-6">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Test Status</span>
                        </label>
                        <!--end::Label-->
                        <select class="form-control form-control-solid required" name="status">
                            <option value="">Select Status</option>
                            <option value="0">Inactive</option>
                            <option value="1">Active</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                 
                </div>
                
          

                <!--begin::Actions-->
                <div class="text-start">
                    <button type="reset" class="btn btn-light me-3">Cancel</button>
                    <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                        <span class="indicator-label">Submit</span>
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
                <!--end::Actions-->
            </form>
        </div>
    </div>
@endsection