<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{ route('frontend.index') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img style="height:65px;" class="img-fluid" width="130px"
             src="{{ asset('frontend/logo/logo.png') }}" alt="IELTS Prep and Practice">
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('frontend.index') }}" class="nav-item nav-link active">Home</a>
            <a href="{{ route('frontend.index') }}#prepration-courses" class="nav-item nav-link">IELTS Preparation Courses</a>
            <a href="{{ route('frontend.index') }}#ielts-mock-test" class="nav-item nav-link">IELTS Mock Test</a>
            <a href="{{ route('frontend.index') }}#prepration-material" class="nav-item nav-link">Preparation Material</a>

            <!-- Blog Dropdown -->
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="https://ieltsprepandpractice.com/category/general/" class="dropdown-item">General</a>
                    <a href="https://ieltsprepandpractice.com/category/ielts-listening/" class="dropdown-item">IELTS Listening</a>
                    <a href="https://ieltsprepandpractice.com/category/ielts-speaking/" class="dropdown-item">IELTS Speaking</a>
                    <a href="https://ieltsprepandpractice.com/category/ielts-reading/" class="dropdown-item">IELTS Reading</a>
                    <a href="https://ieltsprepandpractice.com/category/ielts-writing/" class="dropdown-item">IELTS Writing</a>
                </div>
            </div>

            <a href="{{ route('frontend.contact-us') }}" class="nav-item nav-link">Contact Us</a>
            <a href="{{ route('frontend.about-us') }}" class="nav-item nav-link">About Us</a>
        </div>
        <a href="https://wa.me/923154315382" target="_blank" class="nav-whatsapp d-none d-lg-flex align-items-center gap-2 me-4">
            <i class="bi bi-whatsapp"></i> WhatsApp
        </a>
    </div>
</nav>

<style>
.navbar .nav-link {
    font-size: 0.9rem;
    font-weight: 600;
    padding: 24px 14px;
    color: #374151 !important;
    transition: color 0.2s;
}
.navbar .nav-link:hover,
.navbar .nav-link.active {
    color: #17a2b8 !important;
}
.navbar .nav-link.active {
    border-bottom: 3px solid #17a2b8;
}
.navbar .dropdown-menu {
    border: none;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    border-radius: 10px;
    padding: 8px 0;
    margin-top: 0;
}
.navbar .dropdown-item {
    padding: 10px 22px;
    font-size: 0.88rem;
    color: #374151;
    transition: all 0.2s;
}
.navbar .dropdown-item:hover {
    background-color: #17a2b8;
    color: #fff;
    padding-left: 28px;
}
.navbar .dropdown-toggle::after {
    margin-left: 5px;
    vertical-align: middle;
}
.nav-whatsapp {
    background: #25d366;
    color: #fff !important;
    font-size: 0.82rem;
    font-weight: 700;
    padding: 9px 18px;
    border-radius: 50px;
    text-decoration: none;
    gap: 7px;
    transition: background 0.2s;
}
.nav-whatsapp:hover { background: #1ebe5d; color: #fff !important; }
.nav-whatsapp i { font-size: 15px; }

@media (max-width: 991px) {
    .navbar .nav-link { padding: 10px 0; border-bottom: none; }
    .navbar .dropdown-menu { box-shadow: none; padding-left: 12px; }
    .navbar .dropdown-item { padding: 8px 12px; }
    .navbar .dropdown-item:hover { padding-left: 16px; }
}
</style>
