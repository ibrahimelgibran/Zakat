<!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcam_text text-center">
                        <h3>Donasi</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end -->

<!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">  
			<div class="section-top-border">
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Donasi Sekarang !</h2>
                    </div>
                    <div class="col-lg-12">
                        <form class="form-contact contact_form" action="<?= BASEURL; ?>/Web/aksi_tambah_donasi" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input class="form-control valid" name="nama_donatur" placeholder="Masukkan Nama Anda" required="">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input class="form-control valid" name="no_hp_donatur"placeholder="Masukkan No. Handphone Anda" required="" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input class="form-control valid" name="alamat_donatur"placeholder="Masukkan Alamat Anda" required="" type="text">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="total_donasi" placeholder="Jumlah Donasi Yang Anda Ingin Berikan. Contoh: 100000" type="number">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        Bukti Pengiriman Donasi
                                        <input type="file" class="form-control w-100" name="foto" required=""></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Kirim Donasi</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->