<!-- Footer Start -->
<div class="container-fluid pt-5 mt-5" style="background:#111827;">
    <div class="container py-5">
        <div class="row g-5">

            {{-- Brand & Contact --}}
            <div class="col-lg-4 col-md-6">
                <img src="{{ asset('frontend/logo/logo.png') }}" alt="IPP" style="height:52px;filter:brightness(0) invert(1);margin-bottom:18px;">
                <p style="color:#9ca3af;font-size:0.87rem;line-height:1.8;max-width:300px;">
                    Expert-led IELTS preparation helping students achieve their target band score — from listening to speaking.
                </p>
                <div class="mt-4">
                    <a href="tel:+923154315382" class="footer-contact-item">
                        <i class="fas fa-phone"></i> +92 315 431 5382
                    </a>
                    <a href="mailto:info@ieltsprepandpractice.com" class="footer-contact-item mt-2">
                        <i class="fas fa-envelope"></i> info@ieltsprepandpractice.com
                    </a>
                    <p class="footer-contact-item mt-2" style="cursor:default;">
                        <i class="fas fa-map-marker-alt"></i> United States
                    </p>
                </div>
                <div class="d-flex gap-2 mt-4">
                    <a class="footer-social" href="https://www.facebook.com/profile.php?id=61552949018684" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="footer-social" href="https://www.instagram.com/ielts_with_ipp/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a class="footer-social" href="https://pin.it/2YIvCjjwA" target="_blank"><i class="bi bi-pinterest"></i></a>
                    <a class="footer-social" href="https://www.linkedin.com/company/ielts-with-ipp/" target="_blank"><i class="bi bi-linkedin"></i></a>
                    <a class="footer-social" href="https://wa.me/923154315382" target="_blank" style="background:#25d366;border-color:#25d366;"><i class="bi bi-whatsapp"></i></a>
                </div>
            </div>

            {{-- Courses --}}
            <div class="col-lg-4 col-md-6">
                <h5 class="footer-heading">Our Courses</h5>
                <a class="footer-link" href="{{ route('payment.checkout', 'complete-preparation') }}">
                    <i class="fas fa-chevron-right me-2"></i>Complete Preparation Course
                </a>
                <a class="footer-link" href="{{ route('payment.checkout', 'writing-course') }}">
                    <i class="fas fa-chevron-right me-2"></i>IELTS Writing Course
                </a>
                <a class="footer-link" href="{{ route('payment.checkout', 'speaking-course') }}">
                    <i class="fas fa-chevron-right me-2"></i>IELTS Speaking Course
                </a>
                <a class="footer-link" href="{{ route('payment.checkout', 'preparation-material') }}">
                    <i class="fas fa-chevron-right me-2"></i>Preparation Material
                </a>
                <a class="footer-link" href="{{ route('payment.checkout', 'computer-based-test') }}">
                    <i class="fas fa-chevron-right me-2"></i>Computer Based Practice Test
                </a>
            </div>

            {{-- Quick Links --}}
            <div class="col-lg-4 col-md-6">
                <h5 class="footer-heading">Quick Links</h5>
                <a class="footer-link" href="{{ route('frontend.about-us') }}">
                    <i class="fas fa-chevron-right me-2"></i>About Us
                </a>
                <a class="footer-link" href="{{ route('frontend.contact-us') }}">
                    <i class="fas fa-chevron-right me-2"></i>Contact Us
                </a>
                <a class="footer-link" href="{{ route('frontend.faqs') }}">
                    <i class="fas fa-chevron-right me-2"></i>FAQs &amp; Help
                </a>
                <a class="footer-link" href="{{ route('frontend.privacy-policy') }}">
                    <i class="fas fa-chevron-right me-2"></i>Privacy Policy
                </a>
                <a class="footer-link" href="{{ route('frontend.index') }}#ielts-mock-test">
                    <i class="fas fa-chevron-right me-2"></i>Free Mock Tests
                </a>
            </div>

        </div>
    </div>

    {{-- Bottom bar --}}
    <div style="border-top:1px solid #1f2937;">
        <div class="container py-3 d-flex flex-column flex-md-row align-items-center justify-content-between gap-2">
            <p class="mb-0" style="color:#6b7280;font-size:0.82rem;">
                &copy; {{ date('Y') }} <span style="color:#17a2b8;font-weight:600;">IPP — IELTS Prep and Practice</span>. All rights reserved.
            </p>
            <p class="mb-0" style="color:#4b5563;font-size:0.8rem;">
                Powered by <span style="color:#17a2b8;">ieltsprepandpractice.com</span>
            </p>
        </div>
    </div>
</div>
<!-- Footer End -->

<style>
.footer-heading {
    color: #fff;
    font-size: 1rem;
    font-weight: 700;
    margin-bottom: 20px;
    padding-bottom: 10px;
    border-bottom: 2px solid #17a2b8;
    display: inline-block;
}
.footer-link {
    display: block;
    color: #9ca3af;
    font-size: 0.87rem;
    text-decoration: none;
    padding: 6px 0;
    transition: color 0.2s, padding-left 0.2s;
}
.footer-link:hover { color: #17a2b8; padding-left: 5px; }
.footer-link i { font-size: 9px; color: #17a2b8; }
.footer-contact-item {
    display: flex;
    align-items: center;
    gap: 10px;
    color: #9ca3af;
    font-size: 0.87rem;
    text-decoration: none;
    transition: color 0.2s;
}
.footer-contact-item:hover { color: #17a2b8; }
.footer-contact-item i { color: #17a2b8; font-size: 13px; width: 16px; }
.footer-social {
    width: 36px; height: 36px;
    display: inline-flex; align-items: center; justify-content: center;
    border: 1px solid #374151; border-radius: 8px;
    color: #9ca3af; font-size: 14px; text-decoration: none;
    transition: background 0.2s, color 0.2s, border-color 0.2s;
}
.footer-social:hover { background: #17a2b8; border-color: #17a2b8; color: #fff; }
</style>

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
