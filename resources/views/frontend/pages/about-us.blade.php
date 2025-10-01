@extends('layouts.frontend-app')
@section('css')
    <style>
        /* Our Services Section */
        .services-section {
            padding: 80px 0;
            background: #fff;
        }

        .services-section .section-label {
            color: #17a2b8;
            font-size: 0.9rem;
            font-weight: 600;
            letter-spacing: 2px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .services-section .section-heading {
            font-size: 2.5rem;
            font-weight: 700;
            color: #2d2d2d;
            margin-bottom: 25px;
        }

        .services-section .section-description {
            font-size: 1.1rem;
            color: #666;
            line-height: 1.8;
            margin-bottom: 50px;
            max-width: 600px;
        }

        .service-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 35px;
            padding: 10px;
            border-radius: 10px;
        }

        .service-icon {
            width: 70px;
            height: 70px;
            background: #7dd3de;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            margin-right: 25px;
        }

        .service-icon i {
            font-size: 1.8rem;
            color: white;
        }

        .service-content h4 {
            font-size: 1.3rem;
            font-weight: 700;
            color: #2d2d2d;
            margin-bottom: 10px;
        }

        .service-content p {
            font-size: 1rem;
            color: #666;
            line-height: 1.6;
            margin: 0;
        }

        .services-image-wrapper {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .services-image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .experience-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 180px;
            height: 180px;
            background: white;
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .experience-badge .number {
            font-size: 4rem;
            font-weight: 700;
            color: #7dd3de;
            line-height: 1;
        }

        .experience-badge .text {
            font-size: 0.9rem;
            font-weight: 600;
            color: #2d2d2d;
            text-align: center;
            margin-top: 10px;
            line-height: 1.3;
        }

        /* Our Values Section */
        .values-section {
            padding: 100px 0;
            background-image: url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&w=1200');
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .values-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6);
        }

        .values-section .container {
            position: relative;
            z-index: 1;
        }

        .values-section .section-label {
            color: #7dd3de;
            font-size: 0.85rem;
            font-weight: 600;
            letter-spacing: 2px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .values-section .section-heading {
            font-size: 2.8rem;
            font-weight: 700;
            color: white;
            margin-bottom: 20px;
            line-height: 1.3;
        }

        .values-section .section-description {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.8;
            margin-bottom: 60px;
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
        }

        .value-card {
            background: white;
            border-radius: 15px;
            padding: 50px 35px;
            text-align: center;
            height: 100%;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .value-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        }

        .value-card.featured {
            background: #7dd3de;
        }

        .value-card.featured .value-card-title,
        .value-card.featured .value-card-text {
            color: white;
        }

        .value-card-icon {
            width: 90px;
            height: 90px;
            background: #17a2b8;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
        }

        .value-card.featured .value-card-icon {
            background: white;
        }

        .value-card-icon i {
            font-size: 2.5rem;
            color: white;
        }

        .value-card.featured .value-card-icon i {
            color: #17a2b8;
        }

        .value-card-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #2d2d2d;
            margin-bottom: 15px;
        }

        .value-card-text {
            font-size: 1rem;
            color: #666;
            line-height: 1.7;
            margin: 0;
        }

        /* Responsive */
        @media (max-width: 991px) {
            .services-section .section-heading {
                font-size: 2rem;
            }

            .values-section .section-heading {
                font-size: 2.2rem;
            }

            .experience-badge {
                width: 150px;
                height: 150px;
            }

            .experience-badge .number {
                font-size: 3rem;
            }

            .services-image-wrapper {
                margin-top: 40px;
            }

            .value-card {
                margin-bottom: 30px;
            }
        }

        @media (max-width: 767px) {
            .services-section .section-heading {
                font-size: 1.8rem;
            }

            .values-section .section-heading {
                font-size: 1.8rem;
            }

            .service-item {
                margin-bottom: 30px;
            }

            .service-icon {
                width: 60px;
                height: 60px;
                margin-right: 20px;
            }

            .service-icon i {
                font-size: 1.5rem;
            }

            .experience-badge {
                width: 120px;
                height: 120px;
                top: 10px;
                right: 10px;
            }

            .experience-badge .number {
                font-size: 2.5rem;
            }

            .experience-badge .text {
                font-size: 0.75rem;
            }
        }
    </style>
@endsection

@section('content')
    <!-- Our Services Section Start -->
    <div class="services-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <p class="section-label">WHO WE ARE</p>
                    <h2 class="section-heading">Our Services</h2>
                    <p class="section-description">
                        We provide expert IELTS preparation to help you reach your target band. Our Expert tutors have
                        taught more than a thousand students with a success rate of 90%.
                    </p>

                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div class="service-content">
                            <h4>IELTS Preparation Courses</h4>
                            <p>Tailored courses to help you excel in all sections of the IELTS test.</p>
                        </div>
                    </div>

                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <div class="service-content">
                            <h4>IELTS Preparation Material</h4>
                            <p>Comprehensive study resources for effective preparation.</p>
                        </div>
                    </div>

                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <div class="service-content">
                            <h4>IELTS Computer Based Practice Test</h4>
                            <p>Real exam simulations to assess your readiness.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="services-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?ixlib=rb-4.0.3&w=800"
                            alt="IELTS Study Materials">
                        <div class="experience-badge">
                            <span class="number">5+</span>
                            <span class="text">YEARS OF EXPERIENCE</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Services Section End -->

    <!-- Our Values Section Start -->
    <div class="values-section">
        <div class="container">
            <div class="text-center">
                <p class="section-label">OUR VALUE</p>
                <h2 class="section-heading">Because Your Future Deserves<br>the Best</h2>
                <p class="section-description">
                    We value excellence, integrity, and personalized learning, empowering students to achieve IELTS success
                    with confidence and clarity.
                </p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="value-card">
                        <div class="value-card-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3 class="value-card-title">Our Vision</h3>
                        <p class="value-card-text">
                            Our vision is to be the most trusted partner in IELTS preparation, empowering learners worldwide
                            to achieve their dreams and open doors to global opportunities.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="value-card featured">
                        <div class="value-card-icon">
                            <i class="fas fa-crosshairs"></i>
                        </div>
                        <h3 class="value-card-title">Our Mission</h3>
                        <p class="value-card-text">
                            To deliver expert, personalized IELTS training that equips every learner with the skills,
                            strategies, and confidence to achieve their target band score.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="value-card">
                        <div class="value-card-icon">
                            <i class="fas fa-award"></i>
                        </div>
                        <h3 class="value-card-title">Our Motto</h3>
                        <p class="value-card-text">
                            Guiding every learner with dedication and expertise, we inspire confidence and success in IELTS
                            preparation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Values Section End -->
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

        <div class="row align-items-center">
            <!-- Left Side - Testimonials Carousel -->
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="owl-carousel testimonial-carousel">
                    @foreach ($testimonials as $testimonial)
                        <div class="testimonial-slide">
                            <div class="card h-100" style="background-color: #f8f9fa; border-radius: 20px;">
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
                    @endforeach
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
</div>

<!-- Modals for Certificate Images -->
@foreach ($testimonials as $testimonial)
    <div class="modal fade" id="testimonial-image-{{ $testimonial->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width:800px;">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center p-0">
                    <img src="{{ asset('frontend/testimonial/' . $testimonial->certificate) }}"
                        alt="{{ $testimonial->alt }}" class="img-fluid w-100">
                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
