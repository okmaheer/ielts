<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class GeneralTrainingTestController extends Controller
{
    public function getGeneralTrainingTests(Request $request){
        $tests = Test::where('category',2)->where('type',$request->type)->get();

        $type = (int) $request->input('type', 1);

        if ($type === 2) {
            $metaTitle       = 'IELTS General Training Listening Practice Test | IPP';
            $metaDescription = 'Practice computer-based IELTS General Training listening tests online. Get instant band scores with correct answers for all 4 parts.';
        } else {
            $metaTitle       = 'IELTS General Training Practice Test | IPP';
            $metaDescription = 'Practice computer-based IELTS General Training reading tests online. Real exam-style passages with instant band scores and detailed answers.';
        }

        return view('frontend.pages.general-training', compact('tests', 'metaTitle', 'metaDescription'));
    }
}
