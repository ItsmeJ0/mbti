<?php

if (isset($_POST['submit'])) {
    if (empty($_POST['nama'])) {
        $message[] = 'Masukan Nama!';
    } else {
        $nama = mysqli_real_escape_string($conn1, $_POST['nama']);
        $E = 0;
        $I = 0;
        $N = 0;
        $S = 0;
        $T = 0;
        $F = 0;
        $J = 0;
        $P = 0;
        $hasil = 0;
        $result = mysqli_query($conn1, "INSERT INTO `user` (nama, E, I, N, S, T, F, J, P, hasil) VALUES ('$nama', '$E', '$I', '$N', '$S', '$T', '$F', '$J', '$P',  '$hasil')");
        if ($result) {
            $_SESSION['nama'] = $nama;
            header('location: tes.php');
        } else {
            echo "Error: " . mysqli_error($conn1);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<body>

    @include('partials.nav')
    <header>
        <div class="container">
            <div class="page-banner home-banner">
                <div class="row align-items-center flex-wrap-reverse h-100">
                    <div class="col-md-6 py-5 wow fadeInLeft">
                        <h1 class="mb-4">Masukan Nama Kamu!</h1>
                        <form id="myForm" method="POST" action="{{ route('external.actioninputnama') }}">
                            @csrf
                            <input type="text" class="text-lg text-grey mb-5" name="nama"></br>
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