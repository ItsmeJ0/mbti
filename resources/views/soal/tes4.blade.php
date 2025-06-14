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

            <form action="{{ route('external.actioninputhasil4') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="p43">Apakah Anda ingin merencanakan aktivitas Anda dengan hati-hati?</label>
                    <br>
                    <label for="p43">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p43-1" name="p43" value="-0.4" required>
                        <label for="p43-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p43-2" name="p43" value="-0.2">
                        <label for="p43-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p43-3" name="p43" value="0">
                        <label for="p43-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p43-4" name="p43" value="0.2">
                        <label for="p43-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p43-5" name="p43" value="0.4">
                        <label for="p43-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p43">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p44">Apakah Anda merasa lebih baik ketika Anda memiliki jadwal yang terstruktur?</label>
                    <br>
                    <label for="p44">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p44-1" name="p44" value="-0.4" required>
                        <label for="p44-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p44-2" name="p44" value="-0.2">
                        <label for="p44-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p44-3" name="p44" value="0">
                        <label for="p44-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p44-4" name="p44" value="0.2">
                        <label for="p44-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p44-5" name="p44" value="0.4">
                        <label for="p44-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p44">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p45">Apakah Anda akan menyelesaikan tugas sebelum tenggat waktu?</label>
                    <br>
                    <label for="p45">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p45-1" name="p45" value="-0.4" required>
                        <label for="p45-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p45-2" name="p45" value="-0.2">
                        <label for="p45-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p45-3" name="p45" value="0">
                        <label for="p45-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p45-4" name="p45" value="0.2">
                        <label for="p45-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p45-5" name="p45" value="0.4">
                        <label for="p45-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p45">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p46">Apakah Anda merasa tertekan ketika rencana Anda terganggu?</label>
                    <br>
                    <label for="p46">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p46-1" name="p46" value="-0.4" required>
                        <label for="p46-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p46-2" name="p46" value="-0.2">
                        <label for="p46-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p46-3" name="p46" value="0">
                        <label for="p46-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p46-4" name="p46" value="0.2">
                        <label for="p46-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p46-5" name="p46" value="0.4">
                        <label for="p46-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p46">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p47">Apakah Anda ingin membuat daftar dan tujuan jangka panjang?</label>
                    <br>
                    <label for="p47">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p47-1" name="p47" value="-0.4" required>
                        <label for="p47-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p47-2" name="p47" value="-0.2">
                        <label for="p47-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p47-3" name="p47" value="0">
                        <label for="p47-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p47-4" name="p47" value="0.2">
                        <label for="p47-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p47-5" name="p47" value="0.4">
                        <label for="p47-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p47">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p48">Apakah Anda memiliki rutinitas dan kebiasaan yang konsisten?</label>
                    <br>
                    <label for="p48">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p48-1" name="p48" value="-0.4" required>
                        <label for="p48-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p48-2" name="p48" value="-0.2">
                        <label for="p48-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p48-3" name="p48" value="0">
                        <label for="p48-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p48-4" name="p48" value="0.2">
                        <label for="p48-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p48-5" name="p48" value="0.4">
                        <label for="p48-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p48">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p49">Apakah Anda ingin menjadi fleksibel dan dapat berubah?</label>
                    <br>
                    <label for="p49">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p49-1" name="p49" value="-0.4" required>
                        <label for="p49-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p49-2" name="p49" value="-0.2">
                        <label for="p49-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p49-3" name="p49" value="0">
                        <label for="p49-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p49-4" name="p49" value="0.2">
                        <label for="p49-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p49-5" name="p49" value="0.4">
                        <label for="p49-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p49">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p50">Apakah Anda akan menjalani hari tanpa rencana khusus?</label>
                    <br>
                    <label for="p50">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p50-1" name="p50" value="-0.4" required>
                        <label for="p50-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p50-2" name="p50" value="-0.2">
                        <label for="p50-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p50-3" name="p50" value="0">
                        <label for="p50-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p50-4" name="p50" value="0.2">
                        <label for="p50-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p50-5" name="p50" value="0.4">
                        <label for="p50-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p50">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p51">Apakah Anda merasa nyaman dengan ketidakpastian dan perubahan dalam hidup?</label>
                    <br>
                    <label for="p51">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p51-1" name="p51" value="-0.4" required>
                        <label for="p51-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p51-2" name="p51" value="-0.2">
                        <label for="p51-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p51-3" name="p51" value="0">
                        <label for="p51-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p51-4" name="p51" value="0.2">
                        <label for="p51-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p51-5" name="p51" value="0.4">
                        <label for="p51-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p51">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p52">Apakah Anda senang beradaptasi dengan perubahan yang terjadi secara tiba-tiba?</label>
                    <br>
                    <label for="p52">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p52-1" name="p52" value="-0.4" required>
                        <label for="p52-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p52-2" name="p52" value="-0.2">
                        <label for="p52-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p52-3" name="p52" value="0">
                        <label for="p52-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p52-4" name="p52" value="0.2">
                        <label for="p52-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p52-5" name="p52" value="0.4">
                        <label for="p52-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p52">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p53">Apakah Anda akan tetap hidup tanpa rencana yang pasti?</label>
                    <br>
                    <label for="p53">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p53-1" name="p53" value="-0.4" required>
                        <label for="p53-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p53-2" name="p53" value="-0.2">
                        <label for="p53-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p53-3" name="p53" value="0">
                        <label for="p53-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p53-4" name="p53" value="0.2">
                        <label for="p53-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p53-5" name="p53" value="0.4">
                        <label for="p53-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p53">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p54">Apakah Anda merasa lebih baik ketika Anda dapat membuat keputusan secara spontan?</label>
                    <br>
                    <label for="p54">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p54-1" name="p54" value="-0.4" required>
                        <label for="p54-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p54-2" name="p54" value="-0.2">
                        <label for="p54-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p54-3" name="p54" value="0">
                        <label for="p54-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p54-4" name="p54" value="0.2">
                        <label for="p54-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p54-5" name="p54" value="0.4">
                        <label for="p54-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p54">Ya</label>
                </div>
                <button type="submit" class="btn btn-primary" name="LANJUTKAN">Lanjut</button>
            </form>
        </div>
    </div>
    </div>
    @include('partials.footer')
</body>

</html>