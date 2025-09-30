<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{ route('frontend.index') }}" class="navbar-brand d-flex align-items-center px-4 pb-2 px-lg-5">
        <h2 class="m-0 text-primary"><img style="height:71px;" class="img-fluid mt-1 ms-5" width="135px"
                src="{{ asset('frontend/logo/logo.png') }}" alt=""></h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('frontend.index') }}" class="nav-item nav-link active">Home</a>
            <a href="{{ route('frontend.index') }}#prepration-courses" class="nav-item nav-link"> IELTS Prepration Courses</a>
            <a href="{{ route('frontend.index') }}#prepration-material" class="nav-item nav-link"> IELTS Prepration Material</a>
            <a href="{{ route('frontend.index') }}#ielts-mock-test" class="nav-item nav-link"> IELTS Mock Test</a>
            
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
            
            <a href="{{route('frontend.faqs')}}" class="nav-item nav-link">Faqs</a>
            <a href="{{route('frontend.contact-us')}}" class="nav-item nav-link">Contact Us</a>
            <a href="{{route('frontend.about-us')}}" class="nav-item nav-link">About Us</a>
        </div>
    </div>
</nav>

<style>
/* Blog Dropdown Styles */
.navbar .dropdown-menu {
    border: none;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    padding: 10px 0;
    margin-top: 0;
}

.navbar .dropdown-item {
    padding: 10px 25px;
    font-size: 15px;
    color: #333;
    transition: all 0.3s ease;
}

.navbar .dropdown-item:hover {
    background-color: #17a2b8;
    color: white;
    padding-left: 30px;
}

.navbar .dropdown-toggle::after {
    margin-left: 5px;
    vertical-align: middle;
}

/* Responsive adjustments */
@media (max-width: 991px) {
    .navbar .dropdown-menu {
        box-shadow: none;
        padding-left: 15px;
    }
    
    .navbar .dropdown-item {
        padding: 8px 15px;
    }
    
    .navbar .dropdown-item:hover {
        padding-left: 20px;
    }
}
</style>