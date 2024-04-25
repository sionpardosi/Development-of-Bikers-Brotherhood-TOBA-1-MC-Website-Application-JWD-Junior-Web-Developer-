<section id="contact" class="container py-4">
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="card shadow border-0 mb-4">
                <div class="card-body">
                    <h2 class="card-title">Kontak Kami</h2>
                    <select name="location" id="location" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option value="toba">Toba</option>
                        <option value="medan">Medan</option>
                        <option value="simalungun">Simalungun</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Toba Contact -->
        <div class="col-md-6" id="contact-toba">
            <div class="card shadow border-0 mb-4">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="assets/image/contact_toba.JPG" class="img-fluid rounded-start" alt="Foto">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Sion AK5</h5>
                            <h6>Sion Saut Parulian Pardosi</h6>
                            <hr>
                            <p class="card-text"><strong>Tempat/Tanggal Lahir:</strong><br>Balige, 3 July 2004</p>
                            <p class="card-text"><strong>Nama Komunitas:</strong><br>Bikers Brotherhood TOBA</p>
                            <p class="card-text"><strong>Area:</strong><br>Toba</p>
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-primary me-2"><i class="fab fa-facebook"></i></a>
                                <a href="#" class="btn btn-danger me-2"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="btn btn-primary me-2"><i class="fab fa-twitter"></i></a>
                                <a href="https://wa.me/123456789" class="btn btn-success"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Toba Contact -->

        <!-- Medan Contact -->
        <div class="col-md-6" id="contact-medan" style="display:none;">
            <div class="card shadow border-0 mb-4">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="assets/image/contact_toba.JPG" class="img-fluid rounded-start" alt="Foto">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Medan</h5>
                            <h6>Nama Medan</h6>
                            <hr>
                            <p class="card-text"><strong>Tempat/Tanggal Lahir:</strong><br>Medan, 1 Januari 2000</p>
                            <p class="card-text"><strong>Nama Komunitas:</strong><br>Bikers Brotherhood Medan</p>
                            <p class="card-text"><strong>Area:</strong><br>Medan</p>
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-primary me-2"><i class="fab fa-facebook"></i></a>
                                <a href="#" class="btn btn-danger me-2"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="btn btn-primary me-2"><i class="fab fa-twitter"></i></a>
                                <a href="https://wa.me/123456789" class="btn btn-success"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Medan Contact -->
    </div>

    <!-- Simalungun Contact -->
    <div class="row">
        <div class="col-md-6" id="contact-simalungun" style="display:none;">
            <div class="card shadow border-0 mb-4">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="assets/image/contact_toba.JPG" class="img-fluid rounded-start" alt="Foto">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Simalungun</h5>
                            <h6>Nama Simalungun</h6>
                            <hr>
                            <p class="card-text"><strong>Tempat/Tanggal Lahir:</strong><br>Simalungun, 1 Februari 2002</p>
                            <p class="card-text"><strong>Nama Komunitas:</strong><br>Bikers Brotherhood Simalungun</p>
                            <p class="card-text"><strong>Area:</strong><br>Simalungun</p>
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-primary me-2"><i class="fab fa-facebook"></i></a>
                                <a href="#" class="btn btn-danger me-2"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="btn btn-primary me-2"><i class="fab fa-twitter"></i></a>
                                <a href="https://wa.me/123456789" class="btn btn-success"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Simalungun Contact -->
</section>

<script>
    // Select the location dropdown
    const locationDropdown = document.getElementById('location');
    // Select the contact sections for each location
    const contactToba = document.getElementById('contact-toba');
    const contactMedan = document.getElementById('contact-medan');
    const contactSimalungun = document.getElementById('contact-simalungun');

    // Add event listener for change event on dropdown
    locationDropdown.addEventListener('change', function() {
        // Hide all contact sections
        contactToba.style.display = 'none';
        contactMedan.style.display = 'none';
        contactSimalungun.style.display = 'none';
        // Show the selected contact section based on the value of the dropdown
        const selectedLocation = this.value;
        if (selectedLocation === 'toba') {
            contactToba.style.display = 'block';
        } else if (selectedLocation === 'medan') {
            contactMedan.style.display = 'block';
        } else if (selectedLocation === 'simalungun') {
            contactSimalungun.style.display = 'block';
        }
    });
</script>
