<!DOCTYPE html>
<html lang="en">
<style>
    .highlight-ukdc {
        background-color: rgba(255, 255, 255, 0.2);
        border-left: 4px solid #FFD700;
        /* warna emas */
        padding-left: 10px;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }

    .highlight-ukdc:hover {
        background-color: rgba(255, 255, 255, 0.3);
    }

    .a {
        color: white;
    }
</style>

<body>
    @include('partials.nav')
    <div class="back-to-top"></div>
    <div class="page-section banner-info">
        <div class="wrap bg-image">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 py-3 pr-lg-5 wow fadeInUp">
                        <h2 class="title-section">Halo, {{ $namaUser }}!</h2>
                        <h3 class="title-section"> kepribadian Anda adalah
                            <strong>{{ str_replace(',', '', $tipembti) }}</strong>
                        </h3>
                        <p>{{ $penjelasanTipe }}</p>
                        <h3>Jurusan di UKDC yang cocok untuk Anda:</h3>
                        @foreach ($jurusan_ukdc as $jukdc)
                        <ul class="theme-list theme-list-light text-white">
                            <li class="highlight-ukdc">
                                <p><strong>{{ $jukdc->jurusan }}</strong></p>
                            </li>
                        </ul>
                        @endforeach
                        <h3>Jurusan lain yang cocok untuk Anda:</h3>
                        @foreach ($jurusan as $nama_jurusan)
                        <ul class="theme-list theme-list-light text-white">
                            <li>
                                <p>{{ $nama_jurusan }}</p>
                            </li>
                        </ul>
                        @endforeach                        
                    </div>
                    <div class="col-lg-6 py-3 wow fadeInRight">
                        <div class="img-fluid text-center">
                            <div style="background-color: white; padding: 20px; border-radius: 10px;">
                                <canvas id="radarChart" width="400" height="400"></canvas>
                            </div>
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('radarChart').getContext('2d');
        const data = {
            labels: [
                'Introvert (I)', 'Extrovert (E)',
                'Sensing (S)', 'Intuition (N)',
                'Thinking (T)', 'Feeling (F)',
                'Judging (J)', 'Perceiving (P)'
            ],
            datasets: [{
                label: 'Kecenderungan MBTI',
                data: @json($dataChart),
                backgroundColor: 'rgba(107, 56, 231, 0.2)',
                pointBackgroundColor: 'rgba(107, 56, 231, 1)',
                borderColor: 'rgba(107, 56, 231, 1)',
                borderWidth: 4
            }]
        };
        const config = {
            type: 'radar',
            data: data,
            options: {
                scales: {
                    r: {
                        beginAtZero: true,
                        suggestedMax: 10,
                    }
                }
            }
        };
        const radarChart = new Chart(ctx, config);
    </script>
</body>
</html>