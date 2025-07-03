<?php

namespace App\Http\Controllers;

use App\Mail\HasilMbtiMail;
use App\Mail\HasilMbtiWithPdf;
use App\Models\HasilMBTI;
use App\Models\Jurusan;
use App\Models\Jurusan_ukdc;
use App\Models\Pengguna;
use App\Models\PenjelasanTipeMBTI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class HasilTestController extends Controller
{
    //
    // Dalam HasilTestController
    public function index()
    {
        $pengguna_id = session('pengguna_id');
        $user = DB::table('pengguna')->where('id', $pengguna_id)->first();

        if ($user) {
            $kesimpulan = $this->tentukanKepribadian($user);

            if (empty($kesimpulan)) {
                return "Tidak dapat menentukan tipe kepribadian.";
            } else {
                $tipembti = implode('', $kesimpulan);

                // Update hasil ke dalam tabel pengguna
                DB::table('pengguna')->where('id', $pengguna_id)->update(['hasil' => $tipembti]);
                // $rules = [
                //     'ENFJ' => ['Periklanan', 'Seni', 'Pelatihan Atletik', 'Administrasi Bisnis', 'Ilmu Komunikasi', 'Psikologi Konseling', 'Peradilan Pidana dan Kriminologi', 'Pendidikan', 'Bahasa Inggris', 'Manajemen Kewirausahaan', 'Desain Lingkungan', 'Studi Keluarga', 'Manajemen Seni Grafis', 'Ilmu Kesehatan', 'Manajemen Perhotelan dan Makanan', 'Manajemen Sumber Daya Manusia', 'Desain Interior', 'Jurnalistik', 'Pemasaran', 'Media', 'Bahasa Modern', 'Musik', 'Nutrisi dan Dietetika', 'Ilmu Politik', 'Psikologi', 'Hubungan Masyarakat', 'Studi Agama', 'Pekerjaan Sosial', 'Sosiologi', 'Patologi Wicara-Bahasa', 'Teater', 'Perencanaan dan Pengembangan Kota'],
                //     'ENFP' => ['Ilmu Aktuaria', 'Periklanan', 'Antropologi', 'Desain Pakaian', 'Seni', 'Pelatihan Atletik', 'Administrasi Bisnis', 'Kimia', 'Spesialis Kehidupan Anak', 'Ilmu Komputer', 'Psikologi Konseling', 'Hukum Pidana dan Kriminologi', 'Nutrisi dan Dietetika', 'Pendidikan (Dasar atau Menengah)', 'Bahasa Inggris', 'Desain Lingkungan', 'Perencanaan Kota', 'Ilmu Keolahragaan', 'Merchandising Fashion', 'Manajemen Perhotelan dan Makanan', 'Manajemen Seni Grafis', 'Desain Interior', 'Jurnalisme', 'Ilmu Hukum', 'Manajemen', 'Pemasaran', 'Media', 'Teknologi Medis', 'Bahasa Modern', 'Manajemen Sumber Daya Alam dan Lingkungan', 'Pendidikan Kesehatan dan Jasmani', 'Ilmu Politik', 'Pra-Hukum', 'Psikologi', 'Hubungan Masyarakat', 'Studi Agama', 'Manajemen Risiko dan Asuransi', 'Pekerjaan Sosial', 'Sosiologi', 'Patologi Wicara-Bahasa', 'Teater'],
                //     'ENTJ' => ['Akuntansi', 'Periklanan', 'Antropologi', 'Arsitektur', 'Seni', 'Biologi', 'Administrasi Bisnis', 'Teknologi Informasi Bisnis', 'Kimia', 'Sistem Informasi Komputer', 'Manajemen Konstruksi', 'Hukum Pidana dan Kriminologi', 'Ekonomi (Bisnis)', 'Pendidikan (Menengah)', 'Keuangan', 'Manajemen Makanan', 'Manajemen Perhotelan', 'Manajemen Sumber Daya Manusia', 'Bisnis Internasional', 'Jurnalisme', 'Ilmu Hukum', 'Pemasaran', 'Ilmu Politik', 'Pra-Dokter Gigi', 'Pra-Hukum', 'Pra-Medis', 'Psikologi', 'Studi Agama', 'Sosiologi', 'Teater'],
                //     'ENTP' => ['Akuntansi', 'Arsitektur', 'Biologi', 'Administrasi Bisnis', 'Ilmu Komputer', 'Sistem Informasi Komputer', 'Manajemen Konstruksi', 'Hukum Pidana dan Kriminologi', 'Ilmu Pengetahuan Bumi/Antariksa', 'Pendidikan', 'Bahasa Inggris', 'Ilmu Keolahragaan', 'Keuangan', 'Geologi', 'Pendidikan dan Promosi Kesehatan', 'Teknologi Industri', 'Sistem Informasi', 'Jurnalisme', 'Arsitektur Lanskap', 'Ilmu Hukum', 'Manajemen Logistik dan Rantai Pasokan', 'Teknologi Medis', 'Pengelolaan Sumber Daya Alam dan Lingkungan', 'Keperawatan', 'Pra-Dokter Gigi', 'Pra-Hukum', 'Pra-Medis', 'Manajemen Properti Perumahan', 'Manajemen Risiko dan Asuransi'],
                //     'ESFJ' => ['Akuntansi', 'Pelatihan Atletik', 'Administrasi Bisnis', 'Kimia', 'Spesialis Kehidupan Anak', 'Psikologi Konseling', 'Hukum Pidana dan Kriminologi', 'Dietetika', 'Pendidikan', 'Ilmu Keolahragaan', 'Studi Keluarga', 'Keuangan', 'Manajemen Makanan', 'Ilmu Kesehatan', 'Manajemen Perhotelan', 'Ilmu Hukum', 'Manajemen Logistik dan Rantai Pasokan', 'Pemasaran', 'Teknologi Medis', 'Bahasa Modern', 'Manajemen Sumber Daya Alam dan Lingkungan', 'Keperawatan', 'Pendidikan Jasmani', 'Pra-Dokter Gigi', 'Pra-Hukum', 'Pra-Kedokteran', 'Psikologi', 'Hubungan Masyarakat', 'Studi Agama', 'Manajemen Properti Perumahan', 'Manajemen Risiko dan Asuransi', 'Pekerjaan Sosial', 'Patologi Wicara-Bahasa', 'Teater'],
                //     'ESFP' => ['Seni', 'Pelatihan Atletik', 'Spesialis Kehidupan Anak', 'Psikologi Konseling', 'Peradilan Pidana dan Kriminologi', 'Pertunjukan Tari', 'Dietetika', 'Pendidikan', 'Ilmu Keolahragaan', 'Studi Keluarga', 'Manajemen Makanan', 'Geologi', 'Ilmu Kesehatan', 'Manajemen Perhotelan', 'Manajemen Sumber Daya Manusia', 'Desain Interior', 'Arsitektur Lanskap', 'Ilmu Hukum', 'Manajemen Logistik dan Rantai Pasokan', 'Media', 'Musik', 'Pengelolaan Sumber Daya Alam dan Lingkungan', 'Keperawatan', 'Pendidikan Jasmani', 'Ilmu Politik', 'Pra-Dokter Gigi', 'Pra-Hukum', 'Pra-Medis', 'Psikologi', 'Hubungan Masyarakat', 'Manajemen Risiko dan Asuransi', 'Pekerjaan Sosial', 'Sosiologi', 'Patologi Wicara-Bahasa', 'Teater'],
                //     'ESTJ' => ['Akuntansi', 'Ilmu Aktuaria', 'Pelatihan Atletik', 'Administrasi Bisnis', 'Teknologi Informasi Bisnis', 'Manajemen Konstruksi', 'Peradilan Pidana dan Kriminologi', 'Keuangan', 'Manajemen Makanan', 'Manajemen Perhotelan', 'Teknologi Industri', 'Ilmu Hukum', 'Teknologi Teknik Mesin', 'Produksi dan Industri Media Musik', 'Ilmu Politik', 'Pra-Dokter Gigi', 'Pra-Medis', 'Hubungan Masyarakat', 'Studi Agama', 'Manajemen Properti Perumahan', 'Manajemen Risiko dan Asuransi', 'Pendidikan Menengah', 'Pekerjaan Sosial'],
                //     'ESTP' => ['Seni', 'Pelatihan Atletik', 'Biologi', 'Ilmu Komputer', 'Sistem Informasi Komputer', 'Manajemen Konstruksi', 'Peradilan Pidana dan Kriminologi', 'Pertunjukan Tari', 'Pendidikan (Bidang Industri/Teknik)', 'Manajemen Kewirausahaan', 'Ilmu Keolahragaan', 'Keuangan', 'Manajemen Makanan', 'Teknologi Industri', 'Sistem Informasi', 'Jurnalisme', 'Arsitektur Lanskap', 'Pemasaran', 'Teknologi Teknik Mesin', 'Media', 'Teknologi Medis', 'Musik', 'Pengelolaan Sumber Daya Alam dan Lingkungan', 'Pra-Medis', 'Manajemen Properti Perumahan', 'Manajemen Risiko dan Asuransi', 'Telekomunikasi', 'Teater'],
                //     'INFJ' => ['Periklanan', 'Arsitektur', 'Seni', 'Pelatihan Atletik', 'Ilmu Komunikasi', 'Psikologi Konseling', 'Peradilan Pidana dan Kriminologi', 'Pertunjukan Tari', 'Dietetika', 'Pendidikan', 'Bahasa Inggris', 'Desain Lingkungan', 'Ilmu Keolahragaan', 'Studi Keluarga', 'Studi Industri Fashion', 'Manajemen Seni Grafis', 'Ilmu Gizi dan Kesehatan', 'Sejarah', 'Manajemen Sumber Daya Manusia', 'Desain Interior', 'Jurnalisme', 'Arsitektur Lanskap', 'Studi Amerika Latin', 'Studi Hukum', 'Pemasaran', 'Teknologi Medis', 'Media', 'Produksi dan Industri Media Musik', 'Pengelolaan Sumber Daya Alam dan Lingkungan', 'Keperawatan', 'Pendidikan Kesehatan dan Jasmani', 'Pra-Dokter Gigi', 'Pra-Hukum', 'Pra-Kedokteran', 'Psikologi', 'Hubungan Masyarakat', 'Studi Agama', 'Pekerjaan Sosial', 'Sosiologi', 'Patologi Wicara-Bahasa', 'Teater', 'Perencanaan dan Pengembangan Kota'],
                //     'INFP' => ['Desain Pakaian', 'Arsitektur', 'Seni', 'Pelatihan Atletik', 'Biologi', 'Administrasi Bisnis', 'Psikologi Konseling', 'Dietetika', 'Pendidikan', 'Bahasa Inggris', 'Studi Keluarga', 'Perdagangan Mode', 'Manajemen Seni Grafis', 'Sejarah', 'Manajemen Sumber Daya Manusia', 'Desain Interior', 'Jurnalistik', 'Arsitektur Lanskap', 'Ilmu Hukum', 'Teknologi Medis', 'Bahasa Modern', 'Musik', 'Keperawatan', 'Filsafat', 'Pra-Hukum', 'Psikologi', 'Studi Agama', 'Pekerjaan Sosial', 'Sosiologi', 'Patologi Bicara-Bahasa', 'Teater'],
                //     'INTJ' => ['Insinyur Kedirgantaraan', 'Animator', 'Antropolog', 'Arsitek', 'Seniman', 'Pengarsip', 'Astronom', 'Pengacara', 'Auditor', 'Insinyur Penyiaran', 'Analis Anggaran', 'Analis Bisnis', 'Ahli jantung', 'Teknisi Kardiovaskular', 'Insinyur Kimia', 'Insinyur Sipil', 'Profesor Perguruan Tinggi', 'Insinyur Komputer', 'Programmer Komputer', 'Analis Sistem Komputer', 'Petugas Pemasyarakatan', 'Analis Kredit', 'Kurator', 'Administrator Basis Data', 'Dokter Gigi', 'Ekonom', 'Teknisi Listrik/Teknisi Elektronika', 'Analis Keuangan', 'Desainer Grafis', 'Manajer Sumber Daya Manusia', 'Hakim', 'Ahli Matematika', 'Musisi', 'Administrator Jaringan', 'Insinyur Nuklir', 'Apoteker', 'Fotografer', 'Fisikawan', 'Pilot', 'Psikolog', 'Penilai Real Estat', 'Ahli Bedah', 'Administrator Sistem', 'Analis Sistem', 'Guru', 'Pengembang Web'],
                //     'INTP' => ['Antropologi', 'Arsitektur', 'Seni', 'Biokimia', 'Biologi', 'Administrasi Bisnis', 'Teknologi Informasi Bisnis', 'Kimia', 'Ilmu Komunikasi', 'Sistem Informasi Komputer', 'Psikologi Konseling', 'Hukum Pidana dan Kriminologi', 'Pertunjukan Tari', 'Ekonomi', 'Manajemen Kewirausahaan', 'Desain Lingkungan', 'Perencanaan Kota', 'Keuangan', 'Manajemen Seni Grafis', 'Sejarah', 'Jurnalisme', 'Arsitektur Lanskap', 'Ilmu Hukum', 'Manajemen Logistik dan Rantai Pasokan', 'Manajemen', 'Ekonomi Matematika', 'Ilmu Matematika', 'Teknologi Medis', 'Media', 'Bahasa Modern', 'Musik', 'Pengelolaan Sumber Daya Alam dan Lingkungan', 'Filsafat', 'Fisika', 'Pra-Hukum', 'Pra-Medis', 'Psikologi', 'Sosiologi', 'Teater'],
                //     'ISFJ' => ['Antropologi', 'Arsitektur', 'Seni', 'Biokimia', 'Biologi', 'Administrasi Bisnis', 'Kimia', 'Ilmu Komunikasi', 'Sistem Informasi Komputer', 'Psikologi Konseling', 'Hukum Pidana dan Kriminologi', 'Pertunjukan Tari', 'Ekonomi', 'Kewirausahaan dan Inovasi', 'Desain Lingkungan', 'Perencanaan Kota', 'Keuangan', 'Manajemen Seni Grafis', 'Sejarah', 'Sistem Informasi', 'Manajemen Perhotelan', 'Desain Interior', 'Ilmu Hukum', 'Teknologi Medis', 'Musik', 'Manajemen Sumber Daya Alam dan Lingkungan', 'Keperawatan', 'Pra-Dokter Gigi', 'Pra-Hukum', 'Pra-Medis', 'Psikologi', 'Studi Agama', 'Manajemen Properti', 'Pekerjaan Sosial', 'Patologi Bicara-Bahasa'],
                //     'ISFP' => ['Desain Pakaian', 'Seni', 'Pelatihan Atletik', 'Biologi', 'Ilmu Komputer', 'Hukum Pidana dan Kriminologi', 'Pertunjukan Tari', 'Dietetika', 'Pendidikan', 'Desain Lingkungan', 'Ilmu Keolahragaan', 'Manajemen Makanan', 'Geologi', 'Ilmu Kesehatan', 'Sejarah', 'Desain Interior', 'Arsitektur Lanskap', 'Ilmu Hukum', 'Teknologi Medis', 'Bahasa Modern', 'Produksi dan Industri Media Musik', 'Pengelolaan Sumber Daya Alam dan Lingkungan', 'Keperawatan', 'Pendidikan Jasmani', 'Pra-Dokter Gigi', 'Pra-Hukum', 'Pra-Kedokteran', 'Hubungan Masyarakat', 'Manajemen Risiko dan Asuransi', 'Pekerjaan Sosial', 'Patologi Bicara-Bahasa'],
                //     'ISTJ' => ['Akuntansi', 'Arsitektur', 'Biologi', 'Administrasi Bisnis', 'Ilmu Komputer', 'Sistem Informasi Komputer', 'Manajemen Konstruksi', 'Hukum Pidana dan Kriminologi', 'Ilmu Pengetahuan Bumi', 'Pendidikan', 'Bahasa Inggris', 'Ilmu Keolahragaan', 'Keuangan', 'Geologi', 'Ilmu Kesehatan', 'Sistem Informasi', 'Jurnalisme', 'Arsitektur Lanskap', 'Ilmu Hukum', 'Manajemen Logistik dan Rantai Pasokan', 'Teknologi Medis', 'Pengelolaan Sumber Daya Alam dan Lingkungan', 'Keperawatan', 'Pra-Dokter Gigi', 'Pra-Hukum', 'Pra-Medis', 'Manajemen Properti Perumahan', 'Manajemen Risiko dan Asuransi'],
                //     'ISTP' => ['Seni', 'Pelatihan Atletik', 'Biologi', 'Administrasi Bisnis', 'Teknologi Informasi Bisnis', 'Sistem Informasi Komputer', 'Ilmu Komputer', 'Manajemen Konstruksi', 'Hukum Pidana dan Kriminologi', 'Ekonomi', 'Ilmu Keolahragaan', 'Keuangan', 'Geologi', 'Ilmu Kesehatan', 'Teknologi Industri', 'Arsitektur Lanskap', 'Studi Hukum', 'Manajemen Logistik dan Rantai Pasokan', 'Teknologi Rekayasa Manufaktur', 'Teknologi Teknik Mesin', 'Ilmu Matematika', 'Teknologi Medis', 'Media', 'Pengelolaan Sumber Daya Alam dan Lingkungan', 'Pendidikan Jasmani', 'Pra-Dokter Gigi', 'Pra-Hukum', 'Pra-Medis', 'Manajemen Risiko dan Asuransi', 'Teater'],
                // ];
                $rules = [
                    'ENFJ' => ['Psikologi', 'Ilmu Komunikasi', 'Pendidikan', 'Manajemen', 'Hubungan Masyarakat'],
                    'ENFP' => ['Psikologi', 'Ilmu Komputer', 'Ilmu Komunikasi', 'Pendidikan', 'Manajemen'],
                    'ENTJ' => ['Manajemen', 'Akuntansi', 'Hukum', 'Psikologi', 'Administrasi Bisnis'],
                    'ENTP' => ['Ilmu Komputer', 'Manajemen', 'Arsitektur', 'Hukum', 'Sistem Informasi'],
                    'ESFJ' => ['Psikologi', 'Keperawatan', 'Pendidikan', 'Akuntansi', 'Manajemen'],
                    'ESFP' => ['Psikologi', 'Ilmu Komunikasi', 'Manajemen', 'Pendidikan Jasmani', 'Sosiologi'],
                    'ESTJ' => ['Manajemen', 'Akuntansi', 'Hukum', 'Administrasi Bisnis', 'Pendidikan'],
                    'ESTP' => ['Manajemen', 'Ilmu Komputer', 'Teknik Mesin', 'Pendidikan Jasmani', 'Ilmu Komunikasi'],
                    'INFJ' => ['Psikologi', 'Arsitektur', 'Ilmu Komunikasi', 'Pendidikan', 'Sosiologi'],
                    'INFP' => ['Psikologi', 'Seni', 'Desain Komunikasi Visual', 'Pendidikan', 'Ilmu Hukum'],
                    'INTJ' => ['Teknik Informatika', 'Psikologi', 'Arsitektur', 'Matematika', 'Hukum'],
                    'INTP' => ['Teknik Informatika', 'Fisika', 'Psikologi', 'Arsitektur', 'Ilmu Hukum'],
                    'ISFJ' => ['Psikologi', 'Pendidikan', 'Keperawatan', 'Ilmu Komunikasi', 'Manajemen'],
                    'ISFP' => ['Desain Interior', 'Psikologi', 'Pendidikan Jasmani', 'Keperawatan', 'Ilmu Hukum'],
                    'ISTJ' => ['Akuntansi', 'Manajemen', 'Ilmu Komputer', 'Hukum', 'Sistem Informasi'],
                    'ISTP' => ['Teknik Mesin', 'Teknik Industri', 'Ilmu Komputer', 'Manajemen', 'Ilmu Kesehatan']
                ];

                // Ambil data pekerjaan yang sesuai dengan tipe MBTI
                // $jurusan = Jurusan::where('tipe_kepribadian', $tipembti)->get();
                $jurusan_ukdc = Jurusan_ukdc::where('mbti', $tipembti)->get();
                $jurusan = $rules[$tipembti];
                $pengguna = Pengguna::find($pengguna_id);

                $hasil = HasilMBTI::where('pengguna_id', session('pengguna_id'))->latest()->first();
                $dataChart = [
                    max(10, $hasil->nilai_I * 100),
                    max(10, $hasil->nilai_E * 100),
                    max(10, $hasil->nilai_S * 100),
                    max(10, $hasil->nilai_N * 100),
                    max(10, $hasil->nilai_T * 100),
                    max(10, $hasil->nilai_F * 100),
                    max(10, $hasil->nilai_J * 100),
                    max(10, $hasil->nilai_P * 100),
                ];
                $chartUrl = 'https://quickchart.io/chart?c=' . urlencode(json_encode([
                    'type' => 'radar',
                    'data' => [
                        'labels' => ['I', 'E', 'S', 'N', 'T', 'F', 'J', 'P'],
                        'datasets' => [[
                            'label' => 'Skor MBTI',
                            'data' => $dataChart,
                            'borderColor' => 'rgba(54, 162, 235, 1)',
                            'backgroundColor' => 'rgba(54, 162, 235, 0.2)',
                        ]]
                    ],
                    'options' => ['scale' => ['ticks' => ['beginAtZero' => true]]]
                ]));
                dd($dataChart);
                $imageData = file_get_contents($chartUrl);
                $chartImage  = base64_encode($imageData);
                
                $pdf = app('dompdf.wrapper');
                $pdf->loadView('pdf.pdfhasilmbti', [
                    'nama' => $pengguna->nama,
                    'tipe' => $tipembti,
                    'jurusan_ukdc' => $jurusan_ukdc,
                    'jurusan' => $jurusan,
                    'chartImage' => $chartImage,
                ]);

                $pdfPath = storage_path('app/public/hasil_' . $pengguna->id . '.pdf');
                $pdf->save($pdfPath);

                // Kirim email
                // Mail::to($pengguna->email)->send(new HasilMbtiWithPdf($pengguna->nama, $tipembti, $pdfPath));
                
                // Kirim email
                Mail::to($pengguna->email)->send(new HasilMbtiMail($pengguna->nama, $tipembti, $jurusan_ukdc, $jurusan, $pdfPath));
                unlink($pdfPath); // hapus file
                $namaUser = DB::table('pengguna')->where('id', $pengguna_id)->value('nama');
                $penjelasanTipe = PenjelasanTipeMBTI::where('tipe_mbti', $tipembti)->value('penjelasan');
                return view('hasil.hasil', compact('tipembti', 'jurusan', 'jurusan_ukdc', 'dataChart', 'namaUser', 'penjelasanTipe'));
            }
        }
    }
    private function tentukanKepribadian($user)
    {
        $kesimpulan = [];

        // Menggunakan data dari database untuk menentukan tipe kepribadian
        $kesimpulan[] = ($user->E == 1 && $user->I == 0) ? "E" : "I";
        $kesimpulan[] = ($user->N == 1 && $user->S == 0) ? "N" : "S";
        $kesimpulan[] = ($user->T == 1 && $user->F == 0) ? "T" : "F";
        $kesimpulan[] = ($user->J == 1 && $user->P == 0) ? "J" : "P";

        return $kesimpulan;
    }
}
