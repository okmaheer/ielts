<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\WritingQuestion;
use Illuminate\Http\Request;

class WritingQuestionController extends Controller
{
    public function index(Request $request, $id)
    {
        $test = Test::findOrFail($id);
        $task1 = WritingQuestion::where('test_id', $id)
            ->where('task_number', 1)
            ->first();
        $task2 = WritingQuestion::where('test_id', $id)
            ->where('task_number', 2)
            ->first();

        return view('admin.question.writing.index', compact('test', 'task1', 'task2'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'test_id' => 'required|exists:tests,id',
            'task_number' => 'required|in:1,2',
            'question_text' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'word_limit' => 'required|integer|min:1'
        ]);

        $imageUrl = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage'), $filename);
            $imageUrl = asset('storage/' . $filename);
        }

        WritingQuestion::create([
            'test_id' => $request->test_id,
            'task_number' => $request->task_number,
            'question_text' => $request->question_text,
            'image_url' => $imageUrl,
            'word_limit' => $request->word_limit
        ]);

        return redirect()
            ->route('admin.writing-question.index', ['id' => $request->test_id])
            ->with('success', 'Writing Task ' . $request->task_number . ' added successfully!');
    }

    public function edit(Request $request, $id)
    {
        $question = WritingQuestion::findOrFail($id);
        $test = $question->test;
        
        return view('admin.question.writing.edit', compact('question', 'test'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'question_id' => 'required|exists:writing_questions,id',
            'question_text' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'word_limit' => 'required|integer|min:1'
        ]);

        $question = WritingQuestion::findOrFail($request->question_id);
        
        $imageUrl = $question->image_url;
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($question->image_url) {
                $oldImagePath = public_path('storage/' . basename($question->image_url));
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $image = $request->file('image');
            $filename = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage'), $filename);
            $imageUrl = asset('storage/' . $filename);
        }

        $question->update([
            'question_text' => $request->question_text,
            'image_url' => $imageUrl,
            'word_limit' => $request->word_limit
        ]);

        return redirect()
            ->route('admin.writing-question.index', ['id' => $question->test_id])
            ->with('success', 'Writing Task updated successfully!');
    }

    public function delete($id)
    {
        $question = WritingQuestion::findOrFail($id);
        $testId = $question->test_id;

        // Delete image if exists
        if ($question->image_url) {
            $imagePath = public_path('storage/' . basename($question->image_url));
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $question->delete();

        return redirect()
            ->route('admin.writing-question.index', ['id' => $testId])
            ->with('success', 'Writing Task deleted successfully!');
    }

    // Keep these methods for future use if needed
    public function editFillInBlanks(Request $request, $id)
    {
        // Reserved for future functionality
    }

    public function editFiveOptions(Request $request, $id)
    {
        // Reserved for future functionality
    }
}