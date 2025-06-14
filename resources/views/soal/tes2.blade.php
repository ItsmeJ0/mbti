<!DOCTYPE html>
<html lang="en">
@include('partials.nav')

<head>
    <style>
        .custom-radio input[type="radio"]:checked+.custom-control-label::before {
            background-color: #ff5733;
            /* Ubah warna ini sesuai kebutuhan */
            border-color: #ff5733;
        }

        .custom-radio .custom-control-input:not(:checked)+.custom-control-label::before {
            border-color: #ff5733;
            /* Warna border saat tidak dipilih */
        }
    </style>
</head>

<body>
    <div class="back-to-top"></div>
    <!-- Banner info -->
    <div class="page-section banner-info">
        <div class="wrap bg-image" style="background-image: url(../assets/img/bg_pattern2.svg);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 py-3 pr-lg-5 wow fadeInUp">
                        <h2 class="title-section"> Ikuti Tes <br> Jawab Soal Dibawah Ini </h2>
                    </div>
                </div>
            </div>
        </div> <!-- .wrap -->
    </div> <!-- .page-section -->
    <!-- Back to top button -->
    <div class="page-section">
        <div class="container">

            <form action="{{ route('external.actioninputhasil2') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="p15">Anda lebih suka berpikir tentang konsep-konsep abstrak dan ide-ide besar?</label>
                    <br>
                    <label for="p15">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p15-1" name="p15" value="-0.4" required>
                        <label for="p15-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p15-2" name="p15" value="-0.2">
                        <label for="p15-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p15-3" name="p15" value="0">
                        <label for="p15-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p15-4" name="p15" value="0.2">
                        <label for="p15-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p15-5" name="p15" value="0.4">
                        <label for="p15-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p15">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p16">Anda sering membayangkan masa depan dan apa yang mungkin terjadi?</label>
                    <br>
                    <label for="p16">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p16-1" name="p16" value="-0.4" required>
                        <label for="p16-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p16-2" name="p16" value="-0.2">
                        <label for="p16-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p16-3" name="p16" value="0">
                        <label for="p16-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p16-4" name="p16" value="0.2">
                        <label for="p16-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p16-5" name="p16" value="0.4">
                        <label for="p16-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p16">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p17">Anda senang berbicara tentang ide-ide besar dan ide-ide kreatif?</label>
                    <br>
                    <label for="p17">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p17-1" name="p17" value="-0.4" required>
                        <label for="p17-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p17-2" name="p17" value="-0.2">
                        <label for="p17-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p17-3" name="p17" value="0">
                        <label for="p17-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p17-4" name="p17" value="0.2">
                        <label for="p17-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p17-5" name="p17" value="0.4">
                        <label for="p17-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p17">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p18">Apakah Anda merasa lebih baik ketika memikirkan kemungkinan dan peluang di masa depan?</label>
                    <br>
                    <label for="p18">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p18-1" name="p18" value="-0.4" required>
                        <label for="p18-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p18-2" name="p18" value="-0.2">
                        <label for="p18-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p18-3" name="p18" value="0">
                        <label for="p18-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p18-4" name="p18" value="0.2">
                        <label for="p18-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p18-5" name="p18" value="0.4">
                        <label for="p18-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p18">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p19">Apakah Anda dapat merencanakan masa depan dengan hati-hati?</label>
                    <br>
                    <label for="p19">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p19-1" name="p19" value="-0.4" required>
                        <label for="p19-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p19-2" name="p19" value="-0.2">
                        <label for="p19-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p19-3" name="p19" value="0">
                        <label for="p19-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p19-4" name="p19" value="0.2">
                        <label for="p19-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p19-5" name="p19" value="0.4">
                        <label for="p19-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p19">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p20">Apakah Anda senang mencoba ide dan spekulasi?</label>
                    <br>
                    <label for="p20">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p20-1" name="p20" value="-0.4" required>
                        <label for="p20-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p20-2" name="p20" value="-0.2">
                        <label for="p20-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p20-3" name="p20" value="0">
                        <label for="p20-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p20-4" name="p20" value="0.2">
                        <label for="p20-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p20-5" name="p20" value="0.4">
                        <label for="p20-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p20">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p21">Apakah Anda senang membuat rencana jangka panjang?</label>
                    <br>
                    <label for="p21">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p21-1" name="p21" value="-0.4" required>
                        <label for="p21-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p21-2" name="p21" value="-0.2">
                        <label for="p21-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p21-3" name="p21" value="0">
                        <label for="p21-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p21-4" name="p21" value="0.2">
                        <label for="p21-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p21-5" name="p21" value="0.4">
                        <label for="p21-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p21">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p22">Apakah Anda ingin fokus pada hal-hal yang lebih detail dan konkret?</label>
                    <br>
                    <label for="p22">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p22-1" name="p22" value="-0.4" required>
                        <label for="p22-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p22-2" name="p22" value="-0.2">
                        <label for="p22-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p22-3" name="p22" value="0">
                        <label for="p22-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p22-4" name="p22" value="0.2">
                        <label for="p22-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p22-5" name="p22" value="0.4">
                        <label for="p22-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p22">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p23">Apakah Anda ingin menemukan informasi melalui pengalaman dan pengamatan langsung?</label>
                    <br>
                    <label for="p23">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p23-1" name="p23" value="-0.4" required>
                        <label for="p23-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p23-2" name="p23" value="-0.2">
                        <label for="p23-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p23-3" name="p23" value="0">
                        <label for="p23-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p23-4" name="p23" value="0.2">
                        <label for="p23-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p23-5" name="p23" value="0.4">
                        <label for="p23-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p23">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p24">Apakah Anda akan menghadapi situasi yang sudah Anda ketahui sebelumnya?</label>
                    <br>
                    <label for="p24">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p24-1" name="p24" value="-0.4" required>
                        <label for="p24-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p24-2" name="p24" value="-0.2">
                        <label for="p24-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p24-3" name="p24" value="0">
                        <label for="p24-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p24-4" name="p24" value="0.2">
                        <label for="p24-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p24-5" name="p24" value="0.4">
                        <label for="p24-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p24">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p25">Apakah Anda ingin lebih fokus pada apa yang dapat Anda lihat, dengar, atau sentuh?</label>
                    <br>
                    <label for="p25">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p25-1" name="p25" value="-0.4" required>
                        <label for="p25-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p25-2" name="p25" value="-0.2">
                        <label for="p25-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p25-3" name="p25" value="0">
                        <label for="p25-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p25-4" name="p25" value="0.2">
                        <label for="p25-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p25-5" name="p25" value="0.4">
                        <label for="p25-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p25">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p26">Apakah Anda akan merasa lebih nyaman dengan informasi konkret yang sudah ada?</label>
                    <br>
                    <label for="p26">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p26-1" name="p26" value="-0.4" required>
                        <label for="p26-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p26-2" name="p26" value="-0.2">
                        <label for="p26-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p26-3" name="p26" value="0">
                        <label for="p26-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p26-4" name="p26" value="0.2">
                        <label for="p26-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p26-5" name="p26" value="0.4">
                        <label for="p26-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p26">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p27">Apakah Anda tidak ingin hanya mengandalkan data dan bukti yang sudah ada?</label>
                    <br>
                    <label for="p27">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p27-1" name="p27" value="-0.4" required>
                        <label for="p27-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p27-2" name="p27" value="-0.2">
                        <label for="p27-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p27-3" name="p27" value="0">
                        <label for="p27-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p27-4" name="p27" value="0.2">
                        <label for="p27-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p27-5" name="p27" value="0.4">
                        <label for="p27-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p27">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p28">Apakah Anda bersedia mengambil tindakan berdasarkan pengalaman sebelumnya?</label>
                    <br>
                    <label for="p28">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p28-1" name="p28" value="-0.4" required>
                        <label for="p28-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p28-2" name="p28" value="-0.2">
                        <label for="p28-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p28-3" name="p28" value="0">
                        <label for="p28-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p28-4" name="p28" value="0.2">
                        <label for="p28-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p28-5" name="p28" value="0.4">
                        <label for="p28-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p28">Ya</label>
                </div>
                <button type="submit" class="btn btn-primary" name="LANJUTKAN">Lanjut</button>
            </form>
        </div>
    </div>
    </div>
    @include('partials.footer')
</body>

</html>