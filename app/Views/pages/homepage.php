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

        <div class="row d-flex aligns-items-center justify-content-center">
            <div class="col-lg-5 col-sm-12 mx-3 mb-4">
                <div class="card shadow h-100">
                <img class="card-img-top" load="lazy" src="<?= base_url(); ?>/assets/images/four-bedroom.jpg" alt="Four Bedroom Amore Villa with Private Pool">
                    <div class="card-body">
                        <div class="m-4">
                            <h3 class="h4">Four-Bedroom Villa with Private Pool</h3>
                            <p class="mt-3">An exclusive haven featuring four extraordinary, spacious luxury master suites with opulent en-suite bathrooms. The villa are set in tranquil gardens with private swimming pools and are overlooked by a traditional Balinese Bale</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-sm-12 mx-3 mb-4">
                <div class="card shadow h-100">
                    <img class="card-img-top" load="lazy" src="<?= base_url(); ?>/assets/images/one-bedroom.jpg" alt="One-Bedroom Pool View Amore Villa">
                    <div class="card-body">
                        <div class="m-4">
                            <h3 class="h4">One-Bedroom Pool View Villa</h3>
                            <p class="mt-3">A luxurious individual private master suite with spacious ensuite bathroom. The daily service, air conditioned suite share a large well equipped modern kitchen, dining room and living room with flat-screen TV and DVD player. Each room have access to a quiet private pool exclusive to the Villa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?= $this->endSection() ?>