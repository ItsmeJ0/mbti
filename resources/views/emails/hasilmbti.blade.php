<div style="font-family: Arial, sans-serif; padding: 20px;">
    {{-- Logo --}}
    <div style="text-align: center; margin-bottom: 20px;">
        <img src="http://dcmbti.live/assets/img/icondcmbti.png" alt="DCMBTI" style="height: 80px;">
        <h2 style="margin-top: 10px;">Hasil Tes MBTI Anda</h2>
    </div>

    {{-- Detail Hasil --}}
    <p>Halo, <strong>{{ $nama }}</strong>!</p>
    <p>Berikut adalah hasil tes MBTI kamu:</p>
    <ul>
        <li><strong>Tipe MBTI:</strong> {{ $tipembti }}</li>
    </ul>

    {{-- Jurusan UKDC --}}
    @if($jurusan_ukdc->count())
    <h4>Jurusan yang Tersedia di UKDC:</h4>
    <ul>
        @foreach($jurusan_ukdc as $jur)
        <li>{{ $jur->jurusan }}</li>
        @endforeach
    </ul>

    {{-- Jurusan Umum --}}
    <h4>Rekomendasi Jurusan Umum:</h4>
    <ul>
        @foreach($jurusan as $j)
        <li>{{ $j }}</li>
        @endforeach
    </ul>
    @endif

    <p style="margin-top: 30px;">Terima kasih telah menggunakan aplikasi <strong>DCMBTI</strong>.</p>
    <p>by Jhonatan Laurensius</p>
    <p>Pakar : Ibu Laksmi</p>
</div>