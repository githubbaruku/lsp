<!doctype html>
<html lang="ar">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">

    <title>LSP</title>
    <style>
        .image-overlay-container {
            position: relative;
            text-align: center;
            color: white;
        }

        .image-overlay-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            animation: fadeIn 2s ease-in-out;

        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .header-title {
            font-size: 5rem;
            justify-content: left;
        }

        .header-description {
            color: yellow;
            font-size: 2rem;
        }

        .bg-custom {
            background-color: rgb(102, 0, 0);
            min-height: 35rem;
        }

        .image-overlay-text {
            left: 25rem;
            font-family: 'Google Sans';
        }
    </style>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="<?= base_url(); ?>"><img src="<?= base_url('assets/img/logo.png'); ?>" alt="logo" width="50%"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            Layanan Skema Sertifikasi
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">submenu</a>
                            <a class="dropdown-item" href="#">Prosedur</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Peta Okupasi</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            Profile
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?= base_url('about'); ?>">Tentang Kami</a>
                            <a class="dropdown-item" href="#">Hubungi Kami</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Download</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline m-2 my-lg-0">
                    <button class="btn btn-outline-success my-2 my-sm-0"><a href="<?= base_url('auth/registration'); ?>" class="text-decoration-none">Daftar</a></button>
                    <button class=" btn btn-primary m-2 my-sm-0"><a class="text-decoration-none text-white" href=" <?= base_url('auth'); ?>">Masuk</a></button>
                </form>
            </div>
        </nav>
    </div>

    <div class="image-overlay-container ">
        <div class="container-fluid bg-custom text-left">
            <div class="image-overlay-text">
                <h1 class="header-title text-left">LEMBAGA
                    <br>SERTIFIKASI <br>PROFESI
                </h1>
                <h5 class="header-description text-left">DAARUL QUR'AN</h5>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="container">
                <h1 class="p-3">Tentang Kami</h1>
                <h3 class="p-3">DASAR PEMIKIRAN</h3>
                <p class="p-3 text-justify">
                    Salah satu hadis popular yang
                    diriwayatkan oleh Sayyidah Aisyah
                    radhiyallahu ‘anha, yakni hadis yang berbunyi:

                <p class="text-right">
                    ان الله تعالى يحب اذا عمل احدكم عملا ان يتقنه

                </p>
                Hadis ini dapat dijumpai di beberapa
                kitab hadis, salah satunya Al-Tanwir
                Syarah Al-Jami’u As-Shaghir. <a href="<?= base_url('about'); ?>">read more >>></a>

                </p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="container">
                <img class="img-fluid mt-5" src="<?= base_url('assets/img/about_us1.jpg'); ?>" alt="">
            </div>
        </div>
        <div class="col-lg-4">
            <div class="container">
                <img class="img-fluid mt-5" src="<?= base_url('assets/img/about_us2.jpg'); ?>" alt="">
            </div>
        </div>
        <div class="container my-5">
            <div class="row">
                <div class="col">
                    <h2 class="text-center">Skema</h2>
                    <p class="text-center">Berikut adalah daftar skema yang tersedia.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?= base_url('assets/img/1 Tahsin Muda.png'); ?>" class="card-img-top" alt="Skema 1">
                        <div class="card-body">
                            <h5 class="card-title">Skema Sertifikasi Profesi Guru
                                Tahsin Al-Qur’an Mubtadi (Muda)</h5>
                            <!-- <p class="card-text"></p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#webProgrammerModal">
                                Selengkapnya</button> -->
                        </div>
                    </div>
                </div>

                <!-- The Modal -->
                <div class="modal fade" id="webProgrammerModal" tabindex="-1" role="dialog" aria-labelledby="webProgrammerModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="webProgrammerModalLabel">Skema Web Programmer</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h6>Deskripsi:</h6>
                                <p>Web Programmer bertanggung jawab mengembangkan dan memelihara aplikasi web menggunakan teknologi modern.</p>
                                <h6>Kompetensi Utama:</h6>
                                <ul>
                                    <li>Pengembangan Front-End: HTML, CSS, JavaScript</li>
                                    <li>Pengembangan Back-End: PHP, Python, Node.js</li>
                                    <li>Pengujian dan Debugging</li>
                                    <li>Pemeliharaan Situs Web</li>
                                    <li>Kolaborasi Tim</li>
                                </ul>
                                <h6>Kualifikasi:</h6>
                                <p>Pendidikan minimum D3 atau setara, pengalaman minimal 1 tahun dalam pengembangan web.</p>
                                <h6>Peluang Karir:</h6>
                                <ul>
                                    <li>Pengembang Web Junior</li>
                                    <li>Pengembang Web Senior</li>
                                    <li>Arsitek Web</li>
                                    <li>Manajer Proyek IT</li>

                                </ul>
                            </div>
                            <div class="modal-footer">

                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <a href="<?= base_url('auth/registration'); ?>"><button type="button" class="btn btn-success">Daftar</button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?= base_url('assets/img/2 Tahsin Madya.png'); ?>" class="card-img-top" alt="Skema 2">
                        <div class="card-body">
                            <h5 class="card-title">Skema Sertifikasi Profesi Guru
                                Tahsin Al-Qur’an Mutawassit
                                (Madya)</h5>
                            <!-- <p class="card-text">Mengembangkan dan memelihara aplikasi mobile untuk berbagai platform.</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mobileProgrammerModal">
                                Selengkapnya</button> -->
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="mobileProgrammerModal" tabindex="-1" role="dialog" aria-labelledby="mobileProgrammerModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mobileProgrammerModalLabel">Detail Skema Mobile Programmer</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p><strong>Mobile Programmer</strong>: Mengembangkan dan memelihara aplikasi mobile untuk berbagai platform.</p>
                                <h6>Kompetensi Utama:</h6>
                                <ul>
                                    <li>Pengembangan Aplikasi Android dan iOS</li>
                                    <li>Pengujian dan Debugging</li>
                                    <li>Pemeliharaan dan Update Aplikasi</li>
                                    <li>Kolaborasi dengan Desainer dan Pengembang Lain</li>
                                </ul>
                                <h6>Kualifikasi:</h6>
                                <ul>
                                    <li>Pendidikan minimum D3 atau setara dalam bidang teknologi informasi atau ilmu komputer.</li>
                                    <li>Pengalaman dalam pengembangan mobile minimal 1 tahun.</li>
                                    <li>Kemampuan dalam menggunakan berbagai alat dan teknologi mobile.</li>
                                </ul>
                                <h6>Peluang Karir:</h6>
                                <ul>
                                    <li>Pengembang Mobile Junior</li>
                                    <li>Pengembang Mobile Senior</li>
                                    <li>Arsitek Aplikasi Mobile</li>
                                    <li>Manajer Proyek IT</li>
                                </ul>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <a href="<?= base_url('auth/registration'); ?>"><button type="button" class="btn btn-success">Daftar</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?= base_url('assets/img/3 Tahsin Mahir.png'); ?>" class="card-img-top" alt="Skema 3">
                        <div class="card-body">
                            <h5 class="card-title">Skema Sertifikasi Profesi Guru
                                Tahsin Al-Qur’an Mahir (Ahli)</h5>
                            <!-- <p class="card-text">Membuat dan mengatur elemen visual untuk komunikasi efektif.</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#designGrafisModal">
                                Design Grafis
                            </button> -->
                            <!-- Modal for Design Grafis -->
                            <div class="modal fade" id="designGrafisModal" tabindex="-1" role="dialog" aria-labelledby="designGrafisModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="designGrafisModalLabel">Detail Skema Design Grafis</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Design Grafis</strong>: Membuat dan mengatur elemen visual untuk komunikasi efektif.</p>
                                            <h6>Kompetensi Utama:</h6>
                                            <ul>
                                                <li>Pemahaman Prinsip Desain</li>
                                                <li>Penggunaan Software Desain (Photoshop, Illustrator, dll.)</li>
                                                <li>Pembuatan Materi Visual untuk Berbagai Media</li>
                                                <li>Kolaborasi dengan Klien dan Tim Kreatif</li>
                                            </ul>
                                            <h6>Kualifikasi:</h6>
                                            <ul>
                                                <li>Pendidikan minimum D3 atau setara dalam bidang desain grafis atau seni rupa.</li>
                                                <li>Pengalaman dalam desain grafis minimal 1 tahun.</li>
                                                <li>Kreativitas dan kemampuan komunikasi visual yang kuat.</li>
                                            </ul>
                                            <h6>Peluang Karir:</h6>
                                            <ul>
                                                <li>Desainer Grafis Junior</li>
                                                <li>Desainer Grafis Senior</li>
                                                <li>Direktur Kreatif</li>
                                                <li>Manajer Proyek Desain</li>
                                            </ul>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                            <a href="<?= base_url('auth/registration'); ?>"><button type="button" class="btn btn-success">Daftar</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?= base_url('assets/img/4 Tahfizh Muda.png'); ?>" class="card-img-top" alt="Skema 1">
                        <div class="card-body">
                            <h5 class="card-title">Skema Sertifikasi Profesi Guru
                                Tahfizh Al-Qur’an Mubtadi (Muda)</h5>
                            <!-- <p class="card-text"></p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#webProgrammerModal">
                                Selengkapnya</button> -->
                        </div>
                    </div>
                </div>

                <!-- The Modal -->
                <div class="modal fade" id="webProgrammerModal" tabindex="-1" role="dialog" aria-labelledby="webProgrammerModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="webProgrammerModalLabel">Skema Web Programmer</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h6>Deskripsi:</h6>
                                <p>Web Programmer bertanggung jawab mengembangkan dan memelihara aplikasi web menggunakan teknologi modern.</p>
                                <h6>Kompetensi Utama:</h6>
                                <ul>
                                    <li>Pengembangan Front-End: HTML, CSS, JavaScript</li>
                                    <li>Pengembangan Back-End: PHP, Python, Node.js</li>
                                    <li>Pengujian dan Debugging</li>
                                    <li>Pemeliharaan Situs Web</li>
                                    <li>Kolaborasi Tim</li>
                                </ul>
                                <h6>Kualifikasi:</h6>
                                <p>Pendidikan minimum D3 atau setara, pengalaman minimal 1 tahun dalam pengembangan web.</p>
                                <h6>Peluang Karir:</h6>
                                <ul>
                                    <li>Pengembang Web Junior</li>
                                    <li>Pengembang Web Senior</li>
                                    <li>Arsitek Web</li>
                                    <li>Manajer Proyek IT</li>

                                </ul>
                            </div>
                            <div class="modal-footer">

                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <a href="<?= base_url('auth/registration'); ?>"><button type="button" class="btn btn-success">Daftar</button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?= base_url('assets/img/5 Tahfizh Madya.png'); ?>" class="card-img-top" alt="Skema 2">
                        <div class="card-body">
                            <h5 class="card-title">Skema Sertifikasi Profesi Guru
                                Tahfizh Al-Qur’an Mutawassit
                                (Madya)</h5>
                            <!-- <p class="card-text">Mengembangkan dan memelihara aplikasi mobile untuk berbagai platform.</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mobileProgrammerModal">
                                Selengkapnya</button> -->
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="mobileProgrammerModal" tabindex="-1" role="dialog" aria-labelledby="mobileProgrammerModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mobileProgrammerModalLabel">Detail Skema Mobile Programmer</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p><strong>Mobile Programmer</strong>: Mengembangkan dan memelihara aplikasi mobile untuk berbagai platform.</p>
                                <h6>Kompetensi Utama:</h6>
                                <ul>
                                    <li>Pengembangan Aplikasi Android dan iOS</li>
                                    <li>Pengujian dan Debugging</li>
                                    <li>Pemeliharaan dan Update Aplikasi</li>
                                    <li>Kolaborasi dengan Desainer dan Pengembang Lain</li>
                                </ul>
                                <h6>Kualifikasi:</h6>
                                <ul>
                                    <li>Pendidikan minimum D3 atau setara dalam bidang teknologi informasi atau ilmu komputer.</li>
                                    <li>Pengalaman dalam pengembangan mobile minimal 1 tahun.</li>
                                    <li>Kemampuan dalam menggunakan berbagai alat dan teknologi mobile.</li>
                                </ul>
                                <h6>Peluang Karir:</h6>
                                <ul>
                                    <li>Pengembang Mobile Junior</li>
                                    <li>Pengembang Mobile Senior</li>
                                    <li>Arsitek Aplikasi Mobile</li>
                                    <li>Manajer Proyek IT</li>
                                </ul>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <a href="<?= base_url('auth/registration'); ?>"><button type="button" class="btn btn-success">Daftar</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?= base_url('assets/img/6 Tahfizh Mahir.png'); ?>" class="card-img-top" alt="Skema 3">
                        <div class="card-body">
                            <h5 class="card-title">Skema Sertifikasi Profesi Guru
                                Tahfizh Al-Qur’an Mahir (Ahli)</h5>
                            <!-- <p class="card-text">Membuat dan mengatur elemen visual untuk komunikasi efektif.</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#designGrafisModal">
                                Design Grafis
                            </button> -->
                            <!-- Modal for Design Grafis -->
                            <div class="modal fade" id="designGrafisModal" tabindex="-1" role="dialog" aria-labelledby="designGrafisModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="designGrafisModalLabel">Detail Skema Design Grafis</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Design Grafis</strong>: Membuat dan mengatur elemen visual untuk komunikasi efektif.</p>
                                            <h6>Kompetensi Utama:</h6>
                                            <ul>
                                                <li>Pemahaman Prinsip Desain</li>
                                                <li>Penggunaan Software Desain (Photoshop, Illustrator, dll.)</li>
                                                <li>Pembuatan Materi Visual untuk Berbagai Media</li>
                                                <li>Kolaborasi dengan Klien dan Tim Kreatif</li>
                                            </ul>
                                            <h6>Kualifikasi:</h6>
                                            <ul>
                                                <li>Pendidikan minimum D3 atau setara dalam bidang desain grafis atau seni rupa.</li>
                                                <li>Pengalaman dalam desain grafis minimal 1 tahun.</li>
                                                <li>Kreativitas dan kemampuan komunikasi visual yang kuat.</li>
                                            </ul>
                                            <h6>Peluang Karir:</h6>
                                            <ul>
                                                <li>Desainer Grafis Junior</li>
                                                <li>Desainer Grafis Senior</li>
                                                <li>Direktur Kreatif</li>
                                                <li>Manajer Proyek Desain</li>
                                            </ul>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                            <a href="<?= base_url('auth/registration'); ?>"><button type="button" class="btn btn-success">Daftar</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
        <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
        <!-- Bootstrap core JavaScript-->
        <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

        <!-- datepicker -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>
            $('#datepicker').datepicker({
                uiLibrary: 'bootstrap4'
            });
        </script>
        <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
</body>

</html>