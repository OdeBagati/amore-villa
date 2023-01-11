<?= $this->extend('template') ?>

<?= $this->section('specific-css') ?>
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/animate.css" />
<?= $this->endSection() ?>

<?= $this->section('page-title') ?>
    <title>Amore Villa</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <div class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark cover-home">
        <div class="container">
            <div class="row align-items-center d-flex justify-content-between">
                <div class="col-12 col-md-6 pb-5 order-2 order-sm-2 text-cover">
                    <h1 class="text-white fw-bold mb-3 mt-5 display-4 animate__animated animate__fadeInLeft">Experience The Best of Bali in Our Luxurious Villa</h1>
                    <button class="btn btn-lg btn-book animate__animated animate__fadeInUp">BOOK NOW</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="text-center">
            <h2 class="h1 m-5"><b>Featured Villas and Luxury Master Suites</b></h2>
        </div>

        <div>
            
        </div>
    </div>

<?= $this->endSection() ?>