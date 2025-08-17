<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>TERRA.TRAINER</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <style>
      .banner{
        background: url("{{ asset('gambar/Gambar WhatsApp 2024-10-29 pukul 22.34.12_83d9c8bf.jpg') }}") no-repeat center center;
        background-size: cover;
        padding-top: 20%;
        padding-bottom: 20%;
        opacity: 10px;
      }
    </style>
  </head>
  <body id="home">
    <nav class="navbar navbar-expand-lg navbar-dark bg-black fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><span>Terra.</span>Trainer</a>
        <img src="{{ asset('gambar/Gemini_Generated_Image_xn4xhtxn4xhtxn4x.jpeg') }}" alt="Logo" width="40" height="40" class="rounded-circle">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#1">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#pricing">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#go-member">Go-member</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contack">Contack us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid banner">
      <div class="container text-center">
        <h1><b>START YOUR</b></h1>
        <h1>
          <b>JOURNEY</b> <span><b>TODAY</b></span>
        </h1>
        <h6 class="text-white">Every step you take brings you closer to your goal!</h6>
        <a href="#servis">
          <a href="#pricing"><button type="button" class="btn btn-info">Join now</button></a>
        </a>
      </div>
    </div>
    <section id="1" class="bg-black text-white">
      <div class="container">
        <div class="row">
          <div class="row justify-content-center fs-5 text-center mt-5">
            <div class="col-7">
              <h2 class="text-start" style="color: rgb(0, 208, 255)">PROFILE</h2>
              <p class="text-justify-all lh-lg" style="text-align: justify;">
                Terra.Trainer berkomitmen untuk menjadi pelopor dalam layanan Personal Trainer berbasis aplikasi pertama di Indonesia, menyediakan solusi kesehatan dan kebugaran yang fleksibel, personal, dan efektif bagi masyarakat. Dengan didukung oleh tim pelatih profesional dan bersertifikat, kami optimis bahwa Terra.Trainer mampu menjadi mitra terpercaya dalam mencapai target kebugaran klien, baik secara fisik maupun mental. Kesadaran akan pentingnya kesehatan yang semakin meningkat di kalangan masyarakat memberikan peluang yang besar bagi bisnis ini untuk tumbuh dan berkembang. Kami yakin bahwa dukungan dan investasi yang tepat akan memungkinkan Terra.Trainer untuk terus berinovasi dan memenuhi kebutuhan pasar yang terus berkembang.
              </p>
            </div>
            <div class="col-5">
              <img src="{{ asset('gambar/Gemini_Generated_Image_4124ot4124ot4124.jpeg') }}" alt="Logo" width="450" height="450" class="rounded-circle" >
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="pricing" class="bg-black text-white">
      <div class="container">
        <div class="row text-center">
          <div class="col mt-5">
            <h2>PRICING</h2>
          </div>
        </div>
        <div class="row justify-content-center mt-5">
          <div class="card bg-black text-white text-center" style="width: 29rem;">
            <div class="card-header fs-3 text border border-info" style="height: 27rem">
              <p>WEEK</p>
              <p class="fs-4 text">Rp250.000 <span class="fs-6 text">/7day</span></p>
              <p class="fs-5 text text-start"><i class="bi bi-check-circle-fill" style="color: rgb(55, 55, 218)"></i> Program latihan sesuai target klien</p>
              <p class="fs-5 text text-start"><i class="bi bi-check-circle-fill" style="color: rgb(55, 55, 218)"></i> Program nutrisi/kesehatan</p>
              <p class="fs-5 text text-start"><i class="bi bi-check-circle-fill" style="color: rgb(55, 55, 218)"></i> Motivator</p>
              <p class="fs-5 text text-start"><i class="bi bi-check-circle-fill" style="color: rgb(55, 55, 218)"></i> Latihan intensif</p>
              <p class="fs-5 text text-start"><i class="bi bi-check-circle-fill" style="color: rgb(55, 55, 218)"></i> Layanan konsultasi type tubuh</p>
              <a href="{{ route('payment.weekly') }}" target="_blank"><button type="button" class="btn btn-success">Aktifkan</button></a>
            </div>
          </div>
          <div class="card bg-black text-white text-center" style="width: 29rem">
            <div class="card-header fs-3 text border border-info" style="height: 27rem">
              <p>MONTH</p>
              <p class="fs-4 text">Rp550.000 <span class="fs-6 text">/30day</span></p>
              <p class="fs-5 text text-start"><i class="bi bi-check-circle-fill" style="color: rgb(55, 55, 218)"></i> Program latihan sesuai target klien</p>
              <p class="fs-5 text text-start"><i class="bi bi-check-circle-fill" style="color: rgb(55, 55, 218)"></i> Program nutrisi/kesehatan</p>
              <p class="fs-5 text text-start"><i class="bi bi-check-circle-fill" style="color: rgb(55, 55, 218)"></i> Motivator</p>
              <p class="fs-5 text text-start"><i class="bi bi-check-circle-fill" style="color: rgb(55, 55, 218)"></i> Cetering makanan sesuai kebutuhan klien</p>
              <p class="fs-5 text text-start"><i class="bi bi-check-circle-fill" style="color: rgb(55, 55, 218)"></i> Layanan konsultasi dengan dokter ahli gizi</p>
              <a href="{{ route('payment.monthly') }}" target="_blank"><button type="button" class="btn btn-success">Aktifkan</button></a>
            </div>
          </div>
          <div class="card bg-black text-white text-center" style="width: 29rem">
            <div class="card-header fs-3 text border border-info" style="height: 30rem">
              <p>YEAR</p>
              <p class="fs-4 text">Rp6.600.000 <span class="fs-6 text">/365day</span></p>
              <p class="fs-5 text text-start"><i class="bi bi-check-circle-fill" style="color: rgb(55, 55, 218)"></i> Program latihan sesuai target klien</p>
              <p class="fs-5 text text-start"><i class="bi bi-check-circle-fill" style="color: rgb(55, 55, 218)"></i> Program nutrisi/kesehatan</p>
              <p class="fs-5 text text-start"><i class="bi bi-check-circle-fill" style="color: rgb(55, 55, 218)"></i> Motivator</p>
              <p class="fs-5 text text-start"><i class="bi bi-check-circle-fill" style="color: rgb(55, 55, 218)"></i> Cetering makanan sesuai kebutuhan klien</p>
              <p class="fs-5 text text-start"><i class="bi bi-check-circle-fill" style="color: rgb(55, 55, 218)"></i> Layanan konsultasi dengan dokter ahli gizi</p>
              <a href="{{ route('payment.yearly') }}" target="_blank"><button type="button" class="btn btn-success" style="margin-top: 69px">Aktifkan</button></a>
            </div>
          </div>
          <div class="card bg-black text-white text-center" style="width: 29rem">
            <div class="card-header fs-3 text border border-info" style="height: 30rem">
              <p>YEAR-MEMBER</p>
              <p class="fs-4 text">Rp6.400.000 <span class="fs-6 text">/365day</span></p>
              <p class="fs-5 text text-start"><i class="bi bi-check-circle-fill" style="color: rgb(55, 55, 218)"></i> Program latihan sesuai target klien</p>
              <p class="fs-5 text text-start"><i class="bi bi-check-circle-fill" style="color: rgb(55, 55, 218)"></i> Program nutrisi/kesehatan</p>
              <p class="fs-5 text text-start"><i class="bi bi-check-circle-fill" style="color: rgb(55, 55, 218)"></i> Motivator</p>
              <p class="fs-5 text text-start"><i class="bi bi-check-circle-fill" style="color: rgb(55, 55, 218)"></i> Cetering makanan sesuai kebutuhan klien</p>
              <p class="fs-5 text text-start"><i class="bi bi-check-circle-fill" style="color: rgb(55, 55, 218)"></i> Layanan konsultasi dengan dokter ahli gizi</p>
              <p class="fs-5 text text-start"><i class="bi bi-check-circle-fill" style="color: rgb(55, 55, 218)"></i>Merchandise(T-shirt,Hat,Totebag,Tumbler.)</p>
              <a href="{{ route('payment.year_member') }}" target="_blank"><button type="button" class="btn btn-danger">Aktifkan</button></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="go-member" class="bg-black text-white">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Go-member</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col md-6">
            <form action="">
              <div class="mb-3">
                <label for="name" class="form-label">Nama lengkap</label>
                <input type="tetx" class="form-control bg-black text-white" id="name" aria-describedby="name" />
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label">Address</label>
                <input type="tetx" class="form-control bg-black text-white" id="alamat" aria-describedby="name" />
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">E-mail</label>
                <input type="email" class="form-control bg-black text-white" id="email" aria-describedby="email" />
              </div>
              <div class="mb-3">
                <label for="date" class="form-label"> your birthday</label>
                <input type="date" class="form-control bg-black text-white" id="date" aria-describedby="date" />
              </div>
              <div class="mb-3">
                <label for="tel" class="form-label">Phone number</label>
                <input type="tel" class="form-control bg-black text-white" id="tel" aria-describedby="tel" maxlength="12" value="+62" />
              </div>
              <div class="mb-3">
                <label for="text" class="form-label">City</label>
                <input type="text" class="form-control bg-black text-white" id="text" aria-describedby="text" />
              </div>
              <button type="button" class="btn btn-warning btn-sm" style="width: 200px; height: 50px; margin-left: 20px"><b>Go-member</b></button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section id="contack" class="bg-black text-white">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col mt-5"><h2>Contact us</h2></div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col md-4">
            <p class="text-start">
              We're glad you've visited our website! If you have any questions, suggestions, or would like to collaborate, feel free to contact us via this page. We will try to reply to your message as soon as possible.
            </p>
            <iframe
              align="left"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127669.05294262784!2d101.35877377788388!3d0.5137906686681036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5ab80690ee7b1%3A0x94dde92c3823dbe4!2sPekanbaru%2C%20Kota%20Pekanbaru%2C%20Riau!5e0!3m2!1sid!2sid!4v1730283611981!5m2!1sid!2sid"
              width="600"
              height="450"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
          <div class="col-4">
            <form action="">
              <div class="mb-3">
                <p class="text-start">Enter Your Name</p>
                <input type="tetx" class="form-control bg-black text-white" id="name" aria-describedby="name" />
              </div>
              <div class="mb-3">
                <p class="text-start">Enter Yout E-mail</p>
                <input type="email" class="form-control bg-black text-white" id="email" aria-describedby="email" />
              </div>
              <div class="mb-3">
                <p class="text-start">Enter Your Subjeck</p>
                <input type="tetx" class="form-control bg-black text-white" id="name" aria-describedby="name" />
              </div>
              <div class="form-floating">
                <p class="text-start">Your Comments</p>
                <textarea class="form-control bg-black text-white" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
              </div>
              <button type="button" class="btn btn-primary" style="width: 50%; height: 30px">Submit</button>
              <button type="button" class="btn btn-danger" style="width: 50%; height: 30px">Reset</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <footer class="bg-dark text-white text-center p-5 ">
        <h5><i class="bi bi-c-circle"></i> creared with <span>Terra.</span>Trainer</h5>
        <p class="text-center">
          You can find us in other media <a href="https://wa.me/qr/YPC6WPTOCPTTC1" class="text-white" target="_blank"><i class="bi bi-whatsapp"></i></a>
          <a href="https://www.tiktok.com/@zeen_zeen.1?_t=8pza8vGAyZN&_r=1" class="text-white" target="_blank"><i class="bi bi-tiktok"></i></a
          ><a href="mailto:rifqizain00@gmail.com" class="text-white" target="_blank"><i class="bi bi-envelope"></i></a>
        </p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
