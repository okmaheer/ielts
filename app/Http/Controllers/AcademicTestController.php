<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class AcademicTestController extends Controller
{
    

    public function getAcademicTest(Request $request){
        $tests = Test::with('writingQuestions')->where('category',1)->where('type',$request->type)->get();

        $type = (int) $request->input('type', 1);

        if ($type === 2) {
            $metaTitle       = 'IELTS Academic Listening Practice Test | IPP';
            $metaDescription = 'Practice computer-based IELTS Academic tests online. All 4 parts with authentic audio, instant band scores and correct answers.';
        } else {
            $metaTitle       = 'IELTS Academic Practice Test | IPP';
            $metaDescription = 'Practice computer-based IELTS Academic tests online. Complex passages with instant band scores, True/False/Not Given and matching headings.';
        }

        return view('frontend.pages.academic-test', compact('tests', 'metaTitle', 'metaDescription'));
    }
}
