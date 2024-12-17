<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KickSpace</title>
    {{-- <link rel="stylesheet" href="{{ asset('edica') }}/assets/vendors/flag-icon-css/css/flag-icon.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('edica') }}/assets/vendors/font-awesome/css/all.min.css">
    <link href="{{ asset('edica') }}/assets/vendors/aos/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('edica') }}/assets/css/style.css">
    <script src="{{ asset('edica') }}/assets/vendors/jquery/jquery.min.js"></script>
    <script src="{{ asset('edica') }}/assets/js/loader.js"></script>
</head>
<body>
    <div class="edica-loader"></div>
    <header class="edica-header edica-landing-header">
        <div class="container">
            @include('layouts.navbar')
            <div class="edica-landing-header-content">
               <div id="edicaLandingHeaderCarousel" class="carousel slide" data-ride="carousel">
                   <ol class="carousel-indicators">
                       <li data-target="#edicaLandingHeaderCarousel" data-slide-to="0" class="active">.01</li>
                       <li data-target="#edicaLandingHeaderCarousel" data-slide-to="1">.02</li>
                       <li data-target="#edicaLandingHeaderCarousel" data-slide-to="2">.03</li>
                   </ol>
                   <div class="carousel-inner" role="listbox">
                       <div class="carousel-item active">
                           <div class="row">
                               <div class="col-md-6 carousel-content-wrapper">
                                   <h1 >Butuh lapangan futsal?</h1>
                                   <p>KickSpace hadir sebagai platform penyedia layanan booking lapangan futsal yang sudah berafiliasi dengan venue-venue di sekitar anda</p>
                                   <div class="carousel-content-btns">
                                       <a href="#!" class="btn btn-success"> <i class="fab fa-apple mr-2"></i> Lihat </a>
                                       <a href="#!" class="btn btn-secondary"> <i class="fab fa-android mr-2"></i> Booking </a>
                                    </div>
                               </div>
                               <div class="col-md-6 carousel-img-wrapper">
                                   <img src="{{ asset('edica') }}/assets/images/Slider_3.png" alt="carousel-img" class="img-fluid" width="350px">
                               </div>
                           </div>
                       </div>
                       <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6 carousel-content-wrapper">
                                    <h1>Amankan Lapangan Futsal untuk Tim mu segera!</h1>
                                    <p>Bersama KickSpace sewa, booking lapangan futsal lebih mudah, terjamin, aman, rahasia, dan bebas dari penipuan</p>
                                    <div class="carousel-content-btns">
                                        <a href="#!" class="btn btn-success"> <i class="fab fa-apple mr-2"></i> Lihat </a>
                                        <a href="#!" class="btn btn-secondary"> <i class="fab fa-android mr-2"></i> Booking </a>
                                    </div>
                                </div>
                                <div class="col-md-6 carousel-img-wrapper">
                                    <img src="{{ asset('edica') }}/assets/images/Slider_4.png" alt="carousel-img" class="img-fluid" width="400px">
                                </div>
                            </div>
                       </div>
                       <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-6 carousel-content-wrapper">
                                    <h1>Cobalah KickSpace dan Rasakan Kemudahannya</h1>
                                    <p>Bersama KickSpace semua menjadi mudah, Mau booking?</p>
                                    <div class="carousel-content-btns">
                                        <a href="#!" class="btn btn-success"> <i class="fab fa-apple mr-2"></i> Lihat </a>
                                        <a href="#!" class="btn btn-secondary"> <i class="fab fa-android mr-2"></i> Booking </a>
                                    </div>
                                </div>
                                <div class="col-md-6 carousel-img-wrapper">
                                    <img src="{{ asset('edica') }}/assets/images/Slider_5.png" alt="carousel-img" class="img-fluid" width="450px">
                                </div>
                            </div>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </header>

    <main>
        <section class="edica-landing-section edica-landing-about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6" data-aos="fade-up-right">
                        <h4 class="edica-landing-section-subtitle-alt">ABOUT US</h4>
                        <h2 class="edica-landing-section-title">KickSpace.com</h2>
                        <p>Platform yang muncul akibat maraknya kasus penipuan oleh oknum tidak bertanggung jawab dan kebingungan penikmat olahraga futsal tentang bagaimana menyewa lapangan futsal dengan mudah dan dengan berbagai fitur</p>
                        <ul class="landing-about-list">
                            <li>Mudah digunakan</li>
                            <li>Aman, Rahasia</li>
                            <li>Memiliki berbagai fitur canggih</li>
                        </ul>
                    </div>
                    <div class="col-md-6" data-aos="fade-up-left">
                        <img src="{{ asset('edica') }}/assets/images/KickSpace.jpeg" width="468px" alt="about" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <section class="edica-landing-section edica-landing-clients">
            <div class="container">
                <h4 class="edica-landing-section-subtitle-alt">PARTNER WITH US</h4>
                <div class="partners-wrapper">
                    <img src="{{ asset('edica') }}/assets/images/Partner_1.png" alt="client logo" data-aos="flip-right" data-aos-delay="250">
                    <img src="{{ asset('edica') }}/assets/images/Partner_2.png" alt="client logo" data-aos="flip-right" data-aos-delay="500">
                    <img src="{{ asset('edica') }}/assets/images/Partner_3.png" alt="client logo" data-aos="flip-right" data-aos-delay="750">
                    <img src="{{ asset('edica') }}/assets/images/Partner_4.png" alt="client logo" data-aos="flip-right" data-aos-delay="1000">
                    <img src="{{ asset('edica') }}/assets/images/Partner_5.png" alt="client logo" data-aos="flip-right" data-aos-delay="1250">
                    <img src="{{ asset('edica') }}/assets/images/Partner_6.png" alt="client logo" data-aos="flip-right" data-aos-delay="1500">
                </div>
            </div>
        </section>
        <section class="edica-landing-section edica-landing-services">
            <div class="container">
                <h4 class="edica-landing-section-subtitle">Service We Offer</h4>
                <h2 class="edica-landing-section-title">What features you will <br> Get from App.</h2>
                <div class="row">
                    <div class="col-md-6 landing-service-card" data-aos="fade-right">
                        <img src="{{ asset('edica') }}/assets/images/picture.svg" alt="card img" class="img-fluid service-card-img">
                        <h4 class="service-card-title">Live Video</h4>
                        <p class="service-card-description">He has led a remarkable campaign, defying the traditional mainstream parties courtesy of his En Marche! movement. For many, however, the.</p>
                    </div>
                    <div class="col-md-6 landing-service-card" data-aos="fade-left">
                        <img src="{{ asset('edica') }}/assets/images/internet.svg" alt="card img" class="img-fluid service-card-img">
                        <h4 class="service-card-title">Secure and Reliable</h4>
                        <p class="service-card-description">He has led a remarkable campaign, defying the traditional mainstream parties courtesy of his En Marche! movement. For many, however, the.</p>
                    </div>
                    <div class="col-md-6 landing-service-card" data-aos="fade-right">
                        <img src="{{ asset('edica') }}/assets/images/goal.svg" alt="card img" class="img-fluid service-card-img">
                        <h4 class="service-card-title">Fast. Instantly.</h4>
                        <p class="service-card-description">He has led a remarkable campaign, defying the traditional mainstream parties courtesy of his En Marche! movement. For many, however, the.</p>
                    </div>
                    <div class="col-md-6 landing-service-card" data-aos="fade-left">
                        <img src="{{ asset('edica') }}/assets/images/chat-bubble.svg" alt="card img" class="img-fluid service-card-img">
                        <h4 class="service-card-title">Built-in Messenger</h4>
                        <p class="service-card-description">He has led a remarkable campaign, defying the traditional mainstream parties courtesy of his En Marche! movement. For many, however, the.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="edica-landing-section edica-landing-testimonials" data-aos="fade-up">
            <div class="container">
                <div id="edicaLandingTestimonialCarousel" class="carousel slide landing-testimonial-carousel" data-ride="carousel">
                    <div class="text-center py-4">
                        <img src="{{ asset('edica') }}/assets/images/quote.svg" alt="quote">
                    </div>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item">
                            <blockquote class="testimonial">
                                <p>“My mission in life is not merely to survive, but to thrive; and to do so with some passion, some compassion, some humor, and some style.” </p>
                            </blockquote>
                        </div>
                        <div class="carousel-item">
                            <blockquote class="testimonial">
                                <p>“My mission in life is not merely to survive, but to thrive; and to do so with some passion, some compassion, some humor, and some style.” </p>
                            </blockquote>
                        </div>
                        <div class="carousel-item active">
                            <blockquote class="testimonial">
                                <p>“My mission in life is not merely to survive, but to thrive; and to do so with some passion, some compassion, some humor, and some style.” </p>
                            </blockquote>
                        </div>
                        <div class="carousel-item">
                            <blockquote class="testimonial">
                                <p>“My mission in life is not merely to survive, but to thrive; and to do so with some passion, some compassion, some humor, and some style.” </p>
                            </blockquote>
                        </div>
                        <div class="carousel-item">
                            <blockquote class="testimonial">
                                <p>“My mission in life is not merely to survive, but to thrive; and to do so with some passion, some compassion, some humor, and some style.” </p>
                            </blockquote>
                        </div>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#edicaLandingTestimonialCarousel" data-slide-to="0">
                            <img src="{{ asset('edica') }}/assets/images/oval-copy-3.png" alt="avatar">
                            <div class="user-details">
                                <h6>Gabie Sheber</h6>
                                <p>Developer</p>
                            </div>
                        </li>
                        <li data-target="#edicaLandingTestimonialCarousel" data-slide-to="1">
                            <img src="assets/images/oval-copy-4.png" alt="avatar">
                            <div class="user-details">
                                <h6>Gabie Sheber</h6>
                                <p>Developer</p>
                            </div>
                        </li>
                        <li data-target="#edicaLandingTestimonialCarousel" data-slide-to="2" class="active">
                            <img src="assets/images/oval.png" alt="avatar">
                            <div class="user-details">
                                <h6>Gabie Sheber</h6>
                                <p>Developer</p>
                            </div>

                        </li>
                        <li data-target="#edicaLandingTestimonialCarousel" data-slide-to="3">
                            <img src="assets/images/oval-copy.png" alt="avatar">
                            <div class="user-details">
                                <h6>Gabie Sheber</h6>
                                <p>Developer</p>
                            </div>
                        </li>
                        <li data-target="#edicaLandingTestimonialCarousel" data-slide-to="4">
                            <img src="assets/images/oval-copy-2.png" alt="avatar">
                            <div class="user-details">
                                <h6>Gabie Sheber</h6>
                                <p>Developer</p>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </section>
        <section class="edica-landing-section edica-landing-blog">
            <div class="container">
                <h4 class="edica-landing-section-subtitle" data-aos="fade-up">Blog posts</h4>
                <h2 class="edica-landing-section-title" data-aos="fade-up">Check our app latest blog post <br> for more update.</h2>
                <div class="row">
                    <div class="col-md-4 landing-blog-post" data-aos="fade-right">
                        <img src="{{ asset('edica') }}/assets/images/rectangle.png" alt="blog post" class="blog-post-thumbnail">
                        <p class="blog-post-category">Blog post</p>
                        <h4 class="blog-post-title">Check our latest blog post for more update.</h4>
                        <a href="#!" class="blog-post-link">Learn more</a>
                    </div>
                    <div class="col-md-4 landing-blog-post" data-aos="fade-up">
                        <img src="{{ asset('edica') }}/assets/images/rectangle-copy.png" alt="blog post" class="blog-post-thumbnail">
                        <p class="blog-post-category">Blog post</p>
                        <h4 class="blog-post-title">Check our latest blog post for more update.</h4>
                        <a href="#!" class="blog-post-link">Learn more</a>
                    </div>
                    <div class="col-md-4 landing-blog-post" data-aos="fade-left">
                        <img src="{{ asset('edica') }}/assets/images/rectangle-copy-2.png" alt="blog post" class="blog-post-thumbnail">
                        <p class="blog-post-category">Blog post</p>
                        <h4 class="blog-post-title">Check our latest blog post for more update.</h4>
                        <a href="#!" class="blog-post-link">Learn more</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="edica-landing-section edica-landing-blog-posts">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="blog-post-card blog-post-1 mb-4 mb-md-0" data-aos="fade-right">
                            <p class="post-category">App Design</p>
                            <h2 class="post-title">Check our latest blog post for more update.</h2>
                            <a href="#!" class="post-link">Learn more</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-post-card blog-post-2" data-aos="fade-left">
                            <p class="post-category">App Design</p>
                            <h2 class="post-title">Check our latest blog post for more update.</h2>
                            <a href="#!" class="post-link">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <section class="edica-footer-banner-section">
        <div class="container">
            <div class="footer-banner" data-aos="fade-up">
                <h1 class="banner-title">Download it now.</h1>
                <div class="banner-btns-wrapper">
                    <button class="btn btn-success"> <img src="{{ asset('edica') }}/assets/images/apple@1x.svg" alt="ios" class="mr-2"> App Store</button>
                    <button class="btn btn-success"> <img src="{{ asset('edica') }}/assets/images/android@1x.svg" alt="android" class="mr-2"> Google Play</button>
                </div>
                <p class="banner-text">Add some helper text here to explain the finer details of your <br> product or service.</p>
            </div>
        </div>
    </section>
    @include('layouts.footer')
    <script src="{{ asset('edica') }}/assets/vendors/popper.js/popper.min.js"></script>
    <script src="{{ asset('edica') }}/assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('edica') }}/assets/vendors/aos/aos.js"></script>
    <script src="{{ asset('edica') }}/assets/js/main.js"></script>
    <script>
        AOS.init({
            duration: 2000
        });
      </script>
</body>
</html>
