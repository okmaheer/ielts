<div class="modal fade" id="test-type" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-750px" style="max-width:600px;">
        <!--begin::Modal content-->
        <div class="modal-content" style="border-radius: 16px; border: none; box-shadow: 0 10px 40px rgba(0,0,0,0.15);">
            <!-- Modal Header -->
            <div class="modal-header border-0 px-5 py-4" style="background: linear-gradient(135deg, #06BBCC 0%, #049CA8 100%);">
                <h5 class="modal-title fw-bold text-white" style="font-size: 1.25rem;">Choose Your Test Type</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body px-5 py-5">
                <p class="text-muted text-center mb-4" style="font-size: 0.95rem;">Select the type of test you would like to take</p>
                
                <div class="row g-3">
                    <!-- Academic Test Button -->
                    <div class="col-md-6">
                        <a href="{{ route('academic.training.test', ['type' => '1']) }}" 
                           class="btn btn-outline-primary btn-lg w-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-mortarboard me-2" viewBox="0 0 16 16">
                                <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.85a.5.5 0 0 0 .025.917l7.5 3.85a.5.5 0 0 0 .922 0l7.5-3.85a.5.5 0 0 0 .025-.917l-7.5-3.85zM14.341 7.581l-7.5 3.85-7.5-3.85V4.997l7.5 3.85 7.5-3.85v2.584z"/>
                                <path d="m1 11.621 7.823 3.323a.5.5 0 0 0 .354 0L15 11.621"/>
                            </svg>
                            Academic Test
                        </a>
                    </div>

                    <!-- General Training Test Button -->
                    <div class="col-md-6">
                        <a href="{{ route('general.training.test', ['type' => '1']) }}" 
                           class="btn btn-outline-primary btn-lg w-100">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-book-half me-2" viewBox="0 0 16 16">
                                <path d="M8.5 2a.5.5 0 0 1 .5.5v11a.5.5 0 0 1-1 0v-11a.5.5 0 0 1 .5-.5z"/>
                                <path d="M2 2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L6.85 13.5l-2.073.923A.5.5 0 0 1 4 13.5V2a1 1 0 0 0-1 1v9H2V2zm16 0h-4v14h2a2 2 0 0 0 2-2V2zM6 5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H6z"/>
                            </svg>
                            General Training
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Modal content-->
    </div>
</div>
