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
                    <h4 class="mb-4"> IELTS Mock Test </h4>
                    <p class="mb-4">Practice Cambridge IELTS Listening & Reading Tests for FREE. Through our interface,
                        you can learn all
                        the features of Computer-Based IELTS Test. </p>

                    <div class="col-lg-6 col-md-12 mb-4">
                        <div class="card  shadow-lg">
                            <div class="card-body">
                                <div class="text-center p-3">
                                    <h4 class="card-title">Free Access</h4>

                                </div>

                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>Access for Unlimited Time
                                </li>
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>8 Listening and Reading Mock Tests </li>

                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>Expert Feedback for both Modules
                                </li>

                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>Free of cost

                                </li>

                            </ul>
                            <div class="card-body text-center">
                                <button style="border-radius:30px" type="button" data-bs-toggle="modal"
                                    data-bs-target="#test-type" class="btn btn-outline-primary btn-lg">
                                    <span class="indicator-label">Start Practicing</span>

                                </button>

                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6 col-md-12 mb-4">
                        <div class="card  shadow-lg">
                            <div class="card-body">
                                <div class="text-center p-3">
                                    <h4 class="card-title">Paid Access</h4>

                                </div>

                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>Access for 2 Months </li>
                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>28 Listening and Reading Mock Test
                                </li>

                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg>Expert Feedback for both Modules
                                </li>




                                <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg> <span class="h4"> $5 USD</span>


                                </li>
                            </ul>
                            <div class="card-body text-center">
                                <a class="btn btn-outline-primary btn-lg" href="{{ route('show.loginForm') }}"
                                    style="border-radius:30px">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" id="prepration-testimonial" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title bg-white text-center text-primary px-3">Testimonial</h5>

                </div>
                @php
                    $testimonials = [
                        (object) [
                            'id' => 1,
                            'name' => 'Saba',
                            'score' => '7.0 bands',
                            'image' => 't1.jpg',
                            'country' => 'Pakistan',
                            'alt' => 'Image of IELTS TRF of a student who got 8 in IELTS Listening',
                        ],
                        // (object) ['id' => 2, 'name' => 'Nour el huda', 'score' => '6.5 bands', 'image' => 't2.jpg', 'country' => 'Jordan'],
                        (object) [
                            'id' => 3,
                            'name' => 'Mudassir',
                            'score' => '6.5 bands',
                            'image' => 't3.jpg',
                            'country' => 'Pakistan',
                            'alt' => 'Image of IELTS TRF of a student who got 6.5 overall',
                        ],
                        // (object) ['id' => 4, 'name' => 'Majd Faris', 'score' => '6.5 bands', 'image' => 't4.jpg', 'country' => 'Jordan'],
                        // (object) ['id' => 5, 'name' => 'Abdullah', 'score' => '6.5 bands', 'image' => 't5.jpg', 'country' => 'Bahrain'],
                        // (object) ['id' => 6, 'name' => 'Hafsa', 'score' => '7.0 bands', 'image' => 't6.jpg', 'country' => 'Pakistan'],
                        (object) [
                            'id' => 7,
                            'name' => 'Shahbaz',
                            'score' => '7.0 bands',
                            'image' => 't7.jpg',
                            'country' => 'Pakistan',
                            'alt' => 'Image of IELTS TRF of a student who got 6.5 overall',
                        ],
                        (object) [
                            'id' => 8,
                            'name' => 'Lamisa',
                            'score' => '7.5 bands',
                            'image' => 't8.jpg',
                            'country' => 'Bangladesh',
                            'alt' => 'Image of IELTS TRF of a student who got 8 in IELTS Reading',
                        ],
                        (object) [
                            'id' => 9,
                            'name' => 'Kanza',
                            'score' => '7.5 bands',
                            'image' => 't9.jpg',
                            'country' => 'Pakistan',
                            'alt' => 'Image of IELTS TRF of a student who got 8.5 in IELTS Reading',
                        ],
                        (object) [
                            'id' => 10,
                            'name' => 'Ramya',
                            'score' => '7 bands',
                            'image' => 't10.jpg',
                            'country' => 'India',
                            'alt' => 'Image of IELTS TRF of a student who got 7.0 overall',
                        ],
                        (object) [
                            'id' => 11,
                            'name' => 'Maryeni',
                            'score' => '7.5 bands',
                            'image' => 't11.jpg',
                            'country' => 'Ghana',
                            'alt' => 'Image of IELTS TRF of a student who got 8 in IELTS Speaking',
                        ],
                        (object) [
                            'id' => 12,
                            'name' => 'Renise',
                            'score' => '6.5 bands',
                            'image' => 't12.jpg',
                            'country' => 'Cameroon',
                            'alt' => 'Image of IELTS TRF of a student who got 6.5 overall',
                        ],
                    ];
                @endphp
                <div class="owl-carousel testimonial-carousel position-relative">
                    @foreach ($testimonials as $testimonial)
                        <div class="testimonial-item text-center">
                            <button class="mb-1" type="button" data-bs-toggle="modal"
                                data-bs-target="#testimonial-image-{{ $testimonial->id }}">
                                <img class="border  p-2 mx-auto mb-3"
                                    src="{{ asset('frontend/testimonial/' . $testimonial->image) }}"
                                    style="width: 150px; height: 200px;" />
                            </button>

                            <h5 class="mb-0">{{ $testimonial->name }}</h5>
                            <span>{{ $testimonial->score }}</span>
                            <p>{{ $testimonial->country }}</p>


                        </div>
                    @endforeach



                </div>
            </div>
        </div>
        @foreach ($testimonials as $testimonial)
            @include('layouts.partials.models.testimonial-image')
        @endforeach
        <!-- Testimonial End -->
    @endsection

    @section('script')
    @endsection
