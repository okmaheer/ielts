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
            </div>
        </div>
        <!-- About Start -->
    </div>
    <!-- Testimonial End -->
@endsection

@section('script')
@endsection
