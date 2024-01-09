<section
    style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;"
    data-show="true" data-duration="700" data-cue="slideInDown" class="bg-light bg-heropage">
    <div class="mt-4 card rounded-0 border-0 bgi-no-repeat bgi-position-x-center bgi-size-cover bg-primary bg-opacity-75"
        style="background-size: auto 100%;">
        <div class="card-body container-xxl py-10 px-3">
            <div class="d-flex align-items-center justify-content-center">
                <span class="position-relative d-inline-block fs-1">
                    <div class="text-center fs-2x">🏛️</div>
                    <div class="text-white fw-bold opacity-75-hover">Fasilitas Pondok Pesantren</div>
                    <div
                        class="position-absolute opacity-100 bottom-0 start-25 border-4 border-warning border-bottom w-75">
                    </div>
                </span>
            </div>
        </div>
    </div>
</section>
<style>
    .translateLeftToCenter {
        animation-name: translateLeftToCenter;
        animation-duration: 700ms;
        animation-timing-function: ease;
        animation-delay: 500ms;
        /* Adjust the delay before animation starts */
        animation-direction: normal;
        animation-fill-mode: both;
        transition: transform 0.3s ease;
        /* Add a smooth transition for transform property */
    }

    @keyframes translateLeftToCenter {
        0% {
            transform: translateX(-100%);
            /* Move 100% to the left */
        }

        100% {
            transform: translateX(0);
            /* Move back to the center */
        }
    }

    /* Center the container */
    .container {
        width: 80%;
        /* Set the desired width */
        margin: 0 auto;
    }

    /* Style the card-like appearance */
    .nav-tabs {
        display: flex;
        justify-content: center;
        flex-wrap: nowrap;
        padding: 0;
        /* Remove default padding */
    }

    .nav-item {
        flex: 1;
        /* Equal width for each tab */
        display: flex;
        justify-content: center;
        margin-bottom: 0.5rem;
        /* Add a small bottom margin for spacing */
        max-width: 20%;
        /* Set maximum width for each tab */
    }

    .nav-link {
        border: 1px solid rgba(0, 0, 0, 0.125);
        border-radius: 0.25rem 0.25rem 0 0;
        background-color: #f8f9fa;
        color: #495057;
        text-align: center;
        margin-bottom: 0.5rem;
        /* Add a small bottom margin for spacing */
    }

    .nav-link.active {
        background-color: #ffffff;
        border: 1px solid rgba(0, 0, 0, 0.125);
        border-bottom-color: #ffffff;
        border-radius: 0.25rem 0.25rem 0 0;
        color: #495057;
    }

    /* Center the card content */
    .tab-content {
        text-align: center;
    }

    .tab-pane {
        padding: 20px;
        border: 1px solid rgba(0, 0, 0, 0.125);
        border-radius: 0 0 0.25rem 0.25rem;
        background-color: #ffffff;
        margin-top: -1px;
    }
</style>
<div class="container mt-4 mb-5">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active mx-1 bi bi-houses-fill" id="home-tab" data-bs-toggle="tab"
                data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                aria-selected="true"> Asrama</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link mx-5 bi bi-book-half" id="profile-tab" data-bs-toggle="tab"
                data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane"
                aria-selected="false"> Kelas</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link mx-4 bi bi-pc-display-horizontal" id="contact-tab" data-bs-toggle="tab"
                data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane"
                aria-selected="false"> Perpustakaan</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link mx-4 bi bi-easel2-fill" id="disabled-tab" data-bs-toggle="tab"
                data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane"
                aria-selected="false"> Laboratorium</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link mx-5 bi bi-layers-fill" id="lainnya-tab" data-bs-toggle="tab"
                data-bs-target="#lainnya-tab-pane" type="button" role="tab" aria-controls="lainnya-tab-pane"
                aria-selected="false"> Lainnya</button>
        </li>
    </ul>
    <div class="tab-content translateLeftToCenter" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
            tabindex="0">
            <div class="mt-5 text-center">
                <h2 class="text-align">Asrama</h2>
                <p class="mt-5 mb-5">Asrama terdiri dari asrama khowas dan asrama umum, Asrama umum yaitu kompleks muhajirin, Anshor 1, Anshor 2, Anshor 3,
                    Anshor 4, Anshor 5, Shafa, Marwa, Dll
                </p>
            </div>
            <div id="carouselAsrama" class="carousel carousel-dark slide">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="<?= base_url('assets/img/kata/background.jpg') ?>" class="d-block mx-auto w-50"
                            alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="<?= base_url('assets/img/kata/background.jpg') ?>" class="d-block mx-auto w-50"
                            alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url('assets/img/kata/background.jpg') ?>" class="d-block mx-auto w-50"
                            alt="...">
                    </div>
                </div>

                <!-- Tombol Previous dan Next di bawah gambar -->
                <a class="carousel-control-prev" href="#carouselAsrama" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselAsrama" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>

        </div>
        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="1">
            <div class="mt-5 text-center">
                <h2 class="text-align">Kelas</h2>
                <p class="mt-5 mb-5">Deskripsi Kelas</p>
            </div>
            <div id="carouselKelas" class="carousel carousel-dark slide">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="<?= base_url('assets/img/kata/background.jpg') ?>" class="d-block mx-auto w-50"
                            alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="<?= base_url('assets/img/kata/background.jpg') ?>" class="d-block mx-auto w-50"
                            alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url('assets/img/kata/background.jpg') ?>" class="d-block mx-auto w-50"
                            alt="...">
                    </div>
                </div>

                <!-- Tombol Previous dan Next di bawah gambar -->
                <a class="carousel-control-prev" href="#carouselKelas" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselKelas" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>

        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="2">
            <div class="mt-5 text-center">
                <h2 class="text-align">Perpustakaan</h2>
                <p class="mt-5 mb-5">Deskripsi Perpustakaan</p>
            </div>
            <div id="carouselPerpustakaan" class="carousel carousel-dark slide">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="<?= base_url('assets/img/kata/background.jpg') ?>" class="d-block mx-auto w-50"
                            alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="<?= base_url('assets/img/kata/background.jpg') ?>" class="d-block mx-auto w-50"
                            alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url('assets/img/kata/background.jpg') ?>" class="d-block mx-auto w-50"
                            alt="...">
                    </div>
                </div>

                <!-- Tombol Previous dan Next di bawah gambar -->
                <a class="carousel-control-prev" href="#carouselPerpustakaan" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselPerpustakaan" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
        <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="3">
            <div class="mt-5 text-center">
                <h2 class="text-align">Laboratorium</h2>
                <p class="mt-5 mb-5">Deskripsi Laboratorium</p>
            </div>
            <div id="carouselLaboratorium" class="carousel carousel-dark slide">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="<?= base_url('assets/img/kata/background.jpg') ?>" class="d-block mx-auto w-50"
                            alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="<?= base_url('assets/img/kata/background.jpg') ?>" class="d-block mx-auto w-50"
                            alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url('assets/img/kata/background.jpg') ?>" class="d-block mx-auto w-50"
                            alt="...">
                    </div>
                </div>

                <!-- Tombol Previous dan Next di bawah gambar -->
                <a class="carousel-control-prev" href="#carouselLaboratorium" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselLaboratorium" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
        <div class="tab-pane fade" id="lainnya-tab-pane" role="tabpanel" aria-labelledby="lainnya-tab" tabindex="4">
            <div class="mt-5 text-center">
                <h2 class="text-align">Lainnya</h2>
                <p class="mt-5 mb-5">Deskripsi Lainnya</p>
            </div>
            <div id="carouselLainnya" class="carousel carousel-dark slide">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="<?= base_url('assets/img/kata/background.jpg') ?>" class="d-block mx-auto w-50"
                            alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="<?= base_url('assets/img/kata/background.jpg') ?>" class="d-block mx-auto w-50"
                            alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url('assets/img/kata/background.jpg') ?>" class="d-block mx-auto w-50"
                            alt="...">
                    </div>
                </div>

                <!-- Tombol Previous dan Next di bawah gambar -->
                <a class="carousel-control-prev" href="#carouselLainnya" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouseLainnya" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>