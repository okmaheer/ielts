@extends('layouts.app')

@section('content')
    <div class="toolbar mb-5 mb-lg-7" id="kt_toolbar">
        <div class="page-title d-flex flex-column me-3">
            <h1 class="d-flex text-dark fw-bolder my-1 fs-3">Add Writing Task {{ $taskNumber }}</h1>
            <ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7 my-1">
                <li class="breadcrumb-item text-gray-600">
                    <a href="{{ route('admin.writing-question.index', $test->id) }}" class="text-gray-600 text-hover-primary">Writing Questions</a>
                </li>
                <li class="breadcrumb-item text-gray-500">Add Task {{ $taskNumber }}</li>
            </ul>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.writing-question.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="test_id" value="{{ $test->id }}">
                <input type="hidden" name="task_number" value="{{ $taskNumber }}">

                <div class="mb-5">
                    <label class="form-label required">Question Text</label>
                    <textarea name="question_text" class="form-control" rows="6" required>{{ old('question_text') }}</textarea>
                    @error('question_text')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                @if($taskNumber == 1)
                <div class="mb-5">
                    <label class="form-label">Upload Image/Chart (Optional for Task 1)</label>
                    <input type="file" name="image" class="form-control" accept="image/*" id="imgInp">
                    <div class="mt-3">
                        <img id="blah" src="#" alt="Preview" class="img-fluid rounded" style="max-width: 400px; display: none;">
                    </div>
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                @endif

                <div class="mb-5">
                    <label class="form-label required">Word Limit</label>
                    <input type="number" name="word_limit" class="form-control" value="{{ $taskNumber == 1 ? 150 : 250 }}" required>
                    <div class="form-text">Recommended: 150 words for Task 1, 250 words for Task 2</div>
                    @error('word_limit')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('admin.writing-question.index', $test->id) }}" class="btn btn-light me-3">Cancel</a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa-solid fa-save"></i> Save Task {{ $taskNumber }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
<script>
    // Image preview
    imgInp.onchange = evt => {
        const [file] = imgInp.files;
        if (file) {
            blah.src = URL.createObjectURL(file);
            blah.style.display = 'block';
        }
    }
</script>
@endsection