@extends('layouts.frontend-app')

@section('css')
<style>
    .premium-banner {
        background: linear-gradient(135deg, #06BBCC 0%, #049CA8 100%);
        border-radius: 16px;
        padding: 32px 28px;
        margin: 32px 0 48px;
        text-align: center;
        box-shadow: 0 10px 30px rgba(6, 187, 204, 0.2);
    }
    .premium-banner h2 {
        color: #fff;
        font-size: 24px;
        font-weight: 800;
        margin-bottom: 12px;
    }
    .premium-banner p {
        color: rgba(255, 255, 255, 0.9);
        font-size: 14px;
        margin-bottom: 20px;
        line-height: 1.6;
    }
    .premium-banner .features {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-bottom: 24px;
        flex-wrap: wrap;
    }
    .premium-banner .feature-item {
        display: flex;
        align-items: center;
        gap: 8px;
        color: rgba(255, 255, 255, 0.85);
        font-size: 13px;
        font-weight: 500;
    }
    .premium-banner .feature-item i {
        font-size: 16px;
        color: #4ade80;
    }
    .premium-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: #fff;
        color: #06BBCC;
        padding: 14px 32px;
        border-radius: 12px;
        border: none;
        font-weight: 700;
        font-size: 15px;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }
    .premium-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        background: #f0f0f0;
        color: #049CA8;
    }
</style>
@endsection

@section('content')
    <!-- Service Start -->
    <div class="container-xxl py-5">
  
        <div class="row g-4 justify-content-center">

            <div class="container p-5">
                <!-- Premium Mock Test Banner -->
                <div class="premium-banner">
                    <h2><i class="fas fa-crown me-2" style="color: #fbbf24;"></i>IELTS Premium Mock Tests</h2>
                    <p>Get access to computer-based mock tests with instant results and detailed feedback to boost your IELTS score</p>
                    <div class="features">
                        <div class="feature-item">
                            <i class="fas fa-desktop"></i>
                            <span>Computer based simulation</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-book"></i>
                            <span>30 Listening and reading tests</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-pen-fancy"></i>
                            <span>28 Academic Writing Tests</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-chart-line"></i>
                            <span>Detailed band score breakdown</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-user-tie"></i>
                            <span>Expert review access</span>
                        </div>
                    </div>
                    <a href="https://cbt.ieltsprepandpractice.com/payment/checkout/computer-based-test" 
                       class="premium-btn" target="_blank">
                        <i class="fas fa-shopping-cart"></i>
                        Purchase IELTS Premium Mock Tests
                    </a>
                </div>

                <div class="row">
                    <h1 class="mb-4">IELTS Academic Practice Test</h1>
                    <p class="mb-4">The IELTS Academic test assesses English language proficiency
                        for higher education and professional purposes.
                        It evaluates reading, writing, listening, and speaking skills.
                        The test is recognized globally and used by universities and employers
                        to determine a candidate's ability to use English in an academic environment. </p>

                    {{-- Ad: browsing test list, before cards --}}
                    <div class="col-12 mb-4">
                        @include('layouts.partials.ad-unit', ['slot' => 'banner'])
                    </div>

                    @foreach ($tests as $test)
                        <div class="col-lg-3 col-md-3 mb-4">
                            <div class="card  shadow-lg">
                                <div class="card-body">
                                    <div class="text-center p-3">
                                        <h5 class="card-title" style="font-size:17px;">{{ $test->name }}</h5>
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <button style="border-radius:30px;" type="button" data-bs-toggle="modal"
                                        data-bs-target="#test-category-{{ $test->id }}"
                                        class="btn btn-outline-primary btn-lg">
                                        <span class="indicator-label">Start Test</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        @include('layouts.partials.models.test-category', ['category' => 'academic'])
                    @endforeach

                    {{-- Ad: after test cards --}}
                    <div class="col-12 mt-2 mb-4">
                        @include('layouts.partials.ad-unit', ['slot' => 'in-content'])
                    </div>

                </div>

                {{-- Ad: bottom of listing page --}}
                @include('layouts.partials.ad-unit', ['slot' => 'multiplex'])

                {{-- FAQ Section --}}
                <div class="row mt-5">
                    <div class="col-12">
                        <h2 class="mb-4" style="font-size:24px;font-weight:800;color:#111827;">Frequently asked Questions (FAQs)</h2>
                        <div class="accordion" id="academicFaq">

                            <div class="accordion-item border-0 mb-2 rounded-3 overflow-hidden shadow-sm">
                                <h2 class="accordion-header"><button class="accordion-button collapsed fw-600" type="button" data-bs-toggle="collapse" data-bs-target="#afaq1">What is the difference between IELTS Academic and General Training?</button></h2>
                                <div id="afaq1" class="accordion-collapse collapse" data-bs-parent="#academicFaq">
                                    <div class="accordion-body text-muted">IELTS Academic is designed for people applying to undergraduate or postgraduate programmes and for professional registration. IELTS General Training is for those seeking secondary education, work experience, or immigration in an English-speaking country. The Listening and Speaking modules are the same in both versions, while Reading and Writing tasks differ.</div>
                                </div>
                            </div>

                            <div class="accordion-item border-0 mb-2 rounded-3 overflow-hidden shadow-sm">
                                <h2 class="accordion-header"><button class="accordion-button collapsed fw-600" type="button" data-bs-toggle="collapse" data-bs-target="#afaq2">What is the format of IELTS Academic Writing?</button></h2>
                                <div id="afaq2" class="accordion-collapse collapse" data-bs-parent="#academicFaq">
                                    <div class="accordion-body text-muted">The IELTS Academic Writing test is 60 minutes long and has two tasks. Task 1 asks you to describe visual information such as a chart, graph, table, or diagram in at least 150 words. Task 2 asks you to write an essay responding to a point of view, argument, or problem in at least 250 words. Task 2 carries more marks than Task 1.</div>
                                </div>
                            </div>

                            <div class="accordion-item border-0 mb-2 rounded-3 overflow-hidden shadow-sm">
                                <h2 class="accordion-header"><button class="accordion-button collapsed fw-600" type="button" data-bs-toggle="collapse" data-bs-target="#afaq3">How is the IELTS Academic Reading different from General Training Reading?</button></h2>
                                <div id="afaq3" class="accordion-collapse collapse" data-bs-parent="#academicFaq">
                                    <div class="accordion-body text-muted">IELTS Academic Reading contains three long texts taken from books, journals, magazines, and newspapers, written for a non-specialist audience on academic topics. IELTS General Training Reading uses texts from advertisements, notices, workplace materials, and everyday documents. Academic texts are generally more complex and require higher-level inference skills.</div>
                                </div>
                            </div>

                            <div class="accordion-item border-0 mb-2 rounded-3 overflow-hidden shadow-sm">
                                <h2 class="accordion-header"><button class="accordion-button collapsed fw-600" type="button" data-bs-toggle="collapse" data-bs-target="#afaq4">What is the best band score achievable in IELTS?</button></h2>
                                <div id="afaq4" class="accordion-collapse collapse" data-bs-parent="#academicFaq">
                                    <div class="accordion-body text-muted">The highest possible IELTS band score is 9.0, which represents an Expert User of the English language. Scores are reported in whole and half bands from 0 to 9. Most universities require a minimum of 6.0 to 7.0, while highly competitive programmes may require 7.5 or above.</div>
                                </div>
                            </div>

                            <div class="accordion-item border-0 mb-2 rounded-3 overflow-hidden shadow-sm">
                                <h2 class="accordion-header"><button class="accordion-button collapsed fw-600" type="button" data-bs-toggle="collapse" data-bs-target="#afaq5">Can IELTS Academic results be used for scholarships?</button></h2>
                                <div id="afaq5" class="accordion-collapse collapse" data-bs-parent="#academicFaq">
                                    <div class="accordion-body text-muted">Yes, many scholarships and funding bodies require proof of English language proficiency, and IELTS Academic is one of the most widely accepted qualifications. Scholarship requirements vary by institution, so always check the specific band score needed for each programme or funding body.</div>
                                </div>
                            </div>

                            <div class="accordion-item border-0 mb-2 rounded-3 overflow-hidden shadow-sm">
                                <h2 class="accordion-header"><button class="accordion-button collapsed fw-600" type="button" data-bs-toggle="collapse" data-bs-target="#afaq6">What are the best resources for IELTS Academic preparation?</button></h2>
                                <div id="afaq6" class="accordion-collapse collapse" data-bs-parent="#academicFaq">
                                    <div class="accordion-body text-muted">The best resources include official Cambridge IELTS practice books, the official IELTS website, and dedicated practice platforms like ieltsprepandpractice.com. Practising with authentic exam-style tests, studying band 7+ model essays, and getting feedback from experienced IELTS tutors are all highly effective preparation strategies.</div>
                                </div>
                            </div>

                            <div class="accordion-item border-0 mb-2 rounded-3 overflow-hidden shadow-sm">
                                <h2 class="accordion-header"><button class="accordion-button collapsed fw-600" type="button" data-bs-toggle="collapse" data-bs-target="#afaq7">Is IELTS Academic required for professional registration?</button></h2>
                                <div id="afaq7" class="accordion-collapse collapse" data-bs-parent="#academicFaq">
                                    <div class="accordion-body text-muted">Yes, many regulatory bodies for professions such as nursing, medicine, and engineering in countries like the UK, Australia, Canada, and New Zealand require a minimum IELTS Academic score for professional registration. The required band score varies by profession and country, so check with the relevant regulatory authority.</div>
                                </div>
                            </div>

                            <div class="accordion-item border-0 mb-2 rounded-3 overflow-hidden shadow-sm">
                                <h2 class="accordion-header"><button class="accordion-button collapsed fw-600" type="button" data-bs-toggle="collapse" data-bs-target="#afaq8">Is IELTS Academic harder than General Training?</button></h2>
                                <div id="afaq8" class="accordion-collapse collapse" data-bs-parent="#academicFaq">
                                    <div class="accordion-body text-muted">The IELTS Academic Reading and Writing tasks are generally considered more demanding than General Training due to the complexity of the texts and tasks involved. However, both versions share the same Listening and Speaking modules. Neither version is objectively harder overall; difficulty depends on your individual strengths and the skills each version tests.</div>
                                </div>
                            </div>

                            <div class="accordion-item border-0 mb-2 rounded-3 overflow-hidden shadow-sm">
                                <h2 class="accordion-header"><button class="accordion-button collapsed fw-600" type="button" data-bs-toggle="collapse" data-bs-target="#afaq9">What are the scoring criteria for IELTS Academic Writing?</button></h2>
                                <div id="afaq9" class="accordion-collapse collapse" data-bs-parent="#academicFaq">
                                    <div class="accordion-body text-muted">IELTS Academic Writing is assessed on four criteria: Task Achievement (how well you address the task), Coherence and Cohesion (how well your writing flows and is organised), Lexical Resource (your range and accuracy of vocabulary), and Grammatical Range and Accuracy (variety and correctness of grammar). Each criterion contributes equally to the Writing band score.</div>
                                </div>
                            </div>

                            <div class="accordion-item border-0 mb-2 rounded-3 overflow-hidden shadow-sm">
                                <h2 class="accordion-header"><button class="accordion-button collapsed fw-600" type="button" data-bs-toggle="collapse" data-bs-target="#afaq10">What is the best strategy for managing passage order in IELTS Academic Reading?</button></h2>
                                <div id="afaq10" class="accordion-collapse collapse" data-bs-parent="#academicFaq">
                                    <div class="accordion-body text-muted">A useful strategy is to start with the passage or question type you find most familiar or straightforward to build confidence and save time. Always skim each passage before reading in detail, and use the questions to guide your reading rather than reading everything first. Time management is critical — allocate roughly 20 minutes per passage.</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- About Start -->
    </div>
    <!-- Testimonial End -->
@endsection

@section('script')
@endsection
