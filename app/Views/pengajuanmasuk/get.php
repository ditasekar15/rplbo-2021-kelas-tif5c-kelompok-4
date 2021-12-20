<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>





<section class="content">

    <div class="section">
        <center>
            <h2>Data Pengajuan Surat Masuk</h2>
        </center>

    </div>

    <div class="section-body">
        <div class="card">

            <div class="card-header">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                    + Tambah Data Surat Masuk
                </button>

            </div>

            <div class="card-body table-responsive">
                <table id="example1" class="table table-striped table-bordered table-vcenter">
                    <thead>
                        <tr style="background-color: #03b1fc;">
                            <th class="text-center">No</th>
                            <th class="text-center">Nama Pengirim</th>
                            <th class="text-center">Tanggal kirim</th>
                            <th class="text-center">Keterangan</th>
                            <th class="text-center">File</th>
                            <th class="text-center" style="width: 200px;"><i class="fa fa-wrench"></i> Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($pengajuanmasuk as $row) : ?>


                            <tr>
                                <td> <?= $no++; ?></td>
                                <td> <?= $row->nama; ?></td>

                                <td> <?= $row->tanggal; ?></td>
                                <td> <?= $row->keterangan; ?></td>
                                <td> <?= $row->file; ?>
                                <td><a href="<?php echo base_url() . 'Pengajuanmasuk/download/' . $row->id; ?>" class="btn btn-success btn-sm">download<span class="glyphicon glyphicon-download-alt"></a></td>
                            </tr>

                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Default Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <form action="<?= base_url('Pengajuanmasuk/save'); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Nama Pengirim</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pengirim">

                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tanggal Kirim</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal Kirim">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Keterangan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan">
                    </div>
                </div>



                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">File</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" id="file" name="file" placeholder="Uplod File Leges">
                    </div>
                </div>




                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>



        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->











<?= $this->endSection() ?>