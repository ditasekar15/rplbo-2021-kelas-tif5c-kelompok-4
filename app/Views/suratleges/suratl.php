<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>





<section class="content">

    <div class="section">
        <center>
            <h2>Data Surat leges</h2>
        </center>

    </div>

    <div class="section-body">
        <div class="card">

            <div class="card-header">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                    + Tambah Data Surat leges
                </button>

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
                            <th class="text-center" style="width: 200px;"><i class="fa fa-wrench"></i> Opsi</th>
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
                                <td class="text-center">
                                    <button type="button" class="btn btn-effect-ripple btn-success" data-toggle="modal" data-target="#modal_edit_suratleges<?= $row->id; ?>">
                                        <i class="fa fa-edit"></i>
                                    </button>

                                    <a onclick="javascript:return confirm('Apakah Anda Yakin Ingin Menghapus <?php echo $row->nosurat; ?> ?');" href="<?php echo base_url() . 'suratleges/' . $row->id; ?>" data-toggle="tooltip" title="Hapus <?php echo $row->nosurat; ?>" class="btn btn-effect-ripple btn-danger"><i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            <?php endforeach; ?>

                    </tbody>
                </table>
                <script>
                    function hapus(noku) {
                        pesan = confirm('Yakin hapus data surat leges ?');

                        if (pesan) {
                            window.location.href = ("<?= site_url('Suratleges/hapus') ?>") + noku;
                        } else return false;
                    }
                </script>
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


            <form action="<?= base_url('Suratleges/save'); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">No Surat</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nosurat" name="nosurat" placeholder="No Surat" required="">

                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Perihal</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="perihal" name="perihal" placeholder="Perihal" required="">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Isi Ringkas</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="isi" name="isi" placeholder="Isi Ringkas" required="">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tanggal Surat</label>
                    <div class="col-sm-9">
                        <input type="Date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal Surat" required="">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Asal Surat</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="asalsurat" name="asalsurat" placeholder="Asal Surat" required="">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">File</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control" id="file" name="file" placeholder="Uplod File Leges" required="">
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





<!-- update surat leges -->
<?php
$no = 1;
foreach ($tampildata as $row) : ?>


    <tr>
        <div class="modal fade" id="modal_edit_suratleges<?= $row->id; ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                        <h4 class="modal-title">Edit Data Surat leges (<?= $row->file; ?>)</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <?= form_open_multipart('/Suratleges/edit' . $row->id) ?>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">No Surat</label>
                        <div class="col-sm-9">
                            <input type="text" value="<?= $row->nosurat; ?>" class="form-control" id="nosurat" name="nosurat" placeholder="No Surat" required="">

                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Perihal</label>
                        <div class="col-sm-9">
                            <input type="text" value="<?= $row->perihal; ?>" class="form-control" id="perihal" name="perihal" placeholder="Perihal" required="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Isi Ringkas</label>
                        <div class="col-sm-9">
                            <input type="text" value="<?= $row->isi; ?>" class="form-control" id="isi" name="isi" placeholder="Isi Ringkas" required="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tanggal Surat</label>
                        <div class="col-sm-9">
                            <input type="Date" value="<?= $row->tanggal; ?>" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal Surat" required="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Asal Surat</label>
                        <div class="col-sm-9">
                            <input type="text" value="<?= $row->asalsurat; ?>" class="form-control" id="asalsurat" name="asalsurat" placeholder="Asal Surat" required="">
                        </div>
                    </div>






                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                    <?= form_close() ?>



                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    <?php endforeach; ?>








    <?= $this->endSection() ?>