<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri | SMKN 1 Labang</title>
    <?php require_once('components/css_import.php') ?>
</head>

<body>
    <?php require_once('components/navbar.php') ?>
    <div class="container">
        <div class="mt-5">
            <h1 class="text-center">Galeri</h1>
        </div>
    </div>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 mt-4">

            <div class="col mb-4">
                <div class="border rounded shadow-sm overflow-hidden ratio ratio-16x9">
                    <img src="/assets/images/galeri1.jpg"
                        alt="foto 1" class="w-100 h-100 object-fit-cover">
                </div>
            </div>

            <div class="col mb-4">
                <div class="border rounded shadow-sm overflow-hidden ratio ratio-16x9">
                    <img src="/assets/images/galeri2.jpg"
                        alt="foto 2" class="w-100 h-100 object-fit-cover">
                </div>
            </div>

            <div class="col mb-4">
                <div class="border rounded shadow-sm overflow-hidden ratio ratio-16x9">
                    <img src="/assets/images/galeri3.jpg"
                        alt="foto 3" class="w-100 h-100 object-fit-cover">
                </div>
            </div>

            <div class="col mb-4">
                <div class="border rounded shadow-sm overflow-hidden ratio ratio-16x9">
                    <img src="/assets/images/galeri4.jpg"
                        alt="foto 4" class="w-100 h-100 object-fit-cover">
                </div>
            </div>

            <div class="col mb-4">
                <div class="border rounded shadow-sm overflow-hidden ratio ratio-16x9">
                    <img src="/assets/images/galeri5.jpg"
                        alt="foto 5" class="w-100 h-100 object-fit-cover">
                </div>
            </div>
            <div class="col mb-4">
                <div class="border rounded shadow-sm overflow-hidden ratio ratio-16x9">
                    <img src="/assets/images/galeri6.jpg"
                        alt="foto 5" class="w-100 h-100 object-fit-cover">
                </div>
            </div>

        </div>
    </div>


    <?php require_once('components/footer.php') ?>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>