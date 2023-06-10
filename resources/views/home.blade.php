@extends('layout.main')

@section('content')
        <!-- Pricing Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">خدمات پر کاربرد</h1>
                    <p class="mb-1"></p>
                </div>
                <div class="row gy-5 gx-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="position-relative shadow rounded border-top border-5 border-primary">
                            <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                                <i class="fa fa-share-alt text-white"></i>
                            </div>
                            <div class="text-center border-bottom p-4 pt-5">
                                <h4 class="fw-bold">سامانه صدور پروانه کسب</h4>
                                <p class="mb-0">bpms.altfuel.ir</p>
                            </div>
                            <div class="text-center border-bottom p-4">
                                <a class="btn btn-primary px-4 py-2" href="https://bpms.altfuel.ir">ورود</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="position-relative shadow rounded border-top border-5 border-secondary">
                            <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-secondary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                                <i class="fa fa-server text-white"></i>
                            </div>
                            <div class="text-center border-bottom p-4 pt-5">
                                <h4 class="fw-bold">سامانه جامع اطلاعات خودروهای دوگانه سوز کشور</h4>
                                <p class="mb-0">irngv.mimt.gov.ir</p>
                            </div>
                            <div class="text-center border-bottom p-4">
                                <a class="btn btn-secondary px-4 py-2" href="https://irngv.mimt.gov.ir">ورود</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="position-relative shadow rounded border-top border-5 border-primary">
                            <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                                <i class="fa fa-cog text-white"></i>
                            </div>
                            <div class="text-center border-bottom p-4 pt-5">
                                <h4 class="fw-bold">پشتیبانی</h4>
                                <p class="mb-0"></p>
                            </div>
                            <div class="text-center border-bottom p-4">
                                <a class="btn btn-primary px-4 py-2" href="https://l.altfuel.ir/issues">پرسش و پاسخ</a>
                            </div>
                            <div class="p-4">
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>021-91013791</p>
                                <p class="border-bottom pb-3"><i class="fa fa-check text-primary me-3"></i>021-91012961</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="position-relative shadow rounded border-top border-5 border-primary">
                            <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                                <i class="fa fa-handshake text-white"></i>
                            </div>
                            <div class="text-center border-bottom p-4 pt-5">
                                <h4 class="fw-bold">پیمانکاران تبدیل</h4>
                                <p class="mb-0">اطلاعات تماس پیمانکاران تبدیل دولتی</p>
                            </div>
                            <div class="text-center border-bottom p-4">
                                <a class="btn btn-primary px-4 py-2" href="{{ route('contractors') }}">مشاهده اطلاعات</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="position-relative shadow rounded border-top border-5 border-primary">
                            <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                                <i class="fa fa-id-card text-white"></i>
                            </div>
                            <div class="text-center border-bottom p-4 pt-5">
                                <h4 class="fw-bold">گواهی احکام کسب و تجارت</h4>
                                <p class="mb-0">ثبت نام کلاس آنلاین گواهی احکام کسب و تجارت</p>
                            </div>
                            <div class="text-center border-bottom p-4">
                                <a class="btn btn-primary px-4 py-2" href="http://ecoat.otaghasnaftehran.ir/">ورود</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="position-relative shadow rounded border-top border-5 border-primary">
                            <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-50 translate-middle bg-primary rounded-circle" style="width: 45px; height: 45px; margin-top: -3px;">
                                <i class="fa fa-id-card text-white"></i>
                            </div>
                            <div class="text-center border-bottom p-4 pt-5">
                                <h4 class="fw-bold">پرداخت حق عضویت </h4>
                                <p class="mb-0">l.altfuel.ir/bedehi</p>
                            </div>
                            <div class="text-center border-bottom p-4">
                                <a class="btn btn-primary px-4 py-2" href="https://l.altfuel.ir/bedehi">ورود</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pricing End -->


        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 40, 51, 0.8);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->


        <!-- Domain Search Start -->
        <div class="container-xxl domain mb-5" style="margin-top: 90px;">
            <div class="container px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="section-title position-relative text-center mx-auto mb-4 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                            <h1 class="mb-3">جستجو در مطالب</h1>
                            <p class="mb-1"></p>
                        </div>
                        <div class="position-relative w-100 my-3 wow fadeInUp" data-wow-delay="0.3s">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="هر چه میخواهد دلت تنگت بپرس">
                            <button type="button" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">جستجو</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Domain Search End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-4">
                            <h1 class="mb-2">به اتحادیه کشوری سوخت های جایگزین خوش آمدید</h1>
                        </div>
                        <p class="mb-4">
                            اگر شخصی *رفتگر* نامیده می شود، باید همانگونه خیابان ها و معابررا جارو کند که میکل آنژ
نقاشی می کرد و شکسپیر شعر می سرود. او باید آنگونه خیابان ها را جارو کند که تمامی موجودات
 زمینی وآسمانی مکثی کنند و بگویند اینجا رفتگری کار می کند که کارش را خوب انجام می دهد</p>

 <p>مارتین لوترکینگ</p>
همه عوامل دست اندر کار اتحادیه کشوری سوخت های جایگزین و خدمات وابسته ، هر روز صبح ، با این آرزو شروع می‌کنند که مصداق چنین جمله ای باشند. ما در در انجام دادن وظایف خود نهایت توانمان را به کار میگیریم تا عالیترین خدمات را برای شما به ارمغان آوریم .
دوست و همکار عزیزم ، ما مشتاقانه نیاز به نظرات شما داریم ، نظرات شما را معیار ارزشمندی برای توجه و ارزیابی کارهای خود میدانیم .
برای این منظور شماره واتس اپ ۰۹۱۲۶۶۳۱۵۴۴ و ایمیل mgmt@altfuel.ir. 
ما را از انتقادات و پیشنهادات خود بهرمند سازید 

<p>با سپاس </p>
<p>محمودیان</p>
                        </p>
                        <div class="row g-3">
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="bg-light rounded text-center p-4">
                                    <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">1259</h2>
                                    <p class="mb-0">اعضا</p>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="bg-light rounded text-center p-4">
                                    <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">18</h2>
                                    <p class="mb-0">کارشناسان</p>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="bg-light rounded text-center p-4">
                                    <i class="fa fa-check fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">888</h2>
                                    <p class="mb-0">پروانه های فعال</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="{{ url('public/images/3a.jpg') }}">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        


        <!-- Comparison Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">قوانین و آیین نامه ها</h1>
                    <p class="mb-1"></p>
                </div>
                <div class="row g-5 comparison position-relative">
                    <div class="col-lg-6 pe-lg-5">
                        <div class="section-title position-relative mx-auto mb-4 pb-4">
                                <h3 class="fw-bold">استانداردهای مرتبط</h3>
                        </div>
                        <div class="row gy-3 gx-5">
                            <div class="col-sm-12 wow fadeIn" data-wow-delay="0.7s">
                                <table class="table table-stripped">
                                    <tr>
                                        <td>9747</td>
                                        <td>
                                            <p><a href="{{ route('download', ['file_name' => '9747-1397.pdf']) }}">خودروهای با سوخت گاز طبیعی فشرده(CNG)- بازرسی ادواری</a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9426</td>
                                        <td>
                                            <p><a href="{{ route('download', ['file_name' => '9426-1398.pdf']) }}">سیلندرهای گاز-بازرسی نصب و بازسنجی کیفیت سیلندرهای فشار زیاد نصب شده بر روی خودروها به‌منظور ذخیره‌سازی گاز طبیعی به‌عنوان سوخت</a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7598</td>
                                        <td>
                                            <p><a href="{{ route('download', ['file_name' => '7598-1400.pdf']) }}">خودروهای با سوخت گاز طبیعی فشردهCNG))ـ ویژگی‌ها و روش‌های آزمون مجموعه قطعات گازسوزCNG و الزامات نصب آن‌ها بر روی خودرو</a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6792</td>
                                        <td>
                                            <p><a href="{{ route('download', ['file_name' => '6792-1398.pdf']) }}">سیلندرهای گاز– سیلندرها و تیوب­ های بدون درز فولادی وآلیاژ آلومینیومی- بازرسی و آزمون دوره ­ای</a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>22875</td>
                                        <td>
                                            <p><a href="{{ route('download', ['file_name' => '22875-1400.pdf']) }}">خودروهای جاده ای - نصب قطعات سامانه سوخت رسانی گاز طبیعی فشرده (CNG) بر روی خودرو های بنزین سوز به صورت کارگاهی – الزامات عمومی</a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5600</td>
                                        <td>
                                            <p><a href="{{ route('download', ['file_name' => '5600-1398.pdf']) }}">اجزاء گازسوز کردن خودرو با سوخت گاز مایع LPG آزمون و راه ‏اندازی و بازدید دوره‏ای</a></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5601</td>
                                        <td>
                                            <p><a href="{{ route('download', ['file_name' => '5601-1398.pdf']) }}">الزامات تائید کارگاههای خدمات خودروهای گازسوزCNG -آیین کار</a></p>
                                        </td>
                                    </tr>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ps-lg-5">
                        <div class="section-title position-relative mx-auto mb-4 pb-4">
                            <h3 class="fw-bold mb-0">راهنمای اعضا</h3>
                        </div>
                        <div class="row gy-3 gx-5">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <i class="fa fa-server fa-3x text-secondary mb-3"></i>
                                <h5 class="fw-bold">تعهدنامه اجاره</h5>
                                <p>	متن تعهد نامه محضری جهت اجاره نامه های عادی</p>
                                <p><a href="{{ route('download', ['file_name' => 'تعهد-نامه-محضری-جهت-اجاره-نامه-های-عادی.docx']) }}">برای دانلود کلیک کنید</a></p>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <i class="fa fa-shield-alt fa-3x text-secondary mb-3"></i>
                                <h5 class="fw-bold">چک لیست بازرسی</h5>
                                <p>	چک لیست ارزیابی مراکز خدمات فنی خودروهای گازسوز</p>
                                <p><a href="{{ route('download', ['file_name' => 'چک-لیست-ارزیابی-مراکز-خدمات-فنی.pdf']) }}">برای دانلود کلیک کنید</a></p>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <i class="fa fa-cog fa-3x text-secondary mb-3"></i>
                                <h5 class="fw-bold">الزامات آموزشی</h5>
                                <p>	الزامات آموزشی رسته های تحت پوشش</p>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                <i class="fa fa-headset fa-3x text-secondary mb-3"></i>
                                <h5 class="fw-bold">ضوابط خاص</h5>
                                <p>	ضوابط خاص اتحادیه کشوری صنف خدمات فنی خودروهای گازسوز ماده</p>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <i class="fa fa-server fa-3x text-primary mb-3"></i>
                                <h5 class="fw-bold">قانون نظام صنفی</h5>
                                <p><a href="{{ route('download', ['file_name' => 'nezamsenfi.zip']) }}">برا دانلود کلیک کنید</a></p>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <i class="fa fa-shield-alt fa-3x text-primary mb-3"></i>
                                <h5 class="fw-bold">معاینه فنی</h5>
                                <p>	آیین نامه اجرایی نحوه انجام معاینه و صدور برگ معاینه فنی خودرو-93</p>
                                <p><a href="{{ route('download', ['file_name' => 'دستورالعمل-مادخ3-آئین-نامه-اجرایی.pdf']) }}">برای دانلود کلیک کنید</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Comparison Start -->




        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mx-auto mb-5 pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">همکاران ما در اتحادیه</h1>
                    <p class="mb-1"></p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                            <div class="text-center p-4">
                                <img class="img-fluid rounded-circle mb-4" src="img/team-1.jpg" alt="">
                                <h5 class="fw-bold mb-1">ولی اله شهاب</h5>
                                <small>رئیس دفتر</small>
                            </div>
                            <div class="d-flex justify-content-center bg-primary p-3">
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                            <div class="text-center p-4">
                                <img class="img-fluid rounded-circle mb-4" src="img/team-1.jpg" alt="">
                                <h5 class="fw-bold mb-1">پویان کابلی</h5>
                                <small>مسئول واحد شکایات و بازرسی</small>
                            </div>
                            <div class="d-flex justify-content-center bg-primary p-3">
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                            <div class="text-center p-4">
                                <img class="img-fluid rounded-circle mb-4" src="img/team-2.jpg" alt="">
                                <h5 class="fw-bold mb-1">محمدشهاب خودرو</h5>
                                <small>کارشناس ارشد IT</small>
                            </div>
                            <div class="d-flex justify-content-center bg-primary p-3">
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                            <div class="text-center p-4">
                                <img class="img-fluid rounded-circle mb-4" src="img/team-3.jpg" alt="">
                                <h5 class="fw-bold mb-1">مصطفی گل گواهی</h5>
                                <small>مسئول امور ارتباط با اصناف</small>
                            </div>
                            <div class="d-flex justify-content-center bg-primary p-3">
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                            <div class="text-center p-4">
                                <img class="img-fluid rounded-circle mb-4" src="img/team-4.jpg" alt="">
                                <h5 class="fw-bold mb-1">محمدرضا نظری</h5>
                                <small>مدیر مالی-اداری</small>
                            </div>
                            <div class="d-flex justify-content-center bg-primary p-3">
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                            <div class="text-center p-4">
                                <img class="img-fluid rounded-circle mb-4" src="img/team-4.jpg" alt="">
                                <h5 class="fw-bold mb-1">مژده شناسنده</h5>
                                <small>سرپرست پشتیبانی مشتریان</small>
                            </div>
                            <div class="d-flex justify-content-center bg-primary p-3">
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                            <div class="text-center p-4">
                                <img class="img-fluid rounded-circle mb-4" src="img/team-4.jpg" alt="">
                                <h5 class="fw-bold mb-1">الهام سیدی</h5>
                                <small>کارشناس امور مراکز و سامانه irngv</small>
                            </div>
                            <div class="d-flex justify-content-center bg-primary p-3">
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                            <div class="text-center p-4">
                                <img class="img-fluid rounded-circle mb-4" src="img/team-4.jpg" alt="">
                                <h5 class="fw-bold mb-1">فاطمه شهیدی</h5>
                                <small>کارشناس امور مراکز و سامانه irngv</small>
                            </div>
                            <div class="d-flex justify-content-center bg-primary p-3">
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                            <div class="text-center p-4">
                                <img class="img-fluid rounded-circle mb-4" src="img/team-4.jpg" alt="">
                                <h5 class="fw-bold mb-1">طاهره بابایی</h5>
                                <small>کارشناس صدور پروانه کسب</small>
                            </div>
                            <div class="d-flex justify-content-center bg-primary p-3">
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                            <div class="text-center p-4">
                                <img class="img-fluid rounded-circle mb-4" src="img/team-4.jpg" alt="">
                                <h5 class="fw-bold mb-1">پریسا احمدی آذر</h5>
                                <small>کارشناس صدور پروانه کسب</small>
                            </div>
                            <div class="d-flex justify-content-center bg-primary p-3">
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                            <div class="text-center p-4">
                                <img class="img-fluid rounded-circle mb-4" src="img/team-4.jpg" alt="">
                                <h5 class="fw-bold mb-1">روح اله شادمان</h5>
                                <small>کارشناس صدور پروانه کسب و آموزش</small>
                            </div>
                            <div class="d-flex justify-content-center bg-primary p-3">
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item border-top border-5 border-primary rounded shadow overflow-hidden">
                            <div class="text-center p-4">
                                <img class="img-fluid rounded-circle mb-4" src="img/team-4.jpg" alt="">
                                <h5 class="fw-bold mb-1">فرناز شهریاری</h5>
                                <small>دبیرخانه</small>
                            </div>
                            <div class="d-flex justify-content-center bg-primary p-3">
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
@endsection