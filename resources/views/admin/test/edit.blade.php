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
                <li class="breadcrumb-item text-gray-500">Update Test</li>
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

            <form action="{{ route('admin.test.update') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $test->id }}">

                <div class="row g-9 mb-8">
                    <div class="col-md-6">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Test Name</span>
                        </label>
                        <!--end::Label-->
                        <input type="text" class="form-control form-control-solid required" value="{{ $test->name }}"
                            placeholder="Enter name" name="name" />
                    </div>

                    <div class="col-md-6">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Test Type</span>
                        </label>
                        <!--end::Label-->
                        <select class="form-control form-control-solid required" name="type">
                            <option value="">Select type</option>
                            <option value="2" {{ $test->type == '2' ? 'selected' : '' }}>Paid</option>
                            <option value="1" {{ $test->type == '1' ? 'selected' : '' }}>Mock</option>
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
                            <option value="1" {{ $test->category == '1' ? 'selected' : '' }}>Academic</option>
                            <option value="2" {{ $test->category == '2' ? 'selected' : '' }}>General Training</option>
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
                            <option value="0" {{ $test->status == '0' ? 'selected' : '' }}>Inactive</option>
                            <option value="1" {{ $test->status == '1' ? 'selected' : '' }}>Active</option>
                        </select>
                    </div>
                </div>

                <!-- SEO Meta Fields Section -->
                <div class="card mt-8 mb-8" style="border: 2px solid #e4e6ef;">
                    <div class="card-header" style="background-color: #f5f8fa;">
                        <h3 class="card-title">
                            <i class="fas fa-search me-2"></i>SEO Meta Information
                        </h3>
                    </div>
                    <div class="card-body">
                        
                        <!-- Listening Meta Fields -->
                        <h5 class="text-primary mb-4"><i class="fa-solid fa-headphones me-2"></i>Listening Test SEO</h5>
                        
                        <div class="row g-9 mb-4">
                            <div class="col-md-12">
                                <label class="fs-6 fw-bold mb-2">Listening Meta Title</label>
                                <input type="text" class="form-control form-control-solid" 
                                       id="listening_meta_title"
                                       name="listening_meta_title" 
                                       value="{{ old('listening_meta_title', $test->listening_meta_title) }}"
                                       maxlength="70"
                                       placeholder="e.g., Junior Cycle Camp Cambridge 16 Listening Test 3" />
                                <div class="form-text">
                                    <span id="listening-title-count">0</span>/70 characters
                                </div>
                            </div>
                        </div>

                        <div class="row g-9 mb-4">
                            <div class="col-md-12">
                                <label class="fs-6 fw-bold mb-2">Listening Meta Description</label>
                                <textarea class="form-control form-control-solid" 
                                          id="listening_meta_description"
                                          name="listening_meta_description" 
                                          rows="3"
                                          maxlength="170"
                                          placeholder="e.g., Solve IELTS listening test on junior cycle camp and check your band score with answers.">{{ old('listening_meta_description', $test->listening_meta_description) }}</textarea>
                                <div class="form-text">
                                    <span id="listening-desc-count">0</span>/170 characters
                                </div>
                            </div>
                        </div>

                        <div class="row g-9 mb-4">
                            <div class="col-md-12">
                                <label class="fs-6 fw-bold mb-2">Listening Focus Keywords</label>
                                <input type="text" class="form-control form-control-solid" 
                                       name="listening_focus_keywords" 
                                       value="{{ old('listening_focus_keywords', $test->listening_focus_keywords) }}"
                                       placeholder="e.g., junior cycle camp listening test" />
                            </div>
                        </div>

                        <!-- Listening Preview -->
                        <div class="alert alert-light border mb-6">
                            <h6 class="mb-3"><i class="fas fa-eye me-2"></i>Listening Test - Google Search Preview:</h6>
                            <div class="google-preview p-3" style="background-color: #fff; border-radius: 5px;">
                                <div class="preview-title mb-1" style="color: #1a0dab; font-size: 18px; font-weight: 400; cursor: pointer;">
                                    <span id="listening-preview-title">{{ $test->listening_meta_title ?? 'Your Listening Test Title' }}</span>
                                </div>
                                <div class="preview-url mb-1" style="color: #006621; font-size: 14px;">
                                    ieltsprepandpractice.com › listening › test › {{ $test->id }}
                                </div>
                                <div class="preview-description" style="color: #545454; font-size: 13px; line-height: 1.4;">
                                    <span id="listening-preview-description">{{ $test->listening_meta_description ?? 'Your listening meta description will appear here.' }}</span>
                                </div>
                            </div>
                        </div>

                        <hr class="my-6">

                        <!-- Reading Meta Fields -->
                        <h5 class="text-success mb-4"><i class="fa-solid fa-book-open me-2"></i>Reading Test SEO</h5>
                        
                        <div class="row g-9 mb-4">
                            <div class="col-md-12">
                                <label class="fs-6 fw-bold mb-2">Reading Meta Title</label>
                                <input type="text" class="form-control form-control-solid" 
                                       id="reading_meta_title"
                                       name="reading_meta_title" 
                                       value="{{ old('reading_meta_title', $test->reading_meta_title) }}"
                                       maxlength="70"
                                       placeholder="e.g., Why Pagodas Fall Down Cambridge 7 Reading Test 1" />
                                <div class="form-text">
                                    <span id="reading-title-count">0</span>/70 characters
                                </div>
                            </div>
                        </div>

                        <div class="row g-9 mb-4">
                            <div class="col-md-12">
                                <label class="fs-6 fw-bold mb-2">Reading Meta Description</label>
                                <textarea class="form-control form-control-solid" 
                                          id="reading_meta_description"
                                          name="reading_meta_description" 
                                          rows="3"
                                          maxlength="170"
                                          placeholder="e.g., Solve IELTS reading test on why pagodas fall down and check your band scores with answers.">{{ old('reading_meta_description', $test->reading_meta_description) }}</textarea>
                                <div class="form-text">
                                    <span id="reading-desc-count">0</span>/170 characters
                                </div>
                            </div>
                        </div>

                        <div class="row g-9 mb-4">
                            <div class="col-md-12">
                                <label class="fs-6 fw-bold mb-2">Reading Focus Keywords</label>
                                <input type="text" class="form-control form-control-solid" 
                                       name="reading_focus_keywords" 
                                       value="{{ old('reading_focus_keywords', $test->reading_focus_keywords) }}"
                                       placeholder="e.g., pagodas fall down reading test" />
                            </div>
                        </div>

                        <!-- Reading Preview -->
                        <div class="alert alert-light border">
                            <h6 class="mb-3"><i class="fas fa-eye me-2"></i>Reading Test - Google Search Preview:</h6>
                            <div class="google-preview p-3" style="background-color: #fff; border-radius: 5px;">
                                <div class="preview-title mb-1" style="color: #1a0dab; font-size: 18px; font-weight: 400; cursor: pointer;">
                                    <span id="reading-preview-title">{{ $test->reading_meta_title ?? 'Your Reading Test Title' }}</span>
                                </div>
                                <div class="preview-url mb-1" style="color: #006621; font-size: 14px;">
                                    ieltsprepandpractice.com › reading › test › {{ $test->id }}
                                </div>
                                <div class="preview-description" style="color: #545454; font-size: 13px; line-height: 1.4;">
                                    <span id="reading-preview-description">{{ $test->reading_meta_description ?? 'Your reading meta description will appear here.' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--begin::Actions-->
                <div class="text-start">
                    <button type="reset" class="btn btn-light me-3">Cancel</button>
                    <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                        <span class="indicator-label">Update</span>
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
                <!--end::Actions-->
            </form>
        </div>
    </div>
@endsection

@section('script')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Character counter and preview function
    function setupCounterWithPreview(inputId, countId, previewId) {
        const input = document.getElementById(inputId);
        const count = document.getElementById(countId);
        const preview = document.getElementById(previewId);
        
        if (input && count) {
            input.addEventListener('input', function() {
                const length = this.value.length;
                count.textContent = length;
                
                if (length > 60) {
                    count.style.color = 'red';
                } else if (length > 50) {
                    count.style.color = 'orange';
                } else {
                    count.style.color = 'green';
                }

                // Update preview
                if (preview) {
                    preview.textContent = this.value || (previewId.includes('title') ? 'Your Test Title' : 'Your meta description will appear here.');
                }
            });
            
            // Trigger initial count
            input.dispatchEvent(new Event('input'));
        }
    }
    
    // Setup counters and previews for all fields
    setupCounterWithPreview('listening_meta_title', 'listening-title-count', 'listening-preview-title');
    setupCounterWithPreview('listening_meta_description', 'listening-desc-count', 'listening-preview-description');
    setupCounterWithPreview('reading_meta_title', 'reading-title-count', 'reading-preview-title');
    setupCounterWithPreview('reading_meta_description', 'reading-desc-count', 'reading-preview-description');
});
</script>
@endsection