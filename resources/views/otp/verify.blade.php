<!DOCTYPE html>
<html lang="en">

<body>
    @include('partials.nav')
    <header>
        <div class="container">
            <div class="page-banner home-banner">
                <div class="row align-items-center flex-wrap-reverse h-100">
                    <div class="col-md-6 py-5 wow fadeInLeft">
                        <h1 class="mb-4">Verifikasi OTP</h1>
                        @if($errors->any())
                        <p style="color:red">{{ $errors->first() }}</p>
                        @endif

                        <form method="POST" action="{{ route('otp.verify') }}">
                            @csrf
                            <input type="hidden" name="email" value="{{ session('email') }}">
                            <input type="hidden" name="pengguna_id" value="{{ session('pengguna_id') }}">
                            <label for="otp">Masukkan Kode OTP:</label>
                            <input type="text" name="otp" maxlength="6" required>
                            <button type="submit" class="btn btn-primary btn" name="submit">Verifikasi</button>

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