<!DOCTYPE html>
<html lang="en">

<body>
    @include('partials.nav')
    <div class="back-to-top"></div>

    <div class="page-section banner-info">
        <div class="wrap bg-image">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 py-3 pr-lg-5 wow fadeInUp">
                        <h2 class="title-section">Tipe Anda adalah<br> {{ str_replace(',', '', $tipembti) }}</h2>
                        <p>Jurusan di UKDC yang cocok untuk Anda:</p>
                        @foreach ($jurusan_ukdc as $jukdc)
                        <ul class="theme-list theme-list-light text-white">
                            <li>
                                <p>{{ $jukdc->jurusan }}</p>
                            </li>
                        </ul>
                        @endforeach
                        <p>Jurusan lain yang cocok untuk Anda:</p>
                        @foreach ($jurusan as $jurusan)
                        <ul class="theme-list theme-list-light text-white">
                            <li>
                                <p>{{ $jurusan->nama_jurusan }}</p>
                            </li>
                        </ul>
                        @endforeach
                    </div>
                    <div class="col-lg-6 py-3 wow fadeInRight">
                        <div class="img-fluid text-center">
                            <img src="{{ asset('assets/img/g2.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div> 

    @include('partials.footer')
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    <script src="{{ asset('assets/js/google-maps.js') }}"></script>
</body>

</html>