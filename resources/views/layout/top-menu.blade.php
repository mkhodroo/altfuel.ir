<!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="" class="navbar-brand p-0">
            <h1 class="m-0"><i class="fa fa-server me-3"></i>{{ config('app.name') }}</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('home') }}" class="nav-item nav-link active">{{__('Home')}}</a>
                <a href="about.html" class="nav-item nav-link">{{__('help')}}</a>
                <a href="hosting.html" class="nav-item nav-link">{{__('issues')}}</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{__('agencies')}}</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ route('agencies') }}" class="dropdown-item">{{__('technical services')}}</a>
                        <a href="{{ route('hidros') }}" class="dropdown-item">{{__('hidro statics')}}</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">{{__('contact us')}}</a>
                <a href="contact.html" class="nav-item nav-link">{{__('about us')}}</a>
            </div>
            <butaton type="button" class="btn text-secondary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
        </div>
    </nav>

    <div class="container-xxl py-5 bg-primary hero-header mb-5">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5">
                <div class="col-lg-12 pt-5 text-center text-lg-start">
                    <h1 class="display-4 text-white mb-4 animated slideInLeft">{{ $title ?? __('altfuel') }}</h1>
                    <p class="text-white animated slideInLeft"></p>
                    <h1 class="text-white mb-4 animated slideInLeft">
                        <small class="align-top fw-normal" style="font-size: 15px; line-height: 25px;">{{ $address ?? '' }}</small>
                    </h1>
                </div>
                <div class="col-lg-6 text-center text-lg-start">
                    <img class="img-fluid animated zoomIn" src="img/hero.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->