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
            <h2 class="h1 m-5 animate__animated"><b>About Us</b></h2>
        </div>

        <div class="px-5 pb-5">
            <p class="fs-5">Amore Villas is a luxurious resort in Canggu, designed for guests who appreciate the finer things in life. The villas combine global contemporary style with traditional Balinese hospitality. Each villa has a private pool and a fully-equipped kitchen. Guests can check-in at any time, as the property has a 24-hour front desk. In-room amenities include a flat-screen cable TV, DVD player, and semi-outdoor bathroom with free toiletries. The resort also offers free WiFi throughout the property. Additional services such as babysitting, airport shuttle, and car rental can be arranged for an additional fee. The resort also has a spa and offers private chef services at an additional charge.<br><br>According to independent reviews, this is a guest favorite part of Canggu, and the property has received top ratings for its location Amore Villas has been welcoming Booking.com guests since February 27, 2012, and the staff speaks multiple languages to cater to a diverse clientele.</p>
        </div>

        <div class="text-center">
            <h2 class="h1 m-5 animate__animated animate__delay-2s"><b>Featured Villas and Luxury Master Suites</b></h2>
        </div>

        <div class="row d-flex aligns-items-center justify-content-center animate__animated animate__delay-3s">
            <div class="col-lg-5 col-sm-12 mx-3 mb-4 px-4">
                <div class="card shadow h-100">
                <img class="card-img-top" load="lazy" src="<?= base_url(); ?>/assets/images/four-bedroom.jpg" alt="Four Bedroom Amore Villa with Private Pool">
                    <div class="card-body">
                        <div class="m-4">
                            <h3 data-bs-toggle="modal" data-bs-target="#modalFour" class="h4">Four-Bedroom Villa with Private Pool</h3>
                            <p class="mt-3">An exclusive haven featuring four extraordinary, spacious luxury master suites with opulent en-suite bathrooms. The villa are set in tranquil gardens with private swimming pools and are overlooked by a traditional Balinese Bale</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-sm-12 mx-3 mb-4 px-4">
                <div class="card shadow h-100">
                    <img class="card-img-top" load="lazy" src="<?= base_url(); ?>/assets/images/one-bedroom.jpg" alt="One-Bedroom Pool View Amore Villa">
                    <div class="card-body">
                        <div class="m-4">
                            <h3 data-bs-toggle="modal" data-bs-target="#modalOne" class="h4">One-Bedroom Pool View Villa</h3>
                            <p class="mt-3">A luxurious individual private master suite with spacious ensuite bathroom. The daily service, air conditioned suite share a large well equipped modern kitchen, dining room and living room with flat-screen TV and DVD player. Each room have access to a quiet private pool exclusive to the Villa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade p-4" id="modalFour" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- <div class="modal-header">
                        <h2 class="modal-title fs-3" id="exampleModalLabel">Four-Bedroom Villa with Private Pool</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div> -->
                    <div class="modal-body">
                        <div class="p-lg-5 p-1">
                            <div class="row">
                                <div class="col-2 d-lg-block d-md-block d-none">
                                    <!-- Image for PC -->
                                    <img src="<?= base_url(); ?>/assets/images/four-bedroom.jpg" class="h-100 fade-in" style="width:150px; object-fit: cover;" alt="One-Bedroom Pool View Villa">
                                </div>

                                <div class="col-12 d-lg-none d-md-none">
                                    <!-- Image for Mobile -->
                                    <img src="<?= base_url(); ?>/assets/images/four-bedroom.jpg" style="width:100%; height: 100px; object-fit: cover;" alt="Four Bedroom Amore Villa with Private Pool">
                                </div>

                                <div class="col-sm-9 col-12 ms-lg-5 ms-md-5 ms-0 mt-lg-0 mt-md-0 mt-4">
                                    <h3 class="h2 ls-2"><strong>Four-Bedroom Villa with Private Pool</strong></h3>
                                    <p>An exclusive haven featuring four extraordinary, spacious luxury master suites with opulent ensuite bathrooms. The villa are set in tranquil gardens with private swimming pools and are overlooked by a traditional Balinese Bale</p>
                                    <p class="h3 ls-2 mt-4">AMENITIES</p>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-12 amenities">
                                            <p>King Size Bed</p>
                                            <p>Garden view</p>
                                            <p>Pool view</p>
                                            <p>Kitchenette</p>
                                            <p>Separate luggage store</p>
                                            <p>Balcony</p>
                                            <p>Bathroom with bathtub</p>
                                            <p>Bathroom with shower</p>
                                            <p>Bathroom with window</p>
                                            <p>Breakfast area</p>
                                            <p>Equipped kitchen</p>
                                            <p>Seating area</p>
                                            <p>Cable TV</p>
                                            <p>DVD player</p>
                                            <p>Internet access</p>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-12 amenities">
                                            <p>Wireless internet</p>
                                            <p>TV remote control</p>
                                            <p>Satelite TV</p>
                                            <p>Fridge</p>
                                            <p>Tea maker</p>
                                            <p>Coffee machine</p>
                                            <p>Microwave oven</p>
                                            <p>Fan</p>
                                            <p>Air Conditioning</p>
                                            <p>Openable window</p>
                                            <p>Full-length window</p>
                                            <p>Des</p>
                                            <p>Hair dryer</p>
                                            <p>High ceiling</p>
                                            <p>Vanity mirror</p>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-12 amenities">
                                            <p>Room safe</p>
                                            <p>Pets not allowed</p>
                                            <p>Private bathroom</p>
                                            <p>Barbecue</p>
                                            <p>Mosqito net</p>
                                            <p>Flat screen</p>
                                            <p>Oven</p>
                                            <p>Refrigator</p>
                                            <p>Stove</p>
                                            <p>Kettle</p>
                                            <p>Gas frill</p>
                                            <p>Freezer</p>
                                            <p>Juice</p>
                                            <p>Bedinen</p>
                                            <p>Baby cot</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade p-4" id="modalOne" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- <div class="modal-header">
                        <h2 class="modal-title fs-3" id="exampleModalLabel">Four-Bedroom Villa with Private Pool</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div> -->
                    <div class="modal-body">
                        <div class="p-lg-5 p-1">
                            <div class="row">
                                <div class="col-2 d-lg-block d-md-block d-none">
                                    <!-- Image for PC -->
                                    <img src="<?= base_url(); ?>/assets/images/one-bedroom.jpg" class="h-100 fade-in" style="width:150px; object-fit: cover;" alt="One-Bedroom Pool View Villa">
                                </div>

                                <div class="col-12 d-lg-none d-md-none">
                                    <!-- Image for Mobile -->
                                    <img src="<?= base_url(); ?>/assets/images/one-bedroom.jpg" style="width:100%; height:100px; object-fit: cover;" alt="One-Bedroom Pool View Villa">
                                </div>

                                <div class="col-sm-9 col-12 ms-lg-5 ms-md-5 ms-0 mt-lg-0 mt-md-0 mt-4">
                                    <h3 class="h2 ls-2"><strong>One-Bedroom Pool View Villa</strong></h3>
                                    <p>A luxurious individual private master suite with spacious ensuite bathroom. The daily service, air conditioned suite share a large well equipped modern kitchen, dining room and living room with flat-screen TV and DVD player. Each room have access to a quiet private pool exclusive to the Villa</p>
                                    <p class="h3 ls-2 mt-4">AMENITIES</p>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-6 amenities">
                                            <p>King Size Bed</p>
                                            <p>Garden view</p>
                                            <p>Pool view</p>
                                            <p>Kitchenette</p>
                                            <p>Separate luggage store</p>
                                            <p>Balcony</p>
                                            <p>Bathroom with bathtub</p>
                                            <p>Bathroom with shower</p>
                                            <p>Bathroom with window</p>
                                            <p>Breakfast area</p>
                                            <p>Equipped kitchen</p>
                                            <p>Seating area</p>
                                            <p>Cable TV</p>
                                            <p>DVD player</p>
                                            <p>Internet access</p>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-6 amenities">
                                            <p>Wireless internet</p>
                                            <p>TV remote control</p>
                                            <p>Satelite TV</p>
                                            <p>Fridge</p>
                                            <p>Tea maker</p>
                                            <p>Coffee machine</p>
                                            <p>Microwave oven</p>
                                            <p>Fan</p>
                                            <p>Air Conditioning</p>
                                            <p>Openable window</p>
                                            <p>Full-length window</p>
                                            <p>Des</p>
                                            <p>Hair dryer</p>
                                            <p>High ceiling</p>
                                            <p>Vanity mirror</p>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-6 amenities">
                                            <p>Room safe</p>
                                            <p>Pets not allowed</p>
                                            <p>Private bathroom</p>
                                            <p>Barbecue</p>
                                            <p>Mosqito net</p>
                                            <p>Flat screen</p>
                                            <p>Oven</p>
                                            <p>Refrigator</p>
                                            <p>Stove</p>
                                            <p>Kettle</p>
                                            <p>Gas frill</p>
                                            <p>Freezer</p>
                                            <p>Juice</p>
                                            <p>Bedinen</p>
                                            <p>Baby cot</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?= $this->endSection() ?>