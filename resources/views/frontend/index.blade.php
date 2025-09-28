@extends('layouts.frontend-app')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">

            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('frontend/img/image.jpg') }}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown"> Cambridge IELTS
                                    FREE Mock Test </h1>
                                <p class="fs-5 text-white mb-4 pb-2"> Practice authentic IELTS Listening and Reading Tests
                                    provided by
                                    Cambridge for FREE to achieve success in your IELTS exam. Get expert-desgined, reliable
                                    and comprehensive IELTS resources.
                                </p>
                                {{-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read
                                    More</a> --}}
                                {{-- <a href="{{ route('registeration-request-front-end.create') }}"
                                    class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxxl ">
        <div class="row g-4 justify-content-center" id="prepration-courses">
            <div class="container p-5">
                <div class="row">
                    <h2 class="mb-4">IELTS Preparation Courses</h2>
                    <p class="mb-4">Join our 1:1 Online IELTS Courses that cover the techniques to tackle each of the four
                        modules. Build confidence and achieve your desired band score on the first attempt.</p>

                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card h-100 shadow-lg">
                            <div class="card-body">
                                <div class="text-center p-3">
                                    <h2 class="card-title">IELTS Complete Preparation Course</h2>
                                    <br>
                                    <span class="h4">$40 USD</span>
                                    <br><br>
                                </div>
                                <p class="card-text">Our IELTS Complete Preparation Course ensures that students understand
                                    all the question types of each module and get their desired scores on their first
                                    attempt.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>1 on 1 Sessions
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>Each session of 1 Hour
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>Tips for Listening & Reading
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>15 Mock Speaking Tests
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>IELTS Writing Tasks Evaluation
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>22 Sessions in Total
                                </li>
                            </ul>
                            <div class="card-body text-center">
                                <a class="btn btn-outline-primary btn-lg"
                                    href="{{ route('registeration-request-front-end.create', ['type' => '1', 'plan' => 'complete']) }}"
                                    style="border-radius:30px">JOIN NOW</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card h-100 shadow-lg">
                            <div class="card-body">
                                <div class="text-center p-3">
                                    <h2 class="card-title">IELTS Writing Course</h2>
                                    <br>
                                    <span class="h4">$30 USD</span>
                                    <br><br>
                                </div>
                                <p class="card-text">1 Month IELTS Writing Course tailored for students aiming for a 6.5 or
                                    higher score in IELTS for academic or immigration purposes.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>1 on 1 Sessions
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>Evaluation of Writing Task 1 & 2
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>Learn Advance Grammatical Structures & Vocabulary
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>Improvement in Task Response
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>Write each task using correct format
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>Duration: 1 Month
                                </li>
                            </ul>
                            <div class="card-body text-center">
                                <a class="btn btn-outline-primary btn-lg"
                                    href="{{ route('registeration-request-front-end.create', ['type' => '1', 'plan' => 'writing']) }}"
                                    style="border-radius:30px">JOIN NOW</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card h-100 shadow-lg">
                            <div class="card-body">
                                <div class="text-center p-3">
                                    <h2 class="card-title">IELTS Speaking Course</h2>
                                    <br>
                                    <span class="h4">$30 USD</span>
                                    <br><br>
                                </div>
                                <p class="card-text">Take our IELTS Speaking Course if you struggle to speak fluently and
                                    make mistakes. Our course helps students to improve their fluency, grammar, and
                                    vocabulary.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>1 on 1 Sessions
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>2 Mock Speaking Tests Everyday
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>Improvement in Fluency
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>Learn the usage of cohesive devices
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>Practice using different idioms for high band scores
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>Duration: 1 Month
                                </li>
                            </ul>
                            <div class="card-body text-center">
                                <a class="btn btn-outline-primary btn-lg"
                                    href="{{ route('registeration-request-front-end.create', ['type' => '1', 'plan' => 'speaking']) }}"
                                    style="border-radius:30px">JOIN NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

        <div class="row g-4 justify-content-center" id="prepration-material">
            <div class="container p-5">
                <div class="row">
                    <h3 class="mb-4">IELTS Preparation Material</h3>
                    <p class="mb-4">Access FREE IELTS resources, including Cambridge IELTS Books PDF, vocabulary, and
                        grammar notes. Choose flexible online or offline IELTS preparation with IELTS computer-based
                        practice tests, interactive lessons, and study materials for listening, reading, writing, and
                        speaking.</p>

                    <div class="col-lg-6 col-md-12 mb-4">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="text-center p-3">
                                    <h3 class="card-title">Free Access</h3>
                                    <br>
                                    <span class="h4">$0</span>
                                    <br><br>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>Cambridge IELTS Books
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                        <path
                                            d="M4.293 4.293a1 1 0 0 1 1.414 0L8 6.586l2.293-2.293a1 1 0 0 1 1.414 1.414L9.414 8l2.293 2.293a1 1 0 0 1-1.414 1.414L8 9.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L6.586 8 4.293 5.707a1 1 0 0 1 0-1.414z" />
                                    </svg>Grammar & Vocabulary books
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                        <path
                                            d="M4.293 4.293a1 1 0 0 1 1.414 0L8 6.586l2.293-2.293a1 1 0 0 1 1.414 1.414L9.414 8l2.293 2.293a1 1 0 0 1-1.414 1.414L8 9.414l-2.293 2.293a1 1 0 0 1-1.414-1.414L6.586 8 4.293 5.707a1 1 0 0 1 0-1.414z" />
                                    </svg>Band 7 Essays
                                </li>
                            </ul>
                            <div class="card-body text-center">
                                <a class="btn btn-outline-primary btn-lg" target="_blank"
                                    href="https://drive.google.com/drive/folders/1a9-l7xNPM4oX14sN78UsSqgEpJrjXulS?usp=sharing"
                                    style="border-radius:30px">GET ACCESS</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 mb-4">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="text-center p-3">
                                    <h3 class="card-title">Paid Access</h3>
                                    <br>
                                    <span class="h4">$5</span>
                                    <br><br>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>Cambridge IELTS Books
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>Book for Speaking & Writing
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>Band 7 Essays
                                </li>
                            </ul>
                            <div class="card-body text-center">
                                <a class="btn btn-outline-primary btn-lg"
                                    href="{{ route('registeration-request-front-end.create', ['type' => '2', 'plan' => 'paid']) }}"
                                    style="border-radius:30px">BUY NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 justify-content-center" id="ielts-mock-test">
            <div class="container p-5">
                <div class="row">
                    <h4 class="mb-4">IELTS Computer Based Practice Test</h4>
                    <p class="mb-4">Practice FREE Cambridge IELTS Listening & Reading Tests online. Experience real
                        Computer-Based IELTS simulation with instant results, band score predictions, and detailed
                        evaluations. Full-length IELTS Academic & General Training Mock Tests available for Listening and
                        Reading — with IELTS Writing Mock Tests coming soon.</p>

                    <div class="col-lg-6 col-md-12 mb-4">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="text-center p-3">
                                    <h4 class="card-title">Free Access</h4>
                                    <br>
                                    <span class="h4">$0</span>
                                    <br><br>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>Access for Unlimited Time
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>8 Listening and Reading Mock Tests
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>Expert Feedback for both Modules
                                </li>
                            </ul>
                            <div class="card-body text-center">
                                <button style="border-radius:30px" type="button" data-bs-toggle="modal"
                                    data-bs-target="#test-type" class="btn btn-outline-primary btn-lg">
                                    <span class="indicator-label">START PRACTICING</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 mb-4">
                        <div class="card shadow-lg">
                            <div class="card-body">
                                <div class="text-center p-3">
                                    <h4 class="card-title">Paid Access</h4>
                                    <br>
                                    <span class="h4">$5</span>
                                    <br><br>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>Access for 2 Months
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>28 Listening and Reading Mock Test
                                </li>
                                <li class="list-group-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>Expert Feedback for both Modules
                                </li>
                            </ul>
                            <div class="card-body text-center">
                                <a class="btn btn-outline-primary btn-lg" href="{{ route('show.loginForm') }}"
                                    style="border-radius:30px">BUY NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-xxl py-5 wow fadeInUp" id="prepration-testimonial" data-wow-delay="0.1s">
            <div class="container">
                @php
                    $testimonials = [
                        (object) [
                            'id' => 1,
                            'name' => 'Ziana',
                            'country' => 'Malaysia',
                            'avatar' => 'ziana.jpg',
                            'certificate' => 'ziana-report-card.jpeg',
                            'quote' =>
                                'With IPP\'s IELTS preparation course I managed to get 6.5 bands overall and enabled me to start my graduate studies in Malaysia.',
                            'alt' => 'IELTS TRF showing 6.5 overall score',
                        ],
                        (object) [
                            'id' => 2,
                            'name' => 'Raheem',
                            'country' => 'Pakistan',
                            'avatar' => 'raheem.jpg',
                            'certificate' => 'raheem-report.jpeg',
                            'quote' =>
                                'IPP helped me to get 7.5 Bands in IELTS. I would recommend other students to take IELTS Preparation classes from this platform as well.',
                            'alt' => 'IELTS TRF showing 7.5 bands score',
                        ],
                        (object) [
                            'id' => 3,
                            'name' => 'Shamma',
                            'country' => 'Bangladesh',
                            'avatar' => 'shamma.jpg',
                            'certificate' => 'shamma-report.jpeg',
                            'quote' =>
                                'I took IELTS Preparation classes from IPP and managed to get 7.5 bands in IELTS on my first attempt. IPP\'s IELTS Preparation is highly recommended.',
                            'alt' => 'IELTS TRF showing 7.5 bands score',
                        ],
                        (object) [
                            'id' => 4,
                            'name' => 'Irene',
                            'country' => 'Italy',
                            'avatar' => 'irine.jpg',
                            'certificate' => 'irine-report.jpeg',
                            'quote' =>
                                'It would have been impossible to increase my speaking score from 5.5 to 6.5 bands without taking IELTS Speaking Classes from IPP.',
                            'alt' => 'IELTS TRF showing improved speaking score',
                        ],
                        (object) [
                            'id' => 5,
                            'name' => 'Hudaib',
                            'country' => 'Jordan',
                            'avatar' => 'hudaib.jpg',
                            'certificate' => 'hudaib-report.jpeg',
                            'quote' =>
                                'I am satisfied with the course offered by this platform, as it helped me to get the desired score in just 1 month and now I\'m pursing my dreams in Spain.',
                            'alt' => 'IELTS TRF showing desired score achievement',
                        ],
                    ];
                @endphp

                <div class="owl-carousel testimonial-carousel">
                    @foreach ($testimonials as $testimonial)
                        <div class="testimonial-slide">
                            <div class="row align-items-center">
                                <!-- Left Side - Testimonial -->
                                <div class="col-lg-6 col-md-12 mb-4">
                                    <div class="card  h-100" style="background-color: #f8f9fa; border-radius: 20px;">
                                        <div class="card-body p-4">
                                            <div class="d-flex align-items-start mb-4">
                                                <img src="{{ asset('frontend/testimonial/' . $testimonial->avatar) }}"
                                                    alt="Client {{ $testimonial->name }}" class="rounded-circle me-3"
                                                    style="width: 80px; height: 80px; object-fit: cover;">
                                                <div class="flex-grow-1">
                                                    <button class="btn p-0 border-0 bg-transparent" type="button"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#testimonial-image-{{ $testimonial->id }}">
                                                        <img src="{{ asset('frontend/testimonial/' . $testimonial->certificate) }}"
                                                            alt="{{ $testimonial->alt }}" class="img-fluid rounded "
                                                            style="max-height: 400px; cursor: pointer;">
                                                    </button>
                                                </div>
                                            </div>

                                            <p class="text-muted mb-3" style="font-size: 0.95rem; line-height: 1.6;">
                                                {{ $testimonial->quote }}
                                            </p>

                                            <div class="mb-3">
                                                <div class="text-warning mb-2">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                            </div>

                                            <div
                                                style="height: 3px; width: 60px; background-color: #17a2b8; margin-bottom: 15px;">
                                            </div>

                                            <h5 class="fw-bold mb-1">{{ $testimonial->name }}</h5>
                                            <small class="text-muted">{{ $testimonial->country }}</small>
                                        </div>
                                    </div>
                                </div>

                                <!-- Right Side - Static Content -->
                                <div class="col-lg-6 col-md-12 mb-4">
                                    <div class="h-100 d-flex flex-column justify-content-center ps-lg-4">
                                        <h2 class="fw-bold mb-4" style="color: #2c3e50;">Client Testimonials and Feedback
                                        </h2>

                                        <p class="text-muted mb-4" style="font-size: 1.1rem; line-height: 1.7;">
                                            Master the IELTS exam with confidence! Our team of experts is dedicated to
                                            providing personalized guidance and top-notch resources to ensure you achieve
                                            your desired band score. With our courses, materials, and mock tests, success is
                                            just a step away.
                                        </p>

                                        <div class="mb-4">
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="rounded-circle d-flex align-items-center justify-content-center me-3"
                                                    style="width: 50px; height: 50px; background-color: #17a2b8;">
                                                    <i class="fas fa-phone text-white"></i>
                                                </div>
                                                <div>
                                                    <small class="text-muted d-block">CUSTOMER SERVICES</small>
                                                    <a href="tel:+923154315382" class="text-decoration-none"
                                                        style="color: #17a2b8; font-size: 1.1rem;">
                                                        +92 315 431 5382
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center mb-4">
                                                <div class="rounded-circle d-flex align-items-center justify-content-center me-3"
                                                    style="width: 50px; height: 50px; background-color: #17a2b8;">
                                                    <i class="fas fa-envelope text-white"></i>
                                                </div>
                                                <div>
                                                    <small class="text-muted d-block">EMAIL ADDRESS</small>
                                                    <a href="mailto:info@ieltsprepandpractice.com"
                                                        class="text-decoration-none"
                                                        style="color: #17a2b8; font-size: 1.1rem;">
                                                        info@ieltsprepandpractice.com
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <a href="#" class="btn btn-lg text-white fw-bold"
                                                style="background-color: #17a2b8; border-radius: 25px; padding: 12px 40px; border: none;">
                                                OUR SCORES
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Modals for Certificate Images -->
        @foreach ($testimonials as $testimonial)
            <div class="modal fade" id="testimonial-image-{{ $testimonial->id }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" style="max-width:800px;">
                    <div class="modal-content">
                        <div class="modal-header border-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-center p-0">
                            <img src="{{ asset('frontend/testimonial/' . $testimonial->certificate) }}"
                                alt="{{ $testimonial->alt }}" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- Testimonial End -->
    @endsection

    @section('script')
    @endsection
