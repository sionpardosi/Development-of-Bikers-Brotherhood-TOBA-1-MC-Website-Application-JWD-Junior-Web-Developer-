<section id="profile" class="container py-4">
  <div class="row">
    <div class="col-md-12">
      <div class="card shadow p-4 border-0">
        <div class="card-title text-center">
          <h2 class="display-4 mb-4">Profil Bikers Brotherhood TOBA</h2>
        </div>
        <div class="card-body">
          <p class="lead">Selamat datang di situs resmi Bikers Brotherhood 1% MC TOBA! Kami adalah sebuah klub motor yang berakar pada nilai-nilai persaudaraan yang kuat, di mana setiap anggota memegang teguh komitmen untuk saling mendukung dan menjaga satu sama lain, tanpa memandang suku, ras, agama, atau bangsa. Didirikan dengan semangat yang membara, tujuan utama kami adalah untuk memperjuangkan kemanusiaan dan mengedepankan semangat persatuan di antara semua anggota dan komunitas di sekitar kami.

            Sebagai bagian dari Bikers Brotherhood 1% MC TOBA, kami bukan hanya sekadar sebuah klub motor, tetapi sebuah keluarga yang tumbuh bersama dengan cinta dan dedikasi terhadap penggunaan motor klasik buatan Amerika dan Eropa. Sejak awal berdirinya di Balige, tepatnya daerah toba pada tanggal 13 Juni 1988, kami telah menjadi sebuah komunitas yang kuat dan solid, dengan komitmen yang tak tergoyahkan terhadap misi dan visi kami.

            Kami bangga mengangkat semangat 1% (One Percent), sebuah simbol yang merepresentasikan kesadaran dan komitmen kami yang kuat terhadap kesejahteraan bangsa ini. Sebagai 1% dari seluruh klub motor di Indonesia, kami bersikeras untuk menjadi pelopor yang militan dan proaktif dalam memberikan kontribusi positif bagi masyarakat di sekitar kami.

            Bergabunglah dengan kami dan rasakan kehangatan persaudaraan sejati, sambil merasakan kebebasan dan kegembiraan yang hanya bisa dirasakan ketika kita berada di jalan bersama. Kami mengundang Anda untuk menikmati perjalanan ini bersama kami, dan bergabung dalam keluarga besar Bikers Brotherhood 1% MC! Mari bersama-sama menciptakan momen yang tak terlupakan, membangun kenangan indah, dan merayakan semangat persaudaraan yang abadi.</p>
          <div class="row">
            <div class="col-md-12 text-center">
              <img src="./assets/image/foto profile.JPG" class="img-fluid mb-4 w-50" alt="Gambar Profil">
            </div>
            <div class="col-md-6">
              <div class="card mb-3">
                <div class="card-header bg-primary text-white">
                  <h3 class="text-center mb-0">Kelebihan Kami</h3>
                </div>
                <div class="card-body">
                  <ul class="list-group list-group-flush">
                    <?php foreach ($kelebihan_profile as $item) : ?>
                      <li class="list-group-item">
                        <i class="fas fa-check-circle text-success mr-2"></i>
                        <?= $item['content'] ?>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card mb-3">
                <div class="card-header bg-secondary text-white">
                  <h3 class="text-center mb-0">Pengalaman Kami</h3>
                </div>
                <div class="card-body">
                  <ul class="list-group list-group-flush">
                    <?php foreach ($pengalaman_profile as $item) : ?>
                      <li class="list-group-item"><?= $item['content'] ?></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <p>Bikers Brotherhood 1% MC TOBA! terus tumbuh dan berkembang, membangun jembatan antara penggemar motor Honda, menciptakan pengalaman berkendara yang unik, dan menjadi kekuatan positif di komunitas.</p>
        </div>
      </div>
    </div>
  </div>
</section>