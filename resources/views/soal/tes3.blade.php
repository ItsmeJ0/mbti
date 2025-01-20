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

            <form action="{{ route('external.actioninputhasil3') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="p29">Apakah Anda ingin membuat keputusan berdasarkan logika dan analisis?</label>
                    <br>
                    <label for="p29">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p29-1" name="p29" value="-0.4">
                        <label for="p29-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p29-2" name="p29" value="-0.2">
                        <label for="p29-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p29-3" name="p29" value="0">
                        <label for="p29-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p29-4" name="p29" value="0.2">
                        <label for="p29-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p29-5" name="p29" value="0.4">
                        <label for="p29-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p29">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p30">Apakah Anda dapat memahami masalah dari sudut pandang yang objektif?</label>
                    <br>
                    <label for="p30">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p30-1" name="p30" value="-0.4">
                        <label for="p30-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p30-2" name="p30" value="-0.2">
                        <label for="p30-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p30-3" name="p30" value="0">
                        <label for="p30-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p30-4" name="p30" value="0.2">
                        <label for="p30-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p30-5" name="p30" value="0.4">
                        <label for="p30-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p30">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p31">Apakah Anda dapat menilai keputusan orang lain berdasarkan akal sehat?</label>
                    <br>
                    <label for="p31">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p31-1" name="p31" value="-0.4">
                        <label for="p31-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p31-2" name="p31" value="-0.2">
                        <label for="p31-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p31-3" name="p31" value="0">
                        <label for="p31-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p31-4" name="p31" value="0.2">
                        <label for="p31-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p31-5" name="p31" value="0.4">
                        <label for="p31-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p31">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p32">Apakah Anda dapat memberikan saran berdasarkan logika dan rasionalitas?</label>
                    <br>
                    <label for="p32">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p32-1" name="p32" value="-0.4">
                        <label for="p32-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p32-2" name="p32" value="-0.2">
                        <label for="p32-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p32-3" name="p32" value="0">
                        <label for="p32-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p32-4" name="p32" value="0.2">
                        <label for="p32-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p32-5" name="p32" value="0.4">
                        <label for="p32-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p32">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p33">Apakah Anda sering menimbang pro dan kontra sebelum mengambil keputusan?</label>
                    <br>
                    <label for="p33">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p33-1" name="p33" value="-0.4">
                        <label for="p33-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p33-2" name="p33" value="-0.2">
                        <label for="p33-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p33-3" name="p33" value="0">
                        <label for="p33-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p33-4" name="p33" value="0.2">
                        <label for="p33-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p33-5" name="p33" value="0.4">
                        <label for="p33-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p33">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p34">Apakah Anda selalu fokus pada fakta dan bukti ketika berdebat?</label>
                    <br>
                    <label for="p34">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p34-1" name="p34" value="-0.4">
                        <label for="p34-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p34-2" name="p34" value="-0.2">
                        <label for="p34-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p34-3" name="p34" value="0">
                        <label for="p34-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p34-4" name="p34" value="0.2">
                        <label for="p34-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p34-5" name="p34" value="0.4">
                        <label for="p34-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p34">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p35">Apakah Anda lebih memilih untuk menjaga emosi Anda sendiri?</label>
                    <br>
                    <label for="p35">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p35-1" name="p35" value="-0.4">
                        <label for="p35-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p35-2" name="p35" value="-0.2">
                        <label for="p35-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p35-3" name="p35" value="0">
                        <label for="p35-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p35-4" name="p35" value="0.2">
                        <label for="p35-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p35-5" name="p35" value="0.4">
                        <label for="p35-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p35">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p36">Apakah Anda merasa penting untuk memegang teguh prinsip dan nilai pribadi dalam pengambilan keputusan?</label>
                    <br>
                    <label for="p36">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p36-1" name="p36" value="-0.4">
                        <label for="p36-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p36-2" name="p36" value="-0.2">
                        <label for="p36-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p36-3" name="p36" value="0">
                        <label for="p36-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p36-4" name="p36" value="0.2">
                        <label for="p36-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p36-5" name="p36" value="0.4">
                        <label for="p36-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p36">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p37">Apakah Anda ingin menghindari konflik dan mencoba untuk menjaga perdamaian?</label>
                    <br>
                    <label for="p37">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p37-1" name="p37" value="-0.4">
                        <label for="p37-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p37-2" name="p37" value="-0.2">
                        <label for="p37-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p37-3" name="p37" value="0">
                        <label for="p37-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p37-4" name="p37" value="0.2">
                        <label for="p37-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p37-5" name="p37" value="0.4">
                        <label for="p37-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p37">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p38">Apakah Anda merasa lebih baik ketika Anda dapat mengekspresikan emosi Anda secara terbuka?</label>
                    <br>
                    <label for="p38">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p38-1" name="p38" value="-0.4">
                        <label for="p38-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p38-2" name="p38" value="-0.2">
                        <label for="p38-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p38-3" name="p38" value="0">
                        <label for="p38-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p38-4" name="p38" value="0.2">
                        <label for="p38-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p38-5" name="p38" value="0.4">
                        <label for="p38-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p38">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p39">Apakah Anda sering merasa sulit untuk mengendalikan emosi Anda dalam situasi yang menantang?</label>
                    <br>
                    <label for="p39">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p39-1" name="p39" value="-0.4">
                        <label for="p39-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p39-2" name="p39" value="-0.2">
                        <label for="p39-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p39-3" name="p39" value="0">
                        <label for="p39-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p39-4" name="p39" value="0.2">
                        <label for="p39-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p39-5" name="p39" value="0.4">
                        <label for="p39-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p39">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p40">Apakah Anda akan membuat keputusan yang akan menguntungkan banyak orang daripada satu orang?</label>
                    <br>
                    <label for="p40">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p40-1" name="p40" value="-0.4">
                        <label for="p40-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p40-2" name="p40" value="-0.2">
                        <label for="p40-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p40-3" name="p40" value="0">
                        <label for="p40-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p40-4" name="p40" value="0.2">
                        <label for="p40-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p40-5" name="p40" value="0.4">
                        <label for="p40-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p40">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p41">Apakah penting bagi Anda untuk mempertimbangkan perasaan orang lain dalam mengambil keputusan?</label>
                    <br>
                    <label for="p41">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p41-1" name="p41" value="-0.4">
                        <label for="p41-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p41-2" name="p41" value="-0.2">
                        <label for="p41-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p41-3" name="p41" value="0">
                        <label for="p41-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p41-4" name="p41" value="0.2">
                        <label for="p41-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p41-5" name="p41" value="0.4">
                        <label for="p41-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p41">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p42">Apakah Anda ingin mencari solusi yang akan membuat semua orang bahagia?</label>
                    <br>
                    <label for="p42">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p42-1" name="p42" value="-0.4">
                        <label for="p42-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p42-2" name="p42" value="-0.2">
                        <label for="p42-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p42-3" name="p42" value="0">
                        <label for="p42-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p42-4" name="p42" value="0.2">
                        <label for="p42-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p42-5" name="p42" value="0.4">
                        <label for="p42-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p42">Ya</label>
                </div>
                <button type="submit" class="btn btn-primary" name="LANJUTKAN">Lanjut</button>
            </form>
        </div>
    </div>
    </div>
    @include('partials.footer')
</body>

</html>