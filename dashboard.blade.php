<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/museum.png">
  <link rel="icon" type="image/png" href="../assets/img/museum.png">
  <title>
    Aplikasi Manajemen Koleksi Museum
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="https://demos.creative-tim.com/argon-dashboard-pro/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.1.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-dark position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="../assets/img/disbudpar.png" width="50px" height="50px" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">DISBUDPAR</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="dashboard">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="koleksimuseum">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-archive-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Koleksi Museum</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="pengunjung">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Pengunjung</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="galeri">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-image text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Galeri</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Aplikasi Manajemen Koleksi Museum</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <!-- <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Type here...">
            </div> -->
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
          <div class="row">
          <!-- kalender -->
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
              <div class="card">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-12">
                      <div class="numbers">
                        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
                        <script src="{{ mix('js/app.js') }}" defer></script>
                          <p class="text-sm mb-0 text-uppercase font-weight-bold">KALENDER</p>
                          <div id="calendar"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- end kalender -->
        <!-- jumlah koleksi -->
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">TOTAL</p>
                    <h6 class="font-weight-bolder">
                      SEMUA KOLEKSI
                    </h6>
                    <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">Jumlah data:</span>
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end jumlah koleksi -->
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">TOTAL</p>
                    <h6 class="font-weight-bolder">
                      JUMLAH PENGUNJUNG
                    </h6>
                    <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">Jumlah Data :</span>
                      
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                    <i class="ni ni-single-02 text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- cardbawah-->
        <div class="row mt-4">
          <div class="col-xl-12">
            <div class="card">
              <div class="row g-0">
                <div class="p-3">
                  <div class="numbers">
                    <p class="text-success font-weight-bold">PROFIL</p>
                    <p class="mb-0 text-justify">
                    Kabupaten Cirebon adalah kabupaten di Provinsi Jawa Barat, Indonesia. Ibu kota kabupaten ini terletak di Kecamatan Sumber. Kabupaten ini berada di ujung bagian timur Provinsi Jawa Barat, serta menjadi pintu gerbang masuk Provinsi Jawa Barat dari wilayah timur Pulau Jawa. Kabupaten Cirebon yang bentuk nonformalnya adalah Cirbon atau Cerbon merupakan produsen beras unggulan yang berada di Jalan Pantura.
                    <br></br>
                    <p class="text-success font-weight-bold">SEJARAH</p>
                    <p class="mb-0 text-justify">
                      Kabupaten Cirebon awalnya merupakan bagian dari Kerajaan Tarumanagara, lalu menjadi bagian dari Kerajaan Galuh,setelah Bedirinya Kesultanan Demak Wilayah Cirebon masuk dalam wilayah Kesultanan Demak, banyak Pasukan Pasukan 
                        Demak yang menetap di pantura jawa barat antara lain di daerah cirebon, Indramayu, karawang, Jayakarta dan Serang. Kabupaten ini merupakan kabupaten terawal yang mengalami proses Islamisasi di Jawa barat.
                        Era demak, dimana proses ini dirintis oleh seorang pangeran Galuh bernama Bratalegawa di abad ke-14. Setelah masuk Islam, Bratalegawa meninggalkan ibu kota Galuh, Kawali, untuk menyebarkan Islam di daerah Caruban Girang.
                        Diawali dari kisah Kerajaan Pajajaran, yang kala itu diperintah oleh Sri Baduga Maharaja. Ia menikah dengan Nyai Subang Larang dikarunia 2 (dua) orang putra dan seorang putri, Pangeran Walangsungsang yang lahir pertama tahun 1423 Masehi,
                         kedua Nyai Lara Santang lahir tahun 1426 Masehi. Sedangkan Putra yang ketiga Raja Sengara lahir tahun 1428 Masehi. Pada tahun 1442 Masehi Pangeran Walangsungsang menikah dengan Nyai Endang Geulis Putri Ki Gedheng Danu Warsih dari Pertapaan Gunung Mara Api
                        Mereka singgah di beberapa petapaan antara lain petapaan Ciangkup di desa Panongan (Sedong), Petapaan Gunung Kumbang di daerah Tegal dan Petapaan Gunung Cangak di desa Mundu Mesigit, yang terakhir sampai ke Gunung Amparan Jati dan di sanalah bertemu dengan Syekh Datuk Kahfi yang berasal dari kerajaan Parsi. 
                        Ia adalah seorang Guru Agama Islam yang luhur ilmu dan budi pekertinya. Pangeran Walangsungsang beserta adiknya Nyai Lara Santang dan istrinya Nyai Endang Geulis berguru Agama Islam kepada Syekh Nur Jati dan menetap bersama Ki Gedheng Danusela adik Ki Gedheng Danuwarsih. Oleh Syekh Nur Jati, 
                        Pangeran Walangsungsang diberi nama Somadullah dan diminta untuk membuka hutan di pinggir Pantai Sebelah Tenggara Gunung Jati (Lemahwungkuk sekarang).
                        Maka sejak itu berdirilah Dukuh Tegal Alang-Alang yang kemudian diberi nama Desa Caruban (Campuran) yang semakin lama menjadi ramai dikunjungi dan dihuni oleh berbagai suku bangsa untuk berdagang, bertani dan mencari ikan di laut.
                        Danusela (Ki Gedheng Alang-Alang) oleh masyarakat dipilih sebagai Kuwu yang pertama dan setelah meninggal pada tahun 1447 Masehi digantikan oleh Pangeran Walangsungsang sebagai Kuwu Carbon yang kedua bergelar Pangeran Cakrabuana. Atas petunjuk Syekh Nur Jati, 
                        Pangeran Walangsungsang dan Nyai Lara Santang menunaikan ibadah haji ke Tanah Suci Mekah.
                        Pangeran Walangsungsang mendapat gelar Haji Abdullah Iman dan adiknya Nyai Lara Santang mendapat gelar Hajah Sarifah Mudaim, kemudian menikah dengan seorang Raja Mesir bernama Syarif Abullah. Dari hasil perkawinannya dikaruniai 2 (dua) orang putra, yaitu Syarif Hidayatullah dan Syarif Nurullah. 
                        Sekembalinya dari Mekah, Pangeran Cakrabuana mendirikan Tajug dan Rumah Besar yang diberi nama Jelagrahan, yang kemudian dikembangkan menjadi Keraton Pakungwati (Keraton Kasepuhan sekarang) sebagai tempat kediaman bersama Putri Kinasih Nyai Pakungwati. Stelah Kakek Pangeran Cakrabuana Jumajan Jati Wafat,
                         maka Keratuan di Singapura tidak dilanjutkan (Singapura terletak + 14 Km sebelah Utara Pesarean Sunan Gunung Jati) tetapi harta peninggalannya digunakan untuk bangunan Keraton Pakungwati dan juga membentuk prajurit dengan nama Dalem Agung Nyi Mas Pakungwati. Prabu Siliwangi melalui utusannya, Tumenggung Jagabaya dan Raja Sengara (adik Pangeran Walangsungsang), mengangkat Pangeran Carkrabuana menjadi Tumenggung dengan Gelar Sri Mangana.
                        Pada Tahun 1470 Masehi Syarif Hiyatullah setelah berguru di Mekah, Bagdad, Campa dan Samudra Pasai, datang ke Kesultanan Demak Pulau Jawa, mula-mula tiba di Demak, Banten ,kemudian Jawa Timur dan mendapat kesempatan untuk bermusyawarah dengan para dewan wali 9 kesultanan Demak yang dipimpin oleh Sunan Ampel. Musyawarah tersebut menghasilkan suatu lembaga yang bergerak dalam penyebaran Agama Islam di Pulau Jawa dengan nama Wali Sanga.
                        Sebagai anggota dari lembaga tersebut, Syarif Hidayatullah datang ke Carbon untuk menemui Uwaknya, Tumenggung Sri Mangana (Pangeran Walangsungsang) untuk mengajarkan Agama Islam di daerah Carbon dan sekitarnya, maka didirikanlah sebuah padepokan yang disebut pekikiran (di Gunung Sembung sekarang)
                        Setelah Suna Ampel wafat tahun 1478 Masehi, maka dalam musyawarah Wali Sanga di Tuban, Syarif Hidayatullah ditunjuk untuk menggantikan pimpinan Wali Sanga. Akhirnya pusat kegiatan Wali Sanga dipindahkan dari Tuban ke Gunung Sembung di Carbon yang kemudian disebut puser bumi sebagai pusat kegiatan keagamaan, 
                        sedangkan sebagai pusat pemerintahan Kesulatan Cirebon berkedudukan di Keraton Pakungwati dengan sebutan GERAGE. Pada Tahun 1479 Masehi, Syarif Hidayatullah yang lebih kondang dengan sebutan Pangeran Sunan Gunung Jati menikah dengan Nyi Mas Pakungwati Putri Pangeran Cakrabuana dari Nyai Mas Endang Geulis. Sejak saat itu Pangeran Syarif Hidayatullah dinobatkan sebagai Sultan Carbon I dan menetap di Keraton Pakungwati.
                        Sebagaimana lazimnya yang selalu dilakukan oleh Pangeran Cakrabuana mengirim upeti ke Pakuan Pajajaran, maka pada tahun 1482 Masehi setelah Syarif Hidayatullah diangkat menjadi Sultan Cirebon membuat maklumat kepada Raja Pakuan Pajajaran PRABU SILIWANGI untuk tidak mengirim upeti lagi karena Kesultanan Cirebon sudah menjadi Negara yang Merdeka. 
                        Selain hal tersebut Pangeran Syarif Hidayatullah melalui lembaga Wali Sanga rela berulangkali memohon Raja Pajajaran untuk berkenan memeluk Agama Islam tetapi tidak berhasil. Itulah penyebab yang utama mengapa Pangeran Syarif Hidayatullah menyatakan Cirebon sebagai Negara Merdeka lepas dari kekuasaan Pakuan Pajajaran,dan berkoalisi dengan kesultanan demak karena berjuang bersama para wali songo di jawa.
                        Peristiwa merdekanya Cirebon keluar dari kekuasaan Pajajaran tersebut, dicatat dalam sejarah tanggal Dwa Dasi Sukla Pakca Cetra Masa Sahasra Patangatus Papat Ikang Sakakala, bertepatan dengan 12 Shafar 887 Hijiriah atau 2 April 1482 Masehi yang sekarang diperingati sebagai hari jadi Kabupaten Cirebon.
                    </p>
                  </div>
                </div>
              <div class="col-4 d-flex align-items-center justify-content-end p-3">
            </div>
          </div>
        </div>
      </div>
    </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                <p style = "font-style:italic">
                  Aplikasi Manajemen Koleksi Museum Pangeran Cakrabuwana, Dinas Kebudayaan Dan Pariwisata
                </p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Argon Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0 overflow-auto">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Dark</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="d-flex my-3">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <div class="mt-2 mb-5 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/argon-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="/assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.1.0"></script>
</body>

</html>