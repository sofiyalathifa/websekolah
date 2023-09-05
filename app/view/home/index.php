<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul'];?></title>
    <link rel="stylesheet" href="http://localhost:81/phpmvc/public/css/style.css">
</head>
<body>
<div class="container">
  <div class="home">
      <div class="row">
          <div class="col order-first bg-light">
              <a href="<?= BASE_URL; ?>/home/sejarah" style="color:black"><h4> Sejarah </h4></a>
              SMK Negeri 2 Trenggalek berdiri tanggal 21 Mei 2004. Menurut SK Bupati Trenggalek no. 275 tahun 2004 tentang pendidikan SMKN 2 Trenggalek, SMKN 2 Trenggalek awalnya bernama SMK Kecil di SMPN 5 Trenggalek. Gedung yang dimiliki dulu adalah Bekas SDN...
          </div>
          <div class="col bg-light">
              <a href="<?= BASE_URL; ?>/home/visi" style="color:black"><h4> Visi Misi </h4></a>
              Visi Terwujudnya sekolah unggul yang peduli dan berbudaya lingkungan Misi Meningkatkan penghayatan dan pengamalan terhadap ajaran agama yang dianut. Menciptakan suasana akademik yang kondusif. Menyiapkan sumber daya pendidikan yang berkualitas dan bermanfaat bagi pengembangan potensi peserta didik. Menyelenggarakan proses pembelajaran...
          </div>
          <div class="col order-thrid bg-light">
              <h4> Kepala Sekolah </h4>
              <p>Nama - nama Kepala Sekolah yang pernah bertugas di SMK Negeri 2 Trenggalek antara lain</p>
              <p>1. Drs. Edy Suwito, M.Pd. (2004 - 2007)<br/>
                2. Drs. Marsudi (2007 - 2013)<br/>
                3. Drs. Asbandi (2013 - 2021)<br/>
                4.Drs. Sumitra, M.M (2021 - ...)</p>
          </div>
      </div>
  </div>
</div>


<div class="container">
  <div class="hero">
    <div class="row">
      <div class="col order-first">
            <h4> News </h4>
            <div class="card-deck">
              <div class="card">
                <img class="card-img-top" src="<?= BASE_URL; ?>/img/mpls.jpeg" width="100" heigh="100" alt="Card image cap">
                <div class="card-body bg-light">
                  <a href="<?= BASE_URL; ?>/home/mpls" style="color:black"><h5 class="card-title">Orientasi Siswa Baru TA. 2023/2024</h5></a>
                  <p class="card-text">MPLS merupakan Masa Pengenalan Lingkungan Sekolah. MPLS merupakan program penyambutan peserta didik baru dari pihak sekolah yang diterapkan diawal tahun pelajaran.</p>
                  <a href="#" class="card-link">Read more>></a>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="<?= BASE_URL; ?>/img/Gema_War.jpeg" width="100" heigh="200" alt="Card image cap">
                <div class="card-body bg-light">
                  <a href="<?= BASE_URL; ?>/home/mpls" style="color:black"><h5 class="card-title">“Gema War on Drugs” Menyanyikan Lagu Mars BNN</h5></a>
                  <p class="card-text">KEIKUTSERTAAN SMKN 2 TRENGGALEK DALAM ACARA GEMA WAR ON DRUGS BERSAMA BNN NAPZA merupakan zat...</p>
                  <a href="#" class="card-link">Read more>></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
              <h4> Event </h4>
              <ul class="list-unstyled">
                <li class="media bg-light">
                  <img class="mr-3" src="<?= BASE_URL; ?>/img/mpls.jpeg" width="100" hight="100" alt="Generic placeholder image">
                  <div class="media-body">
                    <h5 class="mt-0 mb-1">Orientasi Siswa Baru TA. 2023/2024</h5>
                      MPLS merupakan Masa Pengenalan Lingkungan Sekolah.<br/>
                      MPLS merupakan program penyambutan...
                  </div>
                </li>
                <li class="media my-4 bg-light">
                  <img class="mr-3" src="<?= BASE_URL; ?>/img/gema.jpeg" width="100" hight="100" alt="Generic placeholder image">
                  <div class="media-body">
                    <h5 class="mt-0 mb-1">“Gema War on Drugs” Menyanyikan Lagu Mars BNN</h5>
                    KEIKUTSERTAAN SMKN 2 TRENGGALEK DALAM ACARA GEMA WAR ON DRUGS...
                  </div>
                </li>
                <li class="media bg-light">
                  <img class="mr-3" src="<?= BASE_URL; ?>/img/lks.jpeg" width="100" hight="100" alt="Generic placeholder image">
                  <div class="media-body">
                    <h5 class="mt-0 mb-1">Keikutsertaan SMKN 2 Trenggalek pada LKS Jatim</h5>
                    Lomba Kompetensi Siswa (LKS) Lomba Kompetensi Siswa (LKS) adalah kompetisi...
                  </div>
                </li>
              </ul>
          </div>    
      </div>  
    </div>
  </div>
</div>

<div class="container">
  <div class="home">
      <div class="media">
          <img class="mr-3" src="<?= BASE_URL; ?>/img/Kepala.jpg" width="350" hight="350" alt="Generic placeholder image">
          <div class="media-body bg-light">
              <h5 class="mt-0">Sambutan Kepala SMKN2 Trenggalek</h5>
              <p>Bismillahirohmannirrohim</p>
              <p>Assalamualaikum Warahmatullah Wabarakatuh</p>
              <p>Selamat datang di website resmi SMKN 2 Trenggalek. Saya berharap Website ini<br/>
                  dapat dijadikan wahana interaksi yang positif baik antar civitas akademika<br/>
                  maupun masyarakat pada umumnya sehingga dapat menjalin silaturahmi yang erat<br/>
                  disegala unsur. Mari kita bekerja dan berkarya dengan mengharap ridho sang Kuasa<br/> 
                  dan keikhlasan yang tulus, dijiwai demi anak bangsa.</p>

              Terima kasih semoga Allah ‘Azza Wa Jalla menyertai doa kita semua……amin
          </div>
      </div>
  </div>
</div>


<!-- <div class="container">
    <div class="jumbotron mt-4">
<h1 class="display-4">Hallo!!!, Selamat Datang!</h1>
<p class="lead">Perkenalkan, saya <?= $data['nama']; ?></p>
<hr class="my-4">
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum assumenda ipsam nesciunt reprehenderit sapiente rerum.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur quibusdam, a nostrum nobis numquam perspiciatis fugiat amet tempore eligendi ipsum, ea iusto. Incidunt natus, quis dolor exercitationem nostrum adipisci recusandae dolorem numquam esse nam rerum sed perferendis aliquam.</p>
<a  class="btn btn-primary btn-lg" href="#" role="button">Learn More</a>
</div>
</div> -->

