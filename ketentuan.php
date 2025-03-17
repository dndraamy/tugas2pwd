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

    <main class="position-absolute top-50 start-50 translate-middle">
      <div class="card" style="width: 500px;">
        <div class="card-header" style="text-align: center;"><strong>Ketentuan Kuis</strong></div>
        <div class="card-body">
        <h4>Ketentuan untuk mengerjakan kuis:</h4>
            <p>
              1. Kuis terdiri dari 5 pertanyaan
              <br>
              2. Setiap pertanyaan memiliki 4 pilihan jawaban
              <br>
              3. Pilihlah satu jawaban yang menurut Pengguna benar
              <br>
              4. Setiap jawaban benar akan mendapatkan poin 20
              <br>
              5. Jawaban yang salah tidak akan mendapatkan poin
              <br>
              6. Pengguna dapat melihat skor akhir setelah menyelesaikan kuis.
            </p>
          <a href="kuis.php" class="btn btn-primary justify-content-md-end" type="button"> Mulai Mengerjakan Kuis!</a>
        </div>
      </form>
      </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>