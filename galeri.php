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
                    <img src="https://plus.unsplash.com/premium_photo-1765489691892-a822527a76f8?q=80&w=1170"
                        alt="foto 1" class="w-100 h-100 object-fit-cover">
                </div>
            </div>

            <div class="col mb-4">
                <div class="border rounded shadow-sm overflow-hidden ratio ratio-16x9">
                    <img src="https://plus.unsplash.com/premium_photo-1765489691892-a822527a76f8?q=80&w=1170"
                        alt="foto 2" class="w-100 h-100 object-fit-cover">
                </div>
            </div>

            <div class="col mb-4">
                <div class="border rounded shadow-sm overflow-hidden ratio ratio-16x9">
                    <img src="https://plus.unsplash.com/premium_photo-1765489691892-a822527a76f8?q=80&w=1170"
                        alt="foto 3" class="w-100 h-100 object-fit-cover">
                </div>
            </div>

            <div class="col mb-4">
                <div class="border rounded shadow-sm overflow-hidden ratio ratio-16x9">
                    <img src="https://plus.unsplash.com/premium_photo-1765489691892-a822527a76f8?q=80&w=1170"
                        alt="foto 4" class="w-100 h-100 object-fit-cover">
                </div>
            </div>

            <div class="col mb-4">
                <div class="border rounded shadow-sm overflow-hidden ratio ratio-16x9">
                    <img src="https://plus.unsplash.com/premium_photo-1765489691892-a822527a76f8?q=80&w=1170"
                        alt="foto 5" class="w-100 h-100 object-fit-cover">
                </div>
            </div>

        </div>
    </div>


    <?php require_once('components/footer.php') ?>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>