<?= $this->extend('template/default-template'); ?>

<?= $this->section('content'); ?>

<div class="row">
    <nav class="navbar stick-top navbar-expand-lg p-3" style="background-color: #AEBDCA;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url('assets/img/unity.png'); ?>" alt="Logo" width="30" height="27" class="d-inline-block align-text-top"> Cendikia Organizer</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Paket</a>
                    </li>
                    <li class="nav-item ms-3">
                        <button class="btn btn-outline-success me-2" type="button"><i class="bi bi-whatsapp"></i> Whatsapp</button>
                    </li>
                    <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li> -->

                </ul>
            </div>
        </div>
    </nav>
</div>

<div class="container">
    <div class="row d-flex mt-4">
        <div class="col-md-5">
            <h1>Cendikia Organizer</h1>
            <h5 class="text-muted">Kami adalah event organizer yang siap memberikan pengalaman tak terlupakan dalam setiap momen Anda.</h5>
        </div>
        <div class="col-md-4">
            <img src="https://i.pinimg.com/originals/2e/9b/f7/2e9bf7ff18fc17309747bceff2b72aa1.jpg" class="img-fluid rounded">
        </div>
    </div>
</div>


<div class="container mt-5">

    <div class="row">
        <h2 class="text-center fw-bold mb-4">Kenapa Memilih Kami</h2>

        <div class="row d-flex justify-content-center mb-3">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="bi bi-coin" style="font-size: 3rem;"></i>
                        <h5 class="card-title">Harga Terjangkau</h5>
                        <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                        <p class="card-text">Setiap Paket Wisata Kami Berikan Harga Terkangkau & Fasilitas Terbaik.</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="bi bi-trophy" style="font-size: 3rem;"></i>
                        <h5 class="card-title ">Terpercaya</h5>
                        <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                        <p class="card-text">Sudah Banyak Klien Yang Mempercayakan Eventnya Kepada Kami</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="bi bi-shield-check" style="font-size: 3rem;"></i>
                        <h5 class="card-title">Safety First</h5>
                        <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                        <p class="card-text">Didukung Tim Kami Yang Berpengalaman Dalam Mengelola Event Outdoor</p>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row mt-5">

        <div class="title mb-2">
            <h4 class="text-center fw-bold">Tentang Kami</h4>
        </div>
        <div class="content">
            <p class="text-center">PT.KREATIF ALAM NUSANTARA Salah satu perusahaan terbaik yang bergerak dalam bidang berbagai macam kegiatan wisata outdoor dengan menawarkan paket wisata harga terjangkau. Berawalkan dari hobi yang di kembangkan menjadi tim pelayanan wisata outdoor dan juga pengelola event. Didukung oleh tim yang kompeten dan berpengalaman untuk menjadi keseruan dan kenyaman selama berwisata bersama kami.</p>
        </div>
    </div>
</div>




<div class="sticky-md-bottom kontak"><i class="bi bi-whatsapp" style="font-size: 3rem; color: green;"></i></div>

<script>
    const kontak = document.querySelector(".kontak");
    kontak.addEventListener('click', () => {
        window.location.href = "https://web.whatsapp.com/send?phone=6289522808961&text=Halo+Bogor+Rafting+Plus";
    })
</script>
<?= $this->endSection(); ?>