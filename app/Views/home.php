<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>

<title>MTSN 10 Pekanbaru | RPLBO KELOMPOK 4</title>

<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="content">
    <?php if (session()->idlevel == 1) : ?>
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <center>
                    <h1>Selamat Datang <?= session()->get('namauser'); ?></h1>
                </center>
                <h3 class="card-title">Anda login sebagai <?= session()->get('iduser'); ?>. Berikut adalah statistik data yang tersimpan dalam sistem.</h3><br>

                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3><?= $tot_suratmasuk ?></h3>

                                <p>Surat Masuk</p>
                            </div>
                            <div class="icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <a href="<?= base_url('Suratmasuk') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3><?= $tot_suratkeluar ?></h3>

                                <p>Surat Keluar</p>
                            </div>
                            <div class="icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <a href="<?= base_url('Suratkeluar') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3><?= $tot_suratleges ?></h3>

                                <p>Surat Leges</p>
                            </div>
                            <div class="icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <a href="<?= base_url('Suratleges') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3><?= $tot_user ?></h3>

                                <p>user</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <a href="<?= base_url('User') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>


                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3><?= $tot_pengajuleges ?></h3>

                                <p>Pengajuan Surat Leges</p>
                            </div>
                            <div class="icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <a href="<?= base_url('Pengajuanleges') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3><?= $tot_pengajumasuk ?></h3>

                                <p>Pengajuan Surat Masuk</p>
                            </div>
                            <div class="icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <a href="<?= base_url('Pengajuanmasuk') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3><?= $tot_terimaleges ?></h3>

                                <p>Tanda Terima Leges</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-pen-alt"></i>
                            </div>
                            <a href="<?= base_url('Tandaterimaleges') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3><?= $tot_terimamasuk ?></h3>

                                <p>Tanda Terima Surat Masuk</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-pen-alt"></i>
                            </div>
                            <a href="<?= base_url('Tandaterimasuratmasuk') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>


            <?php endif; ?>

            <?php if (session()->idlevel == 2) : ?>

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <center>
                            <h1>Selamat Datang <?= session()->get('namauser'); ?></h1>
                        </center>
                        <h3 class="card-title">Anda login sebagai <?= session()->get('iduser'); ?>. Berikut adalah statistik data yang tersimpan dalam sistem.</h3><br>

                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3><?= $tot_suratmasuk ?></h3>

                                        <p>Surat Masuk</p>
                                    </div>
                                    <div class="icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <a href="<?= base_url('Suratmasuk') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <h3><?= $tot_suratkeluar ?></h3>

                                        <p>Surat Keluar</p>
                                    </div>
                                    <div class="icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <a href="<?= base_url('Suratkeluar') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <h3><?= $tot_suratleges ?></h3>

                                        <p>Surat Leges</p>
                                    </div>
                                    <div class="icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <a href="<?= base_url('Suratleges') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3><?= $tot_pengajuleges ?></h3>

                                        <p>Pengajuan Surat Leges</p>
                                    </div>
                                    <div class="icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <a href="<?= base_url('Pengajuanleges') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                        </div>


                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <h3><?= $tot_pengajumasuk ?></h3>

                                        <p>Pengajuan Surat Masuk</p>
                                    </div>
                                    <div class="icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <a href="<?= base_url('Pengajuanmasuk') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <h3><?= $tot_terimaleges ?></h3>

                                        <p>Tanda Terima Leges</p>
                                    </div>
                                    <div class="icon">
                                        <i class="nav-icon fas fa-pen-alt"></i>
                                    </div>
                                    <a href="<?= base_url('Tandaterimaleges') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-danger">
                                    <div class="inner">
                                        <h3><?= $tot_terimamasuk ?></h3>

                                        <p>Tanda Terima Surat Masuk</p>
                                    </div>
                                    <div class="icon">
                                        <i class="nav-icon fas fa-pen-alt"></i>
                                    </div>
                                    <a href="<?= base_url('Tandaterimasuratmasuk') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                        </div>
                    <?php endif; ?>


                    <?php if (session()->idlevel == 3) : ?>
                        <!-- Default box -->
                        <div class="card">
                            <div class="card-header">
                                <center>
                                    <h1>Selamat Datang <?= session()->get('namauser'); ?></h1>
                                </center>
                                <h3 class="card-title">Anda login sebagai <?= session()->get('iduser'); ?>. Berikut adalah statistik data yang tersimpan dalam sistem.</h3><br>

                                <div class="row">
                                    <div class="col-lg-3 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-info">
                                            <div class="inner">
                                                <h3><?= $tot_suratmasuk ?></h3>

                                                <p>Surat Masuk</p>
                                            </div>
                                            <div class="icon">
                                                <i class="far fa-envelope"></i>
                                            </div>
                                            <a href="<?= base_url('Suratmasuk') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-lg-3 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-success">
                                            <div class="inner">
                                                <h3><?= $tot_suratkeluar ?></h3>

                                                <p>Surat Keluar</p>
                                            </div>
                                            <div class="icon">
                                                <i class="far fa-envelope"></i>
                                            </div>
                                            <a href="<?= base_url('Suratkeluar') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-lg-3 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-warning">
                                            <div class="inner">
                                                <h3><?= $tot_suratleges ?></h3>

                                                <p>Surat Leges</p>
                                            </div>
                                            <div class="icon">
                                                <i class="far fa-envelope"></i>
                                            </div>
                                            <a href="<?= base_url('Suratleges') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-lg-3 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-info">
                                            <div class="inner">
                                                <h3><?= $tot_pengajuleges ?></h3>

                                                <p>Pengajuan Surat Leges</p>
                                            </div>
                                            <div class="icon">
                                                <i class="far fa-envelope"></i>
                                            </div>
                                            <a href="<?= base_url('Pengajuanleges') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                </div>


                                <div class="row">
                                    <div class="col-lg-3 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-success">
                                            <div class="inner">
                                                <h3><?= $tot_pengajumasuk ?></h3>

                                                <p>Pengajuan Surat Masuk</p>
                                            </div>
                                            <div class="icon">
                                                <i class="far fa-envelope"></i>
                                            </div>
                                            <a href="<?= base_url('Pengajuanmasuk') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-lg-3 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-warning">
                                            <div class="inner">
                                                <h3><?= $tot_terimaleges ?></h3>

                                                <p>Tanda Terima Leges</p>
                                            </div>
                                            <div class="icon">
                                                <i class="nav-icon fas fa-pen-alt"></i>
                                            </div>
                                            <a href="<?= base_url('Tandaterimaleges') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-lg-3 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-danger">
                                            <div class="inner">
                                                <h3><?= $tot_terimamasuk ?></h3>

                                                <p>Tanda Terima Surat Masuk</p>
                                            </div>
                                            <div class="icon">
                                                <i class="nav-icon fas fa-pen-alt"></i>
                                            </div>
                                            <a href="<?= base_url('Tandaterimasuratmasuk') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                </div>


                            <?php endif; ?>


                            <?php if (session()->idlevel == 4) : ?>
                                <!-- Default box -->
                                <div class="card">
                                    <div class="card-header">
                                        <center>
                                            <h1>Selamat Datang <?= session()->get('namauser'); ?></h1>
                                        </center>
                                        <h3 class="card-title">Anda login sebagai <?= session()->get('iduser'); ?>. Berikut adalah statistik data yang tersimpan dalam sistem.</h3><br>
                                        <div class="row">
                                            <div class="col-lg-3 col-6">
                                                <!-- small box -->
                                                <div class="small-box bg-info">
                                                    <div class="inner">
                                                        <h3><?= $tot_pengajuleges ?></h3>

                                                        <p>Pengajuan Surat Leges</p>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="far fa-envelope"></i>
                                                    </div>
                                                    <a href="<?= base_url('Pengajuanleges') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                                                </div>
                                            </div>
                                            <!-- ./col -->
                                            <div class="col-lg-3 col-6">
                                                <!-- small box -->
                                                <div class="small-box bg-success">
                                                    <div class="inner">
                                                        <h3><?= $tot_pengajumasuk ?></h3>

                                                        <p>Pengajuan Surat Masuk</p>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="far fa-envelope"></i>
                                                    </div>
                                                    <a href="<?= base_url('Pengajuanmasuk') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                                                </div>
                                            </div>
                                            <!-- ./col -->
                                            <div class="col-lg-3 col-6">
                                                <!-- small box -->
                                                <div class="small-box bg-warning">
                                                    <div class="inner">
                                                        <h3><?= $tot_terimaleges ?></h3>

                                                        <p>Tanda Terima Leges</p>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="nav-icon fas fa-pen-alt"></i>
                                                    </div>
                                                    <a href="<?= base_url('Tandaterimaleges') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                                                </div>
                                            </div>
                                            <!-- ./col -->
                                            <div class="col-lg-3 col-6">
                                                <!-- small box -->
                                                <div class="small-box bg-danger">
                                                    <div class="inner">
                                                        <h3><?= $tot_terimamasuk ?></h3>

                                                        <p>Tanda Terima Surat Masuk</p>
                                                    </div>
                                                    <div class="icon">
                                                        <i class="nav-icon fas fa-pen-alt"></i>
                                                    </div>
                                                    <a href="<?= base_url('Tandaterimasuratmasuk') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                                                </div>
                                            </div>
                                            <!-- ./col -->
                                        </div>

                                    <?php endif; ?>

                                    <!-- untuk menu alumni -->
                                    <?php if (session()->idlevel == 5) : ?>
                                        <!-- Default box -->
                                        <div class="card">
                                            <div class="card-header">
                                                <center>
                                                    <h1>Selamat Datang <?= session()->get('namauser'); ?></h1>
                                                </center>
                                                <h3 class="card-title">Anda login sebagai <?= session()->get('iduser'); ?>. Berikut adalah statistik data yang tersimpan dalam sistem.</h3><br>
                                                <div class="row">
                                                    <div class="col-lg-3 col-6">
                                                        <!-- small box -->
                                                        <div class="small-box bg-info">
                                                            <div class="inner">
                                                                <h3><?= $tot_pengajuleges ?></h3>

                                                                <p>Pengajuan Surat Leges</p>
                                                            </div>
                                                            <div class="icon">
                                                                <i class="far fa-envelope"></i>
                                                            </div>
                                                            <a href="<?= base_url('Pengajuanleges') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                                                        </div>
                                                    </div>
                                                    <!-- ./col -->


                                                <?php endif; ?>

                                                <!-- untuk menu pihak luar -->
                                                <?php if (session()->idlevel == 6) : ?>

                                                    <!-- Default box -->
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <center>
                                                                <h1>Selamat Datang <?= session()->get('namauser'); ?></h1>
                                                            </center>
                                                            <h3 class="card-title">Anda login sebagai <?= session()->get('iduser'); ?>. Berikut adalah statistik data yang tersimpan dalam sistem.</h3><br>
                                                            <div class="row">

                                                                <div class="col-lg-3 col-6">
                                                                    <!-- small box -->
                                                                    <div class="small-box bg-success">
                                                                        <div class="inner">
                                                                            <h3><?= $tot_pengajumasuk ?></h3>

                                                                            <p>Pengajuan Surat Masuk</p>
                                                                        </div>
                                                                        <div class="icon">
                                                                            <i class="far fa-envelope"></i>
                                                                        </div>
                                                                        <a href="<?= base_url('Pengajuanmasuk') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
                                                                    </div>
                                                                </div>
                                                                <!-- ./col -->
                                                            <?php endif; ?>

</section>
<?= $this->endSection() ?>