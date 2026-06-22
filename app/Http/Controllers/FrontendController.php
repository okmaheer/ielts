<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index()
    {

        return view('frontend.index');
    }
    public function preprationCourses()
    {


        return view('frontend.pages.prepration-courses');
    }
    public function practiceMarterial()
    {


        return view('frontend.pages.practice-marterial');
    }


    public function privacyPolicy()
    {
        return view('frontend.pages.privacy-policy', [
            'metaTitle'       => 'Privacy Policy - CBT',
            'metaDescription' => 'We strive best to keep our user\'s information hidden and prevent its misuse, for more information, read our privacy policy now.',
        ]);
    }

    public function faqs()
    {
        return view('frontend.pages.faqs', [
            'metaTitle'       => 'Frequently Asked Questions - CBT',
            'metaDescription' => 'Get answers for your most frequent questions about IELTS exam and start your IELTS preparation journey.',
        ]);
    }

    public function contactUs(Request $request)
    {
        return view('frontend.pages.contact-us', [
            'metaTitle'       => 'Contact Us - CBT',
            'metaDescription' => 'If you are struggling to get required score in IELTS, searching for authentic practice material or facing an issue using our services, then contact now.',
        ]);
    }

    public function aboutUs(Request $request)
    {
        return view('frontend.pages.about-us', [
            'metaTitle'       => 'About Us - CBT',
            'metaDescription' => 'We help students to achieve desired scores on their first attempt. With roots in Pakistan, we help students globally without discrimination.',
        ]);
    }

    public function computerBasedPracticeTest()
    {
        return view('frontend.pages.computer-based-practice-test');
    }

    public function writingPracticeTest()
    {
        return view('frontend.pages.writing-practice-test');
    }
}
