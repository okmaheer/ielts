<div class="modal fade" id="test-type" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width:560px;">
        <div class="modal-content" style="border-radius:16px;overflow:hidden;">
            <div class="modal-header border-0 pb-0 px-4 pt-4">
                <h5 class="modal-title fw-700" style="font-size:1.05rem;color:#1a2340;">
                    Choose the type of test you would like to take
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-4 pb-4 pt-3">
                <div class="row g-3">
                    <div class="col-md-4">
                        <a class="d-flex flex-column align-items-center justify-content-center text-center text-decoration-none p-3"
                            href="{{ route('academic.training.test', ['type' => '1']) }}"
                            style="border:2px solid #17a2b8;border-radius:14px;color:#17a2b8;min-height:110px;transition:all 0.2s;">
                            <i class="fas fa-university mb-2" style="font-size:1.4rem;"></i>
                            <span style="font-weight:700;font-size:0.88rem;">Academic Test</span>
                            <span style="font-size:0.75rem;opacity:0.7;margin-top:3px;">Listening &amp; Reading</span>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="d-flex flex-column align-items-center justify-content-center text-center text-decoration-none p-3"
                            href="{{ route('general.training.test', ['type' => '1']) }}"
                            style="border:2px solid #17a2b8;border-radius:14px;color:#17a2b8;min-height:110px;transition:all 0.2s;">
                            <i class="fas fa-book mb-2" style="font-size:1.4rem;"></i>
                            <span style="font-weight:700;font-size:0.88rem;">General Training</span>
                            <span style="font-size:0.75rem;opacity:0.7;margin-top:3px;">Listening &amp; Reading</span>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="d-flex flex-column align-items-center justify-content-center text-center text-decoration-none p-3"
                            href="{{ env('WRITING_TEST_URL', 'https://writingtest.ieltsprepandpractice.com') }}"
                            target="_blank"
                            style="border:2px solid #17a2b8;border-radius:14px;color:#17a2b8;min-height:110px;transition:all 0.2s;">
                            <i class="fas fa-pen-fancy mb-2" style="font-size:1.4rem;"></i>
                            <span style="font-weight:700;font-size:0.88rem;">Writing Test</span>
                            <span style="font-size:0.75rem;opacity:0.7;margin-top:3px;">Academic &amp; General</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    #test-type .modal-body a:hover {
        background: #17a2b8 !important;
        color: #fff !important;
    }
    #test-type .modal-body a:hover i,
    #test-type .modal-body a:hover span {
        color: #fff !important;
    }
</style>
