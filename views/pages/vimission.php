<section id="visi-misi" class="container py-4">
    <div class="row">
    <h2 style="margin-bottom: 2%;" class="card-title text-center">VISI MISI Bikers</h2>
        <div class="col-md-12 text-center">
            <img src="assets/image/<?= $gambar_vmission; ?>" class="img-fluid w-50 mb-4" alt="Gambar Visi Misi">
        </div>
        <div class="col-md-8 offset-md-2">
            <div class="card shadow border-0 mb-4">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Visi</h2>
                    <p class="card-text lead text-center"><?= $visi_vmission ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card shadow border-0">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Misi</h2>
                    <div class="row justify-content-center">
                        <?php                        
                        foreach ($misi_vmission as $k => $item) :
                        ?>
                            <div class="col-md-4">
                                <div class="card shadow border-0 misi-item my-3" id="mission0<?= $k ?>">
                                    <div class="card-body">
                                        <?= $item['content'] ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
