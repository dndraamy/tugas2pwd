<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  </head>
  <body style="background-color: #061747;">

  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #d7e1ff; padding: 10px 20px;">
      <div class="container-fluid d-flex align-items-center">
        <a class="navbar-brand d-flex align-items-center" href="#">
          <img src="logo.png" alt="Logo" width="50" class="d-inline-block align-text-top me-2">
          <span style="font-family: 'Concert One', cursive; font-size: 24pt;"><em>Learnify  </em></span>
          <span class="navbar-text ms-2" style="font-size: 16pt; color: rgb(0, 0, 0);">
            : Belajar Cerdas, Kuasai Dunia!
          </span>
        </a>
      </div>
    </nav>

    <style>
      .navbar {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
      }
    </style>

  <div class="card w-75 mb-3 position-absolute top-50 start-50 translate-middle" style="border-radius: 30px;">
  <div class="card-body">
    <h5 class="card-title" style="text-align: center;">Hasil Kuis</h5>
    <p class="card-text">
    
    <?php
    $soal1 = $_POST['soal1'];
    $soal2 = $_POST['soal2'];
    $soal3 = $_POST['soal3'];
    $soal4 = $_POST['soal4'];
    $soal5 = $_POST['soal5'];

    $kunci_jawaban = [
      "soal1" => "a",
      "soal2" => "d",
      "soal3" => "d",
      "soal4" => "c",
      "soal5" => "a"
    ];

    if (is_null($soal1) || is_null($soal2) || is_null($soal3) || is_null($soal4) || is_null($soal5)) {
      echo "<p style='color: red;'>Jawab semua soal sebelum mengirim!</p>";
      echo "<a href='kuis.php' class='btn btn-primary'>Kembali ke Kuis</a>";
      exit;
  }

    foreach ($kunci_jawaban as $pertanyaan => $jawaban_benar) {
      $jawaban_user = $_POST[$pertanyaan] ?? '';
      if ($jawaban_user === $jawaban_benar) {
        echo "<p>Pertanyaan " . substr($pertanyaan, -1) . ": <span style='color: green'>Jawaban Anda benar!</span></p>";
      } else {
        echo "<p>Pertanyaan " . substr($pertanyaan, -1) . ": <span style='color: red'>Jawaban Anda salah. Jawaban yang benar: " . $jawaban_benar . "</span></p>";
      }
    }

    $skor = 0;
    $total_soal = count($kunci_jawaban);

    foreach ($kunci_jawaban as $pertanyaan => $jawaban_benar) {
      $jawaban_user = $_POST[$pertanyaan] ?? '';
      if ($jawaban_user === $jawaban_benar) {
        $skor++;
      }
    }

    $persentase = ($skor / $total_soal) * 100;
    ?>

    </p>
    <h4>Skor pengguna : <?=$skor?> / <?=$total_soal?></h4>
    <h4>Presentase nilai : <?=$persentase?>%</h4>
    <a href="index.html" class="btn btn-primary">Kembali ke Halaman Utama</a>
  </div>
</div>
  
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>