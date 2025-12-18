<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMKN 1 Labang</title>
    <?php require_once('components/css_import.php') ?>

    <style>
        .carousel-item {
            height: 690px;
        }

        .carousel-item img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }
    </style>
</head>

<body>
    <?php require_once('components/navbar.php') ?>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active position-relative">
                <img src="assets/images/carousel2.jpeg" alt="gambar 1">

                <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>

                <div class="carousel-caption d-flex flex-column justify-content-center align-items-start h-100">
                    <h1 class="fw-bold">SMK Negeri 1 Labang</h1>
                    <p class="fs-5">Sekolah Unggul & Berkarakter</p>
                </div>
            </div>

            <div class="carousel-item position-relative">
                <img src="assets/images/carousel1.jpeg" alt="gambar 2">

                <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>

                <div class="carousel-caption d-flex flex-column justify-content-center align-items-start h-100">
                    <h1 class="fw-bold">Berbasis Industri</h1>
                    <p class="fs-5">Siap Kerja, Siap Wirausaha</p>
                </div>
            </div>

        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>

    <div class="p-4"></div>

    <div class="container">
        <div class="row g-2 g-lg-4 mt-4">
            <h1 class="d-block d-md-none text-center">Sambutan Kepala Sekolah</h1>
            <div class="col-12 col-md-4 p-2">
                <div class="ratio ratio-1x1 mx-auto" style="width: 80%;">
                    <img src="https://smkn1labang.sch.id/img/bukepsek1.png"
                        class="w-100 h-100 object-fit-cover rounded" alt="foto kepala sekolah">
                </div>
            </div>
            <div class="col-12 col-md-8">
                <h1 class="d-none d-md-block">Sambutan Kepala Sekolah</h1>
                <h2 class="text-center text-md-start mb-4 mb-md-2 mt-md-4" style="font-size: larger;">Dra. ANIK
                    GUNAWANTI ISKANDANI , M.Pd.</h2>
                <p class="text-justify">Para anak-anakku sekalian yang ibu banggakan, mewakili keluarga besar SMKN 1 Labang ibu mengucapkan selamat datang di tempat ini, di sekolah yang kita cintai bersama ini, di SMKN 1 Labang. Mulai hari ini, anak-anakku kelas Sepuluh telah sah menjadi bagian dari warga sekolah sebagai siswa-siswi. Tempalah ilmu pengetahuan di sekolah ini dan capilah cita-cita kalian setinggi langit melalui pengetahuan yang akan diperoleh dari bapak-ibu guru SMKN 1 Labang dengan penuh kesabaran, terbimbing dan terlatih. Serta terampil dalam mencapai pembelajaran yang dikenal dengan pembelajaran abad 21 di era sekarang ini. Melalui kurikulum merdeka yang telah dianjurkan oleh pemerintah merupakan kesempatan dan peluang untuk mengimplementasikan ide dan gagasan di sekolah ini dengan berdasarkan projek penguatan profil pelajar Pancasila. Jadikanlah era digitalisasi ini sebagai kebutuhan sehari-hari dalam hal positif, hal kretifitas, dan hal lainnya sebagai penunjang materi pembelajaran baik di dalam sekolah maupun di luar sekolah. Sehingga nantinya bisa menyesuaikan diri dengan menyiapkan mental kita dalam memenuhi kebutuhan dunia usaha dan dunia industri.</p>
            </div>
        </div>
    </div>

    <div class="p-4"></div>

    <div class="container">
        <h1 class="text-center mt-4">Kompetensi Keahlian </h1>
        <span class="d-block text-center">Beberapa Jurusan di SMK Negeri 1 Labang</span>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-2">
            <div class="col">
                <div class="card w-100">
                    <img src="https://smkn1labang.sch.id/img/Jurusan/3.png"
                        class="card-img-top" alt="jurusan RPL">
                    <div class="card-body">
                        <h5 class="card-title">RPL</h5>
                        <p class="card-text">Rekayasa Perangkat Lunak adalah program keahlian di bidang Teknologi Komputer dan Informatika yang fokus pada pengembangan perangkat lunak (software). Siswa akan belajar tentang pembuatan aplikasi, desain antarmuka, serta teknik pemrograman dan sistem informasi yang dibutuhkan di dunia industri IT.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card w-100">
                    <img src="https://smkn1labang.sch.id/img/Jurusan/4.png"
                        class="card-img-top" alt="jurusan TKJ">
                    <div class="card-body">
                        <h5 class="card-title">TKJ</h5>
                        <p class="card-text">Teknik Komputer dan Jaringan adalah program keahlian yang mempelajari komputer dan jaringan, termasuk pemasangan, pemeliharaan, serta pengelolaan hardware dan software jaringan komputer. Lulusan siap bekerja di bidang jaringan dan dukungan teknis IT.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card w-100">
                    <img src="https://smkn1labang.sch.id/img/Jurusan/1.png"
                        class="card-img-top" alt="jurusan AK">
                    <div class="card-body">
                        <h5 class="card-title">AK</h5>
                        <p class="card-text">Jurusan Akuntansi atau Akuntansi dan Keuangan Lembaga membekali siswa dengan pengetahuan dan keterampilan di bidang keuangan dan akuntansi, termasuk pencatatan transaksi, penyusunan laporan keuangan dan penggunaan software akuntansi yang umum digunakan di dunia kerja.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card w-100">
                    <img src="https://smkn1labang.sch.id/img/Jurusan/5.png"
                        class="card-img-top" alt="jurusan TSM">
                    <div class="card-body">
                        <h5 class="card-title">TSM</h5>
                        <p class="card-text">Teknik Bisnis dan Sepeda Motor adalah program keahlian yang menggabungkan ilmu teknik otomotif, khususnya sepeda motor, dengan keterampilan bisnis. Siswa akan belajar tentang perbaikan dan perawatan motor serta aspek manajemen bisnisnya.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card w-100">
                    <img src="https://smkn1labang.sch.id/img/Jurusan/6.png"
                        class="card-img-top" alt="jurusan TKR">
                    <div class="card-body">
                        <h5 class="card-title">TKR</h5>
                        <p class="card-text">Jurusan Teknik Kendaraan Ringan Otomotif fokus pada perawatan dan perbaikan kendaraan ringan seperti mobil. Siswa dilatih keterampilan teknis untuk mendiagnosa, memperbaiki, dan merawat bagian kendaraan agar siap bekerja di bengkel atau industri otomotif.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card w-100">
                    <img src="https://smkn1labang.sch.id/img/Jurusan/2.png"
                        class="card-img-top" alt="jurusan TEI">
                    <div class="card-body">
                        <h5 class="card-title">TEI</h5>
                        <p class="card-text">Teknik Elektronika Industri adalah jurusan yang berfokus pada elektronika di bidang otomasi industri, perawatan dan sistem kontrol industri. Siswa belajar tentang komponen elektronik, sistem kontrol mesin, dan penerapannya pada proses produksi industri.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="p-5"></div>

    <?php require_once('components/footer.php') ?>

    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>