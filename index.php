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
                <img src="https://images.unsplash.com/photo-1761839258575-038fef381ee7?q=80&w=1170" alt="gambar 1">

                <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>

                <div class="carousel-caption d-flex flex-column justify-content-center align-items-start h-100">
                    <h1 class="fw-bold">SMK Negeri 1 Labang</h1>
                    <p class="fs-5">Sekolah Unggul & Berkarakter</p>
                </div>
            </div>

            <div class="carousel-item position-relative">
                <img src="https://images.unsplash.com/photo-1761839258239-2be2146f1605?q=80&w=2070" alt="gambar 2">

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
                    <img src="https://images.unsplash.com/photo-1764593154804-e7646a005ce0?q=80&w=764&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fHx8fA%3D%3D"
                        class="w-100 h-100 object-fit-cover rounded" alt="foto kepala sekolah">
                </div>
            </div>
            <div class="col-12 col-md-8">
                <h1 class="d-none d-md-block">Sambutan Kepala Sekolah</h1>
                <h2 class="text-center text-md-start mb-4 mb-md-2 mt-md-4" style="font-size: larger;">Dra. ANIK
                    GUNAWANTI ISKANDANI , M.Pd.</h2>
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque esse officia
                    dolore? Nemo doloribus,
                    nisi illo deleniti id quo quaerat unde perspiciatis ullam ut similique numquam magnam incidunt error
                    molestias voluptas dolorem, ipsum perferendis quisquam? Iste odio ea deleniti ex, ullam aut
                    voluptatibus qui fugiat. Labore nobis repudiandae eum hic!</p>
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam totam commodi
                    earum beatae, eaque
                    excepturi quas, facilis distinctio dolores quod vel ut voluptatibus reprehenderit praesentium non
                    nobis nihil aliquam natus porro. Facilis corrupti blanditiis alias, laborum eveniet provident totam
                    adipisci quia! Magni a ad perspiciatis enim libero vitae, nisi nesciunt.</p>
            </div>
        </div>
    </div>

    <div class="p-4"></div>

    <div class="container">
        <h1 class="text-center mt-4">Jurusan </h1>
        <span class="d-block text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus,
            fugit.</span>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-2">
            <div class="col">
                <div class="card w-100">
                    <img src="https://plus.unsplash.com/premium_photo-1764715276146-61df9dacd681?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="card-img-top" alt="jurusan RPL">
                    <div class="card-body">
                        <h5 class="card-title">RPL</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card w-100">
                    <img src="https://plus.unsplash.com/premium_photo-1764715276146-61df9dacd681?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="card-img-top" alt="jurusan TKJ">
                    <div class="card-body">
                        <h5 class="card-title">TKJ</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card w-100">
                    <img src="https://plus.unsplash.com/premium_photo-1764715276146-61df9dacd681?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="card-img-top" alt="jurusan AK">
                    <div class="card-body">
                        <h5 class="card-title">AK</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card w-100">
                    <img src="https://plus.unsplash.com/premium_photo-1764715276146-61df9dacd681?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="card-img-top" alt="jurusan TSM">
                    <div class="card-body">
                        <h5 class="card-title">TSM</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card w-100">
                    <img src="https://plus.unsplash.com/premium_photo-1764715276146-61df9dacd681?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="card-img-top" alt="jurusan TKR">
                    <div class="card-body">
                        <h5 class="card-title">TKR</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card w-100">
                    <img src="https://plus.unsplash.com/premium_photo-1764715276146-61df9dacd681?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        class="card-img-top" alt="jurusan TEI">
                    <div class="card-body">
                        <h5 class="card-title">TEI</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
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