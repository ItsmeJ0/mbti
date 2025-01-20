<?php
session_start();
include 'config.php';

// if (isset($_POST['submit'])) {
//   if (!isset($_SESSION['nama'])) {
//     header('location: tes.php');
//     exit;
//   } else {
//     header('location: nama.php');
//   }
// }
?>

<!DOCTYPE html>
<html lang="en">

<body>
  <header>
  @include('partials.sidebar')
    <div class="container">
      <div class="page-banner home-banner">
        <div class="row align-items-center flex-wrap-reverse h-100">
          <div class="col-md-6 py-5 wow fadeInLeft">
            <h1 class="mb-4">Cek dan Optimalkan Tipe MBTI Anda!</h1>
            <p class="text-lg text-grey mb-5">Tingkatkan potensi terbesar yang pernah Anda bangun untuk masa depan
            </p>
            <a href="#about" class="btn btn-primary btn-split">Tipe Personaliti <div class="fab"><span class="mai-play"></span></div></a>
          </div>
          <div class="col-md-6 py-5 wow zoomIn">
            <div class="img-fluid text-center">
              <img src="../assets/img/g1.svg" alt="">
            </div>
          </div>
        </div>
      </div>
      <form method="POST" action="">
        <div class="page-section">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-6 py-3 wow fadeInUp">
                <span class="subhead">Mari Pelajari</span>
                <h2 class="title-section">Tes MBTI - Temukan Tipe Kepribadian Anda</h2>
                <div class="divider"></div>
                <p>Temukan lebih banyak tentang diri anda dengan menjalani Tes MBTI yang akan membantu anda memahami tipe kepribadian dan cara anda berinteraksi dengan dunia sekitar.</p>
                <p>Hasil tes ini akan memberikan wawasan yang berharga tentang kepribadian anda.</p>
                <p>Ayo mulailah perjalanan anda untuk mengenal diri sendiri.</p>
                <button type="submit" class="btn btn-primary mt-3" name="submit">Mulai Test</button>
              </div>
              <div class="col-md-6 py-5 wow fadeInRight">
                <div class="img-fluid py-3 text-center">
                  <img src="../assets/img/g2.svg" alt="">
                </div>
              </div>
            </div>
          </div> <!-- .container -->
        </div> <!-- .page-section -->
      </form>
    </div>
  </header>

  <div class="page-section bg-light" id="about">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="subhead">mari lihat</div>
        <h2 class="title-section">Tipe MBTI</h2>
        <div class="divider mx-auto"></div>
      </div>

      <div class="row">
        <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
          <div class="features">
            <!-- <div class="header mb-3"> -->
              <img src="../assets/img/bisnis.png" alt="" width="100" height="100">
            <!-- </div> -->
            <h5>Analis - INTJ </h5>
            <p>Pemikir imajinatif dan strategis yang menyiapkan rencana untuk segala hal</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
          <div class="features">
            <!-- <div class="header mb-3"> -->
              <img src="../assets/img/INTP.png" alt="" width="100" height="100">
            <!-- </div> -->
            <h5>Analis - INTP </h5>
            <p>Penemu inovatif yang haus akan pengetahuan</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
          <div class="features">
            <!-- <div class="header mb-3"> -->
              <img src="../assets/img/ENTJ.png" alt="" width="100" height="100">
            <!-- </div> -->
            <h5>Analis - ENTJ </h5>
            <p>Pemimpin pemberani,imajinatif,dan memiliki determinasi tinggi,selalu menemukan cara-atau menciptakan caranya sendiri</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
          <div class="features">
            <!-- <div class="header mb-3"> -->
              <img src="../assets/img/entp.png" alt="" width="100" height="100">
            <!-- </div> -->
            <h5>Analis - ENTP </h5>
            <p>Pemikir cerdas dan penuh rasa ingin tahu yang tidak bisa menolak tantangan intelektual</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
          <div class="features">
            <!-- <div class="header mb-3"> -->
            <img src="../assets/img/INFJ.png" alt="" width="100" height="100">
            <!-- </div> -->
            <h5>Diplomat - INFJ </h5>
            <p>Idealis yang tenang dan berjiwa spiritual sekaligus inspiratif dan tak kenal lelah</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
          <div class="features">
            <!-- <div class="header mb-3"> -->
            <img src="../assets/img/INFP.png" alt="" width="100" height="100">
            <!-- </div> -->
            <h5>Diplomat - INFP </h5>
            <p>Pribadi yang puitis,baik hati,dan altruistik,selalu ingin membantu demi kebaikan</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
          <div class="features">
            <!-- <div class="header mb-3"> -->
            <img src="../assets/img/ENFJ.png" alt="" width="100" height="100">
            <!-- </div> -->
            <h5>Diplomat - ENFJ </h5>
            <p>pemimpin yang karismatik dan inspiratif,mampu memukau pendengarnya</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
          <div class="features">
            <!-- <div class="header mb-3"> -->
            <img src="../assets/img/ENFP.png" alt="" width="100" height="100">
            <!-- </div> -->
            <h5>Diplomat - ENFP </h5>
            <p>Jiwa yang antusias,kreatif,dan bebas bergaul sehingga tidak pernah merasa sedih </p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
          <div class="features">
            <!-- <div class="header mb-3"> -->
            <img src="../assets/img/ISTJ.png" alt="" width="100" height="100">
            <!-- </div> -->
            <h5>Pengawal - ISTJ </h5>
            <p>Individu yang berpikiran praktis,faktual,dan sangat bisa diandalkan</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
          <div class="features">
            <!-- <div class="header mb-3"> -->
            <img src="../assets/img/ISFJ.png" alt="" width="100" height="100">
            <!-- </div> -->
            <h5>Pengawal- ISFJ </h5>
            <p>Pelindung yang sangat berdedikasi dan ramah, selalu siap membela orang yang mereka sayangi</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
          <div class="features">
            <!-- <div class="header mb-3"> -->
            <img src="../assets/img/ESTJ.png" alt="" width="100" height="100">
            <!-- </div> -->
            <h5>Pengawal - ESTJ </h5>
            <p>Administator yang unggul,tak tertandingi dalam mengelolah segala hal-atau bahkan manusia</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
          <div class="features">
            <!-- <div class="header mb-3"> -->
            <img src="../assets/img/ESFJ .PNG" alt="" width="100" height="100">
            <!-- </div> -->
            <h5>Pengawal - ESFJ </h5>
            <p>Pribadi yang penuh perhatian,supel,dan banyak dikenal,selalu ingin membantu</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
          <div class="features">
            <!-- <div class="header mb-3"> -->
            <img src="../assets/img/ISTP.png" alt="" width="100" height="100">
            <!-- </div> -->
            <h5>Penjelajah - ISTP </h5>
            <p>Peneliti yang pemberani dan praktis,menguasai semua jenis alat </p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
          <div class="features">
            <!-- <div class="header mb-3"> -->
            <img src="../assets/img/ISFP.png" alt="" width="100" height="100">
            <!-- </div> -->
            <h5>Penjelajah - ISFP </h5>
            <p>Seniman yang fleksibel dan memesona, selalu siap menjelajahi dan merasakan hal yang baru</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
          <div class="features">
            <!-- <div class="header mb-3"> -->
            <img src="../assets/img/ESTP.png" alt="" width="100" height="100">
            <!-- </div> -->
            <h5>Penjelajah - ESTP </h5>
            <p>Pribadi yang cerdas,energik,dan sangat peka yang benar-benar menikmati hidup menantang </p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 col-xl-3 py-3 wow zoomIn">
          <div class="features">
            <!-- <div class="header mb-3"> -->
            <img src="../assets/img/ESFP.png" alt="" width="100" height="100">
            <!-- </div> -->
            <h5>Penjelajah - ESFP </h5>
            <p>Pribadi yang spontan,energik,dan antusias-bersama mereka,hidup tidak akan terasa membosankan</p>
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <?php include 'footer.php'; ?>

  <script src="../assets/js/jquery-3.5.1.min.js"></script>

  <script src="../assets/js/bootstrap.bundle.min.js"></script>

  <script src="../assets/vendor/wow/wow.min.js"></script>

  <script src="../assets/js/theme.js"></script>

</body>

</html>