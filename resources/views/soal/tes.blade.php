<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .custom-radio input[type="radio"]:checked+.custom-control-label::before {
            background-color: #ff5733;
            border-color: #ff5733;
        }

        .custom-radio .custom-control-input:not(:checked)+.custom-control-label::before {
            border-color: #ff5733;
        }
    </style>
</head>

<body>
    @include('partials.nav')
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
        </div>
    </div>
    <div class="page-section"><!-- section untuk halaman soal MBTI -->
        <div class="container">
            <form action="{{ route('external.actioninputhasil') }}" method="POST">
                @csrf
                @foreach($questions as $question)
                <div class="form-group">
                    <label >{{ $question->kode }} : </label>
                    <label for="{{ $question->kode }}">{{ $question->teks_soal }}</label>
                    <br>
                    <label>Tidak</label>
                    @for($i = 1; $i <= 5; $i++)
                        @php
                        $value=match($i) {
                        1=> -0.4,
                        2 => -0.2,
                        3 => 0,
                        4 => 0.2,
                        5 => 0.4,
                        };
                        @endphp
                        <div class="custom-control custom-radio d-inline-block mr-3">
                            <input class="custom-control-input"
                                type="radio"
                                id="{{ $question->kode }}-{{ $i }}"
                                name="{{ $question->kode }}"
                                value="{{ $value }}"
                                @if($i===1) required @endif>
                            <label for="{{ $question->kode }}-{{ $i }}" class="custom-control-label">{{ $i }}</label>
                        </div>
                        @endfor
                        <label>Ya</label>
                </div>
                @endforeach
                <!-- <div class="form-group">
                    <label for="p1">Apakah Anda merasa kehabisan energi setelah berada di tengah kerumunan orang banyak?</label>
                    <br>
                    <label for="p1">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p1-1" name="p1" value="-0.4" required>
                        <label for="p1-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p1-2" name="p1" value="-0.2">
                        <label for="p1-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p1-3" name="p1" value="0">
                        <label for="p1-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p1-4" name="p1" value="0.2">
                        <label for="p1-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p1-5" name="p1" value="0.4">
                        <label for="p1-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p1">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p2">Apakah Anda merasa lebih tenang dan nyaman saat berada di tempat yang tidak ramai?</label>
                    <br>
                    <label for="p2">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p2-1" name="p2" value="-0.4" required>
                        <label for="p2-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p2-2" name="p2" value="-0.2">
                        <label for="p2-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p2-3" name="p2" value="0">
                        <label for="p2-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p2-4" name="p2" value="0.2">
                        <label for="p2-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p2-5" name="p2" value="0.4">
                        <label for="p2-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p2">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p3">Apakah Anda lebih suka berbicara dengan satu orang atau lebih dekat dengan orang lain daripada banyak orang?</label>
                    <br>
                    <label for="p3">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p3-1" name="p3" value="-0.4" required>
                        <label for="p3-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p3-2" name="p3" value="-0.2">
                        <label for="p3-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p3-3" name="p3" value="0">
                        <label for="p3-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p3-4" name="p3" value="0.2">
                        <label for="p3-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p3-5" name="p3" value="0.4">
                        <label for="p3-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p3">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p4">Apakah Anda lebih suka mempertimbangkan dan merefleksikan diri sebelum berbicara?</label>
                    <br>
                    <label for="p4">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p4-1" name="p4" value="-0.4" required>
                        <label for="p4-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p4-2" name="p4" value="-0.2">
                        <label for="p4-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p4-3" name="p4" value="0">
                        <label for="p4-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p4-4" name="p4" value="0.2">
                        <label for="p4-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p4-5" name="p4" value="0.4">
                        <label for="p4-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p4">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p5">Apakah Anda lebih suka berbicara dengan orang lain daripada secara langsung?</label>
                    <br>
                    <label for="p5">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p5-1" name="p5" value="-0.4" required>
                        <label for="p5-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p5-2" name="p5" value="-0.2">
                        <label for="p5-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p5-3" name="p5" value="0">
                        <label for="p5-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p5-4" name="p5" value="0.2">
                        <label for="p5-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p5-5" name="p5" value="0.4">
                        <label for="p5-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p5">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p6">Apakah Anda lebih suka menghabiskan waktu sendirian di rumah?</label>
                    <br>
                    <label for="p6">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p6-1" name="p6" value="-0.4" required>
                        <label for="p6-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p6-2" name="p6" value="-0.2">
                        <label for="p6-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p6-3" name="p6" value="0">
                        <label for="p6-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p6-4" name="p6" value="0.2">
                        <label for="p6-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p6-5" name="p6" value="0.4">
                        <label for="p6-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p6">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p7">Apakah Anda lebih nyaman berbicara dengan teman dekat daripada orang yang baru saja Anda temui?</label>
                    <br>
                    <label for="p7">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p7-1" name="p7" value="-0.4" required>
                        <label for="p7-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p7-2" name="p7" value="-0.2">
                        <label for="p7-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p7-3" name="p7" value="0">
                        <label for="p7-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p7-4" name="p7" value="0.2">
                        <label for="p7-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p7-5" name="p7" value="0.4">
                        <label for="p7-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p7">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p8">Anda suka bergaul dengan banyak teman di acara-acara sosial?</label>
                    <br>
                    <label for="p8">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p8-1" name="p8" value="-0.4" required>
                        <label for="p8-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p8-2" name="p8" value="-0.2">
                        <label for="p8-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p8-3" name="p8" value="0">
                        <label for="p8-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p8-4" name="p8" value="0.2">
                        <label for="p8-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p8-5" name="p8" value="0.4">
                        <label for="p8-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p8">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p9">Anda merasa lebih bersemangat saat berada di tengah keramaian?</label>
                    <br>
                    <label for="p9">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p9-1" name="p9" value="-0.4" required>
                        <label for="p9-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p9-2" name="p9" value="-0.2">
                        <label for="p9-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p9-3" name="p9" value="0">
                        <label for="p9-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p9-4" name="p9" value="0.2">
                        <label for="p9-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p9-5" name="p9" value="0.4">
                        <label for="p9-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p9">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p10">Anda sering mencari kegiatan yang melibatkan interaksi sosial?</label>
                    <br>
                    <label for="p10">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p10-1" name="p10" value="-0.4" required>
                        <label for="p10-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p10-2" name="p10" value="-0.2">
                        <label for="p10-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p10-3" name="p10" value="0">
                        <label for="p10-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p10-4" name="p10" value="0.2">
                        <label for="p10-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p10-5" name="p10" value="0.4">
                        <label for="p10-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p10">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p11">Anda merasa senang jika ada interaksi sosial setiap hari?</label>
                    <br>
                    <label for="p11">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p11-1" name="p11" value="-0.4" required>
                        <label for="p11-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p11-2" name="p11" value="-0.2">
                        <label for="p11-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p11-3" name="p11" value="0">
                        <label for="p11-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p11-4" name="p11" value="0.2">
                        <label for="p11-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p11-5" name="p11" value="0.4">
                        <label for="p11-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p11">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p12">Anda suka berdiskusi dengan kelompok-kelompok besar tentang topik-topik yang menarik?</label>
                    <br>
                    <label for="p12">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p12-1" name="p12" value="-0.4" required>
                        <label for="p12-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p12-2" name="p12" value="-0.2">
                        <label for="p12-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p12-3" name="p12" value="0">
                        <label for="p12-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p12-4" name="p12" value="0.2">
                        <label for="p12-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p12-5" name="p12" value="0.4">
                        <label for="p12-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p12">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p13">Apakah Anda merasa lebih antusias dalam kegiatan yang melibatkan banyak orang?</label>
                    <br>
                    <label for="p13">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p13-1" name="p13" value="-0.4" required>
                        <label for="p13-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p13-2" name="p13" value="-0.2">
                        <label for="p13-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p13-3" name="p13" value="0">
                        <label for="p13-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p13-4" name="p13" value="0.2">
                        <label for="p13-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p13-5" name="p13" value="0.4">
                        <label for="p13-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p13">Ya</label>
                </div>
                <div class="form-group">
                    <label for="p14">Apakah Anda merasa terisi ketika berinteraksi dengan banyak orang?</label>
                    <br>
                    <label for="p14">Tidak</label>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input" type="radio" id="p14-1" name="p14" value="-0.4" required>
                        <label for="p14-1" class="custom-control-label">1 </label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p14-2" name="p14" value="-0.2">
                        <label for="p14-2" class="custom-control-label">2</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p14-3" name="p14" value="0">
                        <label for="p14-3" class="custom-control-label">3</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p14-4" name="p14" value="0.2">
                        <label for="p14-4" class="custom-control-label">4</label>
                    </div>
                    <div class="custom-control custom-radio d-inline-block mr-3">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="p14-5" name="p14" value="0.4">
                        <label for="p14-5" class="custom-control-label">5</label>
                    </div>
                    <label for="p14">Ya</label>
                </div> -->


                <button type="submit" class="btn btn-primary" name="LANJUTKAN">Lanjut</button>
            </form>
        </div>
    </div>
    </div>
    @include('partials.footer')
</body>

</html>