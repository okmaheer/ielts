@extends('layouts.app')

@section('content')
    <div class="toolbar mb-5 mb-lg-7" id="kt_toolbar">
        <div class="page-title d-flex flex-column me-3">
            <h1 class="d-flex text-dark fw-bolder my-1 fs-3">Edit Writing Task {{ $question->task_number }}</h1>
            <ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7 my-1">
                <li class="breadcrumb-item text-gray-600">
                    <a href="{{ route('admin.writing-question.index', $test->id) }}" class="text-gray-600 text-hover-primary">Writing Questions</a>
                </li>
                <li class="breadcrumb-item text-gray-500">Edit Task {{ $question->task_number }}</li>
            </ul>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.writing-question.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="question_id" value="{{ $question->id }}">

                <div class="mb-7">
                    <label class="required form-label fw-bold fs-6">Question Text</label>
                    <textarea name="question_text" class="form-control form-control-solid" rows="8" required>{{ old('question_text', $question->question_text) }}</textarea>
                    @error('question_text')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                @if($question->task_number == 1)
                <div class="mb-7">
                    <label class="form-label fw-bold fs-6">Upload Image/Chart (Optional)</label>
                    
                    @if($question->image_url)
                    <div class="mb-3">
                        <img src="{{ $question->image_url }}" alt="Current Image" class="img-fluid rounded" style="max-width: 400px;">
                        <p class="text-muted mt-2">Current Image (upload new to replace)</p>
                    </div>
                    @endif
                    
                    <input type="file" name="image" class="form-control form-control-solid" accept="image/*" id="imgInp">
                    <div class="mt-3">
                        <img id="blah" src="#" alt="Preview" class="img-fluid rounded" style="max-width: 400px; display: none;">
                    </div>
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                @endif

                <div class="mb-7">
                    <label class="required form-label fw-bold fs-6">Word Limit</label>
                    <input type="number" name="word_limit" class="form-control form-control-solid" value="{{ old('word_limit', $question->word_limit) }}" min="1" required>
                    @error('word_limit')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('admin.writing-question.index', $test->id) }}" class="btn btn-light me-3">Cancel</a>
                    <button type="submit" class="btn btn-primary">
                        <span class="indicator-label">Update Task {{ $question->task_number }}</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
<script>
    // Image preview
    const imgInput = document.getElementById('imgInp');
    if (imgInput) {
        imgInput.onchange = evt => {
            const [file] = imgInput.files;
            if (file) {
                document.getElementById('blah').src = URL.createObjectURL(file);
                document.getElementById('blah').style.display = 'block';
            }
        }
    }
</script>
@endsection