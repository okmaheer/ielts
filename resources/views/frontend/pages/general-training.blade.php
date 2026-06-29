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
                            <span>30 General Training Writing Tests</span>
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
                    <h1 class="mb-4">IELTS General Training Practice Test</h1>
                    <p class="mb-4">The IELTS General Training test measures English language proficiency for practical,
                        everyday contexts. It assesses reading, writing, listening, and speaking skills.
                        The test is often required for immigration, work, or secondary education purposes.
                        It focuses on basic survival skills in broad social and workplace settings. </p>

                    {{-- Ad: browsing test list, before cards --}}
                    <div class="col-12 mb-4">
                        @include('layouts.partials.ad-unit', ['slot' => 'banner'])
                    </div>

                    @foreach ($tests as $test)
                        <div class="col-lg-3 col-md-3 mb-4">
                            <div class="card  shadow-lg">
                                <div class="card-body">
                                    <div class="text-center p-3">
                                        <h5 style="font-size:17px;" class="card-title">{{ $test->name }}</h5>
                                    </div>
                                </div>
                                <div class="card-body text-center">
                                    <button style="border-radius:30px" type="button" data-bs-toggle="modal"
                                        data-bs-target="#test-category-{{ $test->id }}"
                                        class="btn btn-outline-primary btn-lg">
                                        <span class="indicator-label">Start Test</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        @include('layouts.partials.models.test-category', ['category' => 'generalTraining'])
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
                        <div class="accordion" id="gtFaq">

                            <div class="accordion-item border-0 mb-2 rounded-3 overflow-hidden shadow-sm">
                                <h2 class="accordion-header"><button class="accordion-button collapsed fw-600" type="button" data-bs-toggle="collapse" data-bs-target="#gfaq1">Why is IELTS General Training considered easier than Academic?</button></h2>
                                <div id="gfaq1" class="accordion-collapse collapse" data-bs-parent="#gtFaq">
                                    <div class="accordion-body text-muted">IELTS General Training is often considered more accessible because the Reading texts focus on practical, everyday topics rather than complex academic content. The Writing Task 1 is a letter rather than a data description. However, the Listening and Speaking modules are identical to Academic, and the same band scoring applies — so preparation is still very important.</div>
                                </div>
                            </div>

                            <div class="accordion-item border-0 mb-2 rounded-3 overflow-hidden shadow-sm">
                                <h2 class="accordion-header"><button class="accordion-button collapsed fw-600" type="button" data-bs-toggle="collapse" data-bs-target="#gfaq2">What is the format of the IELTS General Training test?</button></h2>
                                <div id="gfaq2" class="accordion-collapse collapse" data-bs-parent="#gtFaq">
                                    <div class="accordion-body text-muted">The IELTS General Training test has four modules: Listening (approximately 30 minutes, 40 questions), Reading (60 minutes, 40 questions), Writing (60 minutes, 2 tasks), and Speaking (11–14 minutes, 3 parts). All modules are completed on the same day except Speaking, which may be scheduled up to a week before or after the other modules.</div>
                                </div>
                            </div>

                            <div class="accordion-item border-0 mb-2 rounded-3 overflow-hidden shadow-sm">
                                <h2 class="accordion-header"><button class="accordion-button collapsed fw-600" type="button" data-bs-toggle="collapse" data-bs-target="#gfaq3">How difficult is the Reading section in IELTS General Training?</button></h2>
                                <div id="gfaq3" class="accordion-collapse collapse" data-bs-parent="#gtFaq">
                                    <div class="accordion-body text-muted">The GT Reading section is divided into three sections. Sections 1 and 2 contain practical, everyday texts such as advertisements and workplace documents, which are generally straightforward. Section 3 contains a longer, more complex text on a topic of general interest. While sections 1 and 2 are manageable, Section 3 can be challenging, particularly for lower-band-score candidates.</div>
                                </div>
                            </div>

                            <div class="accordion-item border-0 mb-2 rounded-3 overflow-hidden shadow-sm">
                                <h2 class="accordion-header"><button class="accordion-button collapsed fw-600" type="button" data-bs-toggle="collapse" data-bs-target="#gfaq4">Where is IELTS General Training accepted?</button></h2>
                                <div id="gfaq4" class="accordion-collapse collapse" data-bs-parent="#gtFaq">
                                    <div class="accordion-body text-muted">IELTS General Training is primarily accepted for immigration applications to countries such as Canada, Australia, the UK, and New Zealand. It is also accepted by employers for skilled worker visas and by some secondary education institutions. Most universities and professional registration bodies require IELTS Academic rather than General Training.</div>
                                </div>
                            </div>

                            <div class="accordion-item border-0 mb-2 rounded-3 overflow-hidden shadow-sm">
                                <h2 class="accordion-header"><button class="accordion-button collapsed fw-600" type="button" data-bs-toggle="collapse" data-bs-target="#gfaq5">What are the writing task types in IELTS General Training?</button></h2>
                                <div id="gfaq5" class="accordion-collapse collapse" data-bs-parent="#gtFaq">
                                    <div class="accordion-body text-muted">In IELTS General Training Writing, Task 1 requires you to write a letter of at least 150 words. The letter can be formal, semi-formal, or informal depending on the situation described in the question. Task 2 requires you to write an essay of at least 250 words responding to a point of view, argument, or problem — this task is the same format as in the Academic test.</div>
                                </div>
                            </div>

                            <div class="accordion-item border-0 mb-2 rounded-3 overflow-hidden shadow-sm">
                                <h2 class="accordion-header"><button class="accordion-button collapsed fw-600" type="button" data-bs-toggle="collapse" data-bs-target="#gfaq6">Do I need Band 6 in IELTS GT for a Canadian Post-Graduate Work Permit (PGWP)?</button></h2>
                                <div id="gfaq6" class="accordion-collapse collapse" data-bs-parent="#gtFaq">
                                    <div class="accordion-body text-muted">Yes, for the Canadian Post-Graduate Work Permit (PGWP), applicants typically need to demonstrate CLB 7 or higher in all four skills, which generally corresponds to a minimum IELTS score of 6.0 in each band. However, requirements can vary, so it is essential to check the latest guidelines from Immigration, Refugees and Citizenship Canada (IRCC) before applying.</div>
                                </div>
                            </div>

                            <div class="accordion-item border-0 mb-2 rounded-3 overflow-hidden shadow-sm">
                                <h2 class="accordion-header"><button class="accordion-button collapsed fw-600" type="button" data-bs-toggle="collapse" data-bs-target="#gfaq7">What are the common question types in IELTS General Training Reading?</button></h2>
                                <div id="gfaq7" class="accordion-collapse collapse" data-bs-parent="#gtFaq">
                                    <div class="accordion-body text-muted">Common question types include Multiple Choice, Short Answer, Sentence Completion, Summary Completion, True/False/Not Given, Yes/No/Not Given, Matching Information, Matching Headings, and Matching Features. Different question types test different reading skills, so practising each type is important for achieving a high band score.</div>
                                </div>
                            </div>

                            <div class="accordion-item border-0 mb-2 rounded-3 overflow-hidden shadow-sm">
                                <h2 class="accordion-header"><button class="accordion-button collapsed fw-600" type="button" data-bs-toggle="collapse" data-bs-target="#gfaq8">Should I follow the question order when answering IELTS Reading?</button></h2>
                                <div id="gfaq8" class="accordion-collapse collapse" data-bs-parent="#gtFaq">
                                    <div class="accordion-body text-muted">For most question types in IELTS Reading, answers appear in the same order as the text, so following the question order is generally an effective strategy. However, for Matching Headings and Matching Features questions, answers do not necessarily appear in order. Always read the instructions carefully and adapt your strategy based on the question type.</div>
                                </div>
                            </div>

                            <div class="accordion-item border-0 mb-2 rounded-3 overflow-hidden shadow-sm">
                                <h2 class="accordion-header"><button class="accordion-button collapsed fw-600" type="button" data-bs-toggle="collapse" data-bs-target="#gfaq9">What types of letters can appear in IELTS GT Writing Task 1?</button></h2>
                                <div id="gfaq9" class="accordion-collapse collapse" data-bs-parent="#gtFaq">
                                    <div class="accordion-body text-muted">IELTS GT Writing Task 1 can require a formal letter (e.g. a complaint to a company or application to an organisation), a semi-formal letter (e.g. a letter to a neighbour or landlord), or an informal letter (e.g. a letter to a friend or family member). The tone, opening, and closing style must match the letter type specified in the task. Understanding the differences is essential to scoring well.</div>
                                </div>
                            </div>

                            <div class="accordion-item border-0 mb-2 rounded-3 overflow-hidden shadow-sm">
                                <h2 class="accordion-header"><button class="accordion-button collapsed fw-600" type="button" data-bs-toggle="collapse" data-bs-target="#gfaq10">Can I use IELTS Academic instead of General Training for university admission?</button></h2>
                                <div id="gfaq10" class="accordion-collapse collapse" data-bs-parent="#gtFaq">
                                    <div class="accordion-body text-muted">Yes, universities almost always require IELTS Academic for undergraduate and postgraduate admission. IELTS General Training is not accepted for university admission in most cases. If you are planning to apply to a university, you should take the IELTS Academic test. General Training is primarily used for immigration, work, and secondary school purposes.</div>
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
