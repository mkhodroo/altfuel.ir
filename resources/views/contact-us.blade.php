@extends('layout.main')

@php
    $title = "تماس با ما";
    $description = "اطلاعات تماس با اتحادیه کشوری سوخت های جایگزین و خدامت وابسته";
@endphp

@section('content')
    <!-- Pricing Start -->
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">اطلاعات تماس </h1>
                <p class="mb-1"></p>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="position-relative shadow rounded border-top border-5 border-primary">
                        <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="text-center border-bottom p-4 pt-5">
                            <h4 class="fw-bold">آدرس</h4>
                        </div>
                        <div class="text-center border-bottom p-4">
                            <p class="mb-0">تهران، خیابان ولیعصر، بالاتر از پارک ساعی، پلاک 2209، ساختمان صدف، طبقه 6 واحد 2</p>
                            <a class="btn btn-info px-4 py-2" href="https://nshn.ir/_bvZ5sNxihjM">مسیریابی با نشان</a>
                        </div>

                        <div class="text-center border-bottom p-4 pt-5">
                            <h4 class="fw-bold">کدپستی</h4>
                        </div>
                        <div class="text-center border-bottom p-4">
                            <p class="mb-0">1511943884</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="position-relative shadow rounded border-top border-5 border-secondary">
                        <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-secondary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                            <i class="fa fa-envelope text-white"></i>
                        </div>
                        <div class="text-center border-bottom p-4 pt-5">
                            <h4 class="fw-bold">ایمیل</h4>
                        </div>
                        <div class="text-center border-bottom p-4">
                            <p class="mb-0">info@altfuel.ir</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="position-relative shadow rounded border-top border-5 border-primary">
                        <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="text-center border-bottom p-4 pt-5">
                            <h4 class="fw-bold">تلفن</h4>
                            <p class="mb-0"></p>
                        </div>
                        <div class="p-4">
                            <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>021-91013791</p>
                            <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>021-91012961</p>
                        </div>
                        <div class="text-center border-bottom p-4 pt-5">
                            <h4 class="fw-bold">فکس</h4>
                            <p class="mb-0"></p>
                        </div>
                        <div class="p-4">
                            <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>021-26703671</p>
                            <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>021-88796708</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing End -->

@endsection

@section('script')
    <script>
        create_datatable(
            "agencies", 
            'https://l.altfuel.ir/api/agencies/get',
            [
                { data: 'Name' },
                { data: 'CodeEtehadie' },
                { data: 'Province' },
                { data: 'City' },
                { data: 'Address' },
                { data: 'Tel' },
                { data: 'ExpDate' },
            ]
        )
    </script>
@endsection