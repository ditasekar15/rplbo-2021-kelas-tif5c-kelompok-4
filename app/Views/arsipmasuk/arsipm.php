<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>


<section class="content">

    <div class="section">
        <center>
            <h2>Data Arsip Surat Masuk</h2>
        </center>

    </div>



    <div class="section-body">
        <div class="card">

            <div class="card-header">
                <button class="btn btn-outline-secondary btn-sm mb-2 px-3 shadow" title="Print" onclick="window.print()"><i class="fa fa-print"></i>
                    silahkan print
                </button>

                <div class="navbar-form navbar-right">
                    <?php echo form_open('arsipmasuk/search') ?>
                    <input type="text" name="keyword" class="form-control" placeholder="Search">
                    <button type="submit" class="btn btn-success">Cari</button>
                    <?php echo form_close() ?>

                </div>

            </div>


            <div class="card-body table-responsive">


                <table id="example1" class="table table-striped table-bordered table-vcenter">
                    <thead>
                        <tr style="background-color: #03b1fc;">
                            <th class="text-center">No</th>
                            <th class="text-center">No Surat</th>
                            <th class="text-center">Perihal</th>
                            <th class="text-center">Isi Ringkas</th>
                            <th class="text-center">Tanggal Surat</th>
                            <th class="text-center">Asal Surat</th>
                            <th class="text-center">File</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($tampildata as $row) : ?>


                            <tr>
                                <td> <?= $no++; ?></td>
                                <td> <?= $row->nosurat; ?></td>
                                <td> <?= $row->perihal; ?></td>
                                <td> <?= $row->isi; ?></td>
                                <td> <?= $row->tanggal; ?></td>
                                <td> <?= $row->asalsurat; ?></td>
                                <td><?= $row->file; ?></td>
                            <?php endforeach; ?>

                    </tbody>
                </table>
                <script>
                    function hapus(noku) {
                        pesan = confirm('Yakin hapus data surat masuk ?');

                        if (pesan) {
                            window.location.href = ("<?= site_url('Arsipmasuk/hapus') ?>") + noku;
                        } else return false;
                    }
                </script>
            </div>
        </div>
    </div>




</section>




<?= $this->endSection() ?>