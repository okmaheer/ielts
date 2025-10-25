<!--begin::Modal - Task 2-->
<div class="modal fade" id="task2-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-900px">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="fw-bolder">Add Task 2</h2>
                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"/>
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"/>
                        </svg>
                    </span>
                </div>
            </div>
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <form id="task2_form" class="form" action="{{ route('admin.writing-question.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="test_id" value="{{ $test->id }}">
                    <input type="hidden" name="task_number" value="2">

                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">Question Text</label>
                        <textarea name="question_text" class="form-control form-control-solid mb-3 mb-lg-0" rows="8" placeholder="Enter the essay question for Task 2..." required></textarea>
                        <div class="form-text">Task 2 is an essay question about a point of view, argument, or problem</div>
                    </div>

                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">Word Limit</label>
                        <input type="number" name="word_limit" class="form-control form-control-solid" value="250" min="1" required>
                        <div class="form-text">Recommended: 250 words for Task 2</div>
                    </div>

                    <div class="text-center pt-15">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--end::Modal - Task 2-->