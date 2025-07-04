<!DOCTYPE html>
<html lang="en">

<body>
    @include('partials.nav')
    <header>
        <div class="container">
            <div class="page-banner home-banner">
                <div class="row align-items-center flex-wrap-reverse h-100">
                    <div class="col-md-6 py-5 wow fadeInLeft">
                        <h1 class="mb-4">Lengkapi Data Mu!</h1>
                        <form id="myForm" method="POST" action="{{ route('external.actioninputnama') }}">
                            @csrf
                            <p class="text-lg text-grey">Nama :</p>
                            <input type="text" class="text-lg text-grey mb-5" name="nama" required>
                            <p class="text-lg text-grey">Email :</p>
                            <input type="text" class="text-lg text-grey mb-5" name="email" required></br>
                            <button type="submit" class="btn btn-primary btn" name="submit">Mulai Test</button>
                        </form>
                    </div>
                    <div class="col-md-6 py-5 wow zoomIn">
                        <div class="img-fluid text-center">
                            <img src="{{ asset('assets/img/g1.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @include('partials.footer')
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
</body>

</html>