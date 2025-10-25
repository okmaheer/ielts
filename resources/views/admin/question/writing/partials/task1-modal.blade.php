<!--begin::Modal - Task 1-->
<div class="modal fade" id="task1-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-900px">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="fw-bolder">Add Task 1</h2>
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
                <form id="task1_form" class="form" action="{{ route('admin.writing-question.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="test_id" value="{{ $test->id }}">
                    <input type="hidden" name="task_number" value="1">

                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">Question Text</label>
                        <textarea name="question_text" class="form-control form-control-solid mb-3 mb-lg-0" rows="6" placeholder="Enter the writing task 1 question..." required></textarea>
                    </div>

                    <div class="fv-row mb-7">
                        <label class="fw-bold fs-6 mb-2">Upload Image/Chart (Optional)</label>
                        <input type="file" name="image" class="form-control form-control-solid" accept="image/*" id="imgInp_task1">
                        <div class="form-text">Upload a chart, graph, table, or diagram for Task 1</div>
                        <div class="mt-3">
                            <img id="preview_task1" src="#" alt="Preview" class="img-fluid rounded" style="max-width: 100%; display: none;">
                        </div>
                    </div>

                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">Word Limit</label>
                        <input type="number" name="word_limit" class="form-control form-control-solid" value="150" min="1" required>
                        <div class="form-text">Recommended: 150 words for Task 1</div>
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
<!--end::Modal - Task 1-->

@section('script')
@parent
<script>
    document.getElementById('imgInp_task1').onchange = function(evt) {
        const [file] = this.files;
        if (file) {
            document.getElementById('preview_task1').src = URL.createObjectURL(file);
            document.getElementById('preview_task1').style.display = 'block';
        }
    }
</script>
@endsection