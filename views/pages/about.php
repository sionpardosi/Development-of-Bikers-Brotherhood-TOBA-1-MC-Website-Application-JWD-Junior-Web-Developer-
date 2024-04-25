<section id="about" class="container py-4">
    <div class="row">
        <div class="col-md-12">
            <h2 class="card-title text-center mb-4">Tentang Kami</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="text-center">
                <?php foreach ($gambar_about as $k => $item) : ?>
                    <img src="assets/image/<?= $item['content'] ?>" class="img-fluid mb-4" alt="Gambar Tentang Kami <?= $k+1 ?>">                
                <?php endforeach; ?>                        
            </div>
        </div>
        <div class="col-md-8">
            <div class="card shadow border-0">
                <div class="card-body">
                    <?= $teks_about; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="galeri" class="container py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow border-0">
                <div class="card-body">
                    <h2 class="card-title text-center">Galeri</h2>
                    <div class="row mx-0">
                        <div class="col-md-4">
                            <a href="#" id="gallery01">
                                <div class="card shadow border-0 misi-item my-3">
                                    <figure>
                                        <img src="./assets/image/galeri11.JPG" class="card-img-top" alt="Gambar Artikel">
                                    </figure>
                                    <div class="card-body">
                                        <h5 class="card-title">'MANGADANGI' Riders Day 2024</h5>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted"><i class="far fa-calendar-alt"></i> 4 April 2024</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#" id="gallery02">
                                <div class="card shadow border-0 misi-item my-3">
                                    <figure>
                                        <img src="./assets/image/galeri2.JPG" class="card-img-top" alt="Gambar Artikel">
                                    </figure>
                                    <div class="card-body">
                                        <h5 class="card-title">Foto Bersama Para Riders</h5>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted"><i class="far fa-calendar-alt"></i> 16 Januari 2024</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#" id="gallery03">
                                <div class="card shadow border-0 misi-item my-3">
                                    <figure>
                                        <img src="./assets/image/galeri13.JPG" class="card-img-top" alt="Gambar Artikel">
                                    </figure>
                                    <div class="card-body">
                                        <h5 class="card-title">Sunmory Sebatas Aspal 2024</h5>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted"><i class="far fa-calendar-alt"></i> 15 Januari 2024</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="text-center mt-3">
                            <a href="?pag=gallery" class="btn btn-outline-dark">
                                <i class="fas fa-images"></i> Lihat Lainnya
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
