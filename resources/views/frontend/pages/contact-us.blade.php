@extends('layouts.frontend-app')
@section('css')
    <style>
        .wrapper {
            max-width: 760px;
            margin: 50px auto;
            padding: 40px 20px
        }

        .wrapper .search {
            border: 1px solid #c8c8c8;
            overflow: hidden;
            border-radius: 25px;
            padding: 0 10px;
            margin: 15px 0 20px;
            transition: all 0.3s
        }

        .wrapper .search:hover,
        .wrapper .search:focus-within {
            border: 1px solid transparent;
            box-shadow: 2px 5px 8px #1f1f1f10, 0px -4px 5px #1f1f1f10
        }

        .wrapper .search .form-control {
            box-shadow: none;
            outline: none;
            border: none
        }

        .wrapper .search .form-control:focus::placeholder {
            opacity: 0
        }

        .wrapper .accordion-button {
            font-size: 0.9rem;
            font-weight: 500
        }

        .wrapper .accordion-button:hover {
            background-color: #f8f8f8
        }

        .wrapper .accordion-button:focus {
            box-shadow: none
        }

        .wrapper .accordion-button::after {
            background-size: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #c8c8c8;
            background-position: center center;
            border-radius: 50%
        }

        .wrapper .accordion-button:not(.collapsed) {
            color: #000;
            background-color: #f7f7f7;
            font-weight: 600;
            border-bottom: 1px solid #ddd !important
        }

        .accordion-button:not(.collapsed)::after {
            border-color: #1E88E5
        }

        .wrapper .accordion-button.collapsed {
            border-bottom: 1px solid #ddd !important
        }

        .wrapper .accordion-collapse.show {
            border-bottom: 1px solid #ddd !important
        }

        .wrapper .accordion-collapse {
            background-color: #eaf3fa
        }

        .wrapper .accordion-collapse ul li {
            line-height: 2rem;
            width: 100%;
            padding: 0.5rem 1.3rem
        }

        .wrapper .accordion-collapse ul li:hover {
            background-color: #c9e7ff
        }

        .wrapper .accordion-collapse ul li a {
            text-decoration: none;
            color: #333;
            font-size: 0.85rem;
            font-weight: 400;
            display: block
        }

        .wrapper .accordion-collapse ul li:hover a {
            color: #222
        }

        /* Contact Section Styles */
        .contact-section {
            background-color: #e8e8e8;
            padding: 80px 0;
        }

        .contact-section .section-title {
            color: #17a2b8;
            font-size: 0.9rem;
            font-weight: 600;
            letter-spacing: 2px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .contact-section .main-heading {
            font-size: 2.5rem;
            font-weight: 700;
            color: #2d2d2d;
            margin-bottom: 60px;
            line-height: 1.3;
        }

        .contact-card {
            background: white;
            border-radius: 15px;
            padding: 50px 30px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }

        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12);
        }

        .contact-icon {
            width: 80px;
            height: 80px;
            background: #17a2b8;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
        }

        .contact-icon i {
            font-size: 2rem;
            color: white;
        }

        .contact-card-title {
            color: #17a2b8;
            font-size: 0.95rem;
            font-weight: 600;
            letter-spacing: 1.5px;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .contact-card-text {
            color: #2d2d2d;
            font-size: 1.1rem;
            font-weight: 500;
            margin: 0;
        }

        .contact-card-text a {
            color: #2d2d2d;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .contact-card-text a:hover {
            color: #17a2b8;
        }

        /* Contact Form and Map Styles */
        .contact-form-wrapper {
            background: #f5f5f5;
            padding: 50px 40px;
            border-radius: 15px;
            height: 100%;
        }

        .form-heading {
            font-size: 2rem;
            font-weight: 700;
            color: #2d2d2d;
            margin-bottom: 35px;
            line-height: 1.3;
        }

        .contact-form-wrapper .form-label {
            font-size: 0.95rem;
            font-weight: 600;
            color: #2d2d2d;
            margin-bottom: 8px;
        }

        .contact-form-wrapper .form-control {
            border: none;
            background: white;
            padding: 12px 18px;
            border-radius: 8px;
            font-size: 0.95rem;
            transition: box-shadow 0.3s ease;
        }

        .contact-form-wrapper .form-control:focus {
            box-shadow: 0 0 0 3px rgba(23, 162, 184, 0.1);
            border: none;
            outline: none;
        }

        .contact-form-wrapper textarea.form-control {
            resize: none;
        }

        .btn-send {
            background: #17a2b8;
            color: white;
            font-weight: 600;
            letter-spacing: 1.5px;
            padding: 15px 30px;
            border: none;
            border-radius: 50px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .btn-send:hover {
            background: #138a9e;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(23, 162, 184, 0.3);
        }

        .map-wrapper {
            height: 100%;
            min-height: 600px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 777px) {
            .wrapper {
                margin: 50px 20px
            }

            .contact-section .main-heading {
                font-size: 1.8rem;
            }

            .contact-card {
                margin-bottom: 20px;
            }

            .form-heading {
                font-size: 1.6rem;
            }

            .contact-form-wrapper {
                padding: 30px 25px;
                margin-bottom: 30px;
            }

            .map-wrapper {
                min-height: 400px;
            }
        }

        @media (max-width: 365px) {
            .wrapper {
                margin: 50px 10px
            }

            .w-75 {
                width: 90% !important
            }

            .contact-section .main-heading {
                font-size: 1.5rem;
            }
        }
    </style>
@endsection

@section('content')
    <!-- Contact Section Start -->
    <div class="contact-section">
        <div class="container">
            <div class="text-center">
                <p class="section-title">GET IN TOUCH</p>
                <h2 class="main-heading">Whenever you need us, we're here<br>for you.</h2>
            </div>
            
            <div class="row mt-5">
                <!-- Head Office Card -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <h5 class="contact-card-title">HEAD OFFICE</h5>
                        <p class="contact-card-text">Islamabad, Pakistan</p>
                    </div>
                </div>

                <!-- Call Us Card -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <h5 class="contact-card-title">CALL US</h5>
                        <p class="contact-card-text">
                            <a href="tel:+923154315382">Phone : +923154315382</a>
                        </p>
                    </div>
                </div>

                <!-- Email Us Card -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="contact-card">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h5 class="contact-card-title">EMAIL US</h5>
                        <p class="contact-card-text">
                            <a href="mailto:info@ieltsprepandpractice.com">info@ieltsprepandpractice.com</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section End -->

    <!-- Contact Form and Map Section Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Contact Form -->
                <div class="col-lg-6">
                    <div class="contact-form-wrapper">
                        <h2 class="form-heading">Seamless Communication,<br>Global Impact.</h2>
                        
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Phone</label>
                                    <input type="tel" name="phone" class="form-control" placeholder="Phone" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Subject</label>
                                    <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Message</label>
                                    <textarea name="message" class="form-control" rows="5" placeholder="Message" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-send w-100">SEND</button>
                                </div>
                            </div>
                    </div>
                </div>

                <!-- Map -->
                <div class="col-lg-6">
                    <div class="map-wrapper">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d212270.5667814195!2d72.8004448!3d33.6147068!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfbfd07891722f%3A0x6059515c3bdb02b6!2sIslamabad%2C%20Pakistan!5e0!3m2!1sen!2s!4v1234567890123!5m2!1sen!2s" 
                            width="100%" 
                            height="100%" 
                            style="border:0; border-radius: 15px;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Form and Map Section End -->
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection