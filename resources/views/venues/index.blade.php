<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edica :: Home</title>
    <link rel="stylesheet" href="{{ asset('edica') }}/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('edica') }}/assets/vendors/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('edica') }}/assets/vendors/aos/aos.css">
    <link rel="stylesheet" href="{{ asset('edica') }}/assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="{{ asset('edica') }}/assets/vendors/jquery/jquery.min.js"></script>
    <script src="{{ asset('edica') }}/assets/js/loader.js"></script>
</head>
<body>
    <div class="edica-loader"></div>
    <header class="edica-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.html"><img src="{{ asset('edica') }}/assets/images/logo.svg" alt="Edica"></a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="edicaMainNav">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="blogDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
                            <div class="dropdown-menu" aria-labelledby="blogDropdown">
                                <a class="dropdown-item" href="blog.html">Blog Archive</a>
                                <a class="dropdown-item" href="blog-single.html">Blog Post</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                                <a class="dropdown-item" href="404.html">404</a>
                                <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><span class="flag-icon flag-icon-squared rounded-circle flag-icon-gb"></span> Eng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Download</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <div class="container text-center mt-4">
        <h2>Booking Lapangan Online Terbaik</h2>
        <a href="#" class="btn btn-primary mt-2">Daftarkan Venue</a>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Cari Nama Venue">
            </div>
            <div class="col-md-4">
                <select class="form-select">
                    <option selected>Lokasi</option>
                    <option value="Surabaya">Surabaya</option>
                </select>
            </div>
            <div class="col-md-4">
                <button class="btn btn-dark w-100">Temukan</button>
            </div>
        </div>
    </div>

    <!-- List Venue -->
    <div class="container mt-5">
        <div class="row">
            <!-- Venue 1 -->
            <div class="col-md-4 mb-4">
                <div class="card venue-card">
                    <img src="https://via.placeholder.com/300x180" alt="Hokky Futsal" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Hokky Futsal</h5>
                        <p class="card-text">Jl. Nginden II No.109, Nginden Jangkungan, Surabaya.</p>
                        <p class="price">Mulai Dari 50K/Sesi</p>
                        <small class="text-muted">04 September 2023</small>
                    </div>
                </div>
            </div>
            <!-- Venue 2 -->
            <div class="col-md-4 mb-4">
                <div class="card venue-card">
                    <img src="https://via.placeholder.com/300x180" alt="Bashkara Futsal Arena" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Bashkara Futsal Arena</h5>
                        <p class="card-text">Jl. Manyar Jaya Praja I No.47, Surabaya.</p>
                        <p class="price">Mulai Dari 54K/Sesi</p>
                        <small class="text-muted">04 September 2023</small>
                    </div>
                </div>
            </div>
            <!-- Venue 3 -->
            <div class="col-md-4 mb-4">
                <div class="card venue-card">
                    <img src="https://via.placeholder.com/300x180" alt="Hans Futsal" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Hans Futsal</h5>
                        <p class="card-text">Panjang Jiwo, Tenggilis Mejoyo, Surabaya.</p>
                        <p class="price">Mulai Dari 45K/Sesi</p>
                        <small class="text-muted">04 September 2023</small>
                    </div>
                </div>
            </div>
            <!-- Venue 4 -->
            <div class="col-md-4 mb-4">
                <div class="card venue-card">
                    <img src="https://via.placeholder.com/300x180" alt="Gool Mangga Dua" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Gool Mangga Dua</h5>
                        <p class="card-text">Jl. Jagir Wonokromo, Surabaya.</p>
                        <p class="price">Mulai Dari 60K/Sesi</p>
                        <small class="text-muted">04 September 2023</small>
                    </div>
                </div>
            </div>
            <!-- Venue 5 -->
            <div class="col-md-4 mb-4">
                <div class="card venue-card">
                    <img src="https://via.placeholder.com/300x180" alt="Goli Futsal Untag" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Goli Futsal Untag</h5>
                        <p class="card-text">Jl. Nginden Semolo, Surabaya.</p>
                        <p class="price">Mulai Dari 50K/Sesi</p>
                        <small class="text-muted">04 September 2023</small>
                    </div>
                </div>
            </div>
            <!-- Venue 6 -->
            <div class="col-md-4 mb-4">
                <div class="card venue-card">
                    <img src="https://via.placeholder.com/300x180" alt="Futsal Theater" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Futsal Theater</h5>
                        <p class="card-text">Rungkut Menanggal, Surabaya.</p>
                        <p class="price">Mulai Dari 80K/Sesi</p>
                        <small class="text-muted">04 September 2023</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </main>

    <section class="edica-footer-banner-section" data-aos="fade-up">
        <div class="container">
            <div class="footer-banner">
                <h1 class="banner-title">Download it now.</h1>
                <div class="banner-btns-wrapper">
                    <button class="btn btn-success"> <img src="{{ asset('edica') }}/assets/images/apple@1x.svg" alt="ios" class="mr-2"> App Store</button>
                    <button class="btn btn-success"> <img src="{{ asset('edica') }}/assets/images/android@1x.svg" alt="android" class="mr-2"> Google Play</button>
                </div>
                <p class="banner-text">Add some helper text here to explain the finer details of your <br> product or service.</p>
            </div>
        </div>
    </section>
    <footer class="edica-footer" data-aos="fade-up">
        <div class="container">
            <div class="row footer-widget-area">
                <div class="col-md-3">
                    <a href="index.html" class="footer-brand-wrapper">
                        <img src="{{ asset('edica') }}/assets/images/logo.svg" alt="edica logo">
                    </a>
                    <p class="contact-details">hello@edica.com</p>
                    <p class="contact-details">+23 3000 000 00</p>
                    <nav class="footer-social-links">
                        <a href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a href="#!"><i class="fab fa-twitter"></i></a>
                        <a href="#!"><i class="fab fa-behance"></i></a>
                        <a href="#!"><i class="fab fa-dribbble"></i></a>
                    </nav>
                </div>
                <div class="col-md-3">
                    <nav class="footer-nav">
                        <a href="#!" class="nav-link">Company</a>
                        <a href="#!" class="nav-link">Android App</a>
                        <a href="#!" class="nav-link">ios App</a>
                        <a href="#!" class="nav-link">Blog</a>
                        <a href="#!" class="nav-link">Partners</a>
                        <a href="#!" class="nav-link">Careers</a>
                    </nav>
                </div>
                <div class="col-md-3">
                    <nav class="footer-nav">
                        <a href="#!" class="nav-link">FAQ</a>
                        <a href="#!" class="nav-link">Reporting</a>
                        <a href="#!" class="nav-link">Block Storage</a>
                        <a href="#!" class="nav-link">Tools & Integrations</a>
                        <a href="#!" class="nav-link">API</a>
                        <a href="#!" class="nav-link">Pricing</a>
                    </nav>
                </div>
                <div class="col-md-3">
                    <div class="dropdown footer-country-dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="footerCountryDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="flag-icon flag-icon-gb flag-icon-squared"></span> United Kingdom <i class="fas fa-chevron-down ml-2"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="footerCountryDropdown">
                            <button class="dropdown-item" href="#">
                                <span class="flag-icon flag-icon-us flag-icon-squared"></span> United States
                            </button>
                            <button class="dropdown-item" href="#">
                                <span class="flag-icon flag-icon-au flag-icon-squared"></span> Australia
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-content">
                <nav class="nav footer-bottom-nav">
                    <a href="#!">Privacy & Policy</a>
                    <a href="#!">Terms</a>
                    <a href="#!">Site Map</a>
                </nav>
                <p class="mb-0">© Edica. 2020 <a href="https://www.bootstrapdash.com" target="_blank" rel="noopener noreferrer" class="text-reset">bootstrapdash</a> . All rights reserved.</p>
            </div>
        </div>
    </footer>
    <script src="{{ asset('edica') }}/assets/vendors/popper.js/popper.min.js"></script>
    <script src="{{ asset('edica') }}/assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('edica') }}/assets/vendors/aos/aos.js"></script>
    <script src="{{ asset('edica') }}/assets/js/counter.js"></script>
    <script src="{{ asset('edica') }}/assets/js/main.js"></script>
    <script>
        AOS.init({
            duration: 2000
        });
      </script>
</body>

</html>
