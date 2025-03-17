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

  <form action="hasil.php" method="POST">
      <!--  -->
    <div class="card w-75 mb-3 position-absolute top-50 start-50 translate-middle" style="border-radius: 30px;">
    <div class="card-body">
      <h5 class="card-title" style="text-align: center;">Kuis</h5>
      <p class="card-text">
      <div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          Soal 1
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
              <p>Apa kepanjangan dari HTML?</p>
              <p><input type="radio" name="soal1" value="a"> a. Hyper Text Markup Language</p>
              <p><input type="radio" name="soal1" value="b"> b. Hyperlinks and Text Markup Language</p>
              <p><input type="radio" name="soal1" value="c"> c. Home Tool Markup Language</p>
              <p><input type="radio" name="soal1" value="d"> d. Hyper Tool Multi Language</p>
        </div>
      </div>
    </div>
    <!--  -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Soal 2
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
              <p>Bagaimana cara mengatur latar belakang halaman menjadi warna
              merah dalam CSS?</p>
              <p><input type="radio" name="soal2" value="a"> a. background: red;</p>
              <p><input type="radio" name="soal2" value="b"> b. bgcolor: red;</p>
              <p><input type="radio" name="soal2" value="c"> c. color-background: red;</p>
              <p><input type="radio" name="soal2" value="d"> d. background-color: red;</p>
        </div>
      </div>
    </div>
    <!--  -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Soal 3
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
              <p>Tag HTML apa yang digunakan untuk membuat baris baru?</p>
              <p><input type="radio" name="soal3" value="a"> a. newline</p>
              <p><input type="radio" name="soal3" value="b"> b. hr</p>
              <p><input type="radio" name="soal3" value="c"> c. line;</p>
              <p><input type="radio" name="soal3" value="d"> d. br</p>
        </div>
      </div>
    </div>
    <!--  -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Soal 4
        </button>
      </h2>
      <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
              <p>Apa fungsi utama dari PHP?</p>
              <p><input type="radio" name="soal4" value="a"> a. Mengatur tata letak halaman web            </p>
              <p><input type="radio" name="soal4" value="b"> b. Mengatur tampilan halaman web</p>
              <p><input type="radio" name="soal4" value="c"> c. Memproses data di sisi server</p>
              <p><input type="radio" name="soal4" value="d"> d. Menambahkan animasi ke halaman web</p>
        </div>
      </div>
    </div>
    <!--  -->
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          Soal 5
        </button>
      </h2>
      <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body">
              <p>Bagaimana cara menampilkan gambar di HTML?</p>
              <p><input type="radio" name="soal5" value="a"> a. img src='gambar.jpg'</p>
              <p><input type="radio" name="soal5" value="b"> b. image src='gambar.jpg</p>
              <p><input type="radio" name="soal5" value="c"> c. pic src='gambar.jpg</p>
              <p><input type="radio" name="soal5" value="d"> d. photo src='gambar.jpg</p>
        </div>
      </div>
    </div>
  </div>
      </p>
      <button class="btn btn-primary">Kirim Jawaban</button>
    </div>
  </div>
  </form>
    

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>