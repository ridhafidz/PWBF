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
    <script src="{{ asset('edica') }}/assets/vendors/jquery/jquery.min.js"></script>
    <script src="{{ asset('edica') }}/assets/js/loader.js"></script>
</head>
<body>
    <div class="edica-loader"></div>
    <header class="edica-header">
        <div class="container">
            @include('activities.navbar')
        </div>
    </header>
    <main>
        <div class="container text-center mt-4">
            <h2>Cari Event Olahraga Menarik</h2>
            <button class="btn btn-primary mt-2">Tambahkan Event</button>
        </div>

        <!-- Search and Filter -->
        <div class="container mt-4">
            <div class="row filter-container">
                <div class="col-md-3 mb-2">
                    <select class="form-select" id="filterActivity">
                        <option selected>Pilih Aktivitas</option>
                        <option>Futsal</option>
                        <option>Badminton</option>
                        <option>Basket</option>
                    </select>
                </div>
                <div class="col-md-3 mb-2">
                    <select class="form-select" id="filterLocation">
                        <option selected>Pilih Lokasi</option>
                        <option>Jakarta</option>
                        <option>Surabaya</option>
                        <option>Yogyakarta</option>
                    </select>
                </div>
                <div class="col-md-3 mb-2">
                    <select class="form-select" id="filterSport">
                        <option selected>Cabang Olahraga</option>
                        <option>Futsal</option>
                        <option>Badminton</option>
                        <option>Basket</option>
                    </select>
                </div>
                <div class="col-md-3 mb-2">
                    <button class="btn btn-dark w-100" onclick="applyFilters()">Temukan</button>
                </div>
            </div>
        </div>

        <!-- Event Section -->
        <div class="container">
            <!-- Event Main Bareng -->
            <div class="section-title">Event Main Bareng</div>
            <div class="row" id="eventList">
                <!-- Example Event -->
                <div class="col-md-4 mb-4 event-card" data-activity="Futsal" data-location="Jakarta">
                    <div class="card">
                        <img src="https://via.placeholder.com/300x150" class="card-img-top" alt="Event Image">
                        <div class="card-body">
                            <h6 class="card-title fw-bold">Fun Futsal</h6>
                            <p class="small text-muted">Jum, 6 Okt 2023 • 17:00</p>
                            <p class="small">Lapangan Jaya, Jakarta</p>
                            <p class="small">Rp 15.000 | Tunai Rp 40.000</p>
                        </div>
                    </div>
                </div>
                <!-- Tambahkan lebih banyak event di sini -->
            </div>
            <div class="text-center">
                <span class="show-more" onclick="showMoreEvents()">Tampilkan Lebih Banyak &darr;</span>
            </div>
        </div>
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
    <footer class="edica-footer" data-aos="fade-up">
        @include('activities.footer')
    </footer>

    <script src="{{ asset('edica') }}/assets/vendors/popper.js/popper.min.js"></script>
    <script src="{{ asset('edica') }}/assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('edica') }}/assets/vendors/aos/aos.js"></script>
    <script src="{{ asset('edica') }}/assets/js/main.js"></script>
    <script>
        AOS.init({
            duration: 2000
        });
        <!-- JavaScript -->
        <script>
            function applyFilters() {
                const activity = document.getElementById("filterActivity").value;
                const location = document.getElementById("filterLocation").value;

                const cards = document.querySelectorAll(".event-card");
                cards.forEach(card => {
                    const cardActivity = card.getAttribute("data-activity");
                    const cardLocation = card.getAttribute("data-location");

                    if ((activity === "Pilih Aktivitas" || activity === cardActivity) &&
                        (location === "Pilih Lokasi" || location === cardLocation)) {
                        card.style.display = "block";
                    } else {
                        card.style.display = "none";
                    }
                });
            }

            function showMoreEvents() {
                alert("Fitur tampilkan lebih banyak masih dalam pengembangan!");
            }
        </script>

        <!-- Bootstrap Bundle JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
      </script>
</body>

</html>
