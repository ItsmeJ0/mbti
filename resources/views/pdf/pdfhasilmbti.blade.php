<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: sans-serif;
            font-size: 12px;
        }

        h2 {
            text-align: center;
        }

        ul {
            padding-left: 15px;
        }
    </style>
</head>

<body>
    <div style="text-align: center; margin-bottom: 20px;">
        <img src="{{ public_path('assets/img/icondcmbti.png') }}" alt="DCMBTI" style="height: 80px;">
    </div>
    <h2>Hasil Tes MBTI - {{ $nama }}</h2>

    <p><strong>Tipe Kepribadian:</strong> {{ $tipe }}</p>

    @if($chartImage)
    <div style="text-align: center; margin: 20px 0;">
        <img src="data:image/png;base64,{{ $chartImage }}" width="400" />
    </div>
    @endif

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
</body>

</html>